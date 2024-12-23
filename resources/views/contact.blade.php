@extends('layout.app')

@section('content')
   

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>
          We are available 24/7. For any questions, contracts, or suggestions, you can reach us through the following channels.</p>
      </div>

      <div>

        <div style="text-decoration:none; overflow:hidden;max-width:100%;width:100%;height:270px;"><div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Ibadan+-+Iwo+Road,+Iwo,+Nigeria&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemaps-made" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium bootstrap themes</a><style>#g-mapdisplay img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Ibadan, NG</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>damsonspecial@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+234 (81) 070 840 21</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
        
          <form action="/contactus" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                @error('name')
                    {{$message}}
                @enderror
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                @error('email')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection('content')s
