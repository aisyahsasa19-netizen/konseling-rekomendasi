<?php
include 'koneksi.php';

// Ambil data dari form
$ididentitas = $_POST['ididentitas'];
$idkriteria  = $_POST['idkriteria'];
$value       = $_POST['value'];
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
// Query INSERT
$query = "INSERT INTO matriks (ididentitas, idkriteria, value) 
          VALUES ('$ididentitas', '$idkriteria', '$value')";

if (mysqli_query($conn, $query)) { ?>

    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Data matriks berhasil ditambahkan.",
            icon: "success",
        }).then(() => {
            window.location = "input_matriks.php";
        });
    </script>

<?php } else { ?>

    <script>
        Swal.fire({
            title: "Gagal!",
            text: "Terjadi kesalahan: <?= mysqli_real_escape_string($conn, mysqli_error($conn)); ?>",
            icon: "error",
        }).then(() => {
            window.location = "input_data.php";
        });
    </script>

<?php } ?>

</body>
</html>
