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
            <h1>Data diri</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="section-body">
            <form action="{{ route('datadiri.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi Pribadi</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input id="nik" name="nik" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="" disabled selected>Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi Akademik</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_sekolah">Nama Sekolah</label>
                                    <input id="nama_sekolah" name="nama_sekolah" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input id="asal_sekolah" name="asal_sekolah" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="npsn_sekolah">NPSN Sekolah Asal</label>
                                    <input id="npsn_sekolah" name="npsn_sekolah" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_sekolah">Alamat Sekolah</label>
                                    <textarea id="alamat_sekolah" name="alamat_sekolah" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_lulus">Tahun Lulus</label>
                                    <input id="tahun_lulus" name="tahun_lulus" type="number" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_ijazah">Nomor Ijazah</label>
                                    <input id="nomor_ijazah" name="nomor_ijazah" type="text" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_skhun">Nomor SKHUN (Jika Ada)</label>
                                    <input id="nomor_skhun" name="nomor_skhun" type="text" class="form-control">
                                    <p style="font-style: italic">Jika SKHUN belum ada, tuliskan belum ada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Alamat</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
                                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                                        <option value="wni">WNI</option>
                                        <option value="wni">WNA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="rt_rw">RT/RW</label>
                                    <input id="rt_rw" name="rt_rw" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan/Desa</label>
                                    <input id="kelurahan" name="kelurahan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input id="kecamatan" name="kecamatan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input id="kabupaten" name="kabupaten" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input id="kode_pos" name="kode_pos" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor HP/WhatsApp</label>
                                    <input id="nomor_hp" name="nomor_hp" type="tel" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
