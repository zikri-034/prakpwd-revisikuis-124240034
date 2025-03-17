<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ketentuan Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(to right, #8e44ad, #3498db);
        color: white;
        font-family: Arial, sans-serif;
      }
      .navbar {
        background: rgba(255, 255, 255, 0.2) !important;
        backdrop-filter: blur(10px);
      }
      .container-card {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 10px;
        text-align: center;
      }
      .btn-custom {
        background: #27ae60;
        color: white;
        transition: 0.3s;
      }
      .btn-custom:hover {
        background: #2ecc71;
      }
      .btn-cancel {
        background: #c0392b;
        color: white;
        transition: 0.3s;
      }
      .btn-cancel:hover {
        background: #e74c3c;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand text-white">
          <img width="50px" src="logo.png" alt="Logo"> Learnify
        </a>
      </div>
    </nav>
    
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
      <div class="container-card">
        <h1>Ketentuan Kuis</h1>
        <p>Harap membaca aturan kuis sebelum memulai.</p>
        <ul class="text-start">
          <li>1. Kuis terdiri dari 5 pertanyaan</li>
          <li>2. Setiap pertanyaan memiliki 4 pilihan jawaban,</li>
          <li>3. Pilihlah satu jawaban yang menurut Pengguna benar,
          </li>
          <li>4. Setiap jawaban benar akan mendapatkan 20 poin,</li>
          <li>5. Jawaban yang salah tidak akan mendapatkan poin, dan</li>
          <li>6. Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.</li>
        </ul>
        <form action="halamankuis.php" method="post">
        <div class="text-end">
            <a href="halamankuis.php" class="btn btn-info">Mulai Mengerjakan Kuis!</a>
            <a href="indeks.php" class="btn btn-info">Back</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
