<!DOCTYPE html>
<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        h2 {
            text-align: center;
            margin-top: 16px;
        }

        .fpd {
            font-weight: bold;
            color: black;
            padding: 5px;
            float: right;
        }

        .btn btn-primary {
            color: black;
            padding: 5px;
            margin-bottom: 10hv;
        }

        form {
            margin-bottom: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>FORMULIR PESERTA DIDIK</h2>
        <p style="font-weight: bold;">Tanggal : <?php echo date('d F Y'); ?><span class="fpd" style="border: 3px solid black; padding: 0.2px 50px;">F-PD</span></p>

        <?php
        $counter = 1; // add a counter variable 
        ?>
        <form id="FormPDrendi" method="post" action="F-PD_FIX_BANGET.php">
            <!-- FORM DATA REGISTRASI -->
            <div class="form-registrasi">
                <h4 class="bg-dark text-white p-1">REGISTRASI PESERTA DIDIK</h4>
                <div class="form-group row">
                    <label for="jenis_pendaftaran" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Jenis Pendaftaran:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_pendaftaran" value="Pindahan">Pindahan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_masuk" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Tanggal Masuk Sekolah:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nis" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. NIS:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nis">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_peserta_ujian" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nomor Peserta Ujian:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nomor_peserta_ujian" placeholder="Isi dengan 20 digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP" style="font-style: italic;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pernah_paud" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Apakah Pernah PAUD:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pernah_paud" value="Ya">Ya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pernah_paud" value="Tidak">Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pernah_tk" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Apakah Pernah TK:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pernah_tk" value="Ya">Ya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pernah_tk" value="Tidak">Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_seri_skhun_sebelumnya" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. No.Seri SKHUN Sebelumnya:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_seri_skhun_sebelumnya" placeholder="Isi dengan 16 digit yang tertera di SKHUN SD - diisi bagi PD jenjang SMP" style="font-style: italic;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_seri_ijazah_sebelumnya" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. No.Seri Ijazah Sebelumnya:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_seri_ijazah_sebelumnya" placeholder="Isi dengan 16 digit yang tertera di Ijazah SD - diisi bagi PD jenjang SMP" style="font-style: italic;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hobi" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Hobi:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="hobi[]" value="Olahraga">Olahraga
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="hobi[]" value="Kesenian">Kesenian
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="hobi[]" value="Membaca">Membaca
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="hobi[]" value="Menulis">Menulis
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="hobi[]" value="Lainnya">Lainnya
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cita_cita" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Cita-cita:</label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="PNS">PNS
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="TNI/POLRI">TNI/POLRI
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Guru/Dosen">Guru/Dosen
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Dokter">Dokter
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Politikus">Politikus
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Wiraswasta">Wiraswasta
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cita_cita[]" value="Lainnya">Lainnya
                        </label>
                    </div>
                </div>
                <button class="btn-next" type="button" style="float: right;">Next</button>
            </div>

            <!-- FORM DATA PRIBADI -->
            <div class="form-pribadi" style="display: none;">
                <h5 class="bg-dark text-white p-1">DATA PRIBADI</h5>
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nama Lengkap:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Jenis Kelamin:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nisn" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. NISN:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nisn" name="nisn">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nik" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. NIK:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3"><?php echo $counter++; ?>. Tempat Lahir:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="tempat_lahir" id="tgl_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3"><?php echo $counter++; ?>. Tanggal Lahir: </label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3"><?php echo $counter++; ?>. Agama:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Islam" required>Islam
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Kristen/Protestan">Kristen/Protestan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Katolik">Katolik
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Hindu">Hindu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Buddha">Buddha
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Kong Hu Chu">Kong Hu Chu
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="agama" value="Lainnya">Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berkebutuhan_khusus_pribadi" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Berkebutuhan Khusus:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="tidak" name="berkebutuhan_khusus_pribadi[]" value="Tidak">
                            <label class="form-check-label" for="tidak"><b>Tidak</b></label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="netra" name="berkebutuhan_khusus_pribadi[]" value="Netra(A)">
                            <label class="form-check-label" for="netra">Netra (A)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="rungu" name="berkebutuhan_khusus_pribadi[]" value="Rungu(B)">
                            <label class="form-check-label" for="rungu">Rungu (B)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="grahita-ringan" name="berkebutuhan_khusus_pribadi[]" value="Grahita Ringan(C)">
                            <label class="form-check-label" for="grahita-ringan">Grahita Ringan (C)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="grahita-sedang" name="berkebutuhan_khusus_pribadi[]" value="Grahita Sedang(C1)">
                            <label class="form-check-label" for="grahita-sedang">Grahita Sedang (C1)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="daksa-ringan" name="berkebutuhan_khusus_pribadi[]" value="Daksa Ringan(D)">
                            <label class="form-check-label" for="daksa-ringan">Daksa Ringan (D)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="daksa-sedang" name="berkebutuhan_khusus_pribadi[]" value="Daksa Sedang(D1)">
                            <label class="form-check-label" for="daksa-sedang">Daksa Sedang (D1)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="laras" name="berkebutuhan_khusus_pribadi[]" value="Laras(E)">
                            <label class="form-check-label" for="laras">Laras (E)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="wicara" name="berkebutuhan_khusus_pribadi[]" value="Wicara(F)">
                            <label class="form-check-label" for="wicara">Wicara (F)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="tuna-ganda" name="berkebutuhan_khusus_pribadi[]" value="Tuna Ganda(G)">
                            <label class="form-check-label" for="tuna-ganda">Tuna Ganda (G)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hiper-aktif" name="berkebutuhan_khusus_pribadi[]" value="Hiper Aktif(H)">
                            <label class="form-check-label" for="hiper-aktif">Hiper Aktif (H)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="cerdas-istimewa" name="berkebutuhan_khusus_pribadi[]" value="Cerdas Istimewa(I)">
                            <label class="form-check-label" for="cerdas-istimewa">Cerdas Istimewa (I)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="bakat-istimewa" name="berkebutuhan_khusus_pribadi[]" value="Bakat Istimewa(J)">
                            <label class="form-check-label" for="bakat-istimewa">Bakat Istimewa (J)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="kesulitan-belajar" name="berkebutuhan_khusus_pribadi[]" value="Kesulitan Belajar(K)">
                            <label class="form-check-label" for="kesulitan-belajar">Kesulitan Belajar (K)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="narkoba" name="berkebutuhan_khusus_pribadi[]" value="Narkoba(N)">
                            <label class="form-check-label" for="narkoba">Narkoba (N)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="indigo" name="berkebutuhan_khusus_pribadi[]" value="Indigo(O)">
                            <label class="form-check-label" for="indigo">Indigo (O)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="down-syndrome" name="berkebutuhan_khusus_pribadi[]" value="Down Syndrome(P)">
                            <label class="form-check-label" for="down-syndrome">Down Syndrome (P)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="autis" name="berkebutuhan_khusus_pribadi[]" value="Autis(Q)">
                            <label class="form-check-label" for="autis">Autis (Q)</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_jalan" class="col-sm-3 col-form-label"><?php echo $counter++; ?>.Alamat Jalan:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rt" class="col-sm-3 col-form-label"><?php echo $counter++; ?>.RT:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="rt" name="rt">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rw" class="col-sm-3 col-form-label"><?php echo $counter++; ?>.RW:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="rw" name="rw">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dusun" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nama Dusun:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="dusun" name="dusun"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="desa" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nama Kelurahan/Desa:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="desa" name="desa"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Kecamatan:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode_pos" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Kode Pos:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" maxlength="8">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_tinggal" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Tempat Tinggal:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Bersama orang tua">Bersama orang tua
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Wali">Wali
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Kos">Kos
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Asrama">Asrama
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Panti Asuhan">Panti Asuhan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tempat_tinggal" value="Lainnya">Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="moda_transportasi" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Moda Transportasi:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Jalan Kaki">Jalan Kaki
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Kendaraan Pribadi">Kendaraan Pribadi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Jemputan Sekolah">Jemputan Sekolah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Kereta Api">Kereta Api
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Ojek">Ojek
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Perahu Penyeberangan/Rakit/Getek">Perahu Penyeberangan/Rakit/Getek
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="moda_transportasi" value="Lainnya">Lainnya
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_hp" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nomor HP:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="nomor_hp" placeholder="08xxxxxxxxxx" style="font-style: italic;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_telepon" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nomor Telepon:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="nomor_telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email_pribadi" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. E-mail Pribadi:</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" name="email_pribadi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerima_kps" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Penerima KPS/KKS/PKH/KIP:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penerima_kps" value="Ya">Ya
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penerima_kps" value="Tidak">Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_kps" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. No. KPS/KKS/PKH/KIP:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="no_kps" placeholder="Isi dengan nomor KPS/KKS/PKH/KIP" style="font-style: italic;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kewarganegaraan" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Kewarganegaraan:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kewarganegaraan" value="Indonesia(WNI)">Indonesia(WNI)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kewarganegaraan" value="Asing(WNA)">Asing(WNA)
                            </label>
                        </div>
                        <input type="text" class="form-control" name="negara" placeholder="Isi dengan nama negara" style="font-style: italic; display: none;">
                    </div>
                </div>
                <script>
                    $('input[name="kewarganegaraan"]').on('change', function() {
                        if ($(this).val() == "Asing(WNA)") {
                            $('input[name="negara"]').show();
                        } else {
                            $('input[name="negara"]').hide();
                        }
                    });
                </script>
                <button class="btn-next" type="button" style="float: right;">Next</button>
                <button class="btn-prev" type="button" style="float: left;">Previous</button>
            </div>

            <!-- FORM DATA AYAH -->
            <div class="form-ayah" style="display: none;">
                <h5 class="bg-dark text-white p-1">DATA AYAH KANDUNG</h5>
                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nama Ayah Kandung:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah Kandung">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Tanggal Lahir Ayah:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tgl_lahir_ayah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Pendidikan Ayah:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="Tidak Sekolah">Tidak Sekolah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="Putus SD">Putus SD
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="SD Sederajat">SD Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="SMP Sederajat">SMP Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="SMA Sederajat">SMA Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="D1">D1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="D2">D2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="D3">D3
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="D4/S1">D4/S1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="S2">S2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ayah" value="S3">S3
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Pekerjaan:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Tidak Bekerja">Tidak Bekerja
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Nelayan">Nelayan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Petani">Petani
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Peternak">Peternak
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="PNS/TNI/POLRI">PNS/TNI/POLRI
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Karyawan Swasta">Karyawan Swasta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Pedagang Kecil">Pedagang Kecil
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Pedagang Besar">Pedagang Besar
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Wiraswasta">Wiraswasta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Wirausaha">Wirausaha
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Buruh">Buruh
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Pensiunan">Pensiunan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ayah" value="Lain-lain">Lain-lain
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penghasilan_bulanan_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Penghasilan Bulanan:</label>
                    <div class="col-sm-9">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ayah" value="Kurang dari Rp500.000">Kurang dari Rp500.000
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ayah" value="Rp500.000 - Rp999.999">Rp500.000 - Rp999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ayah" value="1juta - Rp1.999.999">1juta - Rp1.999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan" value="2juta - Rp4.999.999">2juta - Rp4.999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ayah" value="5juta - 20juta">5juta - 20juta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ayah" value="Lebih dari 20juta">Lebih dari 20juta
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berkebutuhan_khusus_ayah" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Berkebutuhan Khusus:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Tidak">Tidak
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Netra(A)">Netra(A)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Rungu(B)">Rungu(B)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Grahita Ringan(C)">Grahita Ringan(C)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Grahita Sedang(C1)">Grahita Sedang(C1)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Daksa Ringan(D)">Daksa Ringan(D)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Daksa Sedang(D1)">Daksa Sedang(D1)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Laras(E)">Laras(E)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Wicara(F)">Wicara(F)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Tuna Ganda(G)">Tuna Ganda(G)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ayah[]" value="Hiper Aktif(H)">Hiper Aktif(H)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="cerdas-istimewa" name="berkebutuhan_khusus_ayah[]" value="Cerdas Istimewa(I)">
                            <label class="form-check-label" for="cerdas-istimewa">Cerdas Istimewa (I)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="bakat-istimewa" name="berkebutuhan_khusus_ayah[]" value="Bakat Istimewa(J)">
                            <label class="form-check-label" for="bakat-istimewa">Bakat Istimewa (J)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="kesulitan-belajar" name="berkebutuhan_khusus_ayah[]" value="Kesulitan Belajar(K)">
                            <label class="form-check-label" for="kesulitan-belajar">Kesulitan Belajar (K)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="narkoba" name="berkebutuhan_khusus_ayah[]" value="Narkoba(N)">
                            <label class="form-check-label" for="narkoba">Narkoba (N)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="indigo" name="berkebutuhan_khusus_ayah[]" value="Indigo(O)">
                            <label class="form-check-label" for="indigo">Indigo (O)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="down-syndrome" name="berkebutuhan_khusus_ayah[]" value="Down Syndrome(P)">
                            <label class="form-check-label" for="down-syndrome">Down Syndrome (P)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="autis" name="berkebutuhan_khusus_ayah[]" value="Autis(Q)">
                            <label class="form-check-label" for="autis">Autis (Q)</label>
                        </div>
                    </div>
                </div>
                <button class="btn-next" type="button" style="float: right;">Next</button>
                <button class="btn-prev" type="button" style="float: left;">Previous</button>
            </div>

            <!-- FORM DATA IBU -->
            <div class="form-ibu" style="display: none;">
                <h5 class="bg-dark text-white p-1">DATA IBU KANDUNG</h5>
                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Nama Ibu Kandung:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_ibu" placeholder="Nama ibu Kandung">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Tanggal Lahir Ibu:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tgl_lahir_ibu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Pendidikan Ibu:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="Tidak Sekolah">Tidak Sekolah
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="Putus SD">Putus SD
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="SD Sederajat">SD Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="SMP Sederajat">SMP Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="SMA Sederajat">SMA Sederajat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="D1">D1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="D2">D2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="D3">D3
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="D4/S1">D4/S1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="S2">S2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pendidikan_ibu" value="S3">S3
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Pekerjaan:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Tidak Bekerja">Tidak Bekerja
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Nelayan">Nelayan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Petani">Petani
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Peternak">Peternak
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="PNS/TNI/POLRI">PNS/TNI/POLRI
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Karyawan Swasta">Karyawan Swasta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Pedagang Kecil">Pedagang Kecil
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Pedagang Besar">Pedagang Besar
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Wiraswasta">Wiraswasta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Wirausaha">Wirausaha
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Buruh">Buruh
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Pensiunan">Pensiunan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pekerjaan_ibu" value="Lain-lain">Lain-lain
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penghasilan_bulanan_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Penghasilan Bulanan:</label>
                    <div class="col-sm-9">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="Kurang dari Rp500.000">Kurang dari Rp500.000
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="Rp500.000 - Rp999.999">Rp500.000 - Rp999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="1juta - Rp1.999.999">1juta - Rp1.999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="2juta - Rp4.999.999">2juta - Rp4.999.999
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="5juta - 20juta">5juta - 20juta
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="penghasilan_bulanan_ibu" value="Lebih dari 20juta">Lebih dari 20juta
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berkebutuhan_khusus_ibu" class="col-sm-3 col-form-label"><?php echo $counter++; ?>. Berkebutuhan Khusus:</label>
                    <div class="col-sm-8">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Tidak">Tidak
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Netra(A)">Netra(A)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Rungu(B)">Rungu(B)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Grahita Ringan(C)">Grahita Ringan(C)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Grahita Sedang(C1)">Grahita Sedang(C1)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Daksa Ringan(D)">Daksa Ringan(D)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Daksa Sedang(D1)">Daksa Sedang(D1)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Laras(E)">Laras(E)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Wicara(F)">Wicara(F)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Tuna Ganda(G)">Tuna Ganda(G)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="berkebutuhan_khusus_ibu[]" value="Hiper Aktif(H)">Hiper Aktif(H)
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="cerdas-istimewa" name="berkebutuhan_khusus_ibu[]" value="Cerdas Istimewa(I)">
                            <label class="form-check-label" for="cerdas-istimewa">Cerdas Istimewa (I)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="bakat-istimewa" name="berkebutuhan_khusus_ibu[]" value="Bakat Istimewa(J)">
                            <label class="form-check-label" for="bakat-istimewa">Bakat Istimewa (J)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="kesulitan-belajar" name="berkebutuhan_khusus_ibu[]" value="Kesulitan Belajar(K)">
                            <label class="form-check-label" for="kesulitan-belajar">Kesulitan Belajar (K)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="narkoba" name="berkebutuhan_khusus_ibu[]" value="Narkoba(N)">
                            <label class="form-check-label" for="narkoba">Narkoba (N)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="indigo" name="berkebutuhan_khusus_ibu[]" value="Indigo(O)">
                            <label class="form-check-label" for="indigo">Indigo (O)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="down-syndrome" name="berkebutuhan_khusus_ibu[]" value="Down Syndrome(P)">
                            <label class="form-check-label" for="down-syndrome">Down Syndrome (P)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" id="autis" name="berkebutuhan_khusus_ibu[]" value="Autis(Q)">
                            <label class="form-check-label" for="autis">Autis (Q)</label>
                        </div>
                    </div>
                </div>
                <button type="button" id="submitBtn" style="float: right;">Submit</button>
                <button type="button" onclick="previewForm()" style="float: right;">Preview</button>
                <button class="btn-prev" type="button" style="float: left;">Previous</button>
            </div>

        </form>
        <script type="text/javascript">
            const formRegistrasi = document.querySelector('.form-registrasi');
            const formPribadi = document.querySelector('.form-pribadi');
            const formAyah = document.querySelector('.form-ayah');
            const formIbu = document.querySelector('.form-ibu');
            const btnNext = document.querySelectorAll('.btn-next');
            const btnPrev = document.querySelectorAll('.btn-prev');

            // Hide Form Pribadi, Form Ayah, and Form Ibu
            formPribadi.style.display = "none";
            formAyah.style.display = "none";
            formIbu.style.display = "none";

            // Event Listener for Button Next
            btnNext.forEach((btn) => {
                btn.addEventListener('click', () => {
                    if (formRegistrasi.style.display !== "none") {
                        // Hide Form Registrasi and Show Form Pribadi
                        formRegistrasi.style.display = "none";
                        formPribadi.style.display = "block";
                    } else if (formPribadi.style.display !== "none") {
                        // Hide Form Pribadi and Show Form Ayah
                        formPribadi.style.display = "none";
                        formAyah.style.display = "block";
                    } else if (formAyah.style.display !== "none") {
                        // Hide Form Ayah and Show Form Ibu
                        formAyah.style.display = "none";
                        formIbu.style.display = "block";
                    }
                });
            });

            // Event Listener for Button Previous
            btnPrev.forEach((btn) => {
                btn.addEventListener('click', () => {
                    if (formIbu.style.display !== 'none') {
                        // Hide Form Ibu and Show Form Ayah
                        formIbu.style.display = 'none';
                        formAyah.style.display = 'block';
                    } else if (formAyah.style.display !== 'none') {
                        // Hide Form Ayah and Show Form Pribadi
                        formAyah.style.display = 'none';
                        formPribadi.style.display = 'block';
                    } else if (formPribadi.style.display !== 'none') {
                        // Hide Form Pribadi and Show Form Registrasi
                        formPribadi.style.display = 'none';
                        formRegistrasi.style.display = 'block';
                    }
                });
            });
        </script>

        <script type="text/javascript">
            const form = document.querySelector('#FormPDrendi');
            const submitBtn = document.querySelector('#submitBtn');

            submitBtn.addEventListener('click', function() {
                // mengambil nilai dari setiap input form
                const jenis_pendaftaran = form.elements['jenis_pendaftaran'].value;
                const tgl_masuk = form.elements['tgl_masuk'].value;
                const nis = form.elements['nis'].value;
                const nomor_peserta_ujian = form.elements['nomor_peserta_ujian'].value;
                const pernah_paud = form.elements['pernah_paud'].value;
                const pernah_tk = form.elements['pernah_tk'].value;
                const no_seri_skhun_sebelumnya = form.elements['no_seri_skhun_sebelumnya'].value;
                const no_seri_ijazah_sebelumnya = form.elements['no_seri_ijazah_sebelumnya'].value;
                const hobi = Array.from(form.elements['hobi[]']).filter(el => el.checked).map(el => el.value);
                const cita_cita = Array.from(form.elements['cita_cita[]']).filter(el => el.checked).map(el => el.value);
                const nama_lengkap = form.elements['nama_lengkap'].value;
                const jenis_kelamin = form.elements['jenis_kelamin'].value;
                const nisn = form.elements['nisn'].value;
                const nik = form.elements['nik'].value;
                const tempat_lahir = form.elements['tempat_lahir'].value;
                const tgl_lahir = form.elements['tgl_lahir'].value;
                const agama = form.elements['agama'].value;
                const berkebutuhan_khusus = Array.from(form.elements['berkebutuhan_khusus[]']).filter(el => el.checked).map(el => el.value);
                const rt = form.elements['rt'].value;
                const rw = form.elements['rw'].value;
                const dusun = form.elements['dusun'].value;
                const desa = form.elements['desa'].value;
                const kecamatan = form.elements['kecamatan'].value;
                const kode_pos = form.elements['kode_pos'].value;
                const tempat_tinggal = form.elements['tempat_tinggal'].value;
                const moda_transportasi = form.elements['moda_transportasi'].value;
                const nomor_hp = form.elements['nomor_hp'].value;
                const nomor_telepon = form.elements['nomor_telepon'].value;
                const email_pribadi = form.elements['email_pribadi'].value;
                const penerima_kps = form.elements['penerima_kps'].value;
                const no_kps = form.elements['no_kps'].value;
                const kewarganegaraan = form.elements['kewarganegaraan'].value;
                const nama_ayah = form.elements['nama_ayah'].value;
                const tgl_lahir_ayah = form.elements['tgl_lahir_ayah'].value;
                const pendidikan_ayah = form.elements['pendidikan_ayah'].value;
                const pekerjaan_ayah = form.elements['pekerjaan_ayah'].value;
                const penghasilan_bulanan_ayah = form.elements['penghasilan_bulanan_ayah'].value;
                const berkebutuhan_khusus_ayah = Array.from(form.elements['berkebutuhan_khusus_ayah[]']).filter(el => el.checked).map(el => el.value);
                const nama_ibu = form.elements['nama_ibu'].value;
                const tgl_lahir_ibu = form.elements['tgl_lahir_ibu'].value;
                const pendidikan_ibu = form.elements['pendidikan_ibu'].value;
                const pekerjaan_ibu = form.elements['pekerjaan_ibu'].value;
                const penghasilan_bulanan_ibu = form.elements['penghasilan_bulanan_ibu'].value;
                const berkebutuhan_khusus_ibu = Array.from(form.elements['berkebutuhan_khusus_ibu[]']).filter(el => el.checked).map(el => el.value);

                // membuat objek XMLHttpRequest
                const xhr = new XMLHttpRequest();

                // menentukan metode request, URL, dan asynchronous
                xhr.open('POST', 'submit_form.php', true);

                // menentukan header HTTP untuk request
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                // mengirim request ke server
                xhr.send('jenis_pendaftaran=' + encodeURIComponent(jenis_pendaftaran) + '&tgl_masuk=' + encodeURIComponent(tgl_masuk) + '&nis=' + encodeURIComponent(nis) + '&nomor_peserta_ujian=' + encodeURIComponent(nomor_peserta_ujian) + '&pernah_paud=' + encodeURIComponent(pernah_paud) + '&pernah_tk=' + encodeURIComponent(pernah_tk) + '&no_seri_skhun_sebelumnya=' + encodeURIComponent(no_seri_skhun_sebelumnya) + '&no_seri_ijazah_sebelumnya=' + encodeURIComponent(no_seri_ijazah_sebelumnya) + '&hobi=' + encodeURIComponent(hobi.join()) + '&cita_cita=' + encodeURIComponent(cita_cita.join()) + '&nama_lengkap=' + encodeURIComponent(nama_lengkap) + '&jenis_kelamin=' + encodeURIComponent(jenis_kelamin) + '&nisn=' + encodeURIComponent(nisn) + '&nik=' + encodeURIComponent(nik) + '&tempat_lahir=' + encodeURIComponent(tempat_lahir) + '&tgl_lahir=' + encodeURIComponent(tgl_lahir) + '&agama=' + encodeURIComponent(agama) + '&berkebutuhan_khusus=' + encodeURIComponent(berkebutuhan_khusus.join()) + '&rt=' + encodeURIComponent(rt) + '&rw=' + encodeURIComponent(rw) + '&dusun=' + encodeURIComponent(dusun) + '&desa=' + encodeURIComponent(desa) + '&kecamatan=' + encodeURIComponent(kecamatan) + '&kode_pos=' + encodeURIComponent(kode_pos) + '&tempat_tinggal=' + encodeURIComponent(tempat_tinggal) + '&moda_transportasi=' + encodeURIComponent(moda_transportasi) + '&nomor_hp=' + encodeURIComponent(nomor_hp) + '&nomor_telepon=' + encodeURIComponent(nomor_telepon) + '&email_pribadi=' + encodeURIComponent(email_pribadi) + '&penerima_kps=' + encodeURIComponent(penerima_kps) + '&no_kps=' + encodeURIComponent(no_kps) + '&kewarganegaraan=' + encodeURIComponent(kewarganegaraan) + '&nama_ayah=' + encodeURIComponent(nama_ayah) + '&tgl_lahir_ayah=' + encodeURIComponent(tgl_lahir_ayah) + '&pendidikan_ayah=' + encodeURIComponent(pendidikan_ayah) + '&pekerjaan_ayah=' + encodeURIComponent(pekerjaan_ayah) + '&penghasilan_bulanan_ayah=' + encodeURIComponent(penghasilan_bulanan_ayah) + '&berkebutuhan_khusus_ayah=' + encodeURIComponent(berkebutuhan_khusus_ayah.join()) + '&nama_ibu=' + encodeURIComponent(nama_ibu) + '&tgl_lahir_ibu=' + encodeURIComponent(tgl_lahir_ibu) + '&pendidikan_ibu=' + encodeURIComponent(pendidikan_ibu) + '&pekerjaan_ibu=' + encodeURIComponent(pekerjaan_ibu) + '&penghasilan_bulanan_ibu=' + encodeURIComponent(penghasilan_bulanan_ibu) + '&berkebutuhan_khusus_ibu=' + encodeURIComponent(berkebutuhan_khusus_ibu.join()));

                // menangani respon dari server
                xhr.onreadystatechange = function() {
                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                        // respon dari server
                        console.log(this.responseText);
                    }
                };
            });
        </script>
    </div>
</body>

</html>