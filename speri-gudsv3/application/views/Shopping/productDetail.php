<h2><?php echo $detail['nama'];?></h2>
<form method="post" action="<?=site_url('Shopping/add')?>" method="post" accept-charset="utf-8">
<div class="kotak2">
<img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['foto']; ?>"/>
 <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5>
 <p class="card-text">
<strong> <u>Deskripsi</u></strong><br>
 <!-- <?php echo $detail['deskripsi'];?></p> -->
  <input type="hidden" name="kodeSparepart" value="<?php echo $detail['kode']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama']; ?>" />
  <input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" />
  <input type="hidden" name="foto" value="<?php echo $detail['foto']; ?>" />
  <input type="hidden" name="qty" value="1" />
 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli Produk Ini</button>
 </div>
 </form>