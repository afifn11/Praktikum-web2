<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-light bg-dark">
  <h2 class="text-center mt-2">Form Belanja Online</h2>
  
  <div class="container border-bottom mt-4">
    <div class="row">

    <div class="col">
    <form method="POST">
      <div class="form-group row mt-3">
        <label for="text" class="col-4 col-form-label fw-semibold">Customer</label> 
        <div class="col-8">
          <input id="text" name="text" placeholder="Tulis nama kamu disini ya" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-3">
        <label class="col-4 fw-semibold">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="buku tulis"> 
            <label for="radio_0" class="custom-control-label">Buku Tulis</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="pulpen"> 
            <label for="radio_1" class="custom-control-label">Pulpen</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="pensil"> 
            <label for="radio_2" class="custom-control-label">Pensil</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="penggaris"> 
            <label for="radio_2" class="custom-control-label">Penggaris</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="spidol"> 
            <label for="radio_2" class="custom-control-label">Spidol</label>
          </div>
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="text1" class="col-4 col-form-label fw-semibold">Jumlah Produk</label> 
        <div class="col-8">
          <input id="text1" name="text1" placeholder="Mau beli berapa nih?" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8 mt-3 mb-3">
          <button name="submit" type="submit" class="btn btn-primary fw-semibold">Beli Sekarang</button>
        </div>
      </div>
    </form>
  </div>

  <div class="col mt-3 ms-3">
      <ul class="list-group">
        <li class="list-group-item bg-info text-center fw-semibold">Daftar Harga Barang</li>
        <li class="list-group-item">Buku Tulis : Rp 6.000</li>
        <li class="list-group-item">Pulpen : Rp 4.000</li>
        <li class="list-group-item">Pensil : Rp 3.000</li>
        <li class="list-group-item">Penggaris : Rp 8.000</li>
        <li class="list-group-item">Spidol : Rp 12.000</li>
      </ul>
  </div>

  </div>
  
</div>

    <?php
        if(isset($_POST['submit'])) {
            // Mengambil data dari form
            $customer = $_POST['text'];
            $produk = $_POST['radio'];
            $jumlah_produk = $_POST['text1'];

            // Mendefinisikan harga produk
            $harga_produk = 0;
            if ($produk == 'buku tulis') {
                $harga_produk = 6000;
            } elseif ($produk == 'pulpen') {
                $harga_produk = 4000;
            } elseif ($produk == 'pensil') {
                $harga_produk = 3000;
            } elseif ($produk == 'penggaris') {
                $harga_produk = 8000;
            } elseif ($produk == 'spidol') {
                $harga_produk = 12000;
            } else {
                // Produk tidak valid
                echo "<div class='container'>";
                echo "<h2>Informasi Pembelian</h2>";
                echo "<p>Produk tidak valid</p>";
                echo "</div>";
                exit(); // Keluar dari skrip
            }

            // Menghitung total pembelian
            $total_pembelian = $harga_produk * $jumlah_produk;

            // Menampilkan informasi pembelian
            echo "<h2 class='mt-3 ms-3 mb-2 text-center'>Informasi Pembelian</h2>";
            echo "<div class='table-responsive ms-5 me-5'>";
            echo "<table class='table table-bordered'>";
            echo "<tbody>";
            echo "<tr><th>Nama Customer</th><td>$customer</td></tr>";
            echo "<tr><th>Produk yang dipilih</th><td>" . ucfirst($produk) . "</td></tr>";
            echo "<tr><th>Jumlah Produk yang dibeli</th><td>$jumlah_produk</td></tr>";
            echo "<tr><th>Total Pembelian</th><td>Rp. " . number_format($total_pembelian, 0, ',', '.') . "</td></tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
      ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>