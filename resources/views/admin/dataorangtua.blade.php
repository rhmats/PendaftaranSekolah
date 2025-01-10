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
            <h1>Data Orang Tua Calon Peserta Didik</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Orang Tua</h4>
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
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Nomor Handphone Ayah</th>
                                        <th>Nomor Handphone Ibu</th>
                                        <th>Detail Data</th>
                                    </tr>
                                    <tr>
                                        @foreach ($dataorangtua as $index => $orangtua)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $orangtua->datadiri->nama_lengkap }}</td> <!-- Menampilkan Nama Lengkap -->
                                        <td>{{ $orangtua->nama_ayah }}</td>
                                        <td>{{ $orangtua->nama_ibu }}</td>
                                        <td>{{ $orangtua->nomor_hp_ayah }}</td>
                                        <td>{{ $orangtua->nomor_hp_ibu }}</td>
                                        <td><a href="{{ route('admin-detail-data-orangtua.index', $orangtua->id) }}"
                                                class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    @endforeach
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
