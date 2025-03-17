<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(to right, #2c3e50, #3498db);
        color: white;
        font-family: Arial, sans-serif;
      }
      .navbar {
        background: rgba(73, 29, 29, 0.2) !important;
        backdrop-filter: blur(10px);
      }
      .container-quiz {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        color: white;
      }
      .btn-custom {
        background: #e67e22;
        color: white;
        transition: 0.3s;
      }
      .btn-custom:hover {
        background: #d35400;
      }
      .card {
        background: rgba(255, 255, 255, 0.1);
        color: white;
      }
      .form-check-input:checked {
        background-color: #27ae60;
        border-color: #27ae60;
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
    
    <div class="d-flex justify-content-center align-items-center" style="height: 180vh;">
      <div class="container-quiz">
        <h1>Kuis Learnify</h1>
        <?php
        $soal = [
            [
                "Soal" => "Apa kepanjangan dari HTML?",
                "Pilihan" => ["a. Hyper Text Markup Language", "b. Hyperlinks and Text Markup Language", "c. Home Tool Markup Language", "d. Hyper Tool Multi Language"]
            ],
            [
                "Soal" => "Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?",
                "Pilihan" => ["a. background: red;", "b. bgcolor: red;", "c. color-background: red;", "d. background-color: red;"]
            ],
            [
                "Soal" => "Tag HTML apa yang digunakan untuk membuat baris baru?",
                "Pilihan" => ["a. newline", "b. hr", "c. line", "d. br"]
            ],
            [
                "Soal" => "Apa fungsi utama dari PHP?",
                "Pilihan" => ["a. Mengatur tata letak halaman web", "b. Mengatur tampilan halaman web", "c. Memproses data di sisi server", "d. Menambahkan animasi ke halaman web"]
            ],
            [
                "Soal" => "Bagaimana cara menampilkan gambar di HTML?",
                "Pilihan" => ["a. img src='gambar.jpg'", "b. image src='gambar.jpg'", "c. pic src='gambar.jpg'", "d. photo src='gambar.jpg'"]
            ]
        ];
        ?>
        <h1 class="text-center">
            Kuis
        </h1>
        <form action="hasilku.php" method="POST">
            <ol>
                <?php for ($i = 0; $i < 5; $i++){?>
                <li>
                    <?= $soal[$i]['Soal'] ?><br>
                    <?php foreach ($soal[$i]['Pilihan'] as $a) { ?>
                    <input type="radio" required name="q<?=$i?>" value="<?= $a ?>"><?= $a ?><br>
                    <?php } ?>
                    <br>
                </li>
                <?php } ?>
            </ol>
            <div class="text-end">
                <input type="submit" value="Kirim Jawaban" class="btn btn-info">
            </div>
        </form>
    </main>
      </div>
    </div>
  </body>
</html>
