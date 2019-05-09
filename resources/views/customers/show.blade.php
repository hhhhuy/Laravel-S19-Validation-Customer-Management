@extends('home')
@section('content')
    <div class="text-center">
        <h3 class="text-dark mt-5">Thông Tin Khách hàng</h3>
        <div class="col-sm-4 offset-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Tên: {{$customer->name}}</h5>
                    <h6 class="card-text ">Ngày sinh: {{$customer->dob}}</h6>
                    <p class="card-text">Email: {{$customer->email}}</p>
                </div>
            </div>
        </div>
        <a href="{{route('customers.index')}}" class="btn btn-success mt-3">Quay Lại</a>
    </div>
@endsection