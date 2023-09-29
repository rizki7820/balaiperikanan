    @extends('dashboard.index')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengajuan Praktek</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telpon</th>
                    <th>Instansi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
{{-- 
                    @foreach ($petugas as $p)    --}}
                    <tr>
                        <td>1</td>
                        <td>Timothy</td>
                        <td>titi@gmail.com</td>
                        <td>081934155978</td>
                        <td>SMK Negeri 1 Banjarbaru</td>
                        <td>
                            <a href="" class="btn btn-primary">Terima Surat</a> 
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                    
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endsection