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
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Salon
                </div>
                <div class="card-body">
                <form action="<?= base_url();?>Salon/tambah_salon" method="post">          
                         
                        <div class="form-group">
                            <label for="salon">Nama Salon</label>
                            <input type="text" name="salon" class="form-control" id="salon" >
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="kota">               
                                  </div>
                        <div class="form-group">
                            <label for="kota">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" >
                        </div>
                        <div class="form-group">
                            <label for="kota">telepon</label>
                            <input type="text" name="telepon" class="form-control" id="telepon" >
                        </div>
                        <div class="form-group">
                           <a href="<?= base_url();?>Salon/data_salon/" class="btn btn-danger" >Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    </main><!-- /.container -->


    <script src="<?= base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

</html>