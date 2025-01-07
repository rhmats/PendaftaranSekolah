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
            <h1>Detail Data Orang tua</h1>
        </div>
        <div class="section-body">
            <a href={{ route('admin-data-orangtua.index') }} class="btn btn-primary">Kembali</a>
        </div>
    </section>
@endsection
