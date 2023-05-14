<?php
// koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbpesertadidik";
$conn = mysqli_connect($host, $user, $password, $database);

// menangkap data dari form
$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
$tgl_masuk = $_POST['tgl_masuk'];
$nis = $_POST['nis'];
$nomor_peserta_ujian = $_POST['nomor_peserta_ujian'];
$pernah_paud = $_POST['pernah_paud'];
$pernah_tk = $_POST['pernah_tk'];
$no_seri_skhun_sebelumnya = $_POST['no_seri_skhun_sebelumnya'];
$no_seri_ijazah_sebelumnya = $_POST['no_seri_ijazah_sebelumnya'];
$hobi = $_POST['hobi[]'];
$cita_cita = $_POST['cita_cita[]'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus[]'];
$nama_lengkap = $_POST['nama_lengkap'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$moda_transportasi = $_POST['moda_transportasi'];
$nomor_hp = $_POST['nomor_hp'];
$nomor_telepon = $_POST['nomor_telepon'];
$email_pribadi = $_POST['email_pribadi'];
$penerima_kps = $_POST['penerima_kps'];
$no_kps = $_POST['no_kps'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$nama_ayah = $_POST['nama_ayah'];
$tgl_lahir_ayah = $_POST['tgl_lahir_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_bulanan_ayah = $_POST['penghasilan_bulanan_ayah'];
$berkebutuhan_khusus_ayah = $_POST['berkebutuhan_khusus_ayah[]'];
$nama_ibu = $_POST['nama_ibu'];
$tgl_lahir_ibu = $_POST['tgl_lahir_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_bulanan_ibu = $_POST['penghasilan_bulanan_ibu'];
$berkebutuhan_khusus_ibu = $_POST['berkebutuhan_khusus_ibu[]'];


// menyimpan data ke dalam database
$sql = "INSERT INTO peserta_didik (jenis_pendaftaran, tgl_masuk, nis, nomor_peserta_ujian, pernah_paud, pernah_tk, no_seri_skhun_sebelumnya, no_seri_ijazah_sebelumnya, hobi, cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tgl_lahir, agama, berkebutuhan_khusus, rt, rw, dusun, desa, kecamatan, kode_pos, tempat_tinggal, moda_transportasi, nomor_hp, nomor_telepon, email_pribadi, penerima_kps, no_kps, kewarganegaraan, nama_ayah, tgl_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_bulanan_ayah, berkebutuhan_khusus_ayah, nama_ibu, tgl_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_bulanan_ibu, berkebutuhan_khusus_ibu) 
        VALUES ('$jenis_pendaftaran', '$tgl_masuk', '$nis', '$nomor_peserta_ujian', '$pernah_paud', '$pernah_tk', '$no_seri_skhun_sebelumnya', '$no_seri_ijazah_sebelumnya', '$hobi', '$cita_cita', '$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tgl_lahir', '$agama', '$berkebutuhan_khusus', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$moda_transportasi', '$nomor_hp', '$nomor_telepon', '$email_pribadi', '$penerima_kps', '$no_kps', '$kewarganegaraan', '$nama_ayah', '$tgl_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_bulanan_ayah', '$berkebutuhan_khusus_ayah', '$nama_ibu', '$tgl_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_bulanan_ibu', '$berkebutuhan_khusus_ibu')";
$result = mysqli_query($conn, $sql);


// mengirim respon ke client
if ($result) {
    echo "Data berhasil disimpan ke dalam database";
} else {
    echo "Terjadi kesalahan saat menyimpan data ke dalam database";
}
