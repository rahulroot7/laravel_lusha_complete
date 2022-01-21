<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function all_blog()
    {
      $blogs = Blog::get();
      return view('blog.all_blog',compact('blogs'));   
    }

    public function single_blog($id)
    {
      $single_blogs = Blog::where('id',$id)->get();
      return view('blog.single_blog',compact('single_blogs'));   
    }


    // blog crud for admin...
    public function add_blog()
    {
        $category = BlogCategory::get();
    	return view('admin.blog.add_blog',compact('category'));
    }

        //Blog Store  
    public function blog_store(Request $request)
    {
        //validation rule
        $validated = request()->validate([ 
            'author_name' => 'required',
            'author_title' =>'required',
            'image'    => 'required',
            'blog_title' =>  'required',
            'description'       =>  'required',
        ]);

        $image = $request->file('image');
	    $image_name = $image->getClientOriginalName();
	    $image->move(public_path('/upload/blog/'),$image_name);

	    $image_path = "/upload/blog/" . $image_name;
        $create_blog = Blog::create([
                    'author_name'    =>  $request->author_name,
                    'author_title' =>  $request->author_title,
                    'blog_image'      =>  $image_name,
                    'blog_title'    =>  $request->blog_title,
                    'category_id' => $request->category,
                    'description' =>  $request->description,
                ]);
        //check if Blog is create
        if($create_blog){
            return redirect()->back()->with('success','Blog added successfully.');
        } else {
            return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }

    public function all_blog_admin()
    {
        $all_blogs = Blog::get();
        return view('admin.blog.all_blog',compact('all_blogs'));
    }

    // blog delete
    public function blog_destroy($id){
        $blog_id = $id;
        $IsBlogDelete = Blog::Where("id",$blog_id)->Delete();
         //check if plan is deleted or not
         if($IsBlogDelete) {
            return redirect()->back()->with('success','career deleted successfully.');
         }else{
            return redirect()->back()->with('unsuccess','Oops something wrong!');
         }
    }

    //Plan Edit 
    public function edit_blog(blog $id)
    {
        $category = BlogCategory::get();
        return view('admin.blog.blog_edit',compact('id','category'));
    }

    // update blog
    public function update_blog(Request $request, $id)
    {   

        if($request->file('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/upload/blog/'),$image_name);
            $update_blog = Blog::where('id', $id)
                ->update([
                    'author_name'    =>  $request->author_name,
                    'author_title' =>  $request->author_title,
                    'blog_image'      =>  $image_name,
                    'blog_title'    =>  $request->blog_title,
                    'category_id' => $request->category,
                    'description'       =>  $request->description,
                ]);
        }else{
            $update_blog = Blog::where('id', $id)
                ->update([
                    'author_name'    =>  $request->author_name,
                    'author_title' =>  $request->author_title,
                    'blog_title'    =>  $request->blog_title,
                    'category_id' => $request->category,
                    'description'       =>  $request->description,
                ]);
        }
        
        if($update_blog){
           return back()->with('success','Blog Updated Successfully'); 
        } else {
             return back()->with('unsuccess','Opps Something wrong!');
        }
    }


    // add blog category for admin...
    public function blog_category()
    {
        $category = BlogCategory::get();
        $count_blog = BlogCategory::withCount('category_blog_list')->get()->toArray();
        // echo '<pre>';
        // print_r($count_blog);die;
        return view('admin.blog.blog_category',compact('category','count_blog'));
    }

    public function create_category(Request $request)
    {
        //validation rule
        $validated = request()->validate([ 
            'category' => 'required',
            'message' =>'required',
        ]);
        $create_category = BlogCategory::create([
                    'category_name'    =>  $request->category,
                    'sort_desc' =>  $request->message,
                ]);
        //check if Blog is create
        if($create_category){
            return redirect()->back()->with('success','Category added successfully.');
        } else {
            return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }


    //category Edit 
    public function edit_category($id)
    {
        $category = BlogCategory::find($id);
        if($category)
        {
            return response()->json([
                'status'=>200,
                'category'=> $category,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No list Found.'
            ]);
        }

    }

    // category update

    public function update_category(Request $request)
    {
        $category_id = $request->id; 
        $update_category = BlogCategory::where('id', $category_id)
                ->update([
                    'category_name'    =>  $request->category,
                    'sort_desc' =>  $request->message,
                ]);
        if($update_category){
           return back()->with('success','categoryUpdated Successfully'); 
        } else {
             return back()->with('unsuccess','Opps Something wrong!');
        }
    }

    // category delete
    public function category_delete($id){
        $category_id = $id;
        $IsCotecoryDelete = BlogCategory::Where("id",$category_id)->Delete();
         //check if plan is deleted or not
         if($IsCotecoryDelete) {
            return redirect()->back()->with('success','Plan deleted successfully.');
         }else{
            return redirect()->back()->with('unsuccess','Oops something wrong!');
         }
    }
}
