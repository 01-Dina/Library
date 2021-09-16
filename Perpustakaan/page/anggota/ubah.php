<?php 

    $nis = $_GET['id'];

    $sql = $koneksi->query("select * from anggota where nis='$nis'");

    $tampil = $sql->fetch_assoc();

?>
<div class="panel panel-default">
<div class="panel-heading">
    Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" value="<?php echo $tampil['nis']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Rombel</label>
                                            <input class="form-control" name="rombel" value="<?php echo $tampil['rombel']; ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Rayon</label>
                                            <input class="form-control" name="rayon" value="<?php echo $tampil['rayon']; ?>"/>
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
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
        
        $sql = $koneksi->query("Update anggota set nis='$nis', nama='$nama', rombel='$rombel', rayon='$rayon' where nis=$nis");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    document.location.href="?page=anggota";

                </script>
            <?php
        }
    }


?>