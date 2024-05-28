<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PublicBlogModel;
use App\Models\PublicCaseStudyModel;
use App\Models\PublicProductCategoryModel;
use App\Models\PublicProductModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class IotBlitz extends Controller
{
    function blog(): View
    {
        $data["blogs"] = PublicBlogModel::all();
        return view('admin.iot_blitz.blog')->with($data);
    }


    function blog_add(Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'title' => 'required',
                'keyword' => 'required',
                'description_editor' => 'required',
                'text_description' => 'required',
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            $image = $r->file('blogimage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('blog_images'), $imageName);
            PublicBlogModel::create([
                'blog_title' => $r->title,
                'blog_keywords' => $r->keyword,
                'blog_description' => $r->description_editor,
                'text_description' => $r->text_description,
                'blog_image' => $imageName,
                'create_by' => auth()->user()->id
            ]);

            return redirect()->route('super_admin.page.blog');
        } else {
            return view('admin.iot_blitz.add');
        }
    }



    function blog_edit($blog_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'title' => 'required',
                'keyword' => 'required',
                'description_editor' => 'required',
                'text_description' => 'required',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            if ($r->hasFile('blogimage')) {
                $rules = [
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }
                $oldimagepath = public_path('blog_images/' . $r->input('old_image'));
                if (File::exists($oldimagepath)) {
                    File::delete($oldimagepath);
                }
                $image = $r->file('blogimage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('blog_images'), $imageName);
                $savedata = [
                    'blog_title' => $r->title,
                    'blog_keywords' => $r->keyword,
                    'blog_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'blog_image' => $imageName,
                    'create_by' => auth()->user()->id
                ];
            } else {
                $savedata = [
                    'blog_title' => $r->title,
                    'blog_keywords' => $r->keyword,
                    'blog_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'create_by' => auth()->user()->id
                ];
            }


            PublicBlogModel::where('blog_id', $blog_id)->update($savedata);

            return redirect()->route('super_admin.page.blog');
        } else {
            $data['editdata'] = PublicBlogModel::where('blog_id', $blog_id)->first();
            $data['blog_id'] = $blog_id;
            return view('admin.iot_blitz.edit_blog')->with($data);
        }
    }


    // ===========================================================================
    // ===========================================================================



    function case_study(): View
    {
        $data["case_study"] = PublicCaseStudyModel::all();
        return view('admin.iot_blitz.case_study')->with($data);
    }


    function case_study_add(Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'title' => 'required',
                'keyword' => 'required',
                'description_editor' => 'required',
                'text_description' => 'required',
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            $image = $r->file('blogimage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('case_study_images'), $imageName);
            PublicCaseStudyModel::create([
                'case_study_title' => $r->title,
                'case_study_keywords' => $r->keyword,
                'case_study_description' => $r->description_editor,
                'text_description' => $r->text_description,
                'case_study_image' => $imageName,
                'create_by' => auth()->user()->id
            ]);

            return redirect()->route('super_admin.page.case_study');
        } else {
            return view('admin.iot_blitz.case_study_add');
        }
    }



    function case_study_edit($case_study_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'title' => 'required',
                'keyword' => 'required',
                'description_editor' => 'required',
                'text_description' => 'required',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            if ($r->hasFile('blogimage')) {
                $rules = [
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }
                $oldimagepath = public_path('case_study_images/' . $r->input('old_image'));
                if (File::exists($oldimagepath)) {
                    File::delete($oldimagepath);
                }
                $image = $r->file('blogimage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('case_study_images'), $imageName);
                $savedata = [
                    'case_study_title' => $r->title,
                    'case_study_keywords' => $r->keyword,
                    'case_study_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'case_study_image' => $imageName,
                    'create_by' => auth()->user()->id
                ];
            } else {
                $savedata = [
                    'case_study_title' => $r->title,
                    'case_study_keywords' => $r->keyword,
                    'case_study_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'create_by' => auth()->user()->id
                ];
            }


            PublicCaseStudyModel::where('case_study_id', $case_study_id)->update($savedata);

            return redirect()->route('super_admin.page.case_study');
        } else {
            $data['editdata'] = PublicCaseStudyModel::where('case_study_id', $case_study_id)->first();
            $data['case_study_id'] = $case_study_id;
            return view('admin.iot_blitz.case_study_edit')->with($data);
        }
    }





    // ==============================================================================
    // ==============================================================================




    function product(): View
    {
        $data["products"] = PublicProductModel::all();
        return view('admin.iot_blitz.products.product')->with($data);
    }

    function product_add(Request $r): View|RedirectResponse|JsonResponse
    {
        if($r->isMethod('POST')){
            $rules=[
                "description_editor"=>'required',
                "text_description"=>'required',
                "title"=>'required',
                "category"=>'required',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            $image = $r->file('productImage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('product_image'), $imageName);


            PublicProductModel::create([
                "product_category_id"=>$r->category,
                "product_title"=>$r->title,
                "product_description"=>$r->description_editor,
                "text_description"=>$r->description_editor,
                "product_image"=>$image,
                "active_statu"=>"A",
                "create_by"=> auth()->user()->id
            ]);
            return redirect()->route('super_admin.page.products');
        }else{
            $data['caregory_list']=PublicProductCategoryModel::all();
            return view('admin.iot_blitz.products.add')->with($data);
        }
    }

    function product_edit($product_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'description_editor' => 'required',
                'text_description' => 'required',
                'title'=>'required',
                'category'=>'required',
            ];


            if ($r->hasFile('productImage')) {
                $rules = [
                    'productImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }
                $oldimagepath = public_path('product_image/' . $r->input('old_image'));
                if (File::exists($oldimagepath)) {
                    File::delete($oldimagepath);
                }
                $image = $r->file('productImage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('product_image'), $imageName);
                $savedata = [
                    'product_category_id'=>$r->category,
                    'product_title'=>$r->title,
                    'product_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'product_image' => $imageName,
                    'active_status' => 'A', // 'A' means 'Active
                    'create_by' => auth()->user()->id



                ];
            } else {
                $savedata = [
                    'product_category_id'=>$r->category,
                    'product_title'=>$r->title,
                    'product_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'active_status' => 'A', // 'A' means 'Active
                    'create_by' => auth()->user()->id
                ];
            }
            PublicProductModel::where('product_id', $product_id)->update($savedata);
            return redirect()->route('super_admin.page.products');
        } else {
            $data['editdata'] = PublicProductModel::where('product_id', $product_id)->first();
            $data['product_id'] = $product_id;
            $data['caregory_list']=PublicProductCategoryModel::all();
            return view('admin.iot_blitz.products.product_edit')->with($data);
        }
    }
}
