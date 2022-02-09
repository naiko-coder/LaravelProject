@extends('layout.v_main')
<title>Data Jabatan</title>
@section('content')

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>

<div>
    <div>
        <button type="button" id="tambah" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal_tambah">
            Tambah Jabatan
        </button>
    </div>
    <h4 class="m-0">Data Jabatan</h4>
</div>
<br>
<div class="page">
    <div>
        <table id="tb_jabatan" class="table table-striped table-bordered table-hover" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th width="80%">Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>

        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- mb -->
                    <div class=" mb-3">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan_kyn" class="form-control" id="jabatan_kyn" placeholder="Masukkan Jabatan disini" required>
                    </div>
                    <input type="hidden" name="id" id="id">
                    <!-- /mb -->
                </div>

                <div class="modal-footer">
                    <button type="button" id="tutup" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection