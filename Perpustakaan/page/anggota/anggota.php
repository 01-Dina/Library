<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Rombel</th>
                                            <th>Rayon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from anggota");
                                            while ($data=$sql->fetch_assoc()) {

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data["nis"];?></td>
                                            <td><?php echo $data["nama"];?></td>
                                            <td><?php echo $data["rombel"];?></td>
                                            <td><?php echo $data["rayon"];?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data ['nis']; ?>" class="btn btn-info" >Ubah</a>
                                                <a onclick="return confirm('Hapus Data??')" href="?page=anggota&aksi=hapus&id=<?php echo $data ['nis']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
