@extends('layout.master')
@section('title','Danh sách khách hàng')
@section('content')
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Phone</th>
        <th scope="col">City</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
    <tr>
        <th scope="row">{{$customer->customerNumber}}</th>
        <td>{{$customer->contactFirstName}}</td>
        <td>{{$customer->contactLastName}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->city}}</td>
        <td><a href="{{route('customers.profile',$customer->customerNumber)}}" class="btn btn-success">Show</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
