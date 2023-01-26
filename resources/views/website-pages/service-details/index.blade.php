@extends('website-layout.layout')

@section('page-title','Service Details')

@section('body-class','page-Service Details')

@section('main-content')

  @include('website-shared.breadcrumb', [
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Service Details',
    'definition'=>'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Service Details']],
  ])

 @include('website-pages.service-details.paritals.services-details') 

@endsection 