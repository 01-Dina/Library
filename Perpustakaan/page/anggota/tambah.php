<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" />
                                        </div>

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>

                                         <div class="form-group">
                                            <label>Rombel</label>
                                            <input class="form-control" name="rombel" />
                                        </div>

                                        <div class="form-group">
                                            <label>Rayon</label>
                                            <input class="form-control" name="rayon" />
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>

                                    </form>
                                </div>
                               
                                </div>
                            </div>
</div>
</div>
</div>
       
<?php 

    @$nis = $_POST ['nis'];
    @$nama = $_POST ['nama'];
    @$rombel = $_POST ['rombel'];
    @$rayon = $_POST ['rayon'];

    @$simpan = $_POST ['simpan'];

    if ($simpan) {
        
        $sql = $koneksi->query("Insert Into anggota (nis, nama, rombel, rayon)values('$nis','$nama','$rombel','$rayon')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    document.location.href="?page=anggota";

                </script>
            <?php
        }
    }


?>