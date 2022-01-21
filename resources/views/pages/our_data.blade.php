@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/data-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Data that’s trusted by over 800,000 salespeople</h1>
                     <p class="hero__subtitle">When you want accurate and compliant prospect and company data, Lusha sales intelligence stands a cut above its competition.</p>
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
         </div>
        </div>
    </section>
    
    <!--number section-->
     <section class="number-counter-section block-space block-space-bottom gray-bg">
       <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 col-12 mx-auto">
                 <div class="main-title text-center">
                     <h2 class="main-title-text fw-bold"> Lusha’s company contact database lets you find decision makers, fast </h2>
                 </div>
             </div> 
          </div>
          <div class="row pt-5">
              <div class="col-lg-3 col-md-6 col-12">
                  <div class="number-count-content card p-4 mb-5 mb-lg-0 heigth-lg-100">
                      <div class="connect-icon d-flex align-items-center justify-content-center"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 100M </h2>
                      <h6> Business profiles </h6>
                      <p class="mb-0 mt-3">  Lusha has over 100M business profiles (contacts) in its database - a number that’s growing every day. Our contact database is global, highly accurate, and ranges from B2B enterprise to one-man-shows. </p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                  <div class="number-count-content card p-4 mb-5 mb-lg-0 heigth-lg-100">
                      <div class="connect-icon d-flex align-items-center justify-content-center"><i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 60M </h2>
                      <h6> Decision makers email addresses </h6>
                      <p class="mb-0 mt-3">  Our database provides over 60M decision maker email addresses from your most sought-after prospects. Keep your CRM up-to-date and send prospects sales outreach emails with Lusha’s accurate email addresses. </p>
                  </div>
              </div>
             <div class="col-lg-3 col-md-6 col-12">
                  <div class="number-count-content card p-4  mb-5 mb-lg-0 heigth-lg-100">
                      <div class="connect-icon d-flex align-items-center justify-content-center"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 50M </h2>
                      <h6> Decision makers direct dials </h6>
                      <p class="mb-0 mt-3"> With over 50 million direct dials for B2B decision makers, Lusha lets you reach your most unreachable prospect. Avoid prospects ghosting you on social media networks. Lusha lets you connect with prospects, no matter where they’re working from.</p>
                  </div>
              </div>
            <div class="col-lg-3 col-md-6 col-12">
                  <div class="number-count-content card p-4  mb-5 mb-lg-0 heigth-lg-100">
                      <div class="connect-icon d-flex align-items-center justify-content-center"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 15M </h2>
                      <h6> Full companies profiles </h6>
                      <p class="mb-0 mt-3"> It doesn’t matter if you know the company you’d like to outreach to, or if you haven’t yet discovered them. Lusha has over 15 million full company profiles, to help you find your future customers and connect with accurate data. </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
    
   <!--image text section-->
   <section class="image-text-section py-4 py-md-5 ">
       <div class="container">
          <div class="row align-items-center">
            <!--1-->
              <div class="col-md-6">
                 <div class="sales-team-image">
                      <img src="{{url('public/assets/images/data-2.jpg')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Here’s why you’ll love our data </h2> 
                    <p> <strong> Lusha’s data Is unique </strong> </p>
                    <p> Lusha acquires its data from a variety of sources, including public databases, government data sources, social media feeds, Lusha’s data algorithm and the Lusha Community.</p>
                 </div>
              </div>
             <!--2-->
              
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Over 81% accuracy rates</h2> 
                    <p> While industry standards are roughly between 60-70%, Lusha provides a striking 81% data accuracy rate, to ensure highly accurate outreach. Test drive Lusha’s data for yourself, with 5 free credits every month (no credit card required.)</p>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-image">
                     <img src="{{url('public/assets/images/data-1.jpg')}}" alt="Image"/ class="img-fluid">
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
                     <h1 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> GDPR Aligned and CCPA Compliant </h1>
                     <p class="px-3 px-md-0"> Lusha’s data leads industry standards, and is ISO 27001 certified, CCPA compliant and GDPR aligned. Ensure you’re prospecting with total peace of mind.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-center text-md-start">
                <img src="{{url('public/assets/images/ccpa.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
   
<!--who section-->
   <section class="who-section pt-5 gray-bg">
       <div class="container">
          <div class="row align-items-center">
            <!--1-->
              
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Third-party validated </h2> 
                    <p> Our database has an added layer of accuracy, our community of voluntary contributors who validate its accuracy and submit new data. Additionally Lusha’s thumbs up and thumbs down allows us to perform checks-and-balances, ensuring our data stays highly accurate and relevant. </p>
                    
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-image">
                     <img src="{{url('public/assets/images/hiimlusha.png')}}" alt="Image"/ class="img-fluid">
                 </div>
              </div>
          </div>
       </div>
   </section>
   
   
   <!--tab section-->
    <section class="tab-section  py-4 py-md-5 ">
        <div class="container">
            <div class="row">
               <div class="col-md-8 mx-auto">
                 <div class="sales-team-text text-center">
                    <h2 class="fw-bold pb-2">Here's a list of the data we provide (data attributes). </h2> 
                 </div>
              </div>
           </div>
           <div class="row">
               <div class="col-md-8 mx-auto">
                   <div class="tab-content-info">
                      <div id="exTab1" class="">	
                    <ul  class="nav nav-pills py-4 justify-content-center">
                    			<li class="active">
                            <a  href="#1a" data-toggle="tab">Contact Attributes</a>
                    			</li>
                    			<li><a href="#2a" data-toggle="tab">Company Attributes</a>
                    			</li>
                    		</ul>

			<div class="tab-content clearfix bg-white">
			  <div class="tab-pane active" id="1a">
                <table class="w-100 shadow">
                    <tbody><tr class="tab-heading bg-clr">
                        <th>Contact Attributes</th>
                        <th>Description</th>
                        </tr><tr>
                            <td>Full name</td><td>Full name of contact</td></tr><tr><td>First name</td><td>First name of contact</td></tr><tr><td>Last name</td><td>Last name of contact</td></tr><tr><td>Middle name</td><td>Middle name of contact</td></tr><tr><td>Organization name</td><td>Employer name of contact</td></tr><tr><td>Job title</td><td>Contact’s title at given company</td></tr><tr><td>Seniority</td><td>Contact’s seniority at given company</td></tr><tr><td>Role</td><td>Standardized role based on job title</td></tr><tr><td>Emails</td><td>List of contact’s accurate emails</td></tr><tr><td>Phones</td><td>List of contact’s accurate phone numbers</td></tr><tr><td>Country</td><td>Contact’s current country values</td></tr><tr><td>State</td><td>Contact’s current state values</td></tr></tbody></table>
				</div>
				<div class="tab-pane" id="2a">
                       <table class="w-100"><tbody><tr class="tab-heading bg-clr"><th>Company Attributes</th><th>Description</th></tr><tr><td>Name</td><td>Company name</td></tr><tr><td>Description</td><td>Description of company</td></tr><tr><td>Domain</td><td>Company’s website domain</td></tr><tr><td>Homepage URL</td><td>Company’s website URL value</td></tr><tr><td>Founded year</td><td>Year company was founded in</td></tr><tr><td>Logo URL</td><td>Link to company’s logo file</td></tr><tr><td>Facebook link</td><td>Link to company’s Facebook page</td></tr><tr><td>Twitter link</td><td>Link to company’s Twitter page</td></tr><tr><td>LinkedIn link</td><td>Link to company’s LinkedIn page</td></tr><tr><td>Company Location</td><td>Company’s headquarters address</td></tr><tr><td>Country</td><td>Company’s headquarters country</td></tr><tr><td>Country code</td><td>Company’s headquarters country code</td></tr><tr><td>State</td><td>Company’s headquarters state</td></tr><tr><td>State code</td><td>Company’s headquarters state code</td></tr><tr><td>Region</td><td>Company’s headquarters region</td></tr><tr><td>City</td><td>Company’s headquarters city</td></tr><tr><td>Street</td><td>Company’s headquarters street</td></tr><tr><td>Zip code</td><td>Company’s headquarters zip code</td></tr><tr><td>Company contact phone</td><td>Official ‘Contact Us’ phone number</td></tr><tr><td>Industry tags</td><td>List of company’s vertical descriptors</td></tr><tr><td>Industry category groups</td><td>List of the company’s industry groups</td></tr><tr><td>Industry primary group</td><td>Primary industry group from categories</td></tr><tr><td>Company Number of Employees</td><td>Bucketed employee ranges for company</td></tr><tr><td>Company Revenue Range</td><td>Bucketed Revenue ranges for company</td></tr><tr><td>Company Key People List</td><td>Bucketed Revenue ranges for company</td></tr></tbody></table>
				</div>
        
         
			</div>
  </div> 
                   </div>
               </div>
           </div>
        </div>
    </section>
   

@endsection