@extends('layouts.main')

@section('name', 'Kanidtha')
@section('title',$productView['productName'] )

@section('content')
<p>
  <img src="{{ asset('images/products/'.$productView['productCode'].'.jpg') }}"
     alt="The image of {{ $productView['productName'] }}" />
</p>
<p>
  <b>Code:</b> <em class="gre bold">{{ $productView['productCode'] }}</em> <br>
  <b>Category:</b>
  <span style="color: blue;">
    <a  class="org" href="{{ route('category', ['category' => $productView['categoryCode'] ]) }}">
      {{ $productView['categoryName'] }}
    </a>
  </span> <br>
  <b>Name:</b> {{ $productView['productName'] }}
  <p>{{ $productView['productDesc'] }}</p>
</p>
@endsection