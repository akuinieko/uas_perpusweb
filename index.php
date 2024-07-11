<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-PERPUS</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- data tables -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/4.0.1/css/fixedHeader.bootstrap5.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tabel
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=tabel1">Tabel 1</a></li>
                            <li><a class="dropdown-item" href="?page=tabel2">Tabel 2</a></li>
                            <li><a class="dropdown-item" href="?page=tabel3">Tabel 3</a></li>
                            <li><a class="dropdown-item" href="?page=tabel4">Tabel 4</a></li>
                            <li><a class="dropdown-item" href="?page=tabel5">Tabel 5</a></li>
                            <li><a class="dropdown-item" href="?page=tabel6">Tabel 6</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Soal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=soal1">Soal 1</a></li>
                            <li><a class="dropdown-item" href="?page=soal2">Soal 2</a></li>
                            <li><a class="dropdown-item" href="?page=soal3">Soal 3</a></li>
                            <li><a class="dropdown-item" href="?page=soal4">Soal 4</a></li>
                            <li><a class="dropdown-item" href="?page=soal5">Soal 5</a></li>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">

        <?php
        $page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
        if (isset($_GET['page'])) {

            $page = $_GET['page'];
            switch ($page) {

                case 'home':
                    include "home.php";
                    break;

                case 'tabel1':
                    include "tabel1.php";
                    break;

                case 'tabel2':
                    include "tabel2.php";
                    break;

                case 'tabel3':
                    include "tabel3.php";
                    break;

                case 'tabel4':
                    include "tabel4.php";
                    break;

                case 'tabel5':
                    include "tabel5.php";
                    break;

                case 'tabel6':
                    include "tabel6.php";
                    break;

                case 'soal1':
                    include "soal1.php";
                    break;

                case 'soal2':
                    include "soal2.php";
                    break;

                case 'soal3':
                    include "soal3.php";
                    break;

                case 'soal4':
                    include "soal4.php";
                    break;

                case 'soal5':
                    include "soal5.php";
                    break;



                default:
                    include "404.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>

    </div>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- tooltip -->
    <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <!-- data tables -->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <!-- data tables -->
    <script>
    new DataTable('#tabel', {
        ordering: false,
        responsive: true,
        select: true,
        searching: false,
        layout: {
            topStart: null
        }
    });

    // null top-start & no searching
    new DataTable('#tabel2', {
        ordering: false,
        responsive: true,
        select: true,
        searching: false,
        layout: {
            topStart: null
        }
    });

    // null top-start & no searching & no pages
    new DataTable('#tabel3', {
        ordering: false,
        responsive: true,
        select: true,
        searching: false,
        paging: false,
        layout: {
            topStart: null
        }
    });
    </script>

</body>

</html>