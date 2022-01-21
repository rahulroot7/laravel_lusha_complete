@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/privacy-center-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Welcome to Lusha's privacy center</h1>
                     <p class="hero__subtitle"> Find out everything you need to know about our data and privacy policy. Access data that has been collected and learn how to manage your Lusha profile the way you want.</p>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
   <!--privacy center section-->
    <section class="privacy-section block-space block-space-bottom gray-bg">
       <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 col-12 mx-auto">
                 <div class="main-title text-center">
                     <h2 class="main-title-text fw-bold"> Privacy center </h2>
                 </div>
             </div> 
          </div>
          <div class="row pt-5">
              <div class="col-lg-6 col-md-6 col-12 mb-5">
                  <div class="number-count-content card p-4  heigth-lg-100">
                      <div class="connect-icon privacy-icon d-flex align-items-center justify-content-center"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                      <h5 class="fw-bold pt-4"> Control your Lusha profile </h5>
                      <p class="mb-0 mt-1">  Be in control. See what data has been collected and manage your personal, business, or company profile better. Update, correct or delete data about you at any time. </p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mb-5">
                  <div class="number-count-content card p-4  heigth-lg-100">
                      <div class="connect-icon privacy-icon d-flex align-items-center justify-content-center"> <i class="fa fa-lock" aria-hidden="true"></i> </div>
                      <h5 class="fw-bold pt-4"> Data privacy </h5>
                      <p class="mb-0 mt-1"> Navigate the world of data like a pro. Get the insights you need about our data and privacy policies. </p>
                  </div>
              </div>
             <div class="col-lg-6 col-md-6 col-12 mb-5">
                  <div class="number-count-content card p-4  heigth-lg-100">
                      <div class="connect-icon privacy-icon d-flex align-items-center justify-content-center"> <i class="fa fa-file-text-o" aria-hidden="true"></i> </div>
                      <h5 class="fw-bold pt-4"> Articles </h5>
                      <p class="mb-0 mt-1"> Get in-depth guidance on our data and privacy policies. Stay informed and empowered. </p>
                  </div>
              </div>
            <div class="col-lg-6 col-md-6 col-12 mb-5">
                  <div class="number-count-content card p-4 heigth-lg-100">
                      <div class="connect-icon privacy-icon d-flex align-items-center justify-content-center"> <i class="fa fa-asterisk" aria-hidden="true"></i> </div>
                      <h5 class="fw-bold pt-4"> Resources </h5>
                      <p class="mb-0 mt-1">Power up your knowledge and stay informed on everything data and privacy related with our legal hub of articles and latest updates.  </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
    
 <!--certificate section-->
   <section class="certificate-section py-4 py-md-5">
       <div class="container">
          <div class="row">
               <div class="col-md-8 mx-auto">
                 <div class="certificate-team-text text-center mb-md-5">
                    <h2 class="fw-bold pb-2">The Highest Level of Privacy and Data Security</h2> 
                    <p> Lusha provides the highest level of third-party verified data security, trust and compliance in the B2B data intelligence industry.</p>
                 </div>
              </div>
              <div class="col-md-6">
                  <div class="certificate-block d-flex align-items-center border p-4 mb-4 mb-md-0">
                      <img src="{{url('public/assets/images/27001.svg')}}" alt="Image"/ class="img-fluid">
                      <div class="certificate-text ps-3">
                          <h5 class="mb-0 fw-bold">27001</h5>
                          <p class="mb-0">Certified servers</p>
                        </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="certificate-block d-flex align-items-center border p-4 mb-4 mb-md-0">
                      <img src="{{url('public/assets/images/iapp.svg')}}" alt="Image"/ class="img-fluid">
                      <div class="certificate-text ps-3">
                          <h5 class="mb-0 fw-bold">iapp</h5>
                          <p class="mb-0">Certified servers</p>
                        </div>
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
                     <h1 class="main-title-text fw-bold pb-3 pb-md-3 pt-3 mb-0"> CCPA & GDPR</h1>
                     <p class="px-3 px-md-0"> Work with data you can trust. Lusha is ISO 27001 certified and CCPA compliant and GDPR aligned, according to all laws and regulations.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-center text-md-start">
                <img src="http://testcaresort.com/lusha/public/assets/images/ccpa.png" alt="Image" class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
    
 
@endsection