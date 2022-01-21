@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('{{ asset('public/assets/images/career-banner.jpg')}}')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Apply for position</h1>
                 </div>
             </div>
             
         </div>
        </div>
    </section>
    
    <!--careers job section-->
      <section class="carrer-job-section py-5 gray-bg">
       <div class="container">
          <div class="row">
            @foreach($career_job as $job_detail)
                 <div class="col-lg-7 col-md-12 col-12">
                <a href="{{url('/careers')}}"><i class="fa fa-arrow-left" aria-hidden="true" style="color: #FF023E;"> All open positions</i></a><br><br>
                  <div class="information-text  px-2 px-md-0">
                    <img src="{{asset('public/upload/career/'.$job_detail->image)}}" style="width: 50px;">
                    <h3 class="fw-bold mb-0">{{$job_detail->career_title}}</h3>
                    <p class="mb-4"> {{$job_detail->career_category}}, {{$job_detail->career_location}}</p>
                    <?php echo $job_detail->description; ?>
                 </div>
                <a href="{{url('/careers')}}"><i class="fa fa-arrow-left" aria-hidden="true" style="color: #FF023E;"> All open positions</i></a><br><br>
              </div>
            
              <!--2-->
               <div class="col-lg-5 col-md-12 col-12 mx-auto">
                 <div class="apply-form bg-white p-4">
                     <h3 class="fw-bold mb-4"> Apply for this position </h3>
              <div class="message-alert">
                @if (session('success'))
                  <h5> Thank you </h5>
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
                @endif
              </div>
                  <form method="post" action="{{ route('career.job') }}" enctype="multipart/form-data">
                 @csrf
                       <div class="mb-3">
                        <input type="hidden" name="apply_position" value="{{$job_detail->career_title}}" class="form-control" id="firstInputname">
                        <input type="hidden" name="position_id" value="{{$job_detail->id}}" class="form-control" id="firstInputname">
                        <label for="firstInputname" class="form-label">First name</label>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="firstInputname">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="lastInputname" class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="lastInputname">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                         @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="phoneInput" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phoneInput"> 
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                      </div>
                       <div class="mb-3">
                        <label for="resumeInputname" class="form-label">Resume</label>
                        <input type="file" name="resume" class="form-control @error('phone') is-invalid @enderror" id="resumeInputname">
                        @error('resume')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                       <div class="mb-3">
                        <label for="urlInput" class="form-label">LinkedIn Profile URL </label>
                        <input type="text" name="linkedin_url" class="form-control" id="urlInput">
                      </div>
                       <div class="mb-3">
                        <label for="websiteInput" class="form-label">Personal website  </label>
                        <input type="text" name="web_url" class="form-control" id="websiteInput">
                      </div>
                        <div class="mb-3">
                        <label for="coverletter" class="form-label">Attach Cover Letter </label>
                        <input type="file" name="coverletter" class="form-control" id="coverletter">
                      </div>
                        <div class="mb-3">
                        <label for="attachportfolio" class="form-label">Attach Portfolio  </label>
                        <input type="file" name="portfolio" class="form-control" id="attachportfolio">
                      </div>
                      
                       <div class="mb-3">
                        <label for="noteInput" class="form-label">Personal note </label> <br>
                       <textarea name="message" rows="3" class="w-100"> </textarea>
                       <small> Please review our privacy practices: read privacy policy. </small>
                      </div>
                      <button type="submit" id="career_btn" class="btn app-btn-primary w-100 py-2 mt-3 text-uppercase fw-bold">Submit Application</button>
                    </form>
                    <div class="payment_responce"></div><div class="payment_loding"></div> 
                 </div>
             </div>
            @endforeach
          </div>
       </div>
      </section>
    
    
     
    
 
 
   

   
  
   

@endsection