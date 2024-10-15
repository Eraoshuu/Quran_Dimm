<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuranDimm</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- NAVBAR --}}

    <nav class="navbar navbar-expand-lg bg-info-subtle fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Quran  <span class="food">Dimm</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 800px">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Qur'an</a>
              </li>
            
            </ul>
            
          </div>
        </div>
      </nav>
{{-- AKHIR NAV --}}

<div class="container" style="margin-top: 100px">
    @yield('kamuu')
</div>

{{-- Click To Action --}}

<div id="">
    <div class="dark-overlay">
        <div class="cloud-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h3 class="display-4">Media <span style="color: aquamarine">Quran</span></h3>
                        <h5>Informasi Mengenai Ajaran Islam dan <br> Ilmu Al-Qur'an</h5>
                        <h3 style="margin-top: 25px">Contact Information</h3>
                        <div class="py-1">
                            <i class="bi bi-phone-fill">
                                <p style="color: rgb(0, 0, 0)">Phone 
                                    <a href=""><p>+62 851 8287 4853</p></a>
                                </p>
                            </i>                        
                            <i class="bi bi-houses-fill">
                                <p style="color: rgb(0, 0, 0)">Home 
                                    <a href=""><p>Setu,Cikarang Barat,Bekasi,Jawa Barat</p></a>
                                </p>
                            </i>
   
                            <i class="bi bi-envelope-heart-fill">
                                <p style="color: rgb(0, 0, 0)">Email <br>
                                    <a href=""><p>dimashuuer@gmail.com</p></a>
                                </p>
                            </i>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- FOOTER --}}

<footer class="py-5 bg-info-subtle text-center text-black">
    <p>Copyright @ 2024 | Dimiew:)</p>
</footer>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>