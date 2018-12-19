@extends('master')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> Daftar Job Hari Ini ({{ date("j F Y") }})
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Job</th>
                        <th>Pegawai</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Ganti Oli</td>
                        <td>Imam Abu Mansur</td>
                        <td>
                          <span class="badge badge-warning">Dikerjakan</span>
                        </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Ganti Ban</td>
                        <td>Andre Tenosel</td>
                        <td>
                          <span class="badge badge-success">Selesai</span>
                        </td>
                        <td>Ban belakang dibesarin.</td>
                      </tr>
                      <tr>
                        <td>Perbaikan rem</td>
                        <td>Andre Tenosel</td>
                        <td>
                          <span class="badge badge-success">Selesai</span>
                        </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Perbaikan kelistrikan sepeda motor</td>
                        <td>Fadhil Yori Hibatullah</td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Pengecekan dan perbaikan mesin sepeda motor</td>
                        <td>Kintan Asfiaranti</td>
                        <td>
                          <span class="badge badge-success">Selesai</span>
                        </td>
                        <td> - </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <nav>
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav> -->
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
    </div>
</div>
@endsection

@section('myscript')
    <script src="{{ asset('js/views/main.js') }}">
      $(function () {
        $.getJSON("http://localhost:8000/api/job", function(data) {
          // console.log(data.data[0].name);
          var tempData = data.data;
      })
    </script>
@endsection