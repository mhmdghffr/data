<?php 
    include "koneksi.php";

    $id = $_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM karyawan WHERE id=$id");

    if($query)
    {
        echo "Proses input berhasil, ingin lihat hasil <a href='tampil.php'> disini </a>";

    }
    else
    {
        echo "Proses Input gagal, <a href='tampil.php'> lihat disini </a>";
    }
?>