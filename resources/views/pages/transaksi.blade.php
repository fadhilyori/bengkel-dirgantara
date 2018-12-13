@extends('master')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i> Daftar Transaksi Hari Ini ({{ date("j F Y") }})
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
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Ganti oli</td>
                        <td>Imam Abu Mansur</td>
                        <td>Anas</td>
                        <td>Honda Supra X</td>
                        <td align="right">Rp95.000</td>
                        <td><a class="btn btn-primary" href="/transaksi/1"><span class="icon icon-eye"></span></a></td>
                      </tr>
                      <tr>
                        <td>Ganti ban</td>
                        <td>Andre Tenosel</td>
                        <td>Abid</td>
                        <td>Honda Vario 125</td>
                        <td align="right">Rp204.000</td>
                        <td><a class="btn btn-primary" href="/transaksi/2"><span class="icon icon-eye"></span></a></td>
                      </tr>
                      <tr>
                        <td>Perbaikan rem</td>
                        <td>Andre Tenosel</td>
                        <td>Andy</td>
                        <td>Honda Supra 110</td>
                        <td align="right">Rp65.000</td>
                        <td><a class="btn btn-primary" href="/transaksi/3"><span class="icon icon-eye"></span></a></td>
                      </tr>
                      <tr>
                        <td>Perbaikan kelistrikan sepeda motor</td>
                        <td>Fadhil Yori Hibatullah</td>
                        <td>Alfi</td>
                        <td>Honda Vario 110</td>
                        <td align="right">Rp110.000</td>
                        <td><a class="btn btn-primary" href="/transaksi/4"><span class="icon icon-eye"></span></a></td>
                      </tr>
                      <tr>
                        <td>Pengecekan dan perbaikan mesin sepeda motor</td>
                        <td>Kintan Asfiaranti</td>
                        <td>Nuel</td>
                        <td>Honda Supra 110</td>
                        <td align="right">Rp95.000</td>
                        <td><a class="btn btn-primary" href="/transaksi/5"><span class="icon icon-eye"></span></a></td>
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