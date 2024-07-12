@include('admin.partials')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambahkan Data</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th> 
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $dt)
                  <tr>
                    <td>{{ $dt['id'] }}</td>
                    <td>{{ $dt['nama'] }}</td>
                    <td>{{ $dt['kategori'] }}</td>
                    <td>{{ $dt['harga'] }}</td>
                    <td>{{ $dt['deskripsi'] }}</td>
                    <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalUpdate{{ $dt['id'] }}">Edit</button>
                      || 
                      <a href="/admin-barang/{{ $dt['id'] }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class ="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Modal Tambah Dataset -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ url('admin-barang') }}" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputBarangName">Nama Barang</label>
                        <input type="text" class="form-control" id="inputBarangName" name="nama" placeholder="Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Kategori Barang</label>
                        <select class="form-select" id="exampleFormControlSelect1" name="kategori">
                          <option>Homeware</option>
                          <option>Furniture</option>
                          <option>Fashion</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Harga Barang</label>
                        <input type="text" class="form-control" id="inputBarangAddress" name="harga" placeholder="Harga Barang">
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Deskripsi Barang</label>
                        <input type="text" class="form-control" id="inputBarangAddress" name="deskripsi" placeholder="Deskripsi Barang">
                      </div>
                      <div class="form-group">
                        <label for="picture">Pilih Gambar</label>
                        <input type="file" class="form-control" id="picture" name="picture" required>
                    </div>
                    </div>
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- Modal Update Data -->
  @foreach ($data as $dt)
  <div id="modalUpdate{{ $dt['id']}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form method="POST" action="admin-barang/{{ $dt['id'] }}">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputIdBarang">Id</label>
                        <input type="text" class="form-control" value="{{ $dt['id'] }}" id="inputIdData" name="id" readonly>
                      </div>  
                      <div class="form-group">
                        <label for="inputBarangName">Nama Barang</label>
                        <input type="text" class="form-control" id="inputBarangName" value="{{ $dt['nama'] }}" name="nama" placeholder="Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Kategori Barang</label>
                        <select class="form-select" id="exampleFormControlSelect1" name="kategori">
                          <option {{ $dt['kategori'] == 'Homeware' ? 'selected' : '' }}>Homeware</option>
                          <option {{ $dt['kategori'] == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                          <option {{ $dt['kategori'] == 'Fashion' ? 'selected' : '' }}>Fashion</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Harga Barang</label>
                        <input type="text" class="form-control" id="inputBarangAddress" value="{{ $dt['harga'] }}" name="harga" placeholder="Harga Barang">
                      </div>
                      <div class="form-group">
                        <label for="inputBarangAddress">Deskripsi Barang</label>
                        <input type="text" class="form-control" id="inputBarangAddress" value="{{ $dt['deskripsi'] }}" name="deskripsi" placeholder="Deskripsi Barang">
                      </div>
                    </div>
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte_asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('lte_asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('lte_asset/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte_asset/dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
