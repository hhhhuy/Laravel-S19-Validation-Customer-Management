@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    <input type="hidden" name="id"value="{{$customer->id}}">
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}" >
                        @if($errors->has('name'))
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $customer->email }}" >
                        @if($errors->has('email'))
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif</div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
                        @if($errors->has('dob'))
                            <p style="color:red">{{ $errors->first('dob') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection