<?php

include 'koneksi.php';

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$no_telp        = $_POST['no_telp'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$bidang         = $_POST['bidang'];

$query = mysqli_query($koneksi, "
INSERT INTO pendaftar
(nim,nama,no_telp,jenis_kelamin,bidang)
VALUES
(
'$nim',
'$nama',
'$no_telp',
'$jenis_kelamin',
'$bidang'
)
");

if($query){
    echo "
    <script>
        alert('Pendaftaran berhasil');
        window.location='data_pendaftar.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Pendaftaran gagal');
        history.back();
    </script>
    ";
}
?>
