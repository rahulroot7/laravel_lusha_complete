@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/sources-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="banner__title fw-bold"> Data Sources</h1>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--about section-->
   <section class="about-section pt-4 pt-md-5">
       <div class="container">
          <div class="row">
               <div class="col-md-8 mx-auto">
                 <div class="sales-team-text text-center px-2 px-md-0">
                    <h2 class="fw-bold pb-2">Our Data Sources</h2> 
                    <p class="mb-0">Every time you perform a search in Lusha, the contact and company data that you receive is updated. Lusha’s proprietary algorithm cross-checks data from multiple sources and combines numerous data-points, to create one business contact or company profile.</p>
                 </div>
              </div>
           </div>
       </div>
   </section>
    

   
    <!--image text section-->
       <section class="image-text-section py-4 py-md-5">
           <div class="container">
              <div class="row align-items-center">
                   <div class="col-md-6">
                     <div class="sales-team-image">
                          <img src="{{url('public/assets/images/source-1.jpg')}}" alt="Image"/ class="img-fluid">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="sales-team-text px-2 px-md-0">
                        <h2 class="fw-bold">Third Parties </h2> 
                        <p>We license information from business partners who own established and trustworthy directories. Our partners utilize the most cutting-edge AI and machine learning technology to collect data from public records, publicly available information, and business directories.</p>
                        <p> We verify each vendor’s data to ensure its accuracy, before and during the engagement. </p>
                        <ul class="ps-4"><li>We review each vendor’s security, as well as the security of the data transfer.</li><li>We sign legal documentation with each vendor to ensure that data provided to us is legal, and compliant with all data privacy laws, including GDPR and CCPA.</li><li>We are always working to ensure our data is compliant, and update all contracts on an as-needed basis, to stay aligned with any applicable laws and regulations.</li></ul>
                     </div>
                  </div>
                   
              </div>
           </div>
       </section>
   
      <!--image text section-->
       <section class="image-text-section py-4 py-md-5 bg-clr">
           <div class="container">
              <div class="row align-items-center">
                <!--1-->
                  <div class="col-md-12">
                     <div class="sales-team-text text-center text-white px-2 px-md-0">
                        <h2 class="fw-bold">Publicly Available Information </h2> 
                        <p> Our proprietary algorithm scans publicly available sources and retrieves public information with advanced tools.</p>
                     </div>
                  </div>
              </div>
           </div>
       </section>
       
<!--image text section-->
       <section class="image-text-section py-4 py-md-5">
           <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="sales-team-text px-2 px-md-0">
                        <h2 class="fw-bold">Lusha’s Insight and Analysis System </h2> 
                        <p>Lusha’s advanced algorithms and proprietary machine-learning models auto-complete business information based on the data in Lusha’s database, and other information found in public sources.
                            For example, Lusha completes email addresses based on standard corporate email patterns.Lusha’s big data technology identifies the most up-to-date information for each Business Card and simultaneously removes any outdated information from the system.Lusha ensures that all data collection and processing is conducted in accordance with all applicable privacy laws, by providing individuals with greater control over their data and notice if required by any applicable law.Lusha Systems Inc. is registered as an official data broker at the California Data Broker Registry.</p>
                     </div>
                  </div>
                    <div class="col-md-6">
                     <div class="sales-team-image">
                         <img src="{{url('public/assets/images/source-3.jpg')}}" alt="Image"/ class="img-fluid">
                     </div>
                  </div>
              </div>
           </div>
       </section>
   
  

@endsection