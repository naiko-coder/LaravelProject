<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absen</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/style/style.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <a href="/logout" class="act-btn ">
        <i class="fa fa-power-off" style="font-size:24px"></i>
    </a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <h2 class="text-center mt-2 text-blue">ABSENSI DIGITAL</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card card-login p-1 shadow-lg mt-7">
                    <div class="card-header bg-info text-center">
                        <!--  -->
                        <iframe src="https://free.timeanddate.com/clock/i85ama4y/n2530/tlid38/fs16/fcffc107/tct/pct/ftb/bas2/bat0/bacfff/tt1/td2" frameborder="0" width="213" height="20" allowtransparency="true"></iframe>
                        <iframe src="https://free.timeanddate.com/clock/i85ama4y/n2530/tlid38/fs28/fcffc107/tct/pct/ftb/bas2/bat0/bacfff/th1/ta1" frameborder="0" width="176" height="34" allowtransparency="true"></iframe>
                        <!--  -->
                        <h4 class="mb-0"><i class="fa fa-clock-o text-warning"> Masuk </i><span class="text-warning h4"> {{$masuk}}</span></h4>
                        <h4 class="mt-0"><i class="fa fa-clock-o text-warning"> Keluar</i><span class="text-warning h4"> {{$keluar}}</span></h4>
                    </div>
                    <div class="card-body">
                        <form id="absenkyn" method="post">
                            @csrf
                            <div class="custom-control custom-radio custom-control-inline">
                                <input checked type="radio" id="masuk" name="option" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="masuk">Masuk</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pulang" name="option" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="pulang">Pulang</label>
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="Nip_kyn" id="textValue" placeholder="Scan QRCode" class="form-control" readonly autofocus>
                            </div>
                        </form>

                        <div class="text-center">
                            <p>*** Toleransi Keterlambatan {{$toleransi}} Menit</p>
                            <p>*** Pilih Absen Masuk / Pulang</p>
                            <small class="text-muted">Tekan F5 jika kamera belum tampil</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-login p-1 shadow-lg mt-4 id-card">
                    <div class="text-center">
                    </div>

                    <div class="card-body">
                        <div class="text-center mt-3">
                            <span>SCAN QRCODE DISINI</span>
                            <div class="col-md-4" style="padding:10px;background:#fff;border-radius: 10px;" id="divvideo">
                                <center>
                                    <p class="login-box-msg"> <i class="glyphicon glyphicon-camera"></i></p>
                                </center>
                                <video id="preview" style=" border-radius:10px;"></video>
                                <br>
                                <br>

                            </div>
                        </div>
                        <div class="card-footer bg-info text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ======================================================== -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="{{asset('template/')}}/plugins/style/jquery.js "></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="{{asset('template/')}}/plugins/style/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('template/')}}/plugins/style/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="{{asset('template/')}}/plugins/style/sweetalert.custom.js"></script>

        <!-- Instascan JS -->
        <script src="{{asset('template/')}}/plugins/instascan/instascan.min.js"></script>


        <!-- Instascan -->

        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }

            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c) {
                document.getElementById('textValue').value = c;
                // document.forms[0].submit();
                // var check = document.getElementById("masuk").checked;

                $(document).ready(function() {
                    if (document.getElementById("masuk").checked) {
                        // Start Code
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var formData = new FormData(absenkyn);
                        $.ajax({
                            type: 'post',
                            url: "{{route('store.absenMasuk')}}",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,

                            success: (data) => {
                                swal.fire({
                                    type: 'success',
                                    tittle: 'success',
                                    icon: 'success',
                                    text: 'Sukses Absen Masuk',
                                    showConfirmButton: false,
                                    timer: 2800
                                });
                                $('#textValue').val(null)
                            },
                            statusCode: {
                                500: function(xhr) {
                                    swal.fire({
                                        type: 'error',
                                        tittle: 'error',
                                        icon: 'error',
                                        text: xhr.responseText,
                                        showConfirmButton: false,
                                        timer: 2800
                                    });
                                    $('#textValue').val(null)
                                }
                            }
                        })
                        // End Code
                    } else if (document.getElementById("pulang").checked) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var formData = new FormData(absenkyn);
                        $.ajax({
                            type: 'post',
                            url: "{{route('store.absenKeluar')}}",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: (data) => {
                                swal.fire({
                                    type: 'success',
                                    tittle: 'success',
                                    icon: 'success',
                                    text: 'Sukses Absen Keluar',
                                    showConfirmButton: false,
                                    timer: 2800
                                });
                                $('#textValue').val(null)
                            },
                            statusCode: {
                                500: function(xhr) {
                                    swal.fire({
                                        type: 'error',
                                        tittle: 'error',
                                        icon: 'error',
                                        text: xhr.responseText,
                                        showConfirmButton: false,
                                        timer: 2800
                                    });
                                    $('#textValue').val(null)
                                }
                            }
                        })
                    }
                })
            });
        </script>
        <!-- End Instascan -->
</body>

</html>