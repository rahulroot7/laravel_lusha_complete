@extends('layouts.master')

@section('content')

<!--blog post content-->
  <section class="blog-post-section gray-bg py-4 py-md-5">
      <div class="container">
         <div class="row">
          <div class="col-md-12">
                 <div class="main-title text-center mb-4 mb-md-5">
                     <h1 class="main-title-text fw-bold"> Most Popular </h1>
                 </div>
             </div>
             <!--1-->

            @foreach($blogs as $all_blog)
             <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-0">
                 <a href="{{url('/single-blogs',$all_blog->id)}}" class="text-decoration-none ">
                     <div class="blog-content-info bg-white mb-4 heigth-100 hover-effect">
                     <img src="{{ asset('/public/upload/blog/'.$all_blog->blog_image)}}" alt="Image"/ class="img-fluid">
                     <div class="blog-text p-3">
                         <small>{{$all_blog->blog_category}}</small>
                         <h5 class="fw-bold mb-0 py-2"> {{$all_blog->blog_title}} </h5>
                         <?php
                            $updated_at = $all_blog->updated_at;
                            $up_date = date('F d,Y',strtotime($updated_at));
                          ?>
                         <ul class="blog-articles-listItem__meta p-0 list-unstyled d-flex m-0"><li>{{$up_date}}</li><li>13 min read</li></ul>
                     </div>
                     <div class="blog-profile-detail d-flex border-top p-3">
                        <div class="blog-profile-image"> <img src="{{asset('public/assets/images/lushaimage.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="blog-profile-text">
                            <p class="mb-0"> <strong> {{$all_blog->author_name}} </strong> </p>
                            <p class="mb-0"> {{$all_blog->author_title}}</p>
                        </div>
                     </div>
                 </div></a>
             </div>
            @endforeach

             
             
         </div> 
      </div>
  </section>
















@endsection