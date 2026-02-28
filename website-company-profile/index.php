<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('1') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('1') ?></p>
        <h2><?php echo ambil_judul('1') ?></h2>
        <?php echo maximum_kata(ambil_isi('1'), 12) ?>
        
    </div>
</section>

<!-- untuk About Us -->
<section id="about">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('2') ?></p>
        <h2><?php echo ambil_judul('2') ?></h2>
        <?php echo maximum_kata(ambil_isi('2'), 11) ?>
        <p><a href="<?php echo buat_link_halaman('2') ?>" class="tbl-biru">Know Us More!</a></p>
    </div>
    <img src="<?php echo ambil_gambar('2') ?>" />
</section>

<!-- untuk partners -->
<section id="partner">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partners</p>
            <h2>Partners</h2>
            <p>Rekan Kami Yang Terbaik di Kota Bogor</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1 = "select * from partners order by id desc";
            $q1 = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
                ?>
                <div class="kartu-partner">
                    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>" />
                    <p><?php echo $r1['nama']?></p>
                </div>
                <?php
            }
            ?>

            
        </div>
    </div>
</section>


<?php include_once("inc_footer.php") ?>