<?php
include 'koneksi.php';

// Ambil data dari form
$nis   = $_POST['nis'];
$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];

// Query INSERT
$query = "INSERT INTO identitas (nis, nama, kelas) VALUES ('$nis', '$nama', '$kelas')";

// Mulai output HTML agar bisa menaruh script SweetAlert
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if (mysqli_query($conn, $query)) { ?>

    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Data identitas berhasil disimpan.",
            icon: "success",
            confirmButtonText: "OK"
        }).then(() => {
            window.location = "input_identitas.php";
        });
    </script>

<?php } else { ?>

    <script>
        Swal.fire({
            title: "Gagal!",
            text: "Terjadi kesalahan: <?= mysqli_real_escape_string($conn, mysqli_error($conn)); ?>",
            icon: "error",
            confirmButtonText: "OK"
        }).then(() => {
            window.location = "input_identitas.php";
        });
    </script>

<?php } ?>

</body>
</html>
