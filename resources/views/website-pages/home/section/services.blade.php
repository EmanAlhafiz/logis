@php
    $se = [
        [
            'img' => 'assets/img/storage-service.jpg',
            'startched' => 'Storage',
            'description' => 'Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit',
        ],
        [
          'img' => 'assets/img/logistics-service.jpg',
            'startched' => 'Logistics',
            'description' => 'Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi',
        ],
        [
          'img' => 'assets/img/cargo-service.jpg',
            'startched' => 'Cargo',
            'description' => 'Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil',
        ],
        [
          'img' => 'assets/img/trucking-service.jpg',
            'startched' => 'Trucking',
            'description' => 'Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil',
        ],
        [
          'img' => 'assets/img/packaging-service.jpg',
            'startched' => 'Packaging',
            'description' => 'Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur maiores beatae consequatur magni voluptates',
        ],
        [
          'img' => 'assets/img/warehousing-service.jpg',
            'startched' => 'Warehousing',
            'description' => 'Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam aut nostrum unde et qui est non quo nulla',
        ],
    ];
@endphp



<!-- ======= Services Section ======= -->
<section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Services</span>
        <h2>Our Services</h2>

      </div>

      <div class="row gy-4">
        @foreach ($se as $s)
 
           <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            
            @include('website-pages.home.our-services', [
                          'img' => $s['img'],
                          'startched' => $s['startched'],
                          'description' => $s['description'],
                      ])
            </div><!-- End Card Item -->
        @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->