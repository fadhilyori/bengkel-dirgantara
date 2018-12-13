@extends('master')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> Detail Transaksi
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Job</th>
                        <th>Montir</th>
                        <th>Pelanggan</th>
                        <th>Jenis kendaraan</th>
                        <th>Tagihan</th>
                        <th>Diskon</th>
                        <th>Pajak</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$job}}</td>
                        <td>{{$montir}}</td>
                        <td>{{$customer}}</td>
                        <td>{{$kendaraan}}</td>
                        <td align="right">Rp{{$total_price}}</td>
                        <td align="right">{{$discount}}%</td>
                        <td align="right">{{$tax}}%</td>
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
    <!-- <script src="{{ asset('js/views/main.js') }}"></script> -->
@endsection