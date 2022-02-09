@extends('layout.v_main')
<title>User Management</title>
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

    body {
        background: #eee;
    }

    .main-box.no-header {
        padding-top: 20px;
    }

    .main-box {
        background: #FFFFFF;
        -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
        box-shadow: 1px 1px 2px 0 #CCCCCC;
        margin-bottom: 16px;
        -webikt-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .table a.table-link.danger {
        color: #e74c3c;
    }

    .label {
        border-radius: 3px;
        font-size: 0.875em;
        font-weight: 600;
    }

    .user-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .user-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .user-list tbody td>img {
        position: relative;
        max-width: 50px;
        float: left;
        margin-right: 15px;
    }

    .table thead tr th {
        text-transform: uppercase;
        font-size: 0.875em;
    }

    .table thead tr th {
        border-bottom: 2px solid #e7ebee;
    }

    .table tbody tr td:first-child {
        font-size: 1.125em;
        font-weight: 300;
    }

    .table tbody tr td {
        font-size: 0.875em;
        vertical-align: middle;
        border-top: 1px solid #e7ebee;
        padding: 12px 8px;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
</div>
<br>
<!-- 
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif -->



<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">User Management
                    <button type="hidden" style="display: none;" id="btnadduser" class="btn btn-primary fa fa-user-plus float-right" data-toggle="modal" data-target=".modalEditUser"></button>
                    <button type="button" class="btn btn-primary fa fa-user-plus float-right" data-toggle="modal" data-target=".modalAddUser"></button>
                </h2>
            </div>
        </header>
    </div>
    <div class="table-responsive">
        <table id="tblUserList" class="table user-list">
            <thead>
                <tr>
                    <th><span>User</span></th>
                    <th><span>Created</span></th>
                    <th>level</th>
                    <th><span>Email</span></th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal fade modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate method="post" id="formAddUser">
                            @csrf
                            <div class="form-group row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputUsername" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Username tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Email tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Password tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="inputLevel" name="level" required>
                                        <option selected disabled value="">Pilih Level</option>
                                        <option value="Admin">Administrator</option>
                                        <option value="User">User </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan pilih level
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" id="tutupUser" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalEditUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate method="post" id="formEditUser">
                            @csrf
                            <div class="form-group row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Username tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="ids" id="ids">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Email tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Password tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="inputLevels" name="level" required>
                                        <option selected disabled value="">Pilih Level</option>
                                        <option value="Admin">Administrator</option>
                                        <option value="User">User </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan pilih level
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" id="tutupEdit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    @endsection