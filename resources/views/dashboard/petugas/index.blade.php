@extends('dashboard.index')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($petugas as $p)   
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $p->nama_petugas}}</td>
                        <td>{{ $p->username}}</td>
                        <td>{{ $p->role}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endsection