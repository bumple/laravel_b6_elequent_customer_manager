@extends('home')
@section('title', 'Danh sách Tỉnh')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Tỉnh</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                    @foreach($cities as $key => $city)
                        <tr>
                            <th scope="row">{{ $city->id }}</th>
                            <td>{{ $city->name }}</td>
                            <td><a href="{{ route('cities.edit', $city->id) }}">sửa</a></td>
                            <td><a href="{{ route('cities.destroy', $city->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('cities.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
