<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Pendaftaran Mahasiswa Baru</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', Arial, sans-serif;
      background-color: #f5f7fa;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      padding: 40px;
      text-align: center;
    }

    h1 {
      font-size: 30px;
      color: #000;
      margin-bottom: 30px;
    }

    .info-box {
      border: 1.5px solid #3395FF;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 40px;
      text-align: left;
    }

    .info-box h2 {
      color: #000;
      font-size: 18px;
      margin: 0;
    }

    .info-box p {
      color: #333;
      font-size: 14px;
      margin-top: 10px;
      line-height: 1.6;
    }

    .button-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px 50px;
      justify-items: center;
    }

    /* --- Style tombol seragam --- */
    .btn {
      background-color: #3395FF;
      color: white;
      font-size: 15px;
      font-weight: bold;
      border: none;
      border-radius: 25px;
      width: 220px;
      height: 45px;
      line-height: 45px;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease, transform 0.2s;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #007BFF;
      transform: translateY(-2px);
    }

    @media (max-width: 700px) {
      .button-grid {
        grid-template-columns: 1fr;
      }
      .btn {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Beranda</h1>

    <div class="info-box">
      <h2>Politeknik Negeri Lampung</h2>
      <p>Politeknik Negeri Lampung (Polinela) adalah perguruan tinggi negeri vokasi di Bandar Lampung yang berdiri sejak 7 April 2001. Polinela berfokus pada pendidikan terapan di bidang pertanian, teknologi, dan bisnis dengan pembelajaran berbasis praktik serta kerja sama industri. Dengan motto “Berakhlak Mulia, Disiplin, Terampil, dan Mandiri”, Polinela berkomitmen mencetak lulusan yang kompeten, mandiri, dan siap kerja.</p>
    </div>

    <div class="button-grid">
      <a href="#" class="btn">Informasi Kampus</a>
      <a href="#" class="btn">Kehadiran</a>
      <a href="#" class="btn">Jadwal Mata Kuliah</a>
      <a href="Profile.php" class="btn">Profil</a>
      <a href="#" class="btn">Kartu UAS</a>
      <a href="#" class="btn">Kompensasi</a>
    </div>
  </div>
</body>
</html>
