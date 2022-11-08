@extends('main')
@section('title')
Sirdaryo viloyati pedagoglarni yangi metodikalarga o'rgatish milliy markazi
@endsection
@section('header')
    @include('parts.header')
@endsection
@section('sliders')
    @include('parts.sliders')
@endsection
 @section('main')
     <!-- ======= Contact Section ======= -->



  <section id="contact" class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 align="center">Bizning manzil</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1515.993102250719!2d68.74841735800035!3d40.541893933132506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b207c40e7f49d7%3A0xeac0cb9215664607!2sSirdaryo%20malaka%20oshirish%20hududiy%20markazi!5e0!3m2!1suz!2s!4v1653638463469!5m2!1suz!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        <div class="map-section">

          </div>
      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Joylashuv:</h4>
                <p>Sirdaryo viloyati Guliston shahri <br>122 Toshkent yo'li ko'chasi</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>sirdayo_mohm@uzedu.uz</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                +998 672 27 79 00
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Mavzu" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Sizning xabaringiz"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Jo'natish</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
 @endsection

@section('footer')
    @include('parts.footer')
@endsection
