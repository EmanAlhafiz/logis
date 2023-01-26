@extends('website-layout.layout')

@section('page-title','Services')

@section('body-class','page-Services')

@section('main-content')

  @include('website-shared.breadcrumb', [
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Services',
    'definition'=>'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Services']],
  ])

  @include('website-pages.home.section.featured')

  @include('website-pages.home.section.services')

  @include('website-pages.home.section.features')

  @include('website-pages.home.section.testimonials')

  @include('website-pages.home.section.frequently-asked')

@endsection  