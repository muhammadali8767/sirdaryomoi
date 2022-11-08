 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <div class="logo float-left">
            <a href="/"><img  src="/assets/img/logo.png"> </a>
          </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            @foreach($categories as $item)
            @if($item->children->count() > 0)
                <li class="drop-down">
                  <a href="#">{{$item->title}}</a>
                    <ul>
                      @foreach($item->children as $submenu)
                          @if ($submenu->children->count() > 0)
                          <li class="drop-down"><a href="">{{$submenu->title}}</a>
                              <ul>
                                @foreach($submenu->children as $subsubmenu)
                                <li><a href="/{{$subsubmenu->mlink}}/{{$subsubmenu->id}}">{!!$subsubmenu->title!!}</a></li>
                                @endforeach
                              </ul>
                          @else
                                <li><a href="/{{$submenu->mlink}}/{{$submenu->id}}">{{$submenu->title}}</a></li>
                          @endif
                      @endforeach
                    </ul>
                  </li>
                  @else
                  <li><a href="">{{$item->title}}</a></li>
              @endif
              @endforeach
              <li class="drop-down"><a href="">Interaktiv xizmatlar</a>
                <ul>
                    <li><a href="">Search</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Registratsiya</a></li>
                    <li><a href="{{Route('contact.index')}}">Aloqa</a></li>

                </ul>
              </li>
          </ul>
      </nav><!-- .nav-menu -->



    </div>
  </header><!-- End Header -->
