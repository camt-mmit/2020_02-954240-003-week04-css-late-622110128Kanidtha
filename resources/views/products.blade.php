@extends('layouts.main')

@section('name', 'Kanidtha')

@section('title')

@if(isset($products['ListFor']))
<span class="org">{{ $products['ListFor'] }}</span>
@else
<span>Product</span>
@endif

@endsection

@section('content')
  <table>
    @if(isset($products['ListFor']))
      <caption >Product List for  <span class="org" > {{ $products['ListFor'] }}</span></caption>
    @else
      <caption >Product List</caption>
    @endif
    <thead>
      <tr>
        <th>Image</th>
        <th>Code</th>
        @unless(isset($products['ListFor']))
        <th>Category</th>
        @endunless
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @forelse($products['productList'] as $product)
        <tr>
          <td>
            <img src="{{ asset('images/products/'.$product['productCode'].'.jpg') }}"
                alt="The image of {{ $product['productName'] }}"
                style="width: 64px;" />
          </td>
          <td>
            <a class="gre" href="{{ route('product', ['product' => $product['productCode']]) }}">
            {{ $product['productCode'] }}
            </a>
          </td>
          @unless(isset($products['ListFor']))
          <td>
            <a  class="org" href="{{ route('category', ['category' => $product['categoryCode'] ]) }}">
              {{ $product['categoryName'] }}
            </a>
          </td>
          @endunless
          <td>{{ $product['productName'] }}</td>
        </tr>
      @empty
        No any products.
      @endforelse
    </tbody>
  </table>
@endsection