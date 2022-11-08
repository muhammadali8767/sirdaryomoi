 <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
            <div class="section-title" data-aos="fade-up">
        <h2>So`nggi yangiliklar</h2>
      </div>
        </div>
@foreach ($new_4 as $item)
    <div class="col-lg-6" data-aos="fade-up">
          <div class="testimonial-item">
            <img src="/assets/images/{{$item->img}}" class="testimonial-img" >
            <a href=" {{route('index')}}/new/{{$item->id}}">
            <h3>{!!$item->title!!}  </h3>
            <h4> <?php
                 $dat = $item->created_at;
                $newdate = date("d.m.Y", strtotime($dat));
                echo ($newdate);
              ?></h4>
            </a>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             {!!$item->desc!!}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <div class="read-more"><a href=" {{route('index')}}/new/{{$item->id}}"><i class="icofont-arrow-right"></i> Batafsil </a>
            </div>
          </div>
        </div>

@endforeach

      </div>
<hr>
      <div class="row">
        <div class="col-lg-12">
            <div class="section-title" data-aos="fade-up">
        <h2>So`nggi tadbirlar</h2>
      </div>
        </div>
@foreach ($tadbir_4 as $item)
    <div class="col-lg-6" data-aos="fade-up">
          <div class="testimonial-item">
            <img src="/assets/images/{{$item->img}}" class="testimonial-img" >
            <a href=" {{route('index')}}/new/{{$item->id}}">
            <h3>{!!$item->title!!} </h3>
            </a>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             {!!$item->desc!!}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <div class="read-more"><a href=" {{route('index')}}/new/{{$item->id}}"><i class="icofont-arrow-right"></i> Batafsil </a>
            </div>
          </div>
        </div>

@endforeach

      </div>

    </div>
  </section><!-- End Testimonials Section -->
