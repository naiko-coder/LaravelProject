@extends('layout.v_main')
<title>Data Karyawan</title>
@section('content')

<style>
    .lds-dual-ring.hidden {
        display: none;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 5% auto;
        border-radius: 50%;
        border: 6px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }


    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, .8);
        z-index: 999;
        opacity: 1;
        transition: all 0.5s;
    }
</style>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<div>
    <div>
        <button type="button" id="tambah_kyn" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal_tambahkyn">
            Tambah Karyawan
        </button>
        <button type="button" id="data_kyn" class="btn btn-primary float-right" data-toggle="modal" data-target="#info_kyn" hidden> </button>
    </div>
    <h4 class="m-0">Data Karyawan</h4>
</div>
<br>
<div class="page">
    <div>
        <table id="tb_karyawan" class="table table-striped table-bordered table-hover" width="100%">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th width="10%" style="text-align: center;">Action</th>
                </tr>
            </thead>

        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_tambahkyn" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" id="upload_data" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <!-- mb -->
                        <div class="row">
                            <div class="col">
                                <label for="NIP">NIP</label>
                                <input name="nip_kyn" id="nip_kyn" type="text" class="form-control" placeholder="Nip">
                            </div>
                            <div class="col">
                                <label for="Nama Karyawan">Nama Karyawan</label>
                                <input name="nama_kyn" id="nama_kyn" type="text" class="form-control" placeholder="Nama Karyawan">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="Email">Email</label>
                                <input name="email_kyn" id="email_kyn" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <label for="NoHp">No Hp</label>
                                <input name="hp_kyn" id="hp_kyn" type="text" class="form-control input-telp">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="Jenis Kelamin">Jenis Kelamin</label>
                                <select class="form-select" id="jk_kyn" name="jk_kyn">
                                    <option selected disabled value="">Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita </option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Status">Status</label>
                                <select class="form-select" id="status_kyn" name="status_kyn">
                                    <option selected disabled value="">Status</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah </option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Jabatan">Jabatan</label>
                                <select class="form-select" id="jabatan_kyn" name="jabatan_kyn">
                                    <option selected disabled value="">Pilih Jabatan</option>
                                    @foreach ($jabatan_kyn as $items)
                                    <option value="{{$items->id_jabatan}}">{{$items->jabatan_kyn}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" col">
                                <label for="Status">Status</label>
                                <select class="form-select" id="agama_kyn" name="agama_kyn">
                                    <option selected disabled value="">Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Khonghucu</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <!-- /row -->
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" name="alamat_kyn" id="alamat_kyn"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="preview">
                            <img id="file-ip-1-preview" src="https://i.ibb.co/XyWZPwq/default.png" width="15%">
                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="image_kyn">Upload Gambar</label>
                            <input name="image_kyn" class="form-control" type="file" id="image_kyn" accept=".jpg" onchange="showPreview(event);">
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="tutup_kyn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="simpan_kyn" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <style>
        img {
            border: 2px solid #555;
        }
    </style>
    <!-- Modal Info -->
    <div class="modal fade" id="info_kyn" tabindex="-1" role="dialog" aria-labelledby="infoKynLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="infoKynLabel">Detail Karyawan</h4>
                    <button type="button" class="close tutup_info" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <form method="post" id="upload-image-form" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="idimg" id="idimg" hidden>
                                                <input type="text" name="kynnip" id="kynnip" hidden>
                                                <div class="image-upload">
                                                    <label for="file-input">
                                                        <img src="" id="image_user" class=" foto-kar" width="250" />
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <!-- <input type="file" name="file" class="form-control" id="image-input" hidden> -->
                                                    <input name="file" hidden class="form-control" type="file" id="image-input" accept=".jpg" onchange="showPreview1(event);">
                                                    <span class="text-danger" id="image-input-error"></span>
                                                </div>

                                                <div class="form-group">
                                                    <button id="clickSubmit" type="button" class="btn btn-success">Pilih Gambar</button>
                                                    <button id="sumbitClick" type="submit" class="btn btn-success" style="display: none;">Upload</button>
                                                </div>
                                            </form>
                                            <input type="text" name="id" id="id" hidden>
                                            <div class="mt-3">
                                                <h4 class="namaKar">Nama Karyawan</h4>
                                                <p class="text-secondary mb-1 jabatanKar">Jabatan</p>
                                                <p>Salary</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p><i></i></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <form method="post" id="editKarForm" name="editKarForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <!--  -->
                                                <input type="hidden" name="uniqueID" id="id-kar">
                                                <!--  -->
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">NIP / NIK</h6>
                                                </div>
                                                <!-- <input type="hidden" name="id" id="id"> -->
                                                <div class="col-sm-9 text-secondary ">
                                                    <input name="nipkyn" id="nip-kar" type="text" style="border:none; background: transparent; outline: 0; " disabled readonly />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nama</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary ">
                                                    <input name="namakyn" id="nama-kar" type="text" style="border:none; background: transparent; outline: 0;" disabled />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary ">
                                                    <input name="emailkyn" id="email-kar" type="email" style="border:none; background: transparent; outline: 0;" disabled />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">No Telp</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary ">
                                                    <input name="hpkyn" id="hp-kar" type="text" style="border:none; background: transparent; outline: 0;" disabled />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenis Kelamin</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select class="form-select" id="jk-kar" name="jkkyn" disabled>
                                                        <option selected disabled value="">Jenis Kelamin</option>
                                                        <option value="Pria">Pria</option>
                                                        <option value="Wanita">Wanita </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jabatan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select class="form-select" id="jabatanKar" name="jabatankyn" disabled>
                                                        <option selected disabled value="">Pilih Jabatan</option>
                                                        @foreach ($jabatan_kyn as $items)
                                                        <option value="{{$items->id_jabatan}}">{{$items->jabatan_kyn}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Agama</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select class="form-select" id="agama-kar" name="agamakyn" disabled>
                                                        <option selected disabled value="">Pilih Agama</option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katolik</option>
                                                        <option>Hindu</option>
                                                        <option>Budha</option>
                                                        <option>Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Status</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select class="form-select" id="status-kar" name="statuskyn" disabled>
                                                        <option selected disabled value="">Status</option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Belum Menikah">Belum Menikah </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Alamat</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <textarea name="alamatkyn" id="alamat-kar" type="text" style="border:none; background: transparent; outline: 0; width:100%" disabled></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <div id="myDivId">
                                                <button type="button" id="myIDdiv" class="btn btn-warning btnClick">Edit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


</div>
<div id="notifDiv" style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
</div>

<div id="loader" class="lds-dual-ring hidden overlay"></div>

@endsection