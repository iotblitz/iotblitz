<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\PublicBlogModel;
use App\Models\PublicBlogsCommentsModel;
use App\Models\PublicCaseStudyModel;
use App\Models\PublicProductCategoryModel;
use App\Models\PublicProductModel;
use App\Rules\GoogleRecaptchaV2;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class Home extends Controller
{
    function home() : View|RedirectResponse
    {
        return view('public.home');
    }




    function product() : View
    {
        $data['products'] = PublicProductModel::leftJoin('public_product_category', 'public_products.product_category_id', '=', 'public_product_category.product_category_id')
        ->select('public_products.*', 'public_product_category.category')
        ->where('public_products.active_status', 'A')
        ->paginate(18);
        // ->get();
        $data['category'] = PublicProductCategoryModel::all();
        return view('public.products')->with($data);
    }

    function single_product($product_id):View
    {
        $lastHyphenPosition = strrpos($product_id, "-");
        $product_id = substr($product_id, $lastHyphenPosition + 1);
        $data['product'] =PublicProductModel::leftJoin('public_product_category', 'public_products.product_category_id', '=', 'public_product_category.product_category_id')
        ->select('public_products.*', 'public_product_category.category')
        ->where('public_products.active_status', 'A')
        ->where('public_products.product_id', $product_id)
        ->first();
        $data['product_id']=$product_id;

        $data['latest_posts']=PublicBlogModel::select("blog_title","blog_description","text_description","blog_image")->where('active_status',"A")->orderBy("blog_id","DESC")->limit(5)->get();


        return view('public.single_product')->with($data);
    }


    function blogs() : View
    {
        $data['blogs'] = PublicBlogModel::where('active_status','A')->paginate(20);
        return view('public.blogs')->with($data);
    }



    function single_blogs($blogs_id) : View
    {
        $lastHyphenPosition = strrpos($blogs_id, "-");
        $blog_id = substr($blogs_id, $lastHyphenPosition + 1);
        $data['blogs'] = PublicBlogModel::where('blog_id',$blog_id)->where('active_status','A')->with('public_comments')->first();
        $data['blogs_count'] = PublicBlogsCommentsModel::where('content_id',$blog_id)->where('comment_by_page', 'B')->where('active_status','A')->count();
        $data['blog_id']=$blog_id;
        $data['latest_posts']=PublicBlogModel::select("blog_title","blog_description","text_description","blog_image")->where('active_status',"A")->orderBy("blog_id","DESC")->limit(5)->get();

        return view('public.single_blogs')->with($data);
    }



    function public_comments($blog_id,Request $r) : RedirectResponse
    {

        $rules = [
            'blog_id'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'comments'=>'required',
            'comment_by_page'=>'required',
            'g-recaptcha-response' => ['required', new GoogleRecaptchaV2],
        ];
        $valaditor = Validator::make($r->all(), $rules);
        if ($valaditor->fails()) {
            return redirect()->back();
        }

        PublicBlogsCommentsModel::create([
            'content_id'=>$blog_id,
            'comment_by_page'=>$r->comment_by_page,
            'name'=>$r->name,
            'email'=>$r->email,
            'comments'=>$r->comments,
            'active_status'=>'A'
        ]);


       return redirect()->back();
    }

    // =================================================
    // =================================================

    function case_study() : View
    {
        $data['case_study'] = PublicCaseStudyModel::where('active_status','A')->orderBy("case_study_id","DESC")->paginate(5);
        return view('public.case_study')->with($data);
    }


    function single_case_study($case_study_id) : View
    {
        $lastHyphenPosition = strrpos($case_study_id, "-");
        $case_study_id = substr($case_study_id, $lastHyphenPosition + 1);
        $data['case_study'] = PublicCaseStudyModel::where('case_study_id',$case_study_id)->where('active_status','A')->with('public_comments')->first();
        $data['case_study_count'] = PublicBlogsCommentsModel::where('content_id',$case_study_id)->where('comment_by_page', 'CS')->where('active_status','A')->count();
        $data['case_study_id']=$case_study_id;
        $data['latest_posts']=PublicBlogModel::where('active_status',"A")->orderBy("blog_id","DESC")->limit(5)->get();

        return view('public.single_case_study')->with($data);
    }



    function public_comments_case_study($blog_id,Request $r) : RedirectResponse
    {

        $rules = [
            'blog_id'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'comments'=>'required'
        ];
        $valaditor = Validator::make($r->all(), $rules);
        if ($valaditor->fails()) {
            return redirect()->back();
        }

        PublicBlogsCommentsModel::create([
            'blog_id'=>$blog_id,
            'name'=>$r->name,
            'email'=>$r->email,
            'comments'=>$r->comments,
            'active_status'=>'A'
        ]);


       return redirect()->back();
    }



    function public_contact():View{
        return view('public.contact');
    }

    function public_about():View{
        return view('public.about');
    }


    function robots(): Response
    {
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }
    function sitemap(): Response
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
