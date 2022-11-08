<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="/"><img  src="/assets/img/logo.png"> </a>
            <h4>
                Sirdaryo viloyati pedagoglarni yangi metodikalarga o'rgatish milliy markazi
                </h4>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Markaz faoliyati</h4>
            <ul>
              @foreach ($footer as $item)
              @if ($item->menu_type == 1)
                  <li><i class="bx bx-chevron-right"></i><a href="/{{$item->mlink}}/{{$item->id}}">{{$item->title}}</a></li>
              @endif
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Markaz haqida</h4>
            <ul>
              @foreach ($footer as $item)
              @if ($item->menu_type == 2)
                  <li><i class="bx bx-chevron-right"></i><a href="/{{$item->mlink}}/{{$item->id}}">{{$item->title}}</a></li>
              @endif
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter text-center">
            <h3>Markazimiz</h3>
            <p>
                Sirdaryo viloyati Guliston shahri <br>
                122 Toshkent yo'li ko'chasi<br>
              <strong>Tel:</strong>  +998 672 27 79 00<br>
              <strong>Email:</strong> sirdayo_mohm@uzedu.uz<br>
            </p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1515.993102250719!2d68.74841735800035!3d40.541893933132506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b207c40e7f49d7%3A0xeac0cb9215664607!2sSirdaryo%20malaka%20oshirish%20hududiy%20markazi!5e0!3m2!1suz!2s!4v1653638463469!5m2!1suz!2s"  height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
         <h3> Bizni kuzatib boring ijtimoiy tarmoqlarda</h3>
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.youtube.com/channel/UCjOmnRRrcdAPjrV_8zys2Tg" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.facebook.com/sirdaryomoi" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://t.me/sirdaryomoi" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
