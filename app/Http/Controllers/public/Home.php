<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\PublicBlogModel;
use App\Models\PublicBlogsCommentsModel;
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
        $data['blogs_count'] = PublicBlogsCommentsModel::where('blog_id',$blog_id)->where('active_status','A')->count();
        $data['blog_id']=$blog_id;

        return view('public.single_blogs')->with($data);
    }



    function public_comments($blog_id,Request $r) : RedirectResponse
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







    function robots(): Response
    {
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }
    function sitemap(): Response
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
