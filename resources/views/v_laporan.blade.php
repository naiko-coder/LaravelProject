@extends('layout.v_main')
<title>Laporan Absensi</title>
@section('content')

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<div>
    <h4 class="m-0">Laporan Absensi</h4>
</div>
<br>

<div>
    <div>
        <form>
            <br>
            <div class="form-row input-daterange">
                <div>
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                </div>
                <div>
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-danger">Refresh</button>
                </div>
                <!-- <div class="col-md-3" style="text-align:right;">
                    <select class=" form-select select-name" id=" idSelect" aria-label="Default select example" name="pilih_nama">
                        <option selected disabled value="">-Filter by name-</option>

                    </select>
                </div> -->
            </div>

            <br>
        </form>
    </div>
</div>

<div>
    <table id="tb_laporan" class="table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="15%">NIP</th>
                <th width="15%">Nama</th>
                <th width="15%">Jabatan</th>
                <th width="10%">Jam Masuk</th>
                <th width="10%">Jam Pulang</th>
                <th width="10%">Tanggal</th>
                <th width="10%">Info</th>
            </tr>
        </thead>

    </table>
</div>




@endsection