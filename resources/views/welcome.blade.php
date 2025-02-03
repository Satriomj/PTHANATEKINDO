<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" />
    <link rel="stylesheet" href="{{asset('assets/css/landing/style.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="text-overlay">
          @isset($kelolaTema)
              <img src="{{ asset($kelolaTema->background_image ?? 'assets/img/pthanatekindo.jpg') }}" alt="Logo PT">
          @else
              <img src="{{ asset('assets/img/pthanatekindo.jpg') }}" alt="Logo PT">
          @endisset
  
          <h1 class="font-weight-bold">Selamat Datang Di Sistem Aplikasi Pengelola Sederhana</h1>
          <h2 class="font-weight-bold">PT HANATEKINDO</h2>
  
          <a href="{{ route('login') }}" class="btn btn-primary login-btn">Login</a>
      </div>
  </div>
  
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
