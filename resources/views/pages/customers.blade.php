@extends('layouts.master')

@section('content')
<!--banner section-->
    <section class="banner-section py-2 py-md-5">
        <div class="container">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner-text  text-center text-md-start">
                     <h1 class="hero__title fw-bold">Explore our customer stories</h1>
                     <p class="hero__subtitle">Check out the case studies below to see how companies like yours use Lusha to achieve successful business outcomes.</p>
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
                     <img src="{{url('public/assets/images/customers-banner-img.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
  <!--success stories section-->
   <section class="success-stories-section py-5 gray-bg ">
       <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-10 col-12 mx-auto">
                 <div class="main-title text-center mb-4 mb-md-5">
                     <h1 class="main-title-text fw-bold"> Hear more success stories from companies like yours </h1>
                 </div>
             </div>
         </div>
         
         <div class="row">
          <!--1-->
           <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white card heigth-100">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> <img src="{{url('public/assets/images/FieldC.png')}}" alt="Image"/ class="img-fluid"></div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> Guido is consistently #1 Salesperson at Field Control Analytics  Thanks to Lusha </h5>
                         <p>  Guido Mangani is a National Account Executive at Field Control Analytics, responsible for securing 20 new construction projects a year. With Lusha he exceeds target and is consistently Field Control Analytics' #1 Salesperson. </p>
                     </div>
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> 
                        <img src="{{url('public/assets/images/Group-2108.png')}}" alt="Image"/ class="img-fluid">
                        </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> Guido Mangani </strong> </h6>
                            <p class="mb-0"> National Account Executive  </p>
                        </div>
                     </div>
                 </div>
             </div>
        <!--2-->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white card heigth-100">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> 
                      <img src="{{url('public/assets/images/RST.png')}}" alt="Image"/ class="img-fluid"> </div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> JD Locates New Markets for sales expansion  thanks to Lusha </h5>
                         <p> JD Misra is a Sales Manager at RST Solutions, responsible for meeting quota for booked meetings and demos, in addition to scoping out new markets for expansion </p>
                     </div>
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> <img src="{{url('public/assets/images/pic.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> JD Misra </strong> </h6>
                            <p class="mb-0"> Sales Manager  </p>
                        </div>
                     </div>
                 </div>
             </div>
          <!--3-->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white heigth-100 card">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> <img src="{{url('public/assets/images/vwo.png')}}" alt="Image"/ class="img-fluid"> </div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> For Vaibhav, Lusha + Sales Nav = hitting quota every time </h5>
                         <p> Vaibhav, a BDR at VWO, spends 60% of his day prospecting for new customers on LinkedIn. Using Lusha, he's able to work through his preferred workflow, finding prospects in Sales Nav, and enriching them with Lusha's accurate prospect contact data. </p>
                     </div>
                     
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> <img src="{{url('public/assets/images/Viabhav_VMO.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> Vaibhav Gupta </strong> </h6>
                            <p class="mb-0"> BDR for APAC and ANZ  </p>
                        </div>
                     </div>
                     
                     </div>
                 </div>
        <!--4-->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white heigth-100 card">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> <img src="{{url('public/assets/images/image-706-1.png')}}" alt="Image"/ class="img-fluid"> </div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> Dominic receives data accuracy levels of up to 80% </h5>
                         <p>  As an account executive, Dominic is not only tasked with demos and selling to clients, but also cold outreach. With leads he had to manually enrich, Dominic found lead generation time consuming and often time, reaching dead ends through LinkedIn. </p>
                     </div>
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> <img src="{{url('public/assets/images/Group-2075.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> Dominic Pina </strong> </h6>
                            <p class="mb-0">  Account Executive at GetMoss  </p>
                        </div>
                     </div>
                 </div>
             </div>
             
        <!--5-->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white heigth-100 card">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> <img src="{{url('public/assets/images/Group-2063.png')}}" alt="Image"/ class="img-fluid"> </div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> Chancellor sees over 1000% ROI  on Lusha </h5>
                         <p> Chancellor Corbett is responsible for finding, connecting with and booking meetings with C-suite executives. With more of his target customers working from home, getting the correct contact number is crucial to his success. </p>
                     </div>
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> <img src="{{url('public/assets/images/Group-2072.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> Chancellor Corbett </strong> </h6>
                            <p class="mb-0"> Business Development Consultant </p>
                        </div>
                     </div>
                 </div>
             </div>
             
        <!--6-->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                 <div class="success-storie-info bg-white heigth-100 card">
                     <div class="imgae-dark-header bg-clr py-2 px-3 text-center"> <img src="{{url('public/assets/images/devere-1-1.png')}}" alt="Image"/ class="img-fluid"> </div>
                     <div class="success-storie-text p-3">
                         <h5 class="fw-bold mb-0 py-2"> Bradley closes 25% more deals, thanks to Lusha’s contact data </h5>
                         <p>  After finding potential customers on LinkedIn, Bradley’s challenge was making contact. With 5% response rates to InMail messages, Bradley’s outreach efforts were stalled and many times reached a dead end when trying to reach out. </p>
                     </div>
                     <div class="storie-profile-detail d-flex border-top p-3 align-items-center">
                        <div class="admin-profile-image"> <img src="{{url('public/assets/images/Group-2068.png')}}" alt="Image"/ class="img-fluid"> </div>
                        <div class="admin-profile-text">
                            <h6 class="mb-0"> <strong> Bradley Warwick </strong> </h6>
                            <p class="mb-0"> Business Development Consultant </p>
                        </div>
                     </div>
                 </div>
             </div>
             
             <div class="col-md-12">
                 <div class="read-more-btn text-center">
                     <button class="btn app-btn-primary mt-3 py-2 px-4"> Read More</button>
                 </div>
             </div>
             
         </div>
       </div>
   </section>
   
  

@endsection