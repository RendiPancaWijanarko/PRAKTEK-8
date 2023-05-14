<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpesertadidik";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Membuat tabel dengan kolom-kolom yang diberikan
$sql = "CREATE TABLE peserta_didik (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        jenis_pendaftaran ENUM('Reguler', 'Afirmasi', 'Perpindahan') NOT NULL,
        tgl_masuk DATE NOT NULL,
        nis VARCHAR(10) NOT NULL,
        nomor_peserta_ujian VARCHAR(20) NOT NULL,
        pernah_paud ENUM('Ya', 'Tidak') NOT NULL,
        pernah_tk ENUM('Ya', 'Tidak') NOT NULL,
        no_seri_skhun_sebelumnya VARCHAR(20) NOT NULL,
        no_seri_ijazah_sebelumnya VARCHAR(20) NOT NULL,
        hobi VARCHAR(100),
        cita_cita VARCHAR(100),
        nama_lengkap VARCHAR(100) NOT NULL,
        jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
        nisn VARCHAR(10) NOT NULL,
        nik VARCHAR(20) NOT NULL,
        tempat_lahir VARCHAR(50) NOT NULL,
        tgl_lahir DATE NOT NULL,
        agama ENUM('Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu') NOT NULL,
        berkebutuhan_khusus VARCHAR(100),
        alamat_jalan VARCHAR(100) NOT NULL,
        rt VARCHAR(3) NOT NULL,
        rw VARCHAR(3) NOT NULL,
        dusun VARCHAR(50),
        desa VARCHAR(50) NOT NULL,
        kecamatan VARCHAR(50) NOT NULL,
        kode_pos VARCHAR(5) NOT NULL,
        tempat_tinggal ENUM('Bersama Orang Tua', 'Wali', 'Kos', 'Asrama', 'Panti Asuhan', 'Lainnya') NOT NULL,
        moda_transportasi ENUM('Jalan Kaki', 'Kendaraan Pribadi', 'Kendaraan Umum', 'Jemputan Sekolah', 'Kereta Api', 'Ojek', 'Andong/Bendi/Sado/Dokar/Delman/Becak', 'Perahu Penyeberangan/Rakit/Getek', 'Lainnya') NOT NULL,
        nomor_hp VARCHAR(20),
        nomor_telepon VARCHAR(20),
        email_pribadi VARCHAR(50),
        penerima_kps ENUM('Ya', 'Tidak'),
        no_kps VARCHAR(20),
        kewarganegaraan ENUM('WNI', 'WNA') NOT NULL,
        nama_ayah VARCHAR(100),
        tgl_lahir_ayah DATE NOT NULL,
        pendidikan_ayah ENUM('Tidak Sekolah', 'Putus SD', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3') NOT NULL,
        pekerjaan_ayah ENUM('Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedagang Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Lainnya'),
        penghasilan_bulanan_ayah ENUM('< Rp. 1.000.000', 'Rp. 1.000.000 - Rp. 1.999.999', 'Rp. 2.000.000 - Rp. 4.999.999', 'Rp. 5.000.000 - Rp. 20.000.000', '> Rp. 20juta'),
        berkebutuhan_khusus_ayah VARCHAR(50),
        nama_ibu VARCHAR(100),
        tgl_lahir_ibu DATE,
        pendidikan_ibu ENUM('Tidak Sekolah', 'SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3'),
        pekerjaan_ibu ENUM('Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedagang Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Lainnya'),
        penghasilan_bulanan_ibu ENUM('< Rp. 1.000.000', 'Rp. 1.000.000 - Rp. 1.999.999', 'Rp. 2.000.000 - Rp. 4.999.999', 'Rp. 5.000.000 - Rp. 20.000.000', '> Rp. 20juta'),
        berkebutuhan_khusus_ibu VARCHAR(50)
        )";

if ($conn->query($sql) === TRUE) {
    echo "Table peserta_didik created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
