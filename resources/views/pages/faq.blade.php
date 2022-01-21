@extends('layouts.master')

@section('content')
 
 <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/faq-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">Community Program - FAQ</h1>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--faq section-->
   <section class="faq-section py-4 py-md-5">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="faq-content">
                      <div class="accordion" id="accordionfaq">
                    <!--1-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                What is Lusha?
                            </button>
                          </h2>
                          <div id="collapseone" class="accordion-collapse collapse show" aria-labelledby="headingfaq1" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Lusha is a simple, self-service SaaS product that offers accurate data enrichment for B2B companies to enable them to successfully connect with their prospects.Lusha’s modern, state-of-the-art algorithm delivers the most relevant B2B contact and company information with up to 90% accuracy.</p>
                            </div>
                          </div>
                        </div>
                      <!--2-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                                <i class="fa fa-yelp" aria-hidden="true"></i>
                                What is Lusha’s community?
                            </button>
                          </h2>
                          <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="headingfaq2" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Joining Lusha’s community allows members to share their business network contact details with Lusha to ensure our database stays accurate and up-to-date, in exchange for extra credits or free access to Lusha premium features. For more information visit Lusha’s community’s page.</p>
                            </div>
                          </div>
                        </div>
                     <!--3-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                                How do I become a community member?
                            </button>
                          </h2>
                          <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingfaq3" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Lusha allows only legitimate business professionals to become a member of its community, only if they contribute to the community sufficient business information.  During signup and each month thereafter Lusha performs validity checks of your data contribution via your email account and any other integration connected.</p>
                            </div>
                          </div>
                        </div>
                    <!--4-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                <i class="fa fa-link" aria-hidden="true"></i>
                                What information does Lusha collect and use from Lusha’s community members?
                            </button>
                          </h2>
                          <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfaq4" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> The information that Lusha collects is the same business information that can be found on a business card, including Full name, company name, job title, business phone number, and email address.</p>
                            </div>
                          </div>
                        </div>
                        
                    <!--5-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                <i class="fa fa-venus-double" aria-hidden="true"></i>
                                Will my contacts know Lusha received their information from me?
                            </button>
                          </h2>
                          <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfaq5" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> No, they will not. Lusha allows you to confidentially share business contact details and does not identify the specific source of information that contributed to its database.</p>
                            </div>
                          </div>
                        </div>
                        
                    <!--6-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                Isn’t sharing contacts a violation of privacy?
                            </button>
                          </h2>
                          <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingfaq6" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Lusha processes business contact information in accordance with all applicable privacy laws. Our privacy team is dedicated to collecting information while demonstrating conformance with all applicable privacy rules and regulations.</p>
                            </div>
                          </div>
                        </div>
                        
                    <!--7-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                Can I pick and choose the business contacts I want to share?
                            </button>
                          </h2>
                          <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingfaq7" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Not currently. Lusha’s community members provide access (via their Outlook or G-Suite permissions) to their contacts in their email database, including their names, email addresses, job titles, company names, and phone numbers found in their email headers and signatures.</p>
                            </div>
                          </div>
                        </div>
                        
                    <!--8-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                <i class="fa fa-ils" aria-hidden="true"></i>
                                Do Lusha’s products read my email messages or modify my address book entries?
                            </button>
                          </h2>
                          <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingfaq8" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> No.  We apply privacy by design principles so our algorithms are only designed to search for and seek out email headers and signatures, to capture only basic business contact and company information. Lusha creates and uses its own data structure and doesn’t modify any of your information.</p>
                            </div>
                          </div>
                        </div>
                        
                    <!--9-->
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfaq9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                 Is it legitimate to collect third-party business contact details?
                            </button>
                          </h2>
                          <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingfaq9" data-bs-parent="#accordionlist">
                            <div class="accordion-body">
                              <p> Lusha takes the data privacy and security of our organization, our customers, and the customers of our customers with the utmost seriousness. This is why we provide notification to every new contact that we gather for our database, where required by law. The data we collect is the same business information that can be found on a business card.</p>
                            </div>
                          </div>
                        </div>
                        
                        
                    </div>
                  </div>
              </div> 
           </div>
       </div>
   </section>
    

   

   
  

@endsection