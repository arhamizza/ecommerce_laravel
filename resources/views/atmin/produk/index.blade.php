@extends('layout.atmin')
@section('title', 'Kategori')
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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('admin/assets/uploads/kategori/' . $item->image) }}" alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-primary">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection