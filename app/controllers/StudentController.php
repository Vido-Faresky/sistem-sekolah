<?php
namespace App\Controller;

class StudentController
{

    public function index()
    {
        echo '<h1>Halaman Daftar Siswa</h1>';
        echo '<p>Menampilkan Daftar Seluruh Siswaa</p>';
    }

    public function create()
    {
        echo '<h1>Tambah Siswa</h1>';
        echo '<p>Menampilkan Form Tambah Siswa</p>';
    }

    public function show(string $id)
    {
        echo '<h1>Detail Siswa</h1>';
        echo "<p>Menampilkan Detail Siswa ID : {$id}</p>";
    }
}


?>