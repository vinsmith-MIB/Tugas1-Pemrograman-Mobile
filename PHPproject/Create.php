<?php
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

use Classes\PerhitunganNA;
use Classes\KonversiNH;

class Create
{
    public static function insert($pdo)
    {

        // Set-up the variables that are going to be inserted
        $nilai_partisipasi = isset($_POST['nilai_partisipasi']) ? $_POST['nilai_partisipasi'] : NULL;
        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
        $na = PerhitunganNA::hitungNilaiAkhir($nilai_partisipasi, $nilai_tugas, $nilai_uts, $nilai_uas);
        $nh = KonversiNH::konversiNilaiHuruf($na);


        $stmt = $pdo->prepare('INSERT INTO posts (nilai_partisipasi, nilai_tugas, nilai_uts, nilai_uas, na, nh) VALUES (?, ?, ?, ?, ?, ?)');

        $stmt->execute([$nilai_partisipasi, $nilai_tugas, $nilai_uts, $nilai_uas, $na, $nh]);

        $msg = 'Data berhasil disimpan!';
    }
}
