@extends('layout.v_main')
<title>Jadwal Absensi</title>

@section ('content')
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Atur Jadwal Absensi</h2>
    </div>
</header>

<section class="forms no-padding-bottom">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-3 p-2 bg-primary" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 p-1 text-blue">
                                            <span><i class="fas fa-6x fa-stopwatch"></i></span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3>Jam Masuk</h3>
                                                <h1 class="jam">{{$masuk}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-3 p-2 bg-info" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 p-1 text-blue">
                                            <span><i class="fas fa-6x fa-stopwatch"></i></span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3>Jam Pulang</h3>
                                                <h1 class="jam">{{$keluar}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-2 bg-warning text-danger" style="max-width: 540px;">
                                    <div class="card-body">
                                        <h6>Toleransi Keterlambatan <span class="minit">{{$toleransi}} Menit</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form method="post" id="setJadwal">
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="jamaMasuk"><b>Jam Masuk</b></label>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="time" class="form-control" name="jamMasuk" value="08:30:00" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="jamaMasuk"><b>Jam Pulang</b></label>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <input type="time" class="form-control" name="jamKeluar" value="17:00:00" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="jamaMasuk"><b>Toleransi Keterlambatan</b></label>
                                    <div class="form-row">
                                        <div class="col-sm-5">
                                            <select class="form-control" name="toleransi" required>
                                                <option selected value="60">60</option>
                                                <option value="00">00</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60">60 (1 jam)</option>
                                                <option value="75">75 (1 jam 15 menit)</option>
                                                <option value="90">90 (1 jam 30 menit)</option>
                                                <option value="105">105 (1 jam 45 menit)</option>
                                                <option value="120">120 (2 jam)</option>
                                            </select>
                                            <small>Dalam menit</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <button id="jadwalSave" class="btn btn-success" type="button"><i class="fas fa-save"></i> Simpan Pengaturan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <small>Jika absen lebih dari jam masuk dan kurang dari waktu toleransi, tetap masuk kerja, tapi tercatat waktu
                        terlambat</small>
                </div>
                <div>
                    <small>Jika absen lebih dari waktu toleransi, Dianggap Bolos / Tidak masuk kerja</small>
                </div>
            </div>
        </div>
    </div>

</section><!-- Page Footer-->
@endsection