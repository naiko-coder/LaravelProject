<html>
@include('sweetalert::alert')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->

    <link rel="icon" href="{{asset('template/')}}/dist/img/LogoKIP_AcehTengah-min.png" type="image/icon type">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
    <!-- Font Style -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('template/')}}/dist/css/detailform.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/dropzone/min/dropzone.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/toastr/toastr.min.css">
    <!-- Ijabocroptools -->
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/ijaboCropTool/ijaboCropTool.min.css">
    <!-- Buttons Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />

    <style>
        body {
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>

    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>
    <!-- Site wrapper -->

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/contact" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span>{{auth()->user()->name}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="far fa-user"></i>
                            <span>Level : {{auth()->user()->level}}</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fa fa-sign-out"></i>
                            <span>Log Out</span>
                        </a>
                    </div>
                </li>


            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="{{asset('template/')}}/dist/img/LogoKIP_AcehTengah-min.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Absensi Digital</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                @include('layout.v_nav')

            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>


    <!-- ./wrapper -->
    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('template/')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('template/')}}/dist/js/demo.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="{{asset('template/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('template/')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('template/')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('template/')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('template/')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('template/')}}/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('template/')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="{{asset('template/')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('template/')}}/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="{{asset('template/')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('template/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('template/')}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="{{asset('template/')}}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="{{asset('template/')}}/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- Sweet alert -->
    <script src="{{asset('template/')}}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Toastr -->
    <script src="{{asset('template/')}}/plugins/toastr/toastr.min.js"></script>
    <!-- Ijabocroptools -->
    <script src="{{asset('template/')}}/plugins/ijaboCropTool/ijaboCropTool.min.js"></script>
    <!-- Instascan JS -->
    <script src="{{asset('template/')}}/plugins/instascan/instascan.min.js"></script>
    <!-- script datatables -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Input mask -->
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <!-- Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <!-- DatePicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>



    <!-- Page specific script -->
    <!-- Image Preview Table Karyawan -->
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

    <script>
        function showPreview1(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("image_user");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

    <!-- Table Jabatan  -->
    <script>
        $(document).ready(function() {

            isi()
        })

        function isi() {
            $('#tb_jabatan').DataTable({
                processing: true,
                serverSide: true,
                retrieve: true,
                ajax: {
                    url: "{{route('jabatan.list')}}"
                },

                columns: [{
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1
                        }
                    },
                    {
                        data: 'jabatan_kyn',
                        name: 'jabatan_kyn'
                    },
                    {
                        data: 'Action',
                        name: 'Action'
                    },
                ],
            })
        }
    </script>
    <!-- Fungsi -->
    <!-- Ada bug ketika klik tambah, lalu edit, lalu tambah lagi -->
    <script>
        $('#simpan').on('click', function() {
            if ($(this).text() === 'Simpan Perubahan') {
                edits()
            } else {
                tambah()
            }
        })

        $(document).on('click', '.edit', function() {
            let jabatan_id = $(this).attr('id')
            // e.preventDefault();
            // var jabatan_id = $(this).data("id");

            $('#tambah').click()
            $('#simpan').text('Simpan Perubahan')
            $.ajax({
                url: "{{route('edits.jbt')}}",
                type: 'post',
                data: {
                    id: jabatan_id,
                    _token: "{{csrf_token()}}"
                },
                success: function(res) {
                    $('#id').val(res.data.id_jabatan)
                    $('#jabatan_kyn').val(res.data.jabatan_kyn)
                }

            })
        })

        function edits() {
            $.ajax({
                url: "{{route('updates.jbt')}}",
                type: "post",
                data: {
                    id: $('#id').val(),
                    jabatan_kyn: $('#jabatan_kyn').val(),
                    "_token": "{{csrf_token()}}"
                },
                success: function(res) {
                    // console.log(res.data);
                    $('#tb_jabatan').DataTable().ajax.reload();
                    swal.fire({
                        type: 'success',
                        tittle: 'success',
                        icon: 'success',
                        text: 'Data sukses diubah'
                    });
                    $('#tutup').click()
                    $('#jabatan_kyn').val(null)
                    $('#simpan').text('Simpan')

                },
                error: function(xhr) {
                    swal.fire({
                        type: 'error',
                        icon: 'error',
                        title: 'Oopss...',
                        text: 'Ada kesalahan!'
                    });
                }
            })
        }

        function tambah() {
            $.ajax({
                url: "{{route('jabatan.store')}}",
                type: "post",
                data: {
                    jabatan_kyn: $('#jabatan_kyn').val(),
                    "_token": "{{csrf_token()}}"
                },
                success: function(res) {
                    // console.log(res.data);
                    $('#tb_jabatan').DataTable().ajax.reload();
                    swal.fire({
                        type: 'success',
                        tittle: 'success',
                        icon: 'success',
                        text: 'Data sukses ditambah'
                    });
                    $('#tutup').click()
                    $('#jabatan_kyn').val(null)
                },
                error: function(xhr) {
                    swal.fire({
                        type: 'error',
                        icon: 'error',
                        title: 'Oopss...',
                        text: 'Ada kesalahan!'
                    });
                    $('#tutup').click()
                    $('#jabatan_kyn').val(null)
                }
            })
        }

        $(document).on('click', '.deleteJBT', function(e) {
            e.preventDefault();
            var jabatan_id = $(this).data("id");

            swal.fire({
                title: 'Yakin ingin menghapus data ?',
                text: 'Data yang telah dihapus tidak dapat di kembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085D6',
                cancelButtonColor: '#D33',
                confrimButtonText: 'Ya, Hapus Data'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{route('destroy.jbt')}}",
                        type: 'post',
                        data: {
                            id: jabatan_id,
                            "_token": "{{csrf_token()}}"
                        },
                        success: function(response) {
                            $('#tb_jabatan').DataTable().ajax.reload();
                            swal.fire({
                                type: 'success',
                                tittle: 'success',
                                icon: 'success',
                                text: 'Data Berhasil di Hapus'
                            });
                        },
                        error: function(xhr) {
                            swal.fire({
                                type: 'error',
                                icon: 'error',
                                title: 'Oopss...',
                                text: 'Ada kesalahan!'
                            });
                        }
                    })
                }
            })
        })
    </script>


    <!-- Table Karyawan -->
    <script>
        $(document).ready(function() {
            field()
        })

        function field() {
            $('#tb_karyawan').DataTable({
                processing: true,
                serverSide: true,
                retrieve: true,
                ajax: {
                    url: "{{route('karyawan.list')}}"
                },

                columns: [{
                        data: 'nip_kyn',
                        name: 'nip_kyn'
                    },
                    {
                        data: 'nama_kyn',
                        name: 'nama_kyn'
                    },
                    {
                        data: 'alamat_kyn',
                        name: 'alamat_kyn'
                    },
                    {
                        data: 'email_kyn',
                        name: 'email_kyn'
                    },
                    {
                        // data: 'jabatan_id',
                        // name: 'jabatan_id'

                        data: 'jabatan_kyn',
                        name: 'jabatan_kyn'
                    },
                    {
                        data: 'Action',
                        name: 'Action',
                        sortable: false,
                        searchable: false,
                    },
                ],
            })
        }
    </script>
    <!-- Fungsi -->
    <script>
        $(document).ready(function() {
            add_kyn();
        });

        function add_kyn() {
            $(document).on('submit', '#upload_data', function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'post',
                    url: "{{route('karyawan.store')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: (data) => {
                        $('#tb_karyawan').DataTable().ajax.reload();
                        swal.fire({
                            type: 'success',
                            tittle: 'success',
                            icon: 'success',
                            text: 'Data sukses ditambah'
                        });
                        $('#tutup_kyn').click()
                        $('#nip_kyn').val(null)
                        $('#nama_kyn').val(null)
                        $('#email_kyn').val(null)
                        $('#hp_kyn').val(null)
                        $('#jk_kyn').val(null)
                        $('#status_kyn').val(null)
                        $('#alamat_kyn').val(null)
                        $('#jabatan_kyn').val(null)
                        $('#agama_kyn').val(null)
                        $('.preview').val(null)
                        $('#image_kyn').val(null)
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
            })
        }
    </script>

    <script>
        $(document).ready(function() {
            info_kyn();
        });
    </script>
    <!-- Edit Image -->
    <script>
        $('#clickSubmit').on('click', function(e) {
            var x = $(this).text();
            if (x == "Pilih Gambar") {
                $('#image-input').click();
                $(this).text("Upload").removeClass('btn-success').addClass('btn-primary')
            } else {
                $(this).text("Pilih Gambar").removeClass('btn-primary').addClass('btn-success')
                $('#upload-image-form').on('submit', function(e) {
                    e.preventDefault();
                    let formData = new FormData(this);
                    $('#image-input-error').text('');
                    $.ajax({
                        type: 'POST',
                        url: "{{route('karyawan.updateimg')}}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: (response) => {
                            swal.fire({
                                type: 'success',
                                tittle: 'success',
                                icon: 'success',
                                text: 'Success!'
                            });
                        },
                        error: function(response) {
                            swal.fire({
                                type: 'error',
                                tittle: 'error',
                                icon: 'error',
                                text: response.responseJSON.errors.file
                            });
                        }
                    });
                })
                $('#sumbitClick').click();
            }
        })
    </script>

    <script>
        function info_kyn() {
            $(document).on('click', '.info_kyn', function(e) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let id = $(this).attr('id')
                var urlPhoto = "{{asset('users_pict')}}/";

                $('#data_kyn').click()
                $.ajax({
                    url: "{{route('karyawan.show')}}",
                    type: 'post',
                    beforeSend: function() {
                        $('#loader').removeClass('hidden')
                    },
                    data: {
                        id: id,
                        _token: "{{csrf_token()}}",
                    },
                    success: function(res) {
                        $('#myIDdiv').attr('id', res.data.id)
                        // $('#idkar').attr('id', res.data.id)
                        $('#id-kar').val(res.data.id)
                        $('#idimg').val(res.data.id)
                        $('#kynnip').val(res.data.nip_kyn)
                        $('.namaKar').html(res.data.nama_kyn);
                        // 
                        $('.jabatanKar').html(res.data.jabatan_kyn);
                        $('#jabatanKar').val(res.data.jabatan_id);
                        // 
                        $('#nip-kar').val(res.data.nip_kyn)
                        $('#nama-kar').val(res.data.nama_kyn)
                        $('#email-kar').val(res.data.email_kyn)
                        $('#hp-kar').val(res.data.hp_kyn);
                        $('#alamat-kar').val(res.data.alamat_kyn);
                        $('#jk-kar').val(res.data.jk_kyn);
                        $('#agama-kar').val(res.data.agama_kyn);
                        $('#status-kar').val(res.data.status_kyn);
                        $('.foto-kar').attr('src', urlPhoto + res.data.foto_kyn);
                    },
                    error: function(xhr) {
                        swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'Oopss...',
                            text: 'Ada kesalahan!'
                        });
                    },
                    complete: function() {
                        $('#loader').addClass('hidden')
                    }
                })
            })
        }
    </script>

    <script>
        $('#hp_kyn').inputmask({
            mask: '9999-9999-9999',
            definitions: {
                A: {
                    validator: "[A-Za-z0-9 ]"
                },
            },
        });
    </script>

    <script>
        $(document).on('click', '.delete_kyn', function(e) {
            e.preventDefault();
            let id = $(this).attr('id')
            swal.fire({
                title: 'Yakin ingin menghapus data ?',
                text: 'Data yang telah dihapus tidak dapat di kembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085D6',
                cancelButtonColor: '#D33',
                confrimButtonText: 'Ya, Hapus Data'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{route('destroy.kyn')}}",
                        type: 'post',
                        data: {
                            id: id,
                            "_token": "{{csrf_token()}}"
                        },
                        success: function(response) {
                            $('#tb_karyawan').DataTable().ajax.reload();
                            swal.fire({
                                type: 'success',
                                tittle: 'success',
                                icon: 'success',
                                text: 'Data Berhasil di Hapus'
                            });
                        },
                        error: function(xhr) {
                            swal.fire({
                                type: 'error',
                                icon: 'error',
                                title: 'Oopss...',
                                text: 'Ada kesalahan!'
                            });
                        }
                    })
                }
            })
        })
    </script>

    <script>
        $(document).on('click', '.inputFoto', function(e) {
            // e.preventDefault();
            // let id = $(this).attr('id')
            // var id = $(this).val();
            // alert(id);
        })
    </script>

    <script>
        $(".btnClick").click(function(event) {
            event.preventDefault();
            let id = $(this).attr('id')
            var formData = new FormData(editKarForm);
            // let id = $('#idkar').attr('id')
            var x = $(this).text();
            // $('#idkar').attr('id', res.data.id)
            if (x == "Edit") {
                $(this).text("Simpan").removeClass('btn-warning').addClass('btn-primary');
                document.getElementById("nip-kar").disabled = false;
                document.getElementById("jabatanKar").disabled = false;
                document.getElementById("nama-kar").disabled = false;
                document.getElementById("email-kar").disabled = false;
                document.getElementById("hp-kar").disabled = false;
                document.getElementById("alamat-kar").disabled = false;
                document.getElementById("jk-kar").disabled = false;
                document.getElementById("agama-kar").disabled = false;
                document.getElementById("status-kar").disabled = false;
            } else if (x == "Simpan") {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: "{{route('karyawan.updates')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: (data) => {
                        swal.fire({
                            type: 'success',
                            title: 'success',
                            icon: 'success',
                            text: 'Data Sukses di edit'
                        });
                        $('.tutup_info').click();
                        $('#tb_karyawan').DataTable().ajax.reload();
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
                $(this).text("Edit").removeClass('btn-primary').addClass('btn-warning');
                document.getElementById("nip-kar").disabled = true;
                document.getElementById("jabatanKar").disabled = true;
                document.getElementById("nama-kar").disabled = true;
                document.getElementById("email-kar").disabled = true;
                document.getElementById("hp-kar").disabled = true;
                document.getElementById("alamat-kar").disabled = true;
                document.getElementById("jk-kar").disabled = true;
                document.getElementById("agama-kar").disabled = true;
                document.getElementById("status-kar").disabled = true;
            };
        })
        // Next fungsikan semuanya
    </script>

    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>

    <script>
        $(document).on('change', '.select-name', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var hasil = $(this).val();
            var urlPoto = "{{asset('users_pict/')}}";
            var urlQr = "{{asset('storage/uploads/')}}";
            var urlDown = "{{asset('storage/uploads/')}}";

            // 
            if (hasil == '') {
                document.location.href = "unduhQR";
            }
            $.ajax({
                url: "{{route('showData.index')}}",
                type: 'post',
                data: {
                    pilih_nama: hasil
                },
                success: function(res) {
                    $('.nama-kar').html(res.data.nama_kyn)
                    $('.idQr').html('NIP : ' + res.data.nip_kyn)
                    $('.jabatan-kar').html(res.data.jabatan_kyn)
                    $('.poto-kar').attr('src', urlPoto + '/' + res.data.nip_kyn + '.jpg')
                    $('.email-kar').html(res.data.email_kyn)
                    $('.potoQr').attr('src', urlQr + '/img' + res.data.nip_kyn + '.svg').css("width", "150px");
                    $('.tblQr').attr('href', urlDown + '/img' + res.data.nip_kyn + '.svg')
                    $('.tblQr').attr('download', res.data.nama_kyn + res.data.nip_kyn + '.svg')
                    $('#btnDownloadQr').show();
                    $('.kartuQR').show();
                }
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#btnDownloadQr').hide();
            $('.kartuQR').hide();
            $('.saveManual').hide();
        });
    </script>

    <script>
        $(document).on('click', '#jadwalSave', function(e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var formData = new FormData(setJadwal);
            $.ajax({
                type: 'post',
                url: "{{route('store.jadwal')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    swal.fire({
                        title: "Success",
                        type: "success"
                    }).then(function() {
                        location.reload();
                    });
                },
            })
        })
    </script>


    <script>
        $(document).ready(function() {
            datauser()
            deleteUser();
            adduser();
            editUser();
            updateUser();
        })

        function datauser() {
            $('#tblUserList').DataTable({
                processing: true,
                serverSide: true,
                retrieve: true,
                info: false,
                paging: false,
                ordering: false,

                ajax: {
                    url: "{{route('users.list')}}"
                },

                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'level',
                        name: 'level'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'Action',
                        name: 'Action',
                        sortable: false,
                        searchable: false,
                    },
                ],
            })
        }

        function deleteUser() {
            $(document).on('click', '.deleteUser', function(e) {
                e.preventDefault();
                let id = $(this).attr('id')
                swal.fire({
                    title: 'Yakin ingin menghapus data ?',
                    text: 'Data yang telah dihapus tidak dapat di kembalikan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085D6',
                    cancelButtonColor: '#D33',
                    confrimButtonText: 'Ya, Hapus Data'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: "{{route('users.destroy')}}",
                            type: 'post',
                            data: {
                                id: id,
                                "_token": "{{csrf_token()}}"
                            },
                            success: function(response) {
                                $('#tblUserList').DataTable().ajax.reload();
                                swal.fire({
                                    type: 'success',
                                    tittle: 'success',
                                    icon: 'success',
                                    text: 'Data Berhasil di Hapus'
                                });
                            },
                            error: function(xhr) {
                                swal.fire({
                                    type: 'error',
                                    icon: 'error',
                                    title: 'Oopss...',
                                    text: 'Ada kesalahan!'
                                });
                            }
                        })
                    }
                })
            })
        }

        function editUser() {
            $(document).on('click', '.editUser', function() {
                let id = $(this).attr('id')
                $('#btnadduser').click()
                // $('#modalTambahLabel').text('Edit User')
                $.ajax({
                    url: "{{route('users.edit')}}",
                    type: 'post',
                    data: {
                        id: id,
                        _token: "{{csrf_token()}}"
                    },
                    success: function(res) {
                        $('#ids').val(res.data.id)
                        $('#username').val(res.data.name)
                        $('#email').val(res.data.email)
                        $('#inputLevels').val(res.data.level)
                    }

                })
            })
            ////
        }

        function updateUser() {
            $(document).on('submit', '#formEditUser', function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = new FormData(formEditUser);
                $.ajax({
                    type: 'post',
                    url: "{{route('users.update')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $('#tblUserList').DataTable().ajax.reload();
                        swal.fire({
                            type: 'success',
                            tittle: 'success',
                            icon: 'success',
                            text: 'Data sukses diedit'
                        });
                        $('#tutupEdit').click()
                        // document.getElementById("formEditUser").reset();
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
            })
        }

        function adduser() {
            $(document).on('submit', '#formAddUser', function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'post',
                    url: "{{route('users.store')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $('#tblUserList').DataTable().ajax.reload();
                        swal.fire({
                            type: 'success',
                            tittle: 'success',
                            icon: 'success',
                            text: 'Data sukses ditambah'
                        });
                        $('#tutupUser').click()
                        document.getElementById("formAddUser").reset();
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
            })
        }
    </script>

    <!-- Tabel Laporan -->
    <script>
        $(document).ready(function() {
            // listlaporan()

        })

        function listlaporan() {
            $('#tb_laporan').DataTable({
                processing: true,
                serverSide: true,
                retrieve: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    'colvis'
                ],
                ajax: {
                    url: "{{route('laporan.index')}}"
                },

                columns: [{
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1
                        }
                    },
                    {
                        data: 'nip_kyn',
                        name: 'nip_kyn'
                    },
                    {
                        data: 'nama_kyn',
                        name: 'nama_kyn'
                    },
                    {
                        data: 'jabatan_kyn',
                        name: 'jabatan_kyn'
                    },
                    {
                        data: 'jam_msk',
                        name: 'jam_msk'
                    },
                    {
                        data: 'jam_plng',
                        name: 'jam_plng'
                    },
                    {
                        data: 'tanggal',
                        name: 'tanggal'
                    },
                    {
                        data: 'Action',
                        name: 'Action'
                    },
                ],
            })
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.input-daterange').datepicker({
                todayBtn: 'linked',
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            load_data();

            function load_data(from_date = '', to_date = '') {
                $('#tb_laporan').DataTable({

                    processing: true,
                    serverSide: true,
                    retrieve: true,
                    dom: 'lBfrtip',
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    buttons: [{
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7]
                            }
                        },
                        'colvis'
                    ],
                    ajax: {
                        url: '{{ route("laporan.index") }}',
                        data: {
                            from_date: from_date,
                            to_date: to_date
                        }
                    },
                    columns: [{
                            "data": null,
                            "sortable": false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1
                            }
                        },
                        {
                            data: 'nip_kyn',
                            name: 'nip_kyn'
                        },
                        {
                            data: 'nama_kyn',
                            name: 'nama_kyn'
                        },
                        {
                            data: 'jabatan_kyn',
                            name: 'jabatan_kyn'
                        },
                        {
                            data: 'jam_msk',
                            name: 'jam_msk'
                        },
                        {
                            data: 'jam_plng',
                            name: 'jam_plng'
                        },
                        {
                            data: 'tanggal',
                            name: 'tanggal'
                        },
                        {
                            data: 'info',
                            name: 'info'
                        },
                    ],
                });
            }

            $('#filter').click(function() {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#tb_laporan').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    swal.fire({
                        type: 'error',
                        tittle: 'Error',
                        icon: 'error',
                        text: 'Tanggal tidak boleh kosong!'
                    });
                }
            });

            $('#refresh').click(function() {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#tb_laporan').DataTable().destroy();
                load_data();
            });

        });
    </script>

    <!-- Absen Manual -->

    <script>
        $(document).on('change', '.pilih_karyawan', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var hasil = $(this).val();
            // 
            if (hasil == '') {
                document.location.href = "manual";
            }
            $.ajax({
                url: "{{route('manual.show')}}",
                type: 'post',
                data: {
                    pilih_karyawan: hasil
                },
                success: function(res) {
                    $('#form8Example3').val(res.data.nip_kyn)
                    $('#form8Example4').val(res.data.nama_kyn)
                    $('#form8Example5').val(res.data.jabatan_kyn)
                    $('.saveManual').show()
                }
            })
        })

        $(document).on('click', '.saveManual', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = new FormData(manualAbsenForm);
            var valueDate = document.getElementById('form8Example6').value;
            var checkRadio = document.querySelectorAll('input[type="radio"]:checked').length === 0

            if (!valueDate || checkRadio === !null) {
                swal.fire({
                    type: 'error',
                    tittle: 'error',
                    icon: 'error',
                    text: 'Tanggal / Keterangan Tidak boleh kosong!'
                });
            } else {
                $.ajax({
                    type: 'post',
                    url: "{{route('manual.absen')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        // $('#tb_karyawan').DataTable().ajax.reload();
                        swal.fire({
                            type: 'success',
                            tittle: 'success',
                            icon: 'success',
                            text: 'Sukses Tambah Absen'
                        });
                        document.getElementById("manualAbsenForm").reset();
                        $('.saveManual').hide()

                    },
                    error: function(data) {
                        swal.fire({
                            type: 'error',
                            tittle: 'error',
                            icon: 'error',
                            text: 'Ada kesalahan!'
                        });
                    }
                })
            }

        })
    </script>
</body>

</html>