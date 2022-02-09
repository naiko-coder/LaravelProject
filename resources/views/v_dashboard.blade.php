@extends('layout.v_main')
<title>Dashboard</title>
@section('content')


<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>


<br>
<div class="col-md-6">
    <h4 class="m-0">Dashboard</h4>
</div>
<hr>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Selamat Datang di <strong>KIP Attendance (Ver 1.0)</strong> Aplikasi Sistem Pendataan Absensi Karyawan, menggunakan QRCode.

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="card">
    <div>
        @if (auth()->user()->level=="Administrator")

        <div class="container-fluid">
            <h5 class="mb-2"></h5>
            <div class="row">

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Karyawan</span>
                            <span class="info-box-number">{{$retrieve_karyawan}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fa fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Jabatan</span>
                            <span class="info-box-number">{{$retrieve_jabatan}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fa fa-male"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Karyawan Laki - Laki</span>
                            <span class="info-box-number">{{$total_male}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fa fa-female"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Karyawan Perempuan</span>
                            <span class="info-box-number">{{$total_female}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        @endif
    </div>

    <br>
    <br>
    <section class="tables no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/absen">
                        <div class=" card card-home bg-red text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-tasks"></i></p>
                                <p class="card-text">BUKA ABSENSI</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/manual">
                        <div class=" card card-home bg-info text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-tasks"></i></p>
                                <p class="card-text">ABSENSI MANUAL</p>
                            </div>
                        </div>
                    </a>
                </div>
                @if (auth()->user()->level=="Administrator")
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/karyawan">
                        <div class="card card-home bg-green text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-users"></i></p>
                                <p class="card-text">DATA KARYAWAN</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/jabatan">
                        <div class="card card-home bg-purple text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-flag"></i></p>
                                <p class="card-text">DATA JABATAN</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/unduhQR">
                        <div class="card card-home bg-orange text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-qrcode"></i></p>
                                <p class="card-text">DOWNLOAD QRCODE</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/jadwal">
                        <div class="card card-home bg-yellow text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-cogs"></i></p>
                                <p class="card-text">JADWAL ABSENSI</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/laporan">
                        <div class="card card-home bg-blue text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-file-signature"></i></p>
                                <p class="card-text">LAPORAN ABSENSI</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-block" href="/users">
                        <div class="card card-home bg-violet text-center">
                            <div class="card-body">
                                <p><i class="fas fa-3x fa-user-cog"></i></p>
                                <p class="card-text">USER MANAGEMENT</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
</div>

<!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Known Bug Issues</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>- Must reload to apply picture on table karyawan</p>
                <p>- Qr Code problem - Fixed</p>
                <p>- Next must change input file type to *jpg only</p>
                <p>- Jabatan not dynamic yet</p>

                <i></i>
            </div>
        </div>
    </div>
</div> -->




@endsection