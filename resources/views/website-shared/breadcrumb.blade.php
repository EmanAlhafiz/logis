<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset($background_image) }}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>{{ $title }}</h2>

            <p>{{ $definition }}</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          @foreach ($links as $link)
                @isset($link['url'])
                    <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                @else
                    <li>{{ $link['title'] }}</li>
                @endisset
            @endforeach
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->