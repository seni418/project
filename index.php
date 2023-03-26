<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>HORROR MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=4ae21724&s"'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>film kartun</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>animasi</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Growing Up Is A Beast</h5>
        <p class="card-text">Today Disney and Pixar released a teaser trailer for its upcoming film Turning 
          Red. The film by Oscar Award winner Domee Shi (for Bao) focuses on a young girl named Mei Lee.
           This 13-year old “poofs” into a giant red panda when she gets too excited. Mei Lee is voiced by Rosalie Chiang..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar2.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">minions</h5>
        <p class="card-text"> Minions: The Rise of Gru merupakan film animasi dengan genre petualangan dan komedi. Film Minions: The Rise of Gru menceritakan tentang seorang 
          anak yang berusia 12 tahun yang bercita-cita menjadi penjahat super terhebat di dunia..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">curious george</h5>
        <p class="card-text">Kisah yang diadaptasi dari buku anak-anak karya Margret Rey dan H.A Rey 
          ini mengisahkan tentang Ted (Will Ferrell), seorang pegawai sebuah museum kecil 
          milik Mr Bloomsberry yang sedang terancam tutup..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar4.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">doraemon</h5>
        <p class="card-text"> Doraemon merupakan robot berbentuk kucing yang datang dari masa 
          depan bertugas untuk membantu mengubah sifat buruk 
          Nobita agar memiliki masa depan yang lebih baik. .</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">mouse</h5>
        <p class="card-text">Film komedi hampir selalu mampu menyedot perhatian khalayak. Tak hanya yang
           diperankan manusia saja yang laris, film komedi kartun pun tak kalah diminati. Nah, jika kamu termasuk salah satu orang yang menyukai sinema komedi animasi, pasti kamu akan tertarik dengan daftar 
          film kartun lucu banget yang akan kami ulas di artikel ini!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">madagascar</h5>
        <p class="card-text">Film ini mengisahkan tentang petualangan beberapa satwa 
          yang terjerat kasus dan harus
           dikembalikan ke penangkaran khusus, namun di tengah perjalanan;.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>