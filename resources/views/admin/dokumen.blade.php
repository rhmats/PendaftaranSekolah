@extends('layouts-default.default')

@section('title', 'CRUD')

@section('sidebar')
    <li class="dropdown">
        <a href={{ route('admin.dashboard') }}><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Data Calon Siswa</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href={{ route('admin-pembayaran.index') }}>Data Pembayaran</a></li>
            <li><a class="nav-link" href={{ route('admin-datadiri.index') }}>Data Diri</a></li>
            <li><a class="nav-link" href={{ route('admin-data-orangtua.index') }}>Data Orang Tua</a></li>
            <li><a class="nav-link" href={{ route('admin-dokumen.index') }}>Data Dokumen</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Resume Pendaftaran</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="index.html">Sedang di proses</a></li>
            <li><a class="nav-link" href="index.html">Telah di proses</a></li>
        </ul>
    </li>

@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dokumen Calon Peserta Didik</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dokumen Calon Peserta Didik</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Pas Photo</th>
                                        <th>Kartu Keluarga</th>
                                        <th>Akta Kelahiran</th>
                                        <th>KTP Orang Tua/Wali</th>
                                        <th>Ijazah/SKHUN</th>
                                        <th>Download</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Budi</td>
                                        <td>file</td>
                                        <td>file</td>
                                        <td>file</td>
                                        <td>file</td>
                                        <td>file</td>
                                        <td><a href="" class="btn btn-primary">Download Dokumen</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
