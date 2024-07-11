<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div class="container">
        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Soal 5</h5>
                </div>

                <div class="card-body">

                    Tampilkan jumlah data pada tabel anggota dan tabel buku.

                </div>
            </div>
        </div>


        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Jawaban</h5>
                </div>


                <!-- tabel anggota -->
                <div class="card-body">
                    <?php
                    $result1 = mysqli_query($conn, "SELECT COUNT(*) FROM anggota");
                    $count1 = mysqli_fetch_assoc($result1)['COUNT(*)'];
                    ?>

                    Jumlah data tabel anggota = <?= $count1 ?>

                    <br>
                    <hr>
                    <br>

                    <?php
                    $result2 = mysqli_query($conn, "SELECT COUNT(*) FROM buku");
                    $count2 = mysqli_fetch_assoc($result2)['COUNT(*)'];
                    ?>

                    Jumlah data tabel buku = <?= $count2 ?>

                </div>


            </div>
        </div>


    </div>




</body>

</html>