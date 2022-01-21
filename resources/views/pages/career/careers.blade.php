@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/career-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-lg-6 col-md-10 mx-auto">
                 <div class="banner-text  text-center">
                     <h1 class="hero__title fw-bold text-white">When someone new comes to Lusha we always say welcome home.</h1>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
    <!--Job list section-->
     <section class="job-list-section py-md-5 py-3">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                   <div  class="job-list-title text-center p-3 mb-1 mb-md-4">
                     <h2 class="fw-bold">Become a Lushian, feel the vibes</h2>
                     <p> We believe every employee shines when they bring their unique selves and feel that they belong. </p>
                   </div>  
                 </div>
             </div>
             <div class="col-md-8 mx-auto">
             <form class="d-flex">
                <input class="form-control me-2 py-3" type="search" id="career" autocomplete="off" placeholder="Search for countries..." />
                <button class="btn btn-primary-outline" type="submit">Search</button>
            </form>
            </div>
            <div class="list-career mt-4 mt-md-5">
             <div class="row ">
             
                <!--1-->
                @foreach($career as $careers)
                <div class="list clearfix">
                  <a href="{{url('/careers-job',$careers->id)}}" class="clr-inherit">
                      <div class="list-carrer-detail">
                      <div class="jobs-list-block d-flex  p-4 rounded-3 hover-effect shadow mb-4">
                            <div class="jobs-list-icon"><img src="{{asset('/public/upload/career/'.$careers->image)}}" style="width: 35px"></div>  

                            <div class="blog-profile-text" style="padding-left: 16px">
                                <h6 class="mb-0"> <strong> {{$careers->career_title}} </strong> </h6>
                                <p class="mb-0"> {{$careers->career_category}},  {{$careers->career_location}}</p>
                            </div>
                      </div>
                  </div></a>
                </div>
                @endforeach
                </div>
                  
             </div>
         </div>
     </section>
     
    
 
 
   

   
  
   

@endsection