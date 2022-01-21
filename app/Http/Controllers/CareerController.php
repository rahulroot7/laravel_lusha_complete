<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Career;
use App\Models\ApplyJob;

class CareerController extends Controller
{
    public function add_career()
    {
        // $category = BlogCategory::get();
    	return view('admin.career.add_career_position');
    }

    public function career_store(Request $request)
    {
        //validation rule
        $validated = request()->validate([ 
            'image' => 'required',
            'career_title' =>'required',
            'career_category'    => 'required',
            'career_location' =>  'required',
            'description'       =>  'required',
        ]);

        $image = $request->file('image');
	    $image_name = $image->getClientOriginalName();
	    $image->move(public_path('/upload/career/'),$image_name);

	    $image_path = "/upload/career/" . $image_name;
        $create_blog = Career::create([
                    'image'    =>  $image_name,
                    'career_title' =>  $request->career_title,
                    'career_category' => $request->career_category,
                    'career_location' => $request->career_location,
                    'description' =>  $request->description,
                ]);
        if($create_blog){
            return redirect()->back()->with('success','Career added successfully.');
        } else {
            return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }

    public function all_career_admin()
    {
        $all_career = Career::get();
        return view('admin.career.all_career_position',compact('all_career'));
    }

    // career delete
    public function career_delete($id){
        $career_id = $id;
        $IscareerDelete = Career::Where("id",$career_id)->Delete();
         //check if plan is deleted or not
         if($IscareerDelete) {
            return redirect()->back()->with('success','career deleted successfully.');
         }else{
            return redirect()->back()->with('unsuccess','Oops delete something wrong!');
         }
    }

        //career Edit 
    public function edit_career(Career $id)
    {
        $career_category = Career::get();
        return view('admin.career.edit_career',compact('id','career_category'));
    }

    // update career
    public function update_career(Request $request, $id)
    {   

        if($request->file('image')){
        $image = $request->file('image');
	    $image_name = $image->getClientOriginalName();
	    $image->move(public_path('/upload/career/'),$image_name);
	    $image_path = "/upload/career/" . $image_name;
            $update_career = Career::where('id', $id)
                ->update([
                    'image'    =>  $image_name,
                    'career_title' =>  $request->career_title,
                    'career_category' => $request->career_category,
                    'career_location' => $request->career_location,
                    'description' =>  $request->description,
                ]);
        }else{
            $update_career = Career::where('id', $id)
                ->update([
                    'career_title' =>  $request->career_title,
                    'career_category' => $request->career_category,
                    'career_location' => $request->career_location,
                    'description' =>  $request->description,
                ]);
        }
        
        if($update_career){
           return back()->with('success','career Updated Successfully'); 
        } else {
             return back()->with('unsuccess','Opps Something wrong!');
        }
    }


    // applyed career List 
    public function career_list()
    {
        $career_list = ApplyJob::get();
        return view('admin.career.career_list',compact('career_list'));
    }
    // end career list

     // career post job delete
    public function career_user_delete($id){
        $post_id = $id;
        $IscareerPostDelete = ApplyJob::Where("id",$post_id)->Delete();
         //check if plan is deleted or not
         if($IscareerPostDelete) {
            return redirect()->back()->with('success','Deleted successfully.');
         }else{
            return redirect()->back()->with('unsuccess','Oops something wrong!');
         }
    }


}
