<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum2</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<h3>Form Belanja</h3>
<div class="container">
<form action="" method="post">

  <div class="form-group row" >
    <label for="text1" class="col-2 col-form-label">Customer</label> 
    <div class="col-4">
      <input id="text1" name="pelanggan" type="text" class="form-control" value="">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-2"> Produk</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="text2" name="data" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-2 col-3">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

<div class="list-group float-right " style="margin-top: -240px;">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
  </button>
  <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
  <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
  <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Harga Tidak Berubah Setiap Saat
  </button>
</div>

</div>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $a = $_POST['pelanggan'];
    $b = $_POST['produk'];
    $c = $_POST['data'];

    echo "Customer : ".$a."</br>";
    echo "Produk : ".$b."</br>";
    echo "Jumlah : ".$c;


if ($b == "TV"){
    echo "</br> Total : Rp." . number_format($c * 4200000,0, "," , ".");
} elseif ($b =="Kulkas"){
    echo "</br> Total : Rp." . number_format($c * 3100000,0, "," , ".");
} elseif($b == "Mesin Cuci"){
    echo "</br> Total : Rp." . number_format($c * 3800000,0, "," , ".");
}
}
?>