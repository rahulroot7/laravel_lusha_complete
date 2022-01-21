@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/extension-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Reach your prospects directly</h1>
                     <p class="hero__subtitle">Get accurate B2B emails & phone numbers in seconds</p>
                     <button class="btn main-btn py-2" type="submit">My Account</button>
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
                     <h1 class="main-title-text fw-bold"> Here’s why over 800,000 sales pros love Lusha </h1>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <img src="{{url('public/assets/images/price-list.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2 mt-3"> Start using Lusha in 60 seconds </h5>
                    <p class="mb-0 px-4"> Immediately reach out to future customers</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <img src="{{url('public/assets/images/integration.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Get free contacts for life </h5>
                    <p class="mb-0 px-4"> We give you 5 free contacts every month</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                    <img src="{{url('public/assets/images/terms-of-use.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> The highest accuracy rate </h5>
                    <p class="mb-0 px-4"> We provide the most accurate phone numbers & emails </p>
                 </div>
             </div>
              <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <img src="{{url('public/assets/images/prospects-img.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3">Reach 100M+ prospects directly </h5>
                    <p class="mb-0 px-4">Direct numbers increase engagement by 90% </p>
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
                      <img src="{{url('public/assets/images/extension-img1.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">How Lusha Extension contact finder works </h2> 
                    <p> Instantly access contact details and B2B company info from within your LinkedIn, Gmail inbox or B2B websites. By installing Lusha web-browser extension for Chrome, Firefox and Edge, shorten your sales cycle and close more deals.</p>
                 </div>
              </div>
          </div>
       </div>
   </section>
   
   
  <!--ccpa-gdpr section-->
   <section class="ccpa-gdpr-section block-space block-space-bottom">
    <div class="container">
     <div class="row align-items-center">
         <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-md-end text-center">
                 <img src="{{url('public/assets/images/gdpr.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
             <div class="main-title text-center text-white">
                     <h1 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> CCPA compliant and GDPR aligned </h1>
                     <p class="px-3 px-md-0"> Lusha is ISO 27001, ISO certified and CCPA compliant and GDPR aligned, for total peace of mind.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-md-start text-center">
                   <img src="{{url('public/assets/images/ccpa.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
   
   
   <!--block section-->
     <section class="block-section block-space block-space-bottom">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> Built with your success in mind </h1>
                 </div>
             </div> 
          </div>
          <div class="row pt-4 pt-md-5">
              <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-list" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3"> Bulk enrich your lists in one click</h6>
                      <p class="mb-0">  Instantly bulk enrich and save 25 contacts with Lusha’s B2B prospect data.</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-globe" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3"> Prospect across the web</h6>
                      <p class="mb-0">Find prospects on social networks and B2B sites.</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3"> Easily build prospect lists</h6>
                      <p class="mb-0"> Save contacts directly to Lusha, and easily build prospect lists.</p>
                  </div>
              </div>
             <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-plug" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3">Connect with your CRM</h6>
                      <p class="mb-0">Save contacts from social networks, Gmail or B2B sites to your CRM in one click.</p>
                  </div>
              </div>
          </div>
       </div>
   </section>
   
   
   
  

@endsection