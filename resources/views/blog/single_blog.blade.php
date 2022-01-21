@extends('layouts.master')

@section('content')
 
  <!--single post description-->
    <section class="single-post-description py-3 py-md-5">
      <div class="container">
          <div class="row">
            @foreach($single_blogs as $single_blog)
             <div class="col-md-12">
                <div class="single-post-header  p-3">
                  <!-- <small class="border-bottom mb-2 d-inline-block fw-bold">sales</small> -->
                  <ul class="blog-articles-listItem__meta p-0 list-unstyled d-flex m-0"><li>January 17,2022</li><li>13 min read</li></ul>
                   <h1 class="fw-bold mb-0 py-3 single-post-title">{{$single_blog->blog_title}}</h1>
                </div>
                <div class="single-post-block">
                    <div class="blog-profile-detail d-flex border-top py-3 py-md-4 px-3">
                        <div class="blog-profile-image"> <img src="http://testcaresort.com/lusha/public/assets/images/lushaimage.png" alt="Image" class="img-fluid"> </div>
                        <div class="blog-profile-text">
                            <p class="mb-0"> <strong> {{$single_blog->author_name}} </strong> </p>
                            <p class="mb-0"> {{$single_blog->author_title}}</p>
                        </div>
                     </div>
                     <div class="post-image">
                         <img src="{{ asset('/public/upload/blog/'.$single_blog->blog_image)}}" alt="Image"/ class="w-100">
                     </div>
                     <div class="post-description py-4 py-md-5">
                         <?php echo $single_blog->description; ?>
                     </div>
                </div>
             </div>
            @endforeach
          </div>
      </div>  
    </section>

@endsection