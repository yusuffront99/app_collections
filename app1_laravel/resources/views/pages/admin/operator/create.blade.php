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
                            <div class="col-md-12">
                                <form id="form-operator" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap" name="" id="nama_lengkap" aria-describedby="nama_lengkapHelp" placeholder="Enter nama_lengkap">
                                                <small id="nama_lengkapHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" class="form-control" name="nip" id="nip" aria-describedby="nipHelp" placeholder="Enter nip">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" name="" id="tanggal_lahir" aria-describedby="tanggal_lahirHelp" placeholder="Enter tanggal_lahir">
                                                <small id="tanggal_lahirHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan" class="form-select">Jabatan</label>
                                                <select name="jabatan" id="jabatan" class="form-control">
                                                    <option value="" selected disabled>-- Pilih Jabatan --</option>
                                                    <option value="Turbine">Turbine</option>
                                                    <option value="Boiler">Boiler</option>
                                                    <option value="Lokal">Lokal</option>
                                                    <option value="Supervisior">Supervisior</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="grade" class="form-select">Grade</label>
                                                <select name="grade" id="grade" class="form-control">
                                                    <option value="" selected disabled>-- Pilih grade --</option>
                                                    <option value="Functional">Functional</option>
                                                    <option value="Specific">Specific</option>
                                                    <option value="System">System</option>
                                                    {{-- <option value="Supervisior">Supervisior</option> --}}
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="jk" class="form-select">Jenis Kelamin</label>
                                                <select name="jk" id="jk" class="form-control">
                                                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto_profil">Password</label>
                                                <input type="file" class="form-control" name="foto_profil" id="foto_profil" placeholder="foto profil">
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="create-operator">Submit</button>
                                        </div>
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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#create-operator').click(function(e){
                e.preventDefault();

                $.ajax({
                    data: $('#form-operator').serialize(),
                    url: "{{route('operator_store')}}",
                    type: 'POST',
                    dataType: 'JSON',

                    success: function(data){
                        alert('success');
                    },
                    error: function(data){
                        console.error(data);
                    }
                })
            });
        });
    </script>
@endpush