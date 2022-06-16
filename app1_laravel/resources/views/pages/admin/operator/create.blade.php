@extends('layouts.main')

@section('content')
    <!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Tambah Operator</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form-operator">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" aria-describedby="nama_lengkapHelp" placeholder="Enter nama_lengkap">
                                        <small id="nama_lengkapHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" aria-describedby="nipHelp" placeholder="Enter nip">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="create-operator">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleInputtanggal_lahir" placeholder="tanggal_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <select class="form-control" id="jabatan">
                                            <option value="" selected disabled>-- Pilih Operator --</option>
                                            <option value="Boiler">Boiler</option>
                                            <option value="Turbine">Turbine</option>
                                            <option value="Control Room">Control Room (CCR)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="grade">Grade</label>
                                        <select class="form-control" id="grade">
                                            <option value="" selected disabled>-- Pilih Grade--</option>
                                            <option value="Functional">Functional</option>
                                            <option value="Spesific">Spesific</option>
                                            <option value="System">System</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select class="form-control" id="jk">
                                            <option value="" selected disabled>-- Pilih Jenis Kelamin--</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_profil">Foto Profil</label>
                                        <input type="file" id="foto_profil" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
@endsection

@push('jquery-script')
    <script>
        $(document).ready(function(){
            $('#create-operator').click(function(){
                alert()
            });
        });
    </script>
@endpush