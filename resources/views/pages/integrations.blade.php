@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/site-integrations-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Connect Lusha with all your tools</h1>
                     <p class="hero__subtitle">Quit switching tools and work from one place. Integrate to any tool in 60 seconds and supercharge your workflows in 1 click.</p>
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
        </div>
    </section>
    
 <!--integration section -->
  <section class="integration-section block-space block-space-bottom">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-10 col-12 mx-auto">
                 <div class="main-title text-center">
                     <h2 class="main-title-text fw-bold"> Scale team efficiency</h2>
                     <p> Lusha’s one-click integrations handle all your data entry, instantly freeing up time to nurture and convert more leads.</p>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <!--1-->
              <div class="col-lg-4 col-md-6 col-12">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Salesforce </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Salesforce directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                         <img src="{{url('public/assets/images/salesforce.png')}}" alt="Image"/ class="img-fluid pe-2">
                                    <h5 class="modal-title" id="connectModalLabel">Save to Salesforce is an Enterprise feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Salesforce account to save contacts directly to Salesforce
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!--2-->
                <div class="col-lg-4 col-md-6 col-12">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                  <img src="{{url('public/assets/images/outreach.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Outreach </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Outreach directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#OutreachModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="OutreachModal" tabindex="-1" aria-labelledby="OutreachModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <img src="{{url('public/assets/images/outreach.png')}}" alt="Image"/ class="img-fluid pe-2">
                                    <h5 class="modal-title" id="OutreachModalLabel">Save to Outreach is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Outreach account to save contacts directly to Outreach
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
              <!--3 -->
                <div class="col-lg-4 col-md-6 col-12">
                       <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/Hubspot.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Hubspot </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Hubspot directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#hubspotModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="hubspotModal" tabindex="-1" aria-labelledby="hubspotModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
    
                                        <img src="{{url('public/assets/images/Hubspot.png')}}" alt="Image"/ class="img-fluid pe-2">
                                    <h5 class="modal-title" id="hubspotModalLabel">Save to Hubspot is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Hubspot account to save contacts directly to Hubspot
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!--4-->
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                 <img src="{{url('public/assets/images/pipedrive.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Pipedrive </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Pipedrive directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#pipedriveModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="pipedriveModal" tabindex="-1" aria-labelledby="pipedriveModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                          <img src="{{url('public/assets/images/pipedrive.png')}}" alt="Image"/ class="img-fluid pe-2">
                                    <h5 class="modal-title" id="pipedriveModalLabel">Save to Pipedrive is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Pipedrive account to save contacts directly to Pipedrive
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
               <!--5-->
                   <div class="col-lg-4 col-md-6 col-12">
                        <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                  <img src="{{url('public/assets/images/salesloft.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Salesloft </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Salesloft directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#salesloftModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="salesloftModal" tabindex="-1" aria-labelledby="salesloftModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                        <img src="{{url('public/assets/images/salesloft.png')}}" alt="Image"/ class="img-fluid pe-2">
                                    <h5 class="modal-title" id="salesloftModalLabel">Save to Salesloft is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Salesloft account to save contacts directly to Salesloft
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!--6 -->
                     <div class="col-lg-4 col-md-6 col-12">
                      <div class="integration-content-data shadow p-4 mb-4">
                          <div class="integration-content-title d-flex align-items-center">
                                <img src="{{url('public/assets/images/Zoho.png')}}" alt="Image"/ class="img-fluid">
                               <h6 class="fw-bold mb-0 ps-2"> Zoho CRM </h6> 
                           </div>
                           <p class="pt-2 mb-0"> Save your contacts to Zoho CRM directly from the plugin.</p>
                           <a href="#" class="fs-14 main-clr"> Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> <br>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn app-btn-primary mt-4 w-100" data-bs-toggle="modal" data-bs-target="#connectModal">
                              Connect
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="connectModal" tabindex="-1" aria-labelledby="connectModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <img src="{{url('public/assets/images/Zoho.png')}}" alt="Image"/ class="img-fluid pe-2">

                                    <h5 class="modal-title" id="connectModalLabel">Save to Zoho CRM is an advanced feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    connect your Zoho CRM account to save contacts directly to Zoho CRM
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn app-btn-primary">Contact Sales</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
          </section>
    
    <!--image text section-->
      <section class="image-text-section py-4 py-md-5 gray-bg">
       <div class="container">
          <div class="row align-items-center">
            <!--1-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                     <img src="{{url('public/assets/images/site-integrations-img.png')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text mb-4 mb-md-0 text-center text-md-start px-3 px-md-0">
                    <h3>Save a total of 88 hours a month on prospecting just by connecting Lusha to Salesforce and Outreach</h3> 
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
                 </div>
         </div>

     </div>
    </div>
 </section>

@endsection