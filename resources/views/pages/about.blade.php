@extends('layouts.master')

@section('content')
  <!--banner section-->
    <section class="banner-inner-section py-2 py-md-5" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.75)), url('./public/assets/images/new-about-banner.jpg')">
        <div class="container h-100">
         <div class="row align-items-center h-100">
             <div class="col-md-6 mx-auto">
                 <div class="banner-text  text-center text-white">
                     <h1 class="hero__title fw-bold">This is us</h1>
                     <p class="hero__subtitle">Hi! We’re Lusha <br>
            A team of data-enthusiasts who make the go-to-market smarter
            by commoditizing simple, self-service B2B SaaS products.</p>
                     <a href="{{url('/careers')}}"><button class="btn main-btn py-2" type="submit">Join Us</button></a>
                 </div>
             </div>
         </div>
        </div>
    </section>
    
 <!--about section-->
   <section class="about-section py-4 py-md-5">
       <div class="container">
          <div class="row">
               <div class="col-md-8 mx-auto">
                 <div class="sales-team-text text-center">
                    <h2 class="fw-bold pb-2">What is Lusha? </h2> 
                    <p> Lusha was founded by Assaf Eisenstein and Yoni Tserruya in 2016 with the aim of creating the world’s largest crowdsourced data community for B2B salespeople or a “Waze for salespeople”. Lusha offers B2B salespeople of every company size accurate and accessible data through its simple, self-service products. With Lusha, sales professionals can identify, engage and close prospects, thanks to Lusha’s prospecting platform, web extension and API. Lusha’s community has expanded to over 670,000 sales professionals and 223,000 sales organizations including Zendesk, Google, Dropbox and Uber</p>
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
                     <img src="https://www.lusha.com/wp-content/uploads/2021/09/f3.png" class="img-fluid">
                     
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Meet Yoni and Assaf </h2> 
                    <p> <strong> The Founders of Lusha </strong> </p>
                    <p> Easily build a more visible, qualified, and robust pipeline with enterprise-grade team management. Boost productivity all round with flexible control and visibility of contact credits. Identify opportunities for revenue growth and easily manage credit usage. Distribute credits where you need them most and limit credits anytime to get the most value from Lusha Enterprise.</p>
                 </div>
              </div>
          </div>
       </div>
   </section>
   
<!--who section-->
   <section class="who-section pt-5">
       <div class="container">
          <div class="row align-items-center">
            <!--1-->
              
              <div class="col-md-6">
                 <div class="sales-team-text">
                    <h2 class="fw-bold">Who is Lusha? </h2> 
                    <p> <strong> [ Pronounced loosh-ah ] Noun </strong> </p>
                    
                    <ol>
                        <li>B2B’s favorite personal assistant.</li>
                        <li> The smiling cartoon woman that powers your in-app prospecting solution and lives on your Linkedin, B2B websites, Gmail and more</li>
                        <li> Who you thank when you easily find B2B prospects and their accurate contact details. </li>
                        <li> The nickname of Assaf’s daughter, who inspired our name.</li>
                        <li> A fun-loving company of data enthusiasts who work hard, play harder and get our kicks from delighting our customers.</li>
                    
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
   
   <!--number section-->
     <section class="number-counter-section block-space block-space-bottom">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> Lusha at a glance </h1>
                 </div>
             </div> 
          </div>
          <div class="row pt-5">
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                      <div class="item-icon"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 2016 </h2>
                      <p>  Year founded </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 220 </h2>
                      <p>  Employees </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 800K </h2>
                      <p> Users </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 220M </h2>
                      <p>  Data entries </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
   
   
   
  

@endsection