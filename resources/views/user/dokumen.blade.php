@extends('layouts-default.default')

@section('title', 'CRUD')

@section('sidebar')
    <li class="dropdown">
        <a href={{ route('user.dashboard') }}><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown">
        <a href={{ route('pembayaran.index') }}><i class="far fa-money-bill-alt"></i><span>Uang Pendaftaran</span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Data Calon Siswa</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href={{ route('datadiri.index') }}>Data Diri</a></li>
            <li><a class="nav-link" href={{ route('dataorangtua.index') }}>Data Orang Tua</a></li>
            <li><a class="nav-link" href={{ route('dokumen.index') }}>Data Dokumen</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href={{ route('resume.index') }}><i class="fas fa-file"></i><span>Resume Pendaftaran</span></a>
    </li>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dokumen</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                @csrf
                                <div class="form-group">
                                    <label for="pas_photo">Pas Photo 3x4</label>
                                    <input type="file" name="pas_photo" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="kartu_keluarga">Kartu Keluarga</label>
                                    <input type="file" name="kartu_keluarga" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="akta_kelahiran">Akta Kelahiran</label>
                                    <input type="file" name="akta_kelahiran" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="ktp">KTP Orang Tua/Wali</label>
                                    <input type="file" name="ktp" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="ijazah/skhun">Ijazah/SKHUN</label>
                                    <input type="file" name="ijazah/skhun" class="form-control" multiple required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
