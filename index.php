<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepages Medieval Minecraft</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include('./c/Nav.html')?>

  <!-- Bagian Latar Belakang (Hero Section) -->
  <section id="hero" class="content-box">
      <div class="hero-content">
          <h1>Selamat datang!</h1>
          <h3>di Jurney Of conqueror</h3>
          <div>
          </div>
      </div>
  </section>

  <!-- Bagian Tentang Server -->
  <section id="about" class="content-box"><h1> SERVER INI MASIH DALAM TAHAP PENGEMBANGAN AWAL</h1>
      <h2>Tentang Server</h2>
      <p>Selamat datang di Jurney Conqueror Minecraft mengusung tema dunia medieval. Dalam server ini, anda dapat berpetualang di dunia meadival yang epik, berinteraksi dengan pemain lain, membangun kerajaan, dan bertempur di medan perang yang epik.</p>
     
      <!--<p>Server ini menawarkan banyak fitur unik seperti ekonomi dalam game,</p>-->
  </section>

  <!-- Bagian Cara Bergabung -->
  <section id="join" class="content-box">
      <h2>Cara Bergabung</h2>
      <p>Untuk bergabung ke server kami, ada dua metode yakni:</p>
      <div class="store-items">
          <div class="item">
             <h3>Melalui Website</h3>
             <p> untuk melakukan pendaftar dengan metode ini anda tinggal megisi form ini</p><br />
             <form action="" method="post" accept-charset="utf-8">
             <label for="name">Nama:</label>
             <input type="text" name="name" id="" placeholder="name"/><br />
             <label for="gt">gamertag username Mc</label>
             <input type="text" name="gt" id="" value=""placeholder="Gamertag" /><br />
             <label for="reson">alasan join</label>
                      <textarea id="message" name="message" required></textarea>
             <input type="submit" name="" id="" value="GASKAN!" />
             </form>
          </div>
          <div class="item">
             <h3>
               Melalui WhatsApp 
             </h3>
              <p> untuk metode ini kalian hanya perlu chat admin melalui WhatsApp </p>
              <p> No Wa admin <br /> pilih salahsatu</p>
              <li><a href="https://wa.me/6285520734501">MIZU_28</a></li>
              <li><a href="https://wa.me/62895-1272-4632">adityaXray</a></li>
          </div>
      </div>
      <p>Untuk pemain baru, kami juga menyediakan tips dan trik untuk memulai petualangan Anda:</p>
      <ul>
          <li>KOSONG.</li>
          <li>Kosong.</li>
      </ul>
  </section>

  <!-- Bagian Fitur dan Gameplay -->
  <section id="features" class="content-box">
      <h2>Fitur & Gameplay</h2>
      <p>Server kami menawarkan beberapa mode permainan, seperti Survival, Faction, dan PvP. Berikut adalah beberapa fitur unggulan:</p>
      <ul>
          <li><strong>Ekonomi Server</strong>: Gunakan mata uang berbetuk item coins, tidak menggunakan scorebord.</li>
          <li><strong>Sistem Kastil</strong>: Bangun dan pertahankan kastil Anda, atau serang kastil musuh.</li>
          <li><strong>Klan & PVP</strong>: Bergabunglah dengan klan dan ikuti pertempuran epik!</li>
      </ul>
      <div class="media">
          <img src="screenshot1.jpg" alt="Gameplay Screenshot 1">
          <img src="screenshot2.jpg" alt="Gameplay Screenshot 2">
      </div>
  </section>

  <!-- Bagian Toko -->
  <section id="store" class="content-box">
      <h2>Donasi</h2>
      <p></p>
      <div class="store-items">
          <div class="item">
              <h3>Donasi Server</h3>
              <p>Bantu server tetap berjalan dengan melakukan donasi.</p>
              <a href="https://saweria.co/Mizu28">Donate</a>
          </div>
      </div>
  </section>

  <!-- Bagian Forum atau Komunitas -->
  <section id="community" class="content-box">
      <h2>Forum Komunitas</h2>
      <p>Temui pemain lain, diskusikan taktik, dan berbagi pengalaman Anda dalam dunia Medieval Server kami.</p>
      <a href="https://forum.medievalserver.com" class="cta-button">Bergabung dengan Forum</a>
  </section>

  <!-- Bagian Kontak -->
  <section id="contact" class="content-box">
      <h2>Kontak</h2>
      <p>Jika Anda memiliki pertanyaan atau ingin memberikan saran, jangan ragu untuk menghubungi kami.</p>
      <form action="contact.php" method="POST">
          <label for="name">Nama:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Pesan:</label>
          <textarea id="message" name="message" required></textarea>

          <button type="submit">Kirim Pesan</button>
      </form>
  </section>

  <!-- Footer -->
  <footer>
      <p>&copy; 2024 journey of conqueror..</p>
  </footer>
</body>
</html>
