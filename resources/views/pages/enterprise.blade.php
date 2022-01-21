@extends('layouts.master')

@section('content')
<!--banner section-->
    <section class="banner-section py-2 py-md-5">
        <div class="container">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner-text  text-center text-md-start">
                     <h1 class="hero__title fw-bold">#1 Lead intelligence solution for sales</h1>
                     <p class="hero__subtitle">Lusha’s lead intelligence solution delivers accurate direct dials, phone numbers and emails to speed up sales with less work.</p>
                     <div class="banner-email mt-4">
                    @if(Auth::user())
                      <div class="my-account-btn">
                        <a href="{{url('/dashboard')}}"><button class="btn account-btn py-3">My Account</button></a>
                      </div> 
                    @else
                     <div class="d-flex position-relative">
                        <input class="form-control me-2 py-3" type="search" placeholder="Enter your work email" aria-label="Search">
                        <a href="{{url('/register')}}"><button class="btn submit-btn py-3">Start up for free</button></a>
                      </div>
                    @endif 
                 </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/ban-img.png.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--image text section-->
   <section class="image-text-section py-5">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center mb-4 mb-md-5">
                     <h1 class="main-title-text fw-bold"> One solution for your entire sales team </h1>
                 </div>
             </div>
          </div>
          <div class="row align-items-center">
            <!--1-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                     <img src="{{url('public/assets/images/enterprise-img-1.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold pb-2">SDRs book more qualified meetings </h2> 
                    <p> Find the right people and uncover the right information on any prospect you’re looking for with direct contact data. Identify leads that meet your qualification criteria and discover new target accounts with our robust search functionality. Lusha enables you to hit your quota and increase your win rate.</p>
                 </div>
              </div>
            <!--2-->
              
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold pb-2">AEs close more deals </h2> 
                    <p> Quit relying on other team members to fill up your pipeline with qualified leads. Find new prospects and opportunities on your own with target-like audiences. Pinpoint decision makers easily with 36M C-level profiles. Locate any decision maker across the pipeline to speed up to close and exceed your goals.</p>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-image">
                      <img src="{{url('public/assets/images/enterprise-img-2.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              
            <!--3-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                    <img src="{{url('public/assets/images/enterprise-img-3.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold pb-2">Sales leaders manage teams better </h2> 
                    <p> Easily build a more visible, qualified, and robust pipeline with enterprise-grade team management. Boost productivity all round with flexible control and visibility of contact credits. Identify opportunities for revenue growth and easily manage credit usage. Distribute credits where you need them most and limit credits anytime to get the most value from Lusha Enterprise.</p>
                 </div>
              </div>
          </div>
       </div>
   </section>
   
   <!--Shorten sales section-->
     
    <section class="shorten-sales-section gray-bg block-space block-space-bottom">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> Shorten your sales cycle in minutes </h1>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <img src="{{url('public/assets/images/price-list.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2 mt-3"> Integrate with your favorite tools </h5>
                    <p class="mb-0 px-4"> Instantly automate your workflow. Transfer accurate and actionable prospect data to Salesforce, Outreach or SalesLoft in one click </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <img src="{{url('public/assets/images/integration.png')}}" alt="Image"/ class="img-fluid">
                    
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Data enrichment API </h5>
                    <p class="mb-0 px-4"> Lusha API automatically enriches your entire database at bulk, either via technical integration or Zapier </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <img src="{{url('public/assets/images/terms-of-use.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Data you can trust </h5>
                    <p class="mb-0 px-4"> Every Lusha record is CCPA compliant and GDPR aligned, and 27001 ISO certified. Work in total alignment with all laws and regulations </p>
                 </div>
             </div>
         </div>
     </div>
    </section>
    
 <!--number count section-->
   <section class="number-counter-section block-space block-space-bottom">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> The most accurate data you'll find </h1>
                 </div>
             </div> 
          </div>
          <div class="row pt-5">
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                      <div class="item-icon"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 100M </h2>
                      <p> Business Profiles </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 60M </h2>
                      <p> Email Addresses </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 50M </h2>
                      <p> Direct Dials </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 15M </h2>
                      <p> Company Profiles </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
   
<!--image text section-->
   <section class="image-text-section py-5">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center mb-4 mb-md-5">
                     <h1 class="main-title-text fw-bold"> One solution for your entire sales team </h1>
                 </div>
             </div>
          </div>
          <div class="row align-items-center">
            <!--1-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                     <img src="{{url('public/assets/images/enterprise-img-4.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold pb-2">Frictionless onboarding </h2> 
                    <p> Free up your time with our zero hassle setup. Start using Lusha in 60 seconds and find more qualified leads right away. You’ll also be partnered with a dedicated account manager, committed to your success from day one.</p>
                 </div>
              </div>
          </div>
       </div>
   </section>
   
  

@endsection