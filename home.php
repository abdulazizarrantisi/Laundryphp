<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <title>Home</title>
</head>
<body>
<?php
    include "navbar.php";
?>
        <!-- poster -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up"><b>Selamat Datang <?=$_SESSION['role']?> <?=$_SESSION['nama_user']?> Di WebSite <span>Suka Laundry</span></b></h2>
                <p data-aos="fade-up" data-aos-delay="100">Membantu Anda menetapkan tujuan pakaian profesional dengan mencuci pakaian Anda sebaik mungkin.</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#contact" class="btn-book-a-table">Hubungi Kami!</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="img/home1.png " class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </div>
</section>

<!-- copas yt -->
<div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="img/cleaning.png" width="350px"/>
            <div class="kolom-intro">
                <p class="deskripsi">Mari Kita Cuci #CucianAnda</p>
                <h2><b>Memperkenalkan</b></h2>
                <p>Kami dapat membantu Anda untuk mencuci pakaian kotor, kemeja, kaos, celana, celana, dan masih banyak lagi.</p> 
                <p>Karena kami yang terbesar, kami melayani Anda secepat dan sebersih mungkin.
                Datang ke kami di Danau Tambingan No. 21 Sawojajar, atau hubungi os di 081673912844</p>
                <!-- <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p> -->
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom-diskon">
                <p class="deskripsi">Mungkin kamu akan membutuhkan ini</p>
                <h2><b>Diskon SuperWAngi</b></h2>
                <p>Kami menawarkan berbagai diskon menarik. Pakaian Anda akan berbau harum saat berada di tangan Anda lagi. Anda tidak perlu khawatir tentang layanan kami karena Anda adalah keagungan kami.</p>
                <p>Diskon untuk pelanggan pertama dan diskon anggota akan menunggu Anda setiap saat. Anda akan mendapatkan banyak manfaat. Apa yang kamu tunggu? Mari Kita Cuci #CucianAnda</p>
                <!-- <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p> -->
            </div>
            <img src="img/soap.png" width="350px"/>
        </section>
        <section id="contact">
            <div class="tengah">
                <div class="kolom-kontak">
                    <p class="deskripsi">Nikmati Waktu anda</p>
                    <h2><b>Anda bisa menghubungin kami lewat media dibawah</b></h2>
                    <p>Hubungi kami segera jika Anda membutuhkan bantuan untuk meringankan pekerjaan mencuci pakaian Anda. Kami akan dengan senang hati menerima dan memberikan pelayanan kepada Anda</p>
                </div>
                <div class="social" target="_blank">
                    <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#" target="_blank"><i class="fa-solid fa-map-pin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </section>
    </div>
<!-- end -->
</body>
</html><br>
<?php
    include "footer.php";
?>