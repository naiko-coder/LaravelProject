@extends('layout.v_main')
<title>Unduh QR Code</title>
@section('content')

<style>
    div.relative {
        position: relative;
        left: 30px;
    }

    div.relative-logo {
        position: relative;
        left: 10px;
        top: 10px;
    }
</style>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<div class="content-inner">
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Unduh QRCode</h2>
        </div>
    </header>

    <section class="forms no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mt-4">
                                        <div class="relative row">
                                            <label class="col-sm-2 form-inline">Karyawan</label>
                                            <select class="form-select select-name" id="idSelect" aria-label="Default select example" name="pilih_nama">
                                                <option value="">-Pilih Karyawan-</option>
                                                @foreach ($karyawan as $data)
                                                <option value=" {{$data->nip_kyn}}">{{$data->nama_kyn}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group mt-3">
                                            <p style="font-size: 14px; color: #FF0000" class="mb-4">**Pilih Karyawan</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4 qr-poto2 text-center">
                                    <h6 class="nama-kar">Nama</h6>
                                    <h6 class="idQr">NIP : xxxxxxxxxxxxx</h6>
                                </div>
                                <div class="col-md-6 qr-poto2 text-center">
                                    <!-- {!! QrCode::generate('Make me into a QrCode!'); !!} -->
                                    <img style="max-width: 200px" class="img-thumbnail potoQr" src="{{asset('qr/')}}/example-qr.png" alt="qr">
                                    <div>
                                        <a href="" id="btnDownloadQr" class=" btn btn-sm btn-primary mt-2 tblQr" download="">
                                            <i class="fas fa-download"></i> Download qrCode</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @media print {
                        body * {
                            visibility: hidden;
                        }

                        #divCetakKartu,
                        #divCetakKartu * {
                            visibility: visible;
                        }

                        #divCetakKartu {
                            position: absolute;
                            left: 0;
                            top: 0;
                        }

                        * {
                            -webkit-print-color-adjust: exact !important;
                            /* Chrome, Safari, Edge */
                            color-adjust: exact !important;
                            /*Firefox*/
                        }
                    }
                </style>

                <style>
                    .frame {
                        width: 200px;
                        height: 200px;
                        border: 3px solid #ccc;
                        background: #eee;
                        margin: auto;
                        padding: 15px 10px;
                    }
                </style>

                <div id="divCetakKartu" class="content-inner col-sm-12 col-md-6 col-lg-4">
                    <div>
                        <div class="card card-login p-1 shadow-lg id-card">
                            <div class="text-center">
                                <img width="60px;" src="{{asset('qr/')}}/bolong.png" alt="logo">
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>KARTU ABSENSI</h4>
                                    <img class="logo-card" src="{{asset('template/')}}/dist/img/LogoKIP_AcehTengah-min.png" width="65px">
                                </div>
                                <div class="text-center mt-1">
                                    <div class="poto">
                                        <img class="poto-kar frame" src="https://i.ibb.co/0MGPsZg/default.png" width="190px" height="190px">
                                        <br>
                                        <h5 class="nama-kar">Nama XXXXX</h5>
                                        <p class="jabatan-kar">Jabatan xxxxx</p>
                                    </div>
                                </div>
                                <div class="id-number text-center">
                                    <img class="potoQr" src="{{asset('qr/')}}/example-qr.png" style="width: 150px;">
                                    <div class="text-center">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-info text-center">
                                <p class="card-mail email-kar">Email : alamatxx@email.com</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <button onclick="window.print();" class="btn btn-dark kartuQR float-right">CETAK KARTU</button>
    </section>


    <!-- <div id="loader1" class="lds-dual-ring hidden overlay"></div> -->

    @endsection