@extends('layout.atmin')
@section('title', 'Product')
@section('contents')
    <div class="card">
        <div class="class-header">
            <h1>Add product</h1>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('update-produk/' . $produk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 mb-3">
                                <label for="">Kategori</label>
                                <select class="form-select">
                                    <option value="" class="bold">{{ $produk->kategori->nama }}</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $produk->slug }}"
                                    placeholder="Masukkan Slug">
                            </div>
                            <div class="form-group">
                                <label for="">Small Description</label>
                                <textarea type="text" class="form-control" name="small_description" value="" placeholder="Masukkan Deskripsi">{{ $produk->small_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" name="description" value="" placeholder="Masukkan Deskripsi">{{ $produk->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Original Price</label>
                                <input type="number" class="form-control" name="original_price"
                                    value="{{ $produk->original_price }}"" placeholder=" Masukkan Harga Asli">
                            </div>
                            <div class="form-group">
                                <label for="">Selling Price</label>
                                <input type="number" class="form-control" name="selling_price"
                                    value="{{ $produk->selling_price }}"" placeholder=" Masukkan Harga Jual">
                            </div>
                            <div class="form-group">
                                <label for="">Tax</label>
                                <input type="number" class="form-control" name="tax" value="{{ $produk->tax }}""
                                    placeholder=" Masukkan Pajak">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="qty" value="{{ $produk->qty }}"
                                    placeholder=" Masukkan Jumlah Produk">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" {{ $produk->status == '1' ? 'checked' : '' }}
                                        class="form-check-input" name="status">
                                    Status
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" {{ $produk->trending == '1' ? 'checked' : '' }}
                                        class="form-check-input" name="trending">
                                    Trending
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" value="{{ $produk->meta_title }}" class="form-control"
                                    name="meta_title" placeholder="Masukkan Meta Title">
                            </div>
                            <div class="form-group">
                                <label for="">Meta keywords</label>
                                <textarea type="text" class="form-control" name="meta_keyword" placeholder="Masukkan Meta keywords"> {{ $produk->meta_keyword }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <textarea type="text" class="form-control" name="meta_description" placeholder="Masukkan Meta Deskripsi">{{ $produk->meta_description }}</textarea>
                            </div>

                            @if ($produk->image)
                                <img src="{{ asset('atmin/assets/uploads/produk/' . $produk->image) }}" alt="Produk Image">
                            @endif

                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""
                                        placeholder="Upload Gambar">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
