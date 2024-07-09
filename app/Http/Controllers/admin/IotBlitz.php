<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobCareersModel;
use App\Models\JobRoleModel;
use App\Models\MdCountriesModel;
use App\Models\PublicBlogModel;
use App\Models\PublicBlogsTagsListModel;
use App\Models\PublicBlogsTagsModel;
use App\Models\PublicCaseStudyModel;
use App\Models\PublicContactModel;
use App\Models\PublicProductCategoryModel;
use App\Models\PublicProductModel;
use App\Models\PublicSolutionModel;
use Brian2694\Toastr\Facades\Toastr;
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


    // function blog_add(Request $r): View|RedirectResponse|JsonResponse
    function blog_add(Request $r)
    {
        if ($r->isMethod('post')) {

            $rules = [
                'title' => 'required',
                'keyword' => 'max:500',
                'description_editor' => 'required',
                'text_description' => 'required',
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'fimagealttxt' => 'max:500',
                'imagedescriotion' => 'max:255',
                'imageCaption' => 'max:255',
                'imageTitle' => 'max:255',
                'mataTitle' => 'max:255',
                'metaDescriptions' => 'max:255',
                'focusKeyword' => 'max:255',
                'blogExcerpt' => 'max:255',
                'searchTags' => 'max:255',
                'content_category' => 'max:255'
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                foreach ($valaditor->errors()->all() as $error) {
                    Toastr::error($error, 'Error');
                }
                // return response()->json($valaditor->errors(), 200);
                return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
            }




            $tag = strtolower($r->searchTags);
            $tags = explode(",", $tag);
            $tag_ids = [];
            foreach ($tags as $item) {
                $tagModel = PublicBlogsTagsModel::where("tags_name", $item)->first();
                if ($tagModel) {
                    $tag_id = $tagModel->blog_tags_id;
                } else {
                    $tagModel = PublicBlogsTagsModel::create(["tags_name" => $item, "create_by" => auth()->user()->id]);
                    $tag_id = $tagModel->blog_tags_id;
                }
                $tag_ids[] = $tag_id; // Add the tag_id to the array
            }

            if ($r->hasFile('blogimage')) {
                $rules = [
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    foreach ($valaditor->errors()->all() as $error) {
                        Toastr::error($error, 'Error');
                    }
                    // return response()->json($valaditor->errors(), 200);
                    return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
                }
                $image = $r->file('blogimage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('blog_images'), $imageName);
            } else {
                $imageName = '';
            }
            $id = PublicBlogModel::create([
                'blog_title' => $r->title,
                'blog_keywords' => $r->keyword,
                'blog_description' => $r->description_editor,
                'text_description' => $r->text_description,
                'blog_image' => $imageName,
                'create_by' => auth()->user()->id,
                'featured_image_alt_text' => $r->fimagealttxt,
                'image_description' => $r->imagedescriotion,
                'image_caption' => $r->imageCaption,
                'image_title' => $r->imageTitle,
                'meta_title' => $r->mataTitle,
                'meta_descriptions' => $r->metaDescriptions,
                'focus_keyword' => $r->focusKeyword,
                'blog_excerpt' => $r->blogExcerpt,
                'content_category' => $r->content_category,
                'active_status' => 'A'
            ]);

            foreach ($tag_ids as $item2) {
                PublicBlogsTagsListModel::create([
                    'blog_id' => $id->blog_id,
                    'blog_tags_id' => $item2
                ]);
            }

            // return  $id->blog_id;

            return redirect()->route('super_admin.page.blog');
        } else {
            return view('admin.iot_blitz.add');
        }
    }


    function blog_save(Request $r)
    {

        $rules = [
            'title' => 'required'
        ];

        $valaditor = Validator::make($r->all(), $rules);
        if ($valaditor->fails()) {
            foreach ($valaditor->errors()->all() as $error) {
                Toastr::error($error, 'Error');
            }
            // return response()->json($valaditor->errors(), 200);
            return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
        }




        $tag = strtolower($r->searchTags);
        $tags = explode(",", $tag);
        $tag_ids = [];
        foreach ($tags as $item) {
            $tagModel = PublicBlogsTagsModel::where("tags_name", $item)->first();
            if ($tagModel) {
                $tag_id = $tagModel->blog_tags_id;
            } else {
                $tagModel = PublicBlogsTagsModel::create(["tags_name" => $item, "create_by" => auth()->user()->id]);
                $tag_id = $tagModel->blog_tags_id;
            }
            $tag_ids[] = $tag_id; // Add the tag_id to the array
        }

        if ($r->hasFile('blogimage')) {
            $rules = [
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                foreach ($valaditor->errors()->all() as $error) {
                    Toastr::error($error, 'Error');
                }
                // return response()->json($valaditor->errors(), 200);
                return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
            }
            $image = $r->file('blogimage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('blog_images'), $imageName);
        } else {
            $imageName = '';
        }
        $id = PublicBlogModel::create([
            'blog_title' => $r->title,
            'blog_keywords' => $r->keyword,
            'blog_description' => $r->description_editor,
            'text_description' => $r->text_description,
            'blog_image' => $imageName,
            'create_by' => auth()->user()->id,
            'featured_image_alt_text' => $r->fimagealttxt,
            'image_description' => $r->imagedescriotion,
            'image_caption' => $r->imageCaption,
            'image_title' => $r->imageTitle,
            'meta_title' => $r->mataTitle,
            'meta_descriptions' => $r->metaDescriptions,
            'focus_keyword' => $r->focusKeyword,
            'blog_excerpt' => $r->blogExcerpt,
            'content_category' => $r->content_category,
            'active_status' => 'D'
        ]);

        foreach ($tag_ids as $item2) {
            PublicBlogsTagsListModel::create([
                'blog_id' => $id->blog_id,
                'blog_tags_id' => $item2
            ]);
        }

        return redirect()->route('super_admin.page.blog');
    }

    function blog_edit($blog_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {
            $rules = [
                'title' => 'required'
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                foreach ($valaditor->errors()->all() as $error) {
                    Toastr::error($error, 'Error');
                }
                // return response()->json($valaditor->errors(), 200);
                return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
            }




            $tag = strtolower($r->searchTags);
            $tags = explode(",", $tag);
            $tag_ids = [];
            foreach ($tags as $item2) {
                $item=trim($item2);
                $tagModel = PublicBlogsTagsModel::where("tags_name", $item)->first();
                if ($tagModel) {
                    $tag_id = $tagModel->blog_tags_id;
                } else {
                    $tagModel = PublicBlogsTagsModel::create(["tags_name" => $item, "create_by" => auth()->user()->id]);
                    $tag_id = $tagModel->blog_tags_id;
                }
                $tag_ids[] = $tag_id; // Add the tag_id to the array
            }

            if ($r->hasFile('blogimage')) {
                $rules = [
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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

                $id = PublicBlogModel::where('blog_id', $blog_id)->update([
                    'blog_title' => $r->title,
                    'blog_keywords' => $r->keyword,
                    'blog_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'blog_image' => $imageName,
                    'create_by' => auth()->user()->id,
                    'featured_image_alt_text' => $r->fimagealttxt,
                    'image_description' => $r->imagedescriotion,
                    'image_caption' => $r->imageCaption,
                    'image_title' => $r->imageTitle,
                    'meta_title' => $r->mataTitle,
                    'meta_descriptions' => $r->metaDescriptions,
                    'focus_keyword' => $r->focusKeyword,
                    'blog_excerpt' => $r->blogExcerpt,
                    'content_category' => $r->content_category,
                    // 'active_status' => 'D'
                ]);


            } else{
                $id = PublicBlogModel::where('blog_id', $blog_id)->update([
                    'blog_title' => $r->title,
                    'blog_keywords' => $r->keyword,
                    'blog_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'create_by' => auth()->user()->id,
                    'featured_image_alt_text' => $r->fimagealttxt,
                    'image_description' => $r->imagedescriotion,
                    'image_caption' => $r->imageCaption,
                    'image_title' => $r->imageTitle,
                    'meta_title' => $r->mataTitle,
                    'meta_descriptions' => $r->metaDescriptions,
                    'focus_keyword' => $r->focusKeyword,
                    'blog_excerpt' => $r->blogExcerpt,
                    'content_category' => $r->content_category,
                    // 'active_status' => 'D'
                ]);
            }

            PublicBlogsTagsListModel::where('blog_id', $blog_id)->delete();
            foreach ($tag_ids as $item3) {
                PublicBlogsTagsListModel::create([
                    'blog_id' => $blog_id,
                    'blog_tags_id' => $item3
                ]);
            }

            return redirect()->route('super_admin.page.blog');
        } else {
            // $data['editdata'] = PublicBlogModel::where('blog_id', $blog_id)->first();
            $data['editdata'] =  PublicBlogModel::where('public_blog.blog_id', $blog_id)  // Assuming $blog_id is the ID you are querying for
            ->where('public_blog.active_status', 'A')
            ->join('users', 'public_blog.create_by', '=', 'users.id')
            ->with('public_tags.tag')  // Eager load public_comments relationship
            ->with('public_tags')  // Eager load public_tags relationship
            ->first();
            $data['blog_id'] = $blog_id;
            return view('admin.iot_blitz.edit_blog')->with($data);
        }
    }


    function publish_blog($blog_id, Request $r): RedirectResponse
    {
        $rules = [
            'title' => 'required'
        ];

        $valaditor = Validator::make($r->all(), $rules);
        if ($valaditor->fails()) {
            foreach ($valaditor->errors()->all() as $error) {
                Toastr::error($error, 'Error');
            }
            // return response()->json($valaditor->errors(), 200);
            return redirect()->route('super_admin.page.blog_add')->withErrors($valaditor)->withInput();
        }




        $tag = strtolower($r->searchTags);
        $tags = explode(",", $tag);
        $tag_ids = [];
        foreach ($tags as $item2) {
            $item=trim($item2);
            $tagModel = PublicBlogsTagsModel::where("tags_name", $item)->first();
            if ($tagModel) {
                $tag_id = $tagModel->blog_tags_id;
            } else {
                $tagModel = PublicBlogsTagsModel::create(["tags_name" => $item, "create_by" => auth()->user()->id]);
                $tag_id = $tagModel->blog_tags_id;
            }
            $tag_ids[] = $tag_id; // Add the tag_id to the array
        }

        if ($r->hasFile('blogimage')) {
            $rules = [
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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

            $id = PublicBlogModel::where('blog_id', $blog_id)->update([
                'blog_title' => $r->title,
                'blog_keywords' => $r->keyword,
                'blog_description' => $r->description_editor,
                'text_description' => $r->text_description,
                'blog_image' => $imageName,
                'create_by' => auth()->user()->id,
                'featured_image_alt_text' => $r->fimagealttxt,
                'image_description' => $r->imagedescriotion,
                'image_caption' => $r->imageCaption,
                'image_title' => $r->imageTitle,
                'meta_title' => $r->mataTitle,
                'meta_descriptions' => $r->metaDescriptions,
                'focus_keyword' => $r->focusKeyword,
                'blog_excerpt' => $r->blogExcerpt,
                'content_category' => $r->content_category,
                'active_status' => 'A'
            ]);


        } else{
            $id = PublicBlogModel::where('blog_id', $blog_id)->update([
                'blog_title' => $r->title,
                'blog_keywords' => $r->keyword,
                'blog_description' => $r->description_editor,
                'text_description' => $r->text_description,
                'create_by' => auth()->user()->id,
                'featured_image_alt_text' => $r->fimagealttxt,
                'image_description' => $r->imagedescriotion,
                'image_caption' => $r->imageCaption,
                'image_title' => $r->imageTitle,
                'meta_title' => $r->mataTitle,
                'meta_descriptions' => $r->metaDescriptions,
                'focus_keyword' => $r->focusKeyword,
                'blog_excerpt' => $r->blogExcerpt,
                'content_category' => $r->content_category,
                'active_status' => 'A'
            ]);
        }

        PublicBlogsTagsListModel::where('blog_id', $blog_id)->delete();
        foreach ($tag_ids as $item3) {
            PublicBlogsTagsListModel::create([
                'blog_id' => $blog_id,
                'blog_tags_id' => $item3
            ]);
        }

        return redirect()->route('super_admin.page.blog');
    }

    // function blog_edit_old($blog_id, Request $r): View|RedirectResponse|JsonResponse
    // {
    //     if ($r->isMethod('post')) {

    //         $rules = [
    //             'title' => 'required',
    //             'keyword' => 'required',
    //             'description_editor' => 'required',
    //             'text_description' => 'required',
    //         ];

    //         $valaditor = Validator::make($r->all(), $rules);
    //         if ($valaditor->fails()) {
    //             return response()->json($valaditor->errors(), 200);
    //             // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
    //         }
    //         if ($r->hasFile('blogimage')) {
    //             $rules = [
    //                 'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    //             ];

    //             $valaditor = Validator::make($r->all(), $rules);
    //             if ($valaditor->fails()) {
    //                 return response()->json($valaditor->errors(), 200);
    //             }
    //             $oldimagepath = public_path('blog_images/' . $r->input('old_image'));
    //             if (File::exists($oldimagepath)) {
    //                 File::delete($oldimagepath);
    //             }
    //             $image = $r->file('blogimage');
    //             $imageName = time() . '.' . $image->extension();
    //             $image->move(public_path('blog_images'), $imageName);
    //             $savedata = [
    //                 'blog_title' => $r->title,
    //                 'blog_keywords' => $r->keyword,
    //                 'blog_description' => $r->description_editor,
    //                 'text_description' => $r->text_description,
    //                 'blog_image' => $imageName,
    //                 'create_by' => auth()->user()->id
    //             ];
    //         } else {
    //             $savedata = [
    //                 'blog_title' => $r->title,
    //                 'blog_keywords' => $r->keyword,
    //                 'blog_description' => $r->description_editor,
    //                 'text_description' => $r->text_description,
    //                 'create_by' => auth()->user()->id
    //             ];
    //         }


    //         PublicBlogModel::where('blog_id', $blog_id)->update($savedata);

    //         return redirect()->route('super_admin.page.blog');
    //     } else {
    //         $data['editdata'] = PublicBlogModel::where('blog_id', $blog_id)->first();
    //         $data['blog_id'] = $blog_id;
    //         return view('admin.iot_blitz.edit_blog')->with($data);
    //     }
    // }


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
                'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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
        if ($r->isMethod('POST')) {
            $rules = [
                "description_editor" => 'required',
                "text_description" => 'required',
                "title" => 'required',
                "category" => 'required',
                "keyword" => 'required'
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
                "product_category_id" => $r->category,
                "product_title" => $r->title,
                'keyword' => $r->keyword,
                "product_description" => $r->description_editor,
                "text_description" => $r->text_description,
                "product_image" => $image,
                "active_statu" => "A",
                "create_by" => auth()->user()->id
            ]);
            return redirect()->route('super_admin.page.products');
        } else {
            $data['caregory_list'] = PublicProductCategoryModel::all();
            return view('admin.iot_blitz.products.add')->with($data);
        }
    }

    function product_edit($product_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('post')) {

            $rules = [
                'description_editor' => 'required',
                'text_description' => 'required',
                'title' => 'required',
                'keyword' => 'required',
                'category' => 'required',
            ];


            if ($r->hasFile('productImage')) {
                $rules = [
                    'productImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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
                    'product_category_id' => $r->category,
                    'product_title' => $r->title,
                    'keyword' => $r->keyword,
                    'product_description' => $r->description_editor,
                    'text_description' => $r->text_description,
                    'product_image' => $imageName,
                    'active_status' => 'A', // 'A' means 'Active
                    'create_by' => auth()->user()->id



                ];
            } else {
                $savedata = [
                    'product_category_id' => $r->category,
                    'product_title' => $r->title,
                    'keyword' => $r->keyword,
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
            $data['caregory_list'] = PublicProductCategoryModel::all();
            return view('admin.iot_blitz.products.product_edit')->with($data);
        }
    }


    // ===============================================================================
    // ===============================================================================
    function solution_add(Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('POST')) {
            $rules = [
                "description_editor" => 'required',
                "text_description" => 'required',
                "title" => 'required',
                'productSolutionImage' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'brochure_file' => 'required|mimes:pdf|max:10000',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }

            if ($r->hasFile('productSolutionImage')) {
                $image = $r->file('productSolutionImage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('solution_image'), $imageName);
            } else {
                return redirect()->route('super_admin.page.solution_add');
            }

            if ($r->hasFile('brochure_file')) {
                $pdf = $r->file('brochure_file');
                $pdfname = time() . '.' . $pdf->extension();
                $pdf->move(public_path('solution_file_pdf'), $pdfname);
            } else {
                return redirect()->route('super_admin.page.solution_add');
            }
            PublicSolutionModel::create([
                "solutions_title" => $r->title,
                "solutions_keywords" => $r->keyword,
                "solutions_description" => $r->description_editor,
                "text_description" => $r->text_description,
                "solutions_image" => $imageName,
                "solutions_brochure" => $pdfname,
                "active_status" => "A",
                "create_by" => auth()->user()->id
            ]);
            return redirect()->route('super_admin.page.solutions');
        } else {

            return view('admin.iot_blitz.solutions.add');
        }
    }



    function solution(): View
    {
        $data["solutions"] = PublicSolutionModel::all();
        return view('admin.iot_blitz.solutions.solutions')->with($data);
    }



    function solution_edit($solution_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('POST')) {
            $rules = [
                "description_editor" => 'required',
                "text_description" => 'required',
                "title" => 'required',
                // 'productSolutionImage' => 'mimes:jpeg,png,jpg,gif|max:2048',
                // 'brochure_file' => 'mimes:pdf|max:10000',
            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }

            $data = [
                "solutions_title" => $r->title,
                "solutions_keywords" => $r->keyword,
                "solutions_description" => $r->description_editor,
                "text_description" => $r->text_description,
                "active_status" => "A",
                "create_by" => auth()->user()->id
            ];

            if ($r->hasFile('productSolutionImage')) {
                $rules = [
                    'productSolutionImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }
                $oldimagepath = public_path('solution_image/' . $r->input('old_image'));
                if (File::exists($oldimagepath)) {
                    File::delete($oldimagepath);
                }

                $image = $r->file('productSolutionImage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('solution_image'), $imageName);
                $data['solutions_image'] = $imageName;
            }


            if ($r->hasFile('brochure_file')) {
                $rules = [
                    'brochure_file' => 'required|mimes:pdf|max:10000'
                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }
                $oldpdfpath = public_path('solution_file_pdf/' . $r->input('old_pdf'));
                if (File::exists($oldpdfpath)) {
                    File::delete($oldpdfpath);
                }
                $pdf = $r->file('brochure_file');
                $pdfname = time() . '.' . $pdf->extension();
                $pdf->move(public_path('solution_file_pdf'), $pdfname);
                $data['solutions_brochure'] = $pdfname;
            }
            PublicSolutionModel::where('solutions_id', $solution_id)->update($data);
            return redirect()->route('super_admin.page.solutions');
        } else {
            $data['solution_id'] = $solution_id;
            $data['solution'] = PublicSolutionModel::where('solutions_id', $solution_id)->first();
            return view('admin.iot_blitz.solutions.solutions_edit')->with($data);
        }
    }

    // ==============================================================================
    // ==============================================================================



    function careers_add(Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('POST')) {
            $rules = [
                "title" => 'required',
                "cties" => "required|integer",
                "last_date" => 'required',
                "experience_level" => 'required',
                "minimum_qualifications" => 'required',
                "preferred_qualifications" => "required",
                "about_the_job" => 'required',
                "responsibilities" => 'required',
                "note_alert" => 'required',
                "job_role" => 'required'

            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }

            JobCareersModel::create([
                "role_id" => $r->job_role,
                "title" => $r->title,
                "end_date" => $r->last_date,
                "cities_id" => $r->cties,
                "experience" => $r->experience_level,
                // "work_experience"=>$r->,
                "note" => $r->note_alert,
                "minimum_qualifications" => $r->minimum_qualifications,
                "preferred_qualifications" => $r->preferred_qualifications,
                "about_job" => $r->about_the_job,
                "responsibilities" => $r->responsibilities,
                "status" => "A",
                "create_by" => auth()->user()->id
            ]);
            return redirect()->route('super_admin.page.careerss');
        } else {
            $data['countries'] = MdCountriesModel::all();
            $data['role'] = JobRoleModel::all();
            return view('admin.iot_blitz.careers.add')->with($data);
        }
    }


    function careers(): View
    {
        $data["careers"] = JobCareersModel::all();
        return view('admin.iot_blitz.careers.careers')->with($data);
    }



    function careers_edit($careers_id, Request $r): View|RedirectResponse|JsonResponse
    {
        if ($r->isMethod('POST')) {
            $rules = [
                "title" => 'required',
                "cties" => "required|integer",
                "last_date" => 'required',
                "experience_level" => 'required',
                "minimum_qualifications" => 'required',
                "preferred_qualifications" => "required",
                "about_the_job" => 'required',
                "responsibilities" => 'required',
                "note_alert" => 'required',
                "job_role" => 'required'

            ];

            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return response()->json($valaditor->errors(), 200);
                // return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }

            JobCareersModel::where("careers_id", $careers_id)->update([
                "role_id" => $r->job_role,
                "title" => $r->title,
                "end_date" => $r->last_date,
                "cities_id" => $r->cties,
                "experience" => $r->experience_level,
                // "work_experience"=>$r->,
                "note" => $r->note_alert,
                "minimum_qualifications" => $r->minimum_qualifications,
                "preferred_qualifications" => $r->preferred_qualifications,
                "about_job" => $r->about_the_job,
                "responsibilities" => $r->responsibilities,
                "status" => "A",
                "create_by" => auth()->user()->id
            ]);
            return redirect()->route('super_admin.page.careerss');
        } else {
            $data['countries'] = MdCountriesModel::all();
            $data['role'] = JobRoleModel::all();
            $data['careers_id'] = $careers_id;
            $data['careers'] = JobCareersModel::join("jobs_careers_role AS a", "jobs_careers.role_id", "=", "a.careers_role_id")->join("md_lo_cities AS b", "b.id", "=", "jobs_careers.cities_id")->join("md_lo_states AS c", "c.id", "=", "b.state_id")->select("jobs_careers.*", "b.state_id", "c.country_id")->first();

            return view('admin.iot_blitz.careers.careers_edit')->with($data);
        }
    }

    function applycation_list($careers_id): View
    {
        $data['careers_id'] = $careers_id;

        $data['jobs_careers'] = JobCareersModel::where('careers_id', $careers_id)->join("jobs_careers_role AS e", "e.careers_role_id", "=", "jobs_careers.role_id")->first();
        $data['job_applications'] = JobCareersModel::join("jobs_applied_employee AS a", "jobs_careers.careers_id", "=", "a.carcers_id")
            ->join("md_lo_cities AS b", "b.id", "=", "jobs_careers.cities_id")
            ->join("md_lo_states AS c", "c.id", "=", "b.state_id")
            ->join("md_lo_cities AS d", "d.id", "=", "c.country_id")
            ->join("jobs_careers_role AS e", "e.careers_role_id", "=", "jobs_careers.role_id")
            ->select("a.*", "jobs_careers.*", "b.name AS city_name", "c.name AS state_name", "d.name AS country_name", "e.role")
            ->where("jobs_careers.careers_id", $careers_id)
            ->where("a.carcers_id", $careers_id)->get();


        return view('admin.iot_blitz.careers.applycation_list')->with($data);
    }


    function contact(): View
    {
        $data['contact'] = PublicContactModel::orderBy('contact_id', 'DESC')->get();
        return view('admin.iot_blitz.contact.list')->with($data);
    }
}
