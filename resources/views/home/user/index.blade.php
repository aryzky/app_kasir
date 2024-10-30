@extends('layouts.master')
@section('title'.'user')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a class="btn btn-primary" href="/user/tambah">Tambah Data</a>
                        </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email.</th>
                                           
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                            
                                            <td><a class="btn btn-warning" href="/user/{{ $user->id }}/show">Edit</a>
                                            <a class="btn btn-danger"href="/user/{{ $user->id }}/delete"
                                            onclick="return confirm('Yakin mau di hapus?')">Delete</a> 
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection