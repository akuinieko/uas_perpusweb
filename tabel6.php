<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komik</title>
</head>

<body>

    <div class="container">
        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Daftar Tabel Detail Peminjaman</h5>
                    <div class="float-end mt-2">
                        <a title="Tambah data" href="#" class="btn btn-sm btn-success" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="Tambah Data"> Tambah
                            Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="tabel" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center" width="70px">ID Pinjam</th>
                                <th class="text-center" width="70px">ID Buku</th>
                                <th class="text-center">Tgl Pengembalian</th>
                                <th class="text-center">Denda</th>
                                <th class="text-center">Status Buku</th>
                                <th class="text-center" width="130px">Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM detail_peminjaman ORDER BY id_pinjam ASC");

                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['id_pinjam']; ?>
                            </td>
                            <td>
                                <?= $val['id_buku']; ?>
                            </td>
                            <td>
                                <?= $val['tgl_pengembalian']; ?>
                            </td>
                            <td>
                                <?= $val['denda']; ?>
                            </td>
                            <td>
                                <?= $val['status_buku']; ?>
                            </td>


                            <td class="text-center">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" href="#"
                                    class="btn btn-sm btn-warning">Edit</a>

                                <a href="#" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini ?');"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus">Delete</a>
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