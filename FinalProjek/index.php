<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>GoTravel.Id | Company Profile</title>
        <link rel="icon" type="image/jpeg" href="foto/logo.jpeg">
      </head>      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="foto/logo.jpeg" alt="GoTravel.Id Logo" width="40" height="40">
                GoTravel.Id
              </a>              
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                     <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<!--section-->
<section class="hero-section text-center" style="position: relative; height: 600px; overflow: hidden;">
    <img src="foto/Halaman Baru.webp" alt="Transport image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -1;">
    
    <!-- Add an overlay for better text contrast -->
    <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>
    
    <!-- Center the text both vertically and horizontally -->
    <div class="container" style="position: relative; z-index: 1; color: white; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1>Selamat datang di GoTravel.Id</h1>
        <p>Mitra terpercaya Anda dalam solusi tiket transportasi Kereta.</p>
    </div>
</section>




<!-- About Us Section -->
<section id="about" class="about-us-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Tentang Kami</h2>
                <p>Aplikasi pemesanan tiket transportasi kami memberikan
                    kemudahan bagi Anda untuk memesan tiket transportasi, hanya dalam satu genggaman.
                    Dengan antarmuka yang sederhana dan intuitif, Anda dapat menemukan tiket dengan cepat,
                    menghindari antrian panjang, dan merencanakan perjalanan dengan nyaman.
                    Sistem pemesanan yang cepat dan aman memastikan Anda mendapatkan tiket tepat waktu,
                    sehingga perjalanan Anda berlangsung tanpa hambatan.
                    Nikmati kemudahan, keamanan, dan kenyamanan dalam setiap langkah, dari pemesanan hingga perjalanan, semuanya dirancang untuk membuat pengalaman Anda lebih praktis dan bebas stres..</p>
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <h2 class="text-center">Layanan Kami</h2>
        <div class="row">
            <!-- Kelas Ekonomi -->
            <div class="col-md-4" ><a href="Ekonomi.php" target="_blank">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <img src="foto/Ekonomi.webp" alt="Kelas Ekonomi" class="img-fluid mb-3">
                        <h5 class="card-title">Kelas Ekonomi</h5>
                        <p class="card-text">Layanan tiket kelas ekonomi dengan harga terjangkau dan nyaman.</p>
                    </div></a>
                </div>
            </div>
            
            <!-- Kelas Bisnis -->
            <div class="col-md-4"><a href="Bisnis.php" target="_blank">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <img src="foto/Bisnis.webp" alt="Kelas Bisnis" class="img-fluid mb-3">
                        <h5 class="card-title">Kelas Bisnis</h5>
                        <p class="card-text">Nikmati kenyamanan ekstra dan fasilitas lebih dengan tiket kelas bisnis.</p>
                    </div>
                </div></a>
            </div>
            
            <!-- Kelas Eksekutif -->
            <div class="col-md-4"><a href="Eksekutif.php" target="_blank">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <img src="foto/Eksekutif.webp" alt="Kelas Eksekutif" class="img-fluid mb-3">
                        <h5 class="card-title">Kelas Eksekutif</h5>
                        <p class="card-text">Pengalaman perjalanan premium dengan fasilitas eksklusif di kelas eksekutif.</p>
                    </div>
                </div></a>
            </div>
        </div>
    </div>
</section>

<!-- Client Section -->
<!-- Reviews Section -->
<section id="reviews" class="reviews-section">
    <div class="container">
        <h2 class="text-center">Ulasan Pelanggan</h2>
        
        <!-- Display Reviews -->
        <div class="row" id="reviews-display">
            <!-- Reviews will be dynamically inserted here -->
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3>Beri Ulasan</h3>
                <form id="review-form">
                    <div class="mb-3">
                        <label for="reviewer-name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="reviewer-name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="reviewer-rating" class="form-label">Rating</label>
                        <div class="rating">
                            <span class="star" data-value="5">★</span>
                            <span class="star" data-value="4">★</span>
                            <span class="star" data-value="3">★</span>
                            <span class="star" data-value="2">★</span>
                            <span class="star" data-value="1">★</span>
                        </div>
                        <input type="hidden" id="reviewer-rating" value="0">
                    </div>
                    <div class="mb-3">
                        <label for="reviewer-text" class="form-label">Ulasan</label>
                        <textarea class="form-control" id="reviewer-text" rows="3" placeholder="Tulis ulasan Anda"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitReview()">Kirim Ulasan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section bg-light">
    <div class="container">
        <h2 class="text-center">Kontak Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama mu</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukan nama mu">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan email mu">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="3"
                            placeholder="Masukan nama mu"></textarea>
                    </div>
                    <button type="kirim" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>