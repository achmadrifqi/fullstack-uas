@extends('layout.admin-master')
@section('title', 'Aurora')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Profile Company</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Profile Company</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">Aurora Travel</h4>
                                @foreach ($descProfile as $profile)
                                    
                                <p class="card-text">{{$profile->description_company}}</p>
                                <a href="/admin/{{$profile->id}}/company-profile" class="btn btn-success">Update</a>
                                @endforeach
                        </div>
                    </div>
                </main>
                @endsection