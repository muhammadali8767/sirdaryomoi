<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Sliders -->
        @foreach ($sliders as $item)
        @if($item->id == 1)
        <div class="carousel-item active" style="background-image: url(/assets/img/slide/{{$item->img}});">
            @else
            <div class="carousel-item" style="background-image: url(/assets/img/slide/{{$item->img}});">
        @endif

            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2 class="text-center">{{$item->title}} </h2>
                 

              </div>
            </div>
          </div>
        @endforeach



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
