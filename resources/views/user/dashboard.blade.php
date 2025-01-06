@extends('layouts-default.default')

@section('title', 'CRUD')

@section('sidebar')
    <li class="dropdown">
        <a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown">
        <a href="#"><i class="far fa-money-bill-alt"></i><span>Uang Pendaftaran</span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Data Calon Siswa</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="index.html">Data Diri</a></li>
            <li><a class="nav-link" href="index.html">Data Orang Tua</a></li>
            <li><a class="nav-link" href="index.html">Data Dokumen</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#"><i class="fas fa-file"></i><span>Resume Pendaftaran</span></a>
    </li>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard User</h1>
        </div>

        <div class="section-body">

        </div>
    </section>
@endsection
