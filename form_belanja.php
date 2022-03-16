<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Belanja - Vidya Febriyana</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <h3><center>Belanja Online</center></h3>
            </div>
    </div>
    <br>
    <form class="form-horizontal mt-3" method="POST" action="form_belanja.php">
  <div class="container-fluid">
 <div class="row">
  <div class="col-md-6">
  <form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
        <label class="col-4">Pilih Produk :</label> 
        <div class="col-5 row">
          <div class="custom-control custom-radio">
          <input type="radio" name="produk" value="TV"> TV
          </div>
          <div class="custom-control custom-radio">
          <input type="radio" name="produk" value="KULKAS"> Kulkas
          </div>
          <div class="custom-control custom-radio">
          <input type="radio" name="produk" value="MESIN CUCI"> Mesin Cuci
          </div>
        </div>
      </div>
  <div class="form-group row">
    <label for="jumlah_produk" class="col-4 col-form-label">Jumlah Produk :</label> 
    <div class="col-4">
      <select id="jumlah_produk" name="jumlah_produk" class="custom-select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div> 
  </form>
  <div class="form-group row">
    <div class="offset-6 col-9">
      <button name="proses" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
  </div>
  <div class="col-md-5">
   <div class="list-group">
     <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
    <div class="list-group-item">
     TV : 4.200.000
    </div>
        <div class="list-group-item">
     Kulkas : 3.100.000
    </div>
        <div class="list-group-item">
     MESIN CUCI : 3.800.000
    </div>
    </div> <a href="#" class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</a>
   </div>
  </div>
</form>
<?php
if (isset($_POST['proses'])) {
  $proses= $_POST['proses'];
  $Customer = $_POST['customer'];
  $nama_produk = $_POST['produk'];
  $jumlah_produk = $_POST['jumlah_produk'];
  if($nama_produk == 'TV')$harga=4200000;
  if($nama_produk == 'KULKAS')$harga=3100000;
  if($nama_produk == 'MESIN CUCI')$harga=3800000;
    $total_harga= $jumlah_produk * $harga;
 
  echo '<br>Customer : '.$Customer;

 
  $_produk = '';
if ($nama_produk == "TV"){
  $_produk = 'TV';
  echo "<br/>Produk Pilihan : TV";
} elseif ($nama_produk == "KULKAS"){
  $_produk = 'KULKAS';
  echo "<br/>Produk Pilihan : KULKAS";
} elseif ($nama_produk == "MESIN CUCI"){
  $_produk = 'MESIN CUCI';
  echo "<br/>Produk Pilihan : MESIN CUCI";
} else {
  echo "";
}

echo '<br/>Jumlah Beli : '.$jumlah_produk;
echo '<br/>Total Belanja : Rp'.number_format($total_harga,2,',',',');

} else {
  echo '';
}

?>
</body>
</html>