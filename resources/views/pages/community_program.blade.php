@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/community-img.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-lg-6 col-md-10 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="banner__title fw-bold"> All about Lusha’s community</h1>
                     <p class="hero__subtitle">Our community members help keep Lusha’s database accurate and up-to-date by sharing their professional network’s contact details in exchange for extra credits or access to premium features.</p>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--about section-->
   <section class="about-section pt-4 pt-md-5">
       <div class="container">
          <div class="row">
               <div class="col-lg-8 col-md-10 mx-auto">
                 <div class="sales-team-text text-center px-2 px-md-0">
                    <h2 class="fw-bold pb-2">How Lusha’s community edition works</h2> 
                    <p class="mb-0">Lusha’s product accesses professional business network contact information such as email headers and signatures to validate and update our data sources into one, accurate, and up-to-date business profile, which is used by Lusha’s customers and community members. Lusha confidentially transfers Community members’ business contacts, removes outdated information, and combines it with our database.</p>
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
                          <img src="{{url('public/assets/images/community1.jpg')}}" alt="Image"/ class="img-fluid">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="sales-team-text px-2 px-md-0 pt-3 pt-md-3">
                        <h2 class="fw-bold">Our privacy practices </h2> 
                        <ul class="ps-4"><li>Before adding any contact data, when applicable by law, each professional receives a notification, with instructions on how to manage, update, delete, or remove their profile.</li><li>We share with our users the date that their prospect was notified of their existence in our database, when applicable. This allows prospects to answer any questions about how their contact information was obtained.</li><li>We enable individuals to opt-out of our database easily via a self-removal form.</li></ul>
                     </div>
                  </div>
                   
              </div>
           </div>
       </section>
   
       
<!--image text section-->
       <section class="image-text-section py-4 py-md-5 gray-bg">
           <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-12">
                     <div class="sales-team-text px-2 px-md-0 pb-3">
                        <h3 class="fw-bold">Lusha’s code of conduct </h3> 
                        <p>Our Code of conduct guides the way we collect, verify, and secure data. It is the north star that ensures all data processing is done in a transparent, responsible, and ethical way that supports the public good.</p>
                        <p> Our global community was designed to enable Lusha to become the most simple and accurate data-enrichment service, thanks to the contribution of our community members’ business contact details.</p>
                     </div>
                  </div>
                  <!--2-->
                   <div class="col-md-12">
                     <div class="sales-team-text px-2 px-md-0 pb-3">
                        <h5 class="fw-bold">1. Our ethical principles</h5> 
                        <ol style="list-style-type: lower-alpha;"><li><strong>Collaboration:</strong><br> <span style="font-weight: 400;">The community advocates sharing accurate and up-to-date B2B contact information. Lusha takes measures to remove public emails (i.e. Gmail and Yahoo accounts,) and update any outdated information. Community members are expected to do the same, by sharing only B2B contact details and reporting any incorrect information found in Lusha’s database.</span></li><li><strong>Avoid all harm:</strong><br> <span style="font-weight: 400;">Lusha’s Community has a strict “no harm” policy. This means we do not share any information which may cause harm to others. For example, Lusha will do its utmost to remove phone numbers of any government officials, politicians, or persons that may be targeted by security agencies or terrorist groups – and we expect our community members to do the same.</span></li><li><strong>Honor confidentiality:</strong><br> <span style="font-weight: 400;">Unless legally required, Lusha will not expose the source of its professional contact information. Our community members are also expected not to disclose professional’s details that are in “stealth mode,” or who would like to remain private.</span></li></ol>
                     </div>
                  </div>
                  
                  <!--3-->
                   <div class="col-md-12">
                     <div class="sales-team-text px-2 px-md-0 pb-3">
                        <h5 class="fw-bold">2. Professional Responsibilities</h5> 
                        <ol style="list-style-type: lower-alpha;"><li><strong>Professionalism:</strong><br> <span style="font-weight: 400;">We are committed to always check the laws and legislation regarding the proper usage of information provided to our users, including the proper conduct of sending mass unsolicited emails (SPAM) or conducting mass unsolicited phone calls in any jurisdiction that our users operate in.</span></li><li><strong>Respect privacy:</strong><br> <span style="font-weight: 400;">The information provided will not be used in any way that violates individual rights. We do not collect business contact details that are not needed and do not retain them for any period longer than necessary.</span></li><li><strong>Fairness:</strong><br> <span style="font-weight: 400;">Lusha and its community members should comply with any requests to stop using or processing information or even delete business information.</span></li></ol>
                     </div>
                  </div>
                    
              </div>
           </div>
       </section>
       
         <!--image text section-->
       <section class="image-text-section py-4 py-md-5">
           <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-12">
                     <div class="sales-team-text px-2 px-md-0 pb-3">
                        <h3 class="fw-bold">Compliance with the code </h3> 
                        <p> <strong> Uphold, promote, and respect the principles of the Code.</strong></p>
                        <p>The future of Lusha’s community depends both on professional and ethical integrity. We believe that Lusha’s Community of B2B professionals should act as an example of the highest code of moral conduct, and adhere to the Code of conduct.</p>
                        <p>Each community member should encourage and fully support adherence of all B2B professionals, regardless of their membership to Lusha. Lusha members who recognize a breach of the Code of Conduct should swiftly report any such violation to Lusha, which can result in further action and possibly cancel or suspend the membership of any such member.</p>
                     </div>
                  </div>
                   
              </div>
           </div>
       </section>
   
  

@endsection