@extends('layouts.main')

@section('name', 'Kanidtha')
@section('title', 'Categories')

@section('content')
  <table>
    <caption>Category List</caption>
    <thead>
      <tr>
        <th>Code</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          <td>
            <a class="org bold" href="{{ route('category', ['category' => $category['code']]) }}">
            {{ $category['code'] }}
            </a>
          </td>
          <td class="org bold">{{ $category['name'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection