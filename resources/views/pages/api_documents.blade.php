@extends('layouts.master')

@section('content')

 <!--term use section-->
   <section class="about-section py-4 py-md-5">
       <div class="container">
          <div class="row">
               <div class="col-md-12 mx-auto">
                 <div class="information-text  px-2 px-md-0">
                     <h5 class="py-2"><strong> Introduction</strong></h5>
                     <p> Welcome to Lusha API documentation. Our REST API allows you to query our vast dataset of business profiles and companies and receive and get an enriched profile of the item you were looking for. Our two main calls are:</p>
                     <p> Company API, which returns company data based on domain or company name Person API, which returns contact data for a business profile</p>
                     <p> Please note that we operate as a search platform, and therefore the information we retrieve is not created or interfered directly by us, rather than retrieved from the web or from contribution of relevant data from our trusted business partners. To learn more about our dataset of business profiles and on the ways we collect and use such business profiles, please read our Privacy Policy.</p>
                     <p> <strong> Note: </strong> A credit will be deducted for each successful match. A match is a request that yielded results.</p>
                     
                     <h5 class="py-2"><strong> Authentication </strong></h5>
                     <p class="mb-0"> Requests are authenticated by your API key. </p>
                     <p> When making a call, you’ll have to specify this API key with the Authorization header. Here’s an example: </p>
                     <p> Note that your API key is what identifies you and your usage, so please don’t share it with anyone outside of your organization.</p>
                    
                     
                     <h5 class="py-2"><strong> Errors </strong></h5>
                     <p> Lusha uses common HTTP response codes to indicate the status of the API request.In case of an error, Lusha API will return the correspondent code.</p>
                   
                    <h5 class="py-2"><strong> Person Attributes </strong></h5>
                     <p><strong>Name</strong></p>
                       <ul><li>fullName – Full name of the person.</li><li>firstName – First name of the person.</li><li>familyName – Last name of the person.</li></ul>
                     
                    <p><strong>Location</strong></p>
                    <ul><li>fullLocation – Full representation of the location.</li><li>timeZone – Current time zone<br> based on the person’s location.</li><li>utcOffset – UTC offset of the person’s location.</li><li>city – The city where the person lives.</li><li>state – Full text of the person’s state.</li><li>stateCode – Two digit code of the person’s state.</li><li>country – The country where the person lives.</li><li>countryCode – Two-digit code of the person’s country.</li><li>latitude – The latitude we surmised from the location info we have.</li><li>longitude – The longitude we surmised from the location info we have.</li></ul>
                    
                    <p><strong>Email Address</strong></p>
                    <ul><li>email – The email address of the person.</li><li>type – Type of address. Might be work,<br> personal or other.</li><li>mailServer – The mail server of the email we found.</li></ul>
                    
                     <p><strong>Social</strong></p>
                     <ul><li>facebook.url – Facebook page of the company.</li><li>linkedin.url – LinkedIn page of the<br> company.</li><li>twitter.url – Twitter page of the company.</li></ul>
                    
                 </div>
              </div>
           </div>
       </div>
   </section>
    

   

   
  

@endsection