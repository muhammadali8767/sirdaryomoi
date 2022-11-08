 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single" data-aos="fade-up">

            <h2 class="entry-title">
             {{$new[0]->title}}
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{$new[0]->name}} </a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">
                    <?php
                               if($new[0]->created_at != null)
                    {
                                  $timestamp = $new[0]->created_at;
                                 //echo $timestamp;
                                   $datetime = explode(" ",$timestamp);
                                   $date = $datetime[0];
                                   $time = $datetime[1];
                                   echo($date);
                    }
                                ?>
                </time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">12 ta Izoh</a></li>
              </ul>
            </div>

            <div class="entry-content">
                <blockquote>
                    <i class="icofont-quote-left quote-left"></i>
                    <p class="fs-6">
                      {!!$new[0]->desc!!}
                    </p>
                    <i class="las la-quote-right quote-right"></i>
                    <i class="icofont-quote-right quote-right"></i>
                  </blockquote>
                  <hr>
                  <p>
                    <div class="card-img">
                        <img src="/assets/images/{{$new[0]->img}}" width="100%">
                      </div>

                    {!!$new[0]->text!!}
                  </p>
                  <a class="btn btn-danger mt-3" href="{{ URL::previous() }}"><i class="bi bi-backspace"></i> Orqaga</a>
            </div>


          </article><!-- End blog entry -->

