@extends('layout.admin-master')
@section('title', 'Aurora')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambakan Package Travel</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Admin</a></li>
                <li class="breadcrumb-item ">Travel package</li>
                <li class="breadcrumb-item active">Tambah package</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/add-package" method="POST" enctype="multipart/form-data">
                        @CSRF
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control @error('title')
                                        is-invalid @enderror" placeholder="Masukkan Judul" >
                                        <small class="text-danger">@error('title') {{$message}} @enderror</small>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="photo">Url Photo</label>
                                        <input type="url" name="photo" class="form-control @error('photo')
                                        is-invalid @enderror" placeholder="Masukkan Link photo" >
                                        <small class="text-danger">@error('photo') {{$message}} @enderror</small>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control @error('price')
                                        is-invalid @enderror" placeholder="Masukkan harga" >
                                        <small class="text-danger">@error('price') {{$message}} @enderror</small>
                                    </div>         
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="facilities">Facility</label>
                                        <input type="text" name="facilities" class="form-control @error('facilities')
                                        is-invalid @enderror" placeholder="Masukkan fasilitas" >
                                        <small class="text-danger">@error('facilities') {{$message}} @enderror</small>
                                    </div>         
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi" rows="4" ></textarea>
                                        <small class="text-danger">@error('description') {{$message}} @enderror</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <a href="{{url('/admin')}}" class="m-1 btn btn-outlinedanger">Back</a>
                                <button type="submit" class="m-1 btn btn-success">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>        
               
@endsection