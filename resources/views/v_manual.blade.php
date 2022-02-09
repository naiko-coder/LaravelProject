@extends('layout.v_main')
<title>Absensi Manual</title>
@section('content')

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<div>
    <h4 class="m-0">Absensi Manual</h4>
</div>
<br>

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mt-4">
                        <div class="relative row">
                            <form method="post" id="manualAbsenForm">
                                <label class="col-sm-2 form-inline">Karyawan</label>
                                <select class="form-select pilih_karyawan" id="pilih_nama" aria-label="Default select example" name="pilih_karyawan">
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
                <div class="row">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form8Example3">Nip</label>
                            <input type="text" id="form8Example3" class="form-control" name="nip_karyawan" readonly />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form8Example4">Nama</label>
                            <input type="text" id="form8Example4" class="form-control" name="nama_karyawan" readonly />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form8Example5">Jabatan</label>
                            <input type="email" id="form8Example5" class="form-control" name="jabatan_karyawan" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <br>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example6">Tanggal</label>
                        <input type="date" id="form8Example6" class="form-control" name="tanggal_input" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example6">Keterangan</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioOption" id="inlineRadio" value="Sakit">
                            <label class="form-check-label" for="inlineRadio1">Sakit</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioOption" id="inlineRadio" value="Izin">
                            <label class="form-check-label" for="inlineRadio2">Izin</label>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <br>
            <button class="btn btn-primary btn-sm saveManual">Simpan</button>
        </div>
    </div>
</div>

@endsection