@extends('master')
@section('title')
    {{$customer[0]->contactFirstName}}
@endsection
@section('content')
{{--    {{dd($customer)}}--}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$customer[0]->contactFirstName}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$customer[0]->contactLastName}}</h6>
            <p class="card-text">{{$customer[0]->addressLine1}}</p>
            <a href="#" class="card-link">{{$customer[0]->phone}}</a>
            <a href="#" class="card-link">{{$customer[0]->city}}</a>
        </div>
    </div>
@endsection
