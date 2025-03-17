<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learnify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(to right, #3949ab, #1e88e5);
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
      }
      .btn-custom {
        background: #ff9800;
        color: white;
        transition: 0.3s;
      }
      .btn-custom:hover {
        background: #e65100;
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
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 500px;">
            <div class="card-header">
                <center class="fw-bold">Data Pengguna</center>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>Zikri Rausyan</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>124240034</td>
                    </tr>
                    <tr>
                        <td>Plug</td>
                        <td>:</td>
                        <td>SI-B</td>
                    </tr>
                </table>
                <div class="text-end">
                    <a href="ketentuan.php" class="btn btn-info">Mulai Kuis!</a>
                </div>
            </div>
        </div>
    </main>
      </div>
    </div>
  </body>
</html>
