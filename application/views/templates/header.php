<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url ();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title><?= $title;?></title>
  </head>
  <body>
  <nav class="navbar py-4  navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/img/logo.png" width="187" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="<?= base_url();?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="<?= base_url();?>students">Students</a>
                    </li>
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="<?= base_url();?>peoples">Peoples</a>
                    </li>
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="<?= base_url();?>">About</a>
                    </li>
                    <a class="btn px-4 btn-secondary ml-5" href="#" role="button">Sign In</a>
                    <a class="btn px-4 btn-primary ml-2" href="#" role="button">Sign Up</a>
                </ul>
            </div>
        </div>
    </nav>
