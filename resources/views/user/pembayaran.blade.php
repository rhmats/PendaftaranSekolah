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
            <h1>Uang Pendaftaran</h1>
        </div>

        <div class="section-body">
            <form action="" method="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input id="nama" name="nama" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_pembayaran">Bank Pembayaran</label>
                                    <select name="jenis_pembayaran" class="form-control" required>
                                        <option value="" disabled selected>Pilih Bank Pembayaran</option>
                                        <option value="bank_bri">Bank BRI</option>
                                        <option value="bank_mandiri">Bank Mandiri</option>
                                        <option value="bank_bca">Bank BCA</option>
                                        <option value="bank_bni">Bank BNI</option>
                                        <option value="bank_danamon">Bank Danamon</option>
                                        <option value="bank_cimb">Bank CIMB Niaga</option>
                                        <option value="bank_mega">Bank Mega</option>
                                        <option value="bank_permata">Bank Permata</option>
                                        <option value="lainnya">Bank Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Pembayaran</label>
                                    <input id="jumlah" name="jumlah" type="number" placeholder="Rp. 250.000"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_bayar">Tanggal Pembayaran</label>
                                    <input id="tanggal_bayar" name="tanggal_bayar" type="date" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                                    <input type="file" class="form-control" name="bukti_pembayaran"
                                        accept="image/jpeg,image/png" required>
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
