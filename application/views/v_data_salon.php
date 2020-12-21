<html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>SALON</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">




    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/starter-template.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SALON SE-MALANG RAYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    </nav>

    <main class="container">
        <div class="content-wrapper">
        <section class="content-header">
            <h2>DATA SALON</h2>
        </section>
        </div>
        <section class="content">
        <a class = "btn btn-primary" href="<?= base_url();?>Salon/tambah_salon">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Salon</th>
                    <th>Nama Salon</th>
                    <th>Kota</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($salon as $sl) :
                    ?>
                <tr>
                    <td><?= $sl['ID_salon']; ?></td>
                    <td><?= $sl['nama_salon']; ?></td>
                    <td><?= $sl['kota']; ?></td>
                    <td><?= $sl['alamat']; ?></td>
                    <td><?= $sl['telepon']; ?></td>
                    <td>
                    
                    
                    <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>Salon/edit_salon/<?php echo $sl['ID_salon']?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Salon/hapus_salon/<?php echo $sl['ID_salon']?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </section>
        
       
    </main><!-- /.container -->


    <script src="<?= base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
