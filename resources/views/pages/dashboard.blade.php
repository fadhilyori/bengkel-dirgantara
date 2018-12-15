@extends('master')
@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h4 class="card-title mb-0">Branch</h4>
                                <div class="small text-muted">{{ date("F Y") }}</div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-7 d-none d-md-block">
                                <button type="button" class="btn btn-primary float-right"><i
                                            class="icon-cloud-download"></i></button>
                                <div class="btn-toolbar float-right" role="toolbar"
                                     aria-label="Toolbar with button groups">
                                    <!-- <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option1"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input type="radio" name="options" id="option2" checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option3"> Year
                                        </label>
                                    </div> -->
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                            <canvas id="main-chart" class="chart" height="300"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                                <div class="text-muted">Kunjungan</div>
                                <strong>29.703 Pelanggan</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="d-none d-md-table-cell">
                                <div class="text-muted">Transaksi</div>
                                <strong>24.093 Transaksi</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Montir Aktif</div>
                                <strong>11</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                         aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="d-none d-md-table-cell">
                                <div class="text-muted">New Users</div>
                                <strong>22 Users</strong>
                                <div class="progress progress-xs mt-2">
                                    <!-- <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> -->
                                </div>
                            </li>
                            <!-- <li class="d-none d-md-table-cell">
                                <div class="text-muted">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <!--/.card-->
            </div>
        </div>
    </div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
    <script>
        $(function () {
            'use strict';

            //convert Hex to RGBA
            function convertHex(hex, opacity) {
                hex = hex.replace('#', '');
                var r = parseInt(hex.substring(0, 2), 16);
                var g = parseInt(hex.substring(2, 4), 16);
                var b = parseInt(hex.substring(4, 6), 16);

                var result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
                return result;
            }

            function random(min,max) {
                return Math.floor(Math.random()*(max-min+1)+min);
            }

            var elements = 27;
            var data1 = [];
            var data2 = [];
            var data3 = [];

            for (var i = 0; i <= elements; i++) {
                data1.push(random(50,200));
                data2.push(random(80,100));
                data3.push(65);
            }

            var data = {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
                datasets: [
                    {
                        label: 'My First dataset',
                        backgroundColor: convertHex($.brandInfo,10),
                        borderColor: $.brandInfo,
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 2,
                        data: data1
                    },
                    {
                        label: 'My Second dataset',
                        backgroundColor: 'transparent',
                        borderColor: $.brandSuccess,
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 2,
                        data: data2
                    },
                    {
                        label: 'My Third dataset',
                        backgroundColor: 'transparent',
                        borderColor: $.brandDanger,
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 1,
                        borderDash: [8, 5],
                        data: data3
                    }
                ]
            };

            var options = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            drawOnChartArea: false,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            stepSize: Math.ceil(250 / 5),
                            max: 250
                        }
                    }]
                },
                elements: {
                    point: {
                        radius: 0,
                        hitRadius: 10,
                        hoverRadius: 4,
                        hoverBorderWidth: 3,
                    }
                },
            };
            var ctx = $('#main-chart');
            var mainChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: options
            });
        });
    </script>
@endsection