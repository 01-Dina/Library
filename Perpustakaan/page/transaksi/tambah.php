<?php 

$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("m"), date("j")+7, date("Y"));
$kembali = date("d-m-Y", $tujuh_hari);


?>
<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" onsubmit="return validasi(this)">


                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="buku">
                                                <?php
                                                $sql = $koneksi->query("select * from buku order by id");
                                                while ($data=$sql->fetch_assoc()){
                                                    echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="buku">
                                                <?php
                                                $sql = $koneksi->query("select * from anggota order by nis");
                                                while ($data=$sql->fetch_assoc()){
                                                    echo "<option value='$data[nis].$data[nama]'>$data[nis].$data[nama]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div>
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" id="tgl" value="<?php echo $tgl_pinjam;?>" readonly />
                                        </div>

                                        <div>
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tgl_kembali" id="tgl" value="<?php echo $kembali;?>" readonly />
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" style="margin-top: 8px" class="btn btn-primary">
                                        </div>

                                    </form>
                                </div>
                               
                                </div>
                            </div>
</div>
</div>
</div>
       
<?php 

    if (isset($_POST['simpan'])) {
        
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];

        $buku = $_POST['buku'];
        $pecah_buku = explode(".", $buku);
        $id = $pecah_buku[0];
        $judul = $pecah_buku[1];

        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $nis = $pecah_nama[0];
        $nama = $pecah_nama[1];

        $sql = $koneksi->query("select * from buku where judul = '$judul'");
        while ($data = $sql->fetch_assoc()) {
            $sisa = $data['jumlah_buku'];

            if ($sisa ==0) {
                ?>
                    <script type="text/javascript">
                        alert("stok buku habis, transaksi tidak dapat dilakukan, silahkan tambah stok buku terlebih dahulu")
                        document.location.href="?page=transaksi&aksi=tambah";
                    </script>
                
                <?php

            

            }
        }
    }


?>