@extends('layout.atmin')
@section('title', 'Product')
@section('contents')
    <div class="card">
        <div class="card-header">
            <h3>Add product</h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('insert-produk') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Pilih Kategori</label>
                                <select class="form-select" name="cate_id">
                                    <option value>Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}" class="bold">{{ $item->nama }}</option>
                                    @endforeach
                                </select>

                            </div>
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
                                <label for="">Small Description</label>
                                <textarea type="text" class="form-control" name="small_description" value="" placeholder="Masukkan Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description" value=""
                                    placeholder="Masukkan Description">
                            </div>
                            <div class="form-group">
                                <label for="">Original Price</label>
                                <input type="number" class="form-control" name="original_price" value=""
                                    placeholder="Masukkan Harga Asli">
                            </div>
                            <div class="form-group">
                                <label for="">Selling Price</label>
                                <input type="number" class="form-control" name="selling_price" value=""
                                    placeholder="Masukkan Harga Jual">
                            </div>
                            <div class="form-group">
                                <label for="">Tax</label>
                                <input type="number" class="form-control" name="tax" value=""
                                    placeholder="Masukkan Pajak">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="qty" value=""
                                    placeholder="Masukkan Jumlah Produk">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status">
                                    Status
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="trending">
                                    trending
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value=""
                                    placeholder="Masukkan Meta Title">
                            </div>
                            <div class="form-group">
                                <label for="">Meta keywords</label>
                                <input type="text" class="form-control" name="meta_keyword" value=""
                                    placeholder="Masukkan Meta keywords">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="text" class="form-control" name="meta_description" value=""
                                    placeholder="Masukkan Meta Description">
                            </div>

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
