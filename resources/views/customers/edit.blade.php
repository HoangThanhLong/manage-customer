@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control @error ('name') is_invalid @enderror" name="name" value="{{ $customer->name }}">
                        @error('name')
                        <div style="color: deeppink">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control @error ('email') is_invalid @enderror" name="email" value="{{ $customer->email }}">
                        @error('email')
                        <div style="color: deeppink">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control @error ('dob') is_invalid @enderror" name="dob" value="{{ $customer->dob }}">
                        @error('dob')
                        <div style="color: deeppink">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
