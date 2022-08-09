@extends('layout.atmin')
@section('title', 'Kategori')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="class-header">
                <h3>Edit Kategori</h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('update-kategori/'.$kategori->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" value="{{ $kategori->nama }}" class="form-control" name="nama" value=""
                                        placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" value="{{ $kategori->slug }}" class="form-control" name="slug" value=""
                                        placeholder="Masukkan Slug">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control"  name="description"
                                        placeholder="Masukkan Description">{{ $kategori->description }}</textarea>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{ $kategori->status == "1" ? 'checked':'' }} class="form-check-input" name="status">
                                        Status
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{ $kategori->popular == "1" ? 'checked':'' }} class="form-check-input" name="popular">
                                        Popular
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input type="text" value="{{ $kategori->meta_title }}" class="form-control" name="meta_title"
                                        placeholder="Masukkan Meta Title">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta keywords</label>
                                    <textarea type="text"  class="form-control" name="meta_keyword"
                                        placeholder="Masukkan Meta keywords">{{ $kategori->meta_keyword }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea type="text"  class="form-control" name="meta_descrip"
                                        placeholder="Masukkan Meta Deskripsi">{{ $kategori->meta_descrip }}</textarea>
                                </div>

                                @if ($kategori->image)
                                    <img src="{{ asset('atmin/assets/uploads/kategori/'.$kategori->image) }}" alt="Kategori Image">
                                @endif

                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="image" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled=""
                                            placeholder="Upload Gambar">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
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
    </div>
@endsection
