<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\Order;
use App\Models\User;
use App\Models\Plan;
use App\Models\CusList;
use App\Models\Career;
use App\Models\ApplyJob;

class PagesController extends Controller
{
    public function enterprise()
    {
      return view('pages.enterprise');   
    }

    public function customers()
    {
      return view('pages.customers');   
    }

    public function about()
    {
      return view('pages.about');   
    }
// career jobs
    public function career()
    {
      $career = Career::get();
      return view('pages.career.careers',compact('career'));   
    }

    public function career_job($id)
    {
      $career_job = Career::Where('id',$id)->get();
      return view('pages.career.career_job_post',compact('career_job'));   
    }

    // create a career job post
    public function apply_career_job(Request $request)
    {  
        //validation rule
        $validated = request()->validate([ 
            'name' => 'required',
            'last_name' =>'required',
            'email'    => 'required',
            'phone' =>  'required',
            'resume' =>  'required',
        ]);
      $resume = $request->file('resume');
      $resume_name = $resume->getClientOriginalName();
      $resume->move(public_path('/upload/career/document'),$resume_name);
      $resume_path = "/upload/career/document" . $resume_name;

      $coverletter_name = '';
      if($request->file('coverletter')){
        $coverletter = $request->file('coverletter');
        $coverletter_name = $coverletter->getClientOriginalName();
        $coverletter->move(public_path('/upload/career/document'),$coverletter_name);
        $coverletter_path = "/upload/career/document" . $coverletter_name;
      }

      $portfolio_name = '';
      if($request->file('portfolio')){
        $portfolio = $request->file('portfolio');
        $portfolio_name = $portfolio->getClientOriginalName();
        $portfolio->move(public_path('/upload/career/document'),$portfolio_name);
        $portfolio_path = "/upload/career/document" . $portfolio_name;
      }

      // print_r($request->all());die;
        $create_career= ApplyJob::create([
                    'apply_position'    =>  $request->apply_position,
                    'position_id' =>  $request->position_id,
                    'name' =>  $request->name,
                    'last_name' =>  $request->last_name,
                    'email'  =>  $request->email,
                    'phone' => $request->phone,
                    'resume'  =>  $resume_name,                    
                    'linkedin_url' => $request->linkedin_url,
                    'web_url' =>  $request->web_url,
                    'coverletter' =>  $coverletter_name,
                    'portfolio' =>  $portfolio_name,
                    'description' =>  $request->message,
                ]);
        //check if Blog is create
        if($create_career){
            return redirect()->back()->with('success','Your application has been submitted. Good luck!');
        } else {
             return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }

// career job end

    public function our_data()
    {
      return view('pages.our_data');   
    }

    public function data_sources()
    {
      return view('pages.data_sources');   
    }

    public function community_program()
    {
      return view('pages.community_program');   
    }

    public function terms_of_use()
    {
      return view('pages.terms_of_use');   
    }

    public function faq()
    {
      return view('pages.faq');   
    }

    public function site_extension()
    {
      return view('pages.extension');   
    }

    public function prospecting_platform()
    {
      return view('pages.prospecting_platform');   
    }

    public function site_api()
    {
      return view('pages.api');   
    }

    public function site_integrations()
    {
      return view('pages.integrations');   
    }

    public function term_services()
    {
      return view('pages.terms_services');   
    }

    public function privacy_policy()
    {
      return view('pages.privacy_policy');   
    }

    public function api_documents()
    {
      return view('pages.api_documents');   
    }

    public function privacy_center()
    {
      return view('pages.privacy_center');
    }

    public function help_support()
    {
      return view('pages.help_support');
    }
}
