@extends('layout.penjualnav')
@section('title', 'Produk')
@section('contents')
    <div class="card">
        <div class="card-header">
            <h3>Halaman Products</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Name</th>
                        <th>Selling Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kategori->nama }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>
                                <img src="{{ asset('atmin/assets/uploads/produk/' . $item->image) }}" alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-produk2/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('hapus-produk2/'.$item->id)}}" class="btn btn-primary">Delete</a href="">
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
