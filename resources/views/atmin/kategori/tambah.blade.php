@extends('layout.atmin')
@section('title', 'Kategori')
@section('contents')
    <div class="card">
        <div class="class-header">
            <h1>Tambah Kategori</h1>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('insert-kategori') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value=""
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" value=""
                                    placeholder="Masukkan Slug">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description" value=""
                                    placeholder="Masukkan Description">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="form-group">
                                <label for="">Popular</label>
                                <input type="radio" class="form-check-input" name="status">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value=""
                                    placeholder="Masukkan Meta Title">
                            </div>
                            <div class="form-group">
                                <label for="">Meta keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" value=""
                                    placeholder="Masukkan Meta keywords">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="text" class="form-control" name="meta_description" value=""
                                    placeholder="Masukkan Meta Description">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
