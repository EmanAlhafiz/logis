@extends('website-layout.layout')

@section('page-title','About Us')

@section('body-class','page-about')

@section('main-content')

  @include('website-shared.breadcrumb', [
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'About',
    'definition'=>'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'About']],
  ])

  @include('website-pages.home.section.about-us')

  @include('website-pages.about.section.stats-counter')

  @include('website-pages.about.section.teams')

  @include('website-pages.home.section.testimonials')

  @include('website-pages.home.section.frequently-asked')

@endsection  