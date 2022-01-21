@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/site-api-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Enrich any system with Lusha’s accurate B2B data</h1>
                     <p class="hero__subtitle">Lusha’s API makes it easy to enrich any database, system or app with accurate B2B contact and company data.</p>
                     <button class="btn main-btn py-2" type="submit">Contact Sales</button>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--benefits section -->
  <section class="benefits-section block-space gray-bg block-space-bottom">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="main-title text-center">
                     <h2 class="main-title-text fw-bold"> Getting started with Lusha’s API <br> is as easy as 1, 2, 3</h2>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
              <div class="col-md-4 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <h6 class="fw-bold pb-2"> Step 1 </h6>
                     <img src="{{url('public/assets/images/team.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Contact our sales team </h5>
                    <p class="mb-0 px-4"> To get started with our API, contact sales. Our experts will help you get started in no time.</p>
                 </div>
             </div>
             <div class="col-md-4 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <h6 class="fw-bold pb-2"> Step 2 </h6>
                     <img src="{{url('public/assets/images/analytics.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2 mt-3"> What data do you need? </h5>
                    <p class="mb-0 px-4">Select whether you want to enrich your system with Lusha’s person API, company API or both.</p>
                 </div>
             </div>
             <div class="col-md-4 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <h6 class="fw-bold pb-2"> Step 3 </h6>
                     <img src="{{url('public/assets/images/prospects-img.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Keep your data up-to-date </h5>
                    <p class="mb-0 px-4">Your developer can set up your API to regularly update and ensure data stays squeaky clean.</p>
                 </div>
             </div>
            
         </div>
     </div>
    </section>
    
    <!--image text section-->
   <section class="image-text-section py-4 py-md-5">
       <div class="container">
          <div class="row align-items-center">
            <!--1-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                      <img src="{{url('public/assets/images/site-api-img-1.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text mb-4 mb-md-0 text-center text-md-start px-3 px-md-0">
                    <h2 class="fw-bold">Person API</h2> 
                    <p> Enrich your system with accurate prospect contact data, like direct dials, email addresses, and more.</p>
                    <button class="btn main-btn py-2" type="submit">View Docs</button>
                 </div>
              </div>
              <!--2-->
              <div class="col-md-6">
                 <div class="sales-team-text mb-4 mb-md-0 text-center text-md-start px-3 px-md-0">
                    <h2 class="fw-bold">Company API</h2> 
                    <p> Update your system with a rich, company profile, including details like company name, size, industry, website, and techno graphics.</p>
                    <button class="btn main-btn py-2" type="submit">View Docs</button>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-image">
                      <img src="{{url('public/assets/images/site-api-img-2.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
          </div>
       </div>
   </section>
   
    
  <!--ccpa-gdpr section-->
   <section class="ccpa-gdpr-section py-5">
    <div class="container">
     <div class="row align-items-center">
         <div class="col-md-12 col-12">
             <div class="main-title text-center text-white">
                     <h2 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> Get Started with Lusha</h2>
                      <button class="btn main-btn py-2" type="submit">My Account</button>
                 </div>
         </div>

     </div>
    </div>
 </section>

@endsection