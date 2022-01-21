@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/perfect-prospecting.jpg') ; background-position:center">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Build the perfect prospecting list.</h1>
                     <p class="hero__subtitle">No waiting time: use any search filter to pull up thousands of verified emails, work numbers, and direct dials on your prospects in seconds.</p>
                     <a href="{{url('/prospecting')}}"><button class="btn main-btn py-2">Start Prospecting</button></a>
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
                     <h2 class="main-title-text fw-bold"> Over 800,000 sales pros use Lusha <br>to cut their prospecting time </h2>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                     <img src="{{url('public/assets/images/contact.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2 mt-2"> More contacts for free </h5>
                    <p class="mb-0 px-4"> Get 5 FREE contacts every single month</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <img src="{{url('public/assets/images/rating.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-2"> Increase connect rate by 50% </h5>
                    <p class="mb-0 px-4">Reach more decision-makers with accurate direct dials</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <img src="{{url('public/assets/images/project.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-2"> Boost email response rate by 20% </h5>
                    <p class="mb-0 px-4"> Our only verified emails get you into any prospect’s inbox</p>
                 </div>
             </div>
              <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100 bg-white">
                      <img src="{{url('public/assets/images/integration-new.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-2">1-click integrations</h5>
                    <p class="mb-0 px-4">Turbo-charge your Salesforce, HubSpot, and Outreach</p>
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
                <img src="http://testcaresort.com/lusha/public/assets/images/gdpr.png" alt="Image" class="img-fluid">
             </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
             <div class="main-title text-center text-white">
                     <h1 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> Work in line with CCPA and GDPR </h1>
                     <p class="px-3 px-md-0"> Lusha is ISO 27001 certified and CCPA compliant and GDPR aligned.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-md-start text-center">
                <img src="http://testcaresort.com/lusha/public/assets/images/ccpa.png" alt="Image" class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
 
 <!--number counter section-->
     <section class="number-counter-section block-space block-space-bottom">
           <div class="container">
              <div class="row">
                  <div class="col-md-12">
                     <div class="main-title text-center">
                         <h2 class="main-title-text fw-bold"> Access the most accurate prospect data</h2>
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
   
   
   <!--block section-->
     <section class="block-section block-space block-space-bottom gray-bg">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center">
                     <h2 class="main-title-text fw-bold"> Remove the friction. Maximize sales productivity</h2>
                 </div>
             </div> 
          </div>
          <div class="row pt-4 pt-md-5">
              <div class="col-lg-4 col-md-4 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-search" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3"> Slice and dice any lead data</h6>
                      <p class="mb-0">Perfect your search with our industry, location, seniority level, and phone/email filters.</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-list" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3">Bulk enrich prospect lists</h6>
                      <p class="mb-0">Select and reveal up to 1K contact details in 1 click to your CRM. Get the data you need on the spot.</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12 mb-3">
                  <div class="number-count-content border p-4 heigth-100">
                      <div class="block-icon"> <i class="fa fa-floppy-o" aria-hidden="true"></i> </div>
                      <h6 class="fw-bold pt-3"> Saved and recent searches </h6>
                      <p class="mb-0">Access any of your searches anytime. Boost productivity by picking up right where you left off.</p>
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
                      <img src="{{url('public/assets/images/prospecting-platform-img.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Seamlessly integrate to your CRM </h2> 
                    <p> Drive more qualified prospects and seamlessly transfer them with direct integrations to your CRM.</p>
                    <button class="btn main-btn py-2" type="submit">Learn More</button>
                 </div>
              </div>
          </div>
       </div>
   </section>
   
   
   
  

@endsection