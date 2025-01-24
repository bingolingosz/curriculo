<!-- portfolio -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">

        @for($i = 0; $i <4; $i++)
        <!-- Item de portfólio -->
        {{--
          Comentário Laravel Blade
          O Blade é um framework que tem como objetivo facilitar a vida do
          desenvolvedor, incuindo recursos de progamação no HTML
        --}}

        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">{{$btn = "Conheça o Projeto" }}</a>
              </div>
            </div>
          </div>
        </div>

        @endfor

        <div class="col-lg-4 col-6 mb-4 shuffle-item">
      </div>
    </div>
  </section>
  <!-- /portfolio -->
