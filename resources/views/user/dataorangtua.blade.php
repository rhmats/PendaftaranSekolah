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
            <h1>Data Orang tua</h1>
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
            <form action="{{ route('dataorangtua.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Ayah</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input id="nama_ayah" name="nama_ayah" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nik_ayah">NIK</label>
                                    <input id="nik_ayah" name="nik_ayah" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah</label>
                                    <select name="pendidikan_terakhir_ayah" id="pendidikan_terakhir_ayah"
                                        class="form-control" required>
                                        <option value="" disabled selected>Pilih Pendidikan Terakhir Ayah</option>
                                        <option value="tidak_sekolah">Tidak Sekolah</option>
                                        <option value="paud">Paud</option>
                                        <option value="tk_sederajat">TK/Sederajat</option>
                                        <option value="putus_sd">Putus SD</option>
                                        <option value="sd_sederajat">SD/Sederajat</option>
                                        <option value="smp_sederajat">SMP/Sederajat</option>
                                        <option value="sma_sederajat">SMA/Sederajat</option>
                                        <option value="paket_a">Paket A</option>
                                        <option value="paket_b">Paket B</option>
                                        <option value="paket_C">Paket C</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="profesi">Profesi</option>
                                        <option value="s1">S1</option>
                                        <option value="sp1">Sp-1</option>
                                        <option value="s2">S2</option>
                                        <option value="sp2">Sp-2</option>
                                        <option value="s3">S3</option>
                                        <option value="non_formal">Non Formal</option>
                                        <option value="informal">informal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah">Pekerjaan</label>
                                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
                                        <option value="" disabled selected>Pilih Pekerjaan Ayah</option>
                                        <option value="tidak_bekerja">Tidak Bekerja</option>
                                        <option value="nelayan">Nelayan</option>
                                        <option value="petani">Petani</option>
                                        <option value="peternak">Peternak</option>
                                        <option value="pppk_pns_tni_polri">PPPK/PNS/TNI/POLRI</option>
                                        <option value="karyawan_swasta">Karyawan Swasta</option>
                                        <option value="pedagang_kecil">Pedagang Kecil</option>
                                        <option value="pedagang_besar">Pedagang Besar</option>
                                        <option value="wiraswasta">Wiraswasta</option>
                                        <option value="wirausaha">Wirausaha</option>
                                        <option value="buruh">Buruh</option>
                                        <option value="pensiunan">Pensiunan</option>
                                        <option value="pegawai_bumn">Pegawai BUMN</option>
                                        <option value="pegawai_bumd">Pegawai BUMD</option>
                                        <option value="sudah_meninggal">Sudah Meninggal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                    <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" required>
                                        <option value="" disabled selected>Pilih Penghasilan Ayah</option>
                                        <option value="tidak_ada_penghasilan">Tidak Ada Penghasilan</option>
                                        <option value="kurang_dari_500">Kurang dari Rp. 500.000,00</option>
                                        <option value="500_999">Rp. 500.000,00 - Rp. 999.999,00</option>
                                        <option value="1juta_1juta900">Rp. 1.000.000,00 - Rp. 1.999.999,00</option>
                                        <option value="2juta_4juta900">Rp. 2.000.000,00 - Rp. 4.999.999,00</option>
                                        <option value="5juta_20juta">Rp. 5.000.000,00 - Rp. 20.000.000,00</option>
                                        <option value="lebih_dari_20juta">Lebih dari Rp. 20.000.000,00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp_ayah">Nomor Handphone</label>
                                    <input id="nomor_hp_ayah" name="nomor_hp_ayah" type="tel" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Ibu</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input id="nama_ibu" name="nama_ibu" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nik_ibu">NIK</label>
                                    <input id="nik_ibu" name="nik_ibu" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                    <select name="pendidikan_terakhir_ibu" id="pendidikan_terakhir_ibu"
                                        class="form-control" required>
                                        <option value="" disabled selected>Pilih Pendidikan Terakhir Ibu</option>
                                        <option value="tidak_sekolah">Tidak Sekolah</option>
                                        <option value="paud">Paud</option>
                                        <option value="tk_sederajat">TK/Sederajat</option>
                                        <option value="putus_sd">Putus SD</option>
                                        <option value="sd_sederajat">SD/Sederajat</option>
                                        <option value="smp_sederajat">SMP/Sederajat</option>
                                        <option value="sma_sederajat">SMA/Sederajat</option>
                                        <option value="paket_a">Paket A</option>
                                        <option value="paket_b">Paket B</option>
                                        <option value="paket_C">Paket C</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="profesi">Profesi</option>
                                        <option value="s1">S1</option>
                                        <option value="sp1">Sp-1</option>
                                        <option value="s2">S2</option>
                                        <option value="sp2">Sp-2</option>
                                        <option value="s3">S3</option>
                                        <option value="non_formal">Non Formal</option>
                                        <option value="informal">informal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required>
                                        <option value="" disabled selected>Pilih Pekerjaan Ibu</option>
                                        <option value="tidak_bekerja">Tidak Bekerja</option>
                                        <option value="nelayan">Nelayan</option>
                                        <option value="petani">Petani</option>
                                        <option value="peternak">Peternak</option>
                                        <option value="pppk_pns_tni_polri">PPPK/PNS/TNI/POLRI</option>
                                        <option value="karyawan_swasta">Karyawan Swasta</option>
                                        <option value="pedagang_kecil">Pedagang Kecil</option>
                                        <option value="pedagang_besar">Pedagang Besar</option>
                                        <option value="wiraswasta">Wiraswasta</option>
                                        <option value="wirausaha">Wirausaha</option>
                                        <option value="buruh">Buruh</option>
                                        <option value="pensiunan">Pensiunan</option>
                                        <option value="pegawai_bumn">Pegawai BUMN</option>
                                        <option value="pegawai_bumd">Pegawai BUMD</option>
                                        <option value="sudah_meninggal">Sudah Meninggal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                    <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" required>
                                        <option value="" disabled selected>Pilih Penghasilan Ibu</option>
                                        <option value="tidak_ada_penghasilan">Tidak Ada Penghasilan</option>
                                        <option value="kurang_dari_500">Kurang dari Rp. 500.000,00</option>
                                        <option value="500_999">Rp. 500.000,00 - Rp. 999.999,00</option>
                                        <option value="1juta_1juta900">Rp. 1.000.000,00 - Rp. 1.999.999,00</option>
                                        <option value="2juta_4juta900">Rp. 2.000.000,00 - Rp. 4.999.999,00</option>
                                        <option value="5juta_20juta">Rp. 5.000.000,00 - Rp. 20.000.000,00</option>
                                        <option value="lebih_dari_20juta">Lebih dari Rp. 20.000.000,00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp_ibu">Nomor Handphone</label>
                                    <input id="nomor_hp_ibu" name="nomor_hp_ibu" type="tel" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Wali (Jika Ada)</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_wali">Nama Wali</label>
                                    <input id="nama_wali" name="nama_wali" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nik_wali">NIK</label>
                                    <input id="nik_wali" name="nik_wali" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_wali">Pekerjaan</label>
                                    <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
                                        <option value="" disabled selected>Pilih Pekerjaan Wali</option>
                                        <option value="tidak_bekerja">Tidak Bekerja</option>
                                        <option value="nelayan">Nelayan</option>
                                        <option value="petani">Petani</option>
                                        <option value="peternak">Peternak</option>
                                        <option value="pppk_pns_tni_polri">PPPK/PNS/TNI/POLRI</option>
                                        <option value="karyawan_swasta">Karyawan Swasta</option>
                                        <option value="pedagang_kecil">Pedagang Kecil</option>
                                        <option value="pedagang_besar">Pedagang Besar</option>
                                        <option value="wiraswasta">Wiraswasta</option>
                                        <option value="wirausaha">Wirausaha</option>
                                        <option value="buruh">Buruh</option>
                                        <option value="pensiunan">Pensiunan</option>
                                        <option value="pegawai_bumn">Pegawai BUMN</option>
                                        <option value="pegawai_bumd">Pegawai BUMD</option>
                                        <option value="sudah_meninggal">Sudah Meninggal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_terakhir_wali">Pendidikan Terakhir Wali</label>
                                    <select name="pendidikan_terakhir_wali" id="pendidikan_terakhir_wali"
                                        class="form-control">
                                        <option value="" disabled selected>Pilih Pendidikan Terakhir Wali</option>
                                        <option value="tidak_sekolah">Tidak Sekolah</option>
                                        <option value="paud">Paud</option>
                                        <option value="tk_sederajat">TK/Sederajat</option>
                                        <option value="putus_sd">Putus SD</option>
                                        <option value="sd_sederajat">SD/Sederajat</option>
                                        <option value="smp_sederajat">SMP/Sederajat</option>
                                        <option value="sma_sederajat">SMA/Sederajat</option>
                                        <option value="paket_a">Paket A</option>
                                        <option value="paket_b">Paket B</option>
                                        <option value="paket_C">Paket C</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="profesi">Profesi</option>
                                        <option value="s1">S1</option>
                                        <option value="sp1">Sp-1</option>
                                        <option value="s2">S2</option>
                                        <option value="sp2">Sp-2</option>
                                        <option value="s3">S3</option>
                                        <option value="non_formal">Non Formal</option>
                                        <option value="informal">informal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp_wali">Nomor Handphone</label>
                                    <input id="nomor_hp_wali" name="nomor_hp_wali" type="tel" class="form-control">
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
