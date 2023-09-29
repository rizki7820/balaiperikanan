@extends('dashboard.index')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Petugas</h3>
             

              <div class="card-tools">
                <a href="tambah.php" class="btn btn-primary"  data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Tambah Data </a>
              </div>
            </div>
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
                            <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#modal-edit">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    

            <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Petugas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>            
              <form role="form" action="../laporan/laporanpermintaanfilter.php" method="post">
                <div class="modal-body">               
              <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="Nama" placeholder="" required="" value="{{ $p->nama_petugas }}">
               <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="Username" placeholder="" required="" value="{{ $p->username }}">
              <label>Pilih Petugas</label>   
              <select class="form-control" name="petugas" placeholder="" required="Pilih"> 
               <option value="">Pilih</option>
  <option value="Petugas Umum" {{ $p->role === 'Petugas Umum' ? 'selected' : '' }}>Petugas Umum</option>
  <option value="Petugas Lab" {{ $p->role === 'Petugas Lab' ? 'selected' : '' }}>Petugas Lab</option>
              </select>
            </div>    
                
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-outline-primary">Reset</button> 
              <button type="submit" name="print" class="btn btn-outline-primary">Simpan</button>

              </form>  
               </div>
            </div>
          </div>
                    @endforeach
                    
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Petugas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>            
              <form role="form" action="../laporan/laporanpermintaanfilter.php" method="post">
                <div class="modal-body">               
              <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="Nama" placeholder="" required="">
               <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="Nama" placeholder="" required="">
              <label>Pilih Petugas</label>   
              <select class="form-control" name="Nodis" placeholder="" required="Pilih"> 
               <option value="">Pilih</option>
               <option value="">Petugas Umum</option>
               <option value="">Petugas Lab</option>
              </select>
            </div>    
                
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-outline-primary">Reset</button> 
              <button type="submit" name="print" class="btn btn-outline-primary">Simpan</button>

              </form>  
               </div>
            </div>
          </div>


            @endsection