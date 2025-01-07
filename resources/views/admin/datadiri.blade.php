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
            <h1>Data Calon Peserta Didik</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Calon Peserta Didik</h4>
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
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Nomor Handphone</th>
                                        <th>Detail Data</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Budi</td>
                                        <td>Indonesia</td>
                                        <td>20 Januari 2025</td>
                                        <td>Jakarta</td>
                                        <td>08123456789</td>
                                        <td><a href={{ route('admin-detail-datadiri.index') }}
                                                class="btn btn-primary">Detail</a></td>
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
