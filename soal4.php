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
                    <h5 class="float-start mt-2 fw-bold">Soal 4</h5>
                </div>

                <div class="card-body">
                    Tampilkan daftar buku hanya field "judul_buku", "pengarang", "tahun_terbit", kemudian urutkan secara
                    descending berdasarkan "tahun_terbit".
                </div>
            </div>
        </div>

        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Jawaban</h5>
                </div>

                <div class="card-body">

                    <table id="tabel" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Pengarang</th>
                                <th class="text-center">Tahun Terbit</th>
                            </tr>
                        </thead>

                        <?php
                        //  Tampilkan daftar buku hanya field "judul_buku", "pengarang", "tahun_terbit", kemudian urutkan secara descending berdasarkan "tahun_terbit".
                        // $result = ................
                        

                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>

                            <td>
                                <?= $val['judul_buku']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['pengarang']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['tahun_terbit']; ?>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </table>


                </div>
            </div>
        </div>
    </div>

</body>

</html>