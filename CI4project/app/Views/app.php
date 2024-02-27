<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Perhitungan NA dan Koversi NH</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/app.css'); ?>">

</head>

<body>
    <section class="intro">
        <div class="bg-image h-100" style="background-image: url(https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img7.jpg);">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card mask-custom">
                                <div class="card-body">
                                    <div class="table-responsive rounded-4 bg-light p-3">
                                        <table class="table table-light table-borderless text-white mb-5">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" >Nilai Partisipasi</th>
                                                    <th scope="col" class="text-center" >Nilai Tugas</th>
                                                    <th scope="col" class="text-center" >Nilai UTS</th>
                                                    <th scope="col" class="text-center" >Nilai UAS</th>
                                                    <th scope="col" class="text-center" >Nilai Akhir (NA)</th>
                                                    <th scope="col" class="text-center" >Nilai Konversi Huruf (NH)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($posts as $post) : ?>
                                                <tr>
                                                    <td class="text-center" ><?= $post['nilai_partisipasi'] ?></td>
                                                    <td class="text-center" ><?=$post['nilai_tugas'] ?></td>
                                                    <td class="text-center" ><?=$post['nilai_uts'] ?></td>
                                                    <td class="text-center" ><?=$post['nilai_uas'] ?></td>
                                                    <td class="text-center" ><?=$post['na'] ?></td>
                                                    <td class="text-center"><?=$post['nh'] ?></td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                        <form action="<?= route_to('app.store') ?>" method="post" class="d-flex flex-column align-items-center gap-3 p-3 rounded-4 bg-white">
                                            <h4>Tambahkan Nilai</h4>
                                            <?= csrf_field() ?>
                                            <table class="table bg-light table-borderless text-white mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center" >Nilai Partisipasi</th>
                                                        <th scope="col" class="text-center" >Nilai Tugas</th>
                                                        <th scope="col" class="text-center" >Nilai UTS</th>
                                                        <th scope="col" class="text-center" >Nilai UAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" name="nilai_partisipasi" class="form-control" placeholder="Nilai Partisipasi"></td>
                                                        <td><input type="text" name="nilai_tugas" class="form-control" placeholder="Nilai Tugas"></td>
                                                        <td><input type="text" name="nilai_uts" class="form-control" placeholder="Nilai UTS"></td>
                                                        <td><input type="text" name="nilai_uas" class="form-control" placeholder="Nilai UAS"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary px-5" type="submit">Hitung</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>

</html>