 <!-- ======= Service Details Section ======= -->
 <section class="service-details">
    <div class="container">

      <div class="row">

        @foreach ($news as $item)
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="/assets/images/{{$item->img}}" width="100%">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href=" {{route('index')}}/new/{{$item->id}}"> {!!$item->title!!}</a></h5>
              <p class="card-text"> {!!$item->desc!!} </p>

              <div class="read-more"><a href=" {{route('index')}}/new/{{$item->id}}"><i class="icofont-arrow-right"></i> Batafsil </a>
              </div>

            </div>

          </div>
        </div>
        @endforeach
    </div>

      </div>

    </section><!-- End Service Details Section -->
