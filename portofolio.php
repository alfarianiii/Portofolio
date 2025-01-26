<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php'); 
    exit();
}
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portofolio.css">
</head>
<body>
<header class="navbar">
    <div class="navbar-left">
        <img src="lambang unsri.jpg" alt="Logo">
        <h1>Syifa Alfariani</h1>
    </div>
    <nav class="navbar-right">
        <a href="#Beranda" class="nav-button">Beranda</a>
        <a href="#Tentang" class="nav-button">Tentang Saya</a>
        <a href="#projek" class="nav-button">Projek</a>
        <a href="#Kontak" class="nav-button">Kontak</a>
    </nav>
</header>
<div class="marquee">
  <h1>Selamat datang di Portofolio Saya </h1>
</div>

    <div class="container">
        <section id="Beranda" class="profil">
            <h2 style="color:white">Beranda</h2>
            <div class="profil-konten">
                <img src="beranda.jpg" alt="gambar profil">
                <div class="profil-teks">
                    <h3 style=" font-family:'Georgia'";>Hai!! <br> Saya Syifa Alfariani</h3>
                    <p>
                        Mahasiswa Semester 4 yang sedang belajar UI/UX Design dan Pemrograman Web. <br>
                        Saya yakin dan percaya bahwa dengan pemanfaatan teknologi dan desain yang tepat<br>
                        dapat menciptakan berbagai pemecahan masalah dan memberikan pengalaman yang baik<br>
                        bagi pengguna teknologi. Saya ingin berbagi perjalanan belajar, projek,<br>
                        serta keahlian dan ide kreatif yang terus saya kembangkan.<br>
                        Mari temukan lebih banyak mengenai saya dan apa yang saya kerjakan di sini!!
                    </p>
                </div>
            </div>
        </section>

        <section id="Tentang" class="profil">
            <h2  style="color:white">Tentang Saya</h2>
            <div class="profil-konten">
                <img src="bem.jpg" alt="gambar profil">
                <div class="profil-teks">
                    <p>Halo!<br>
                      Saya Syifa, mahasiswa semester 4 di Program Studi Sistem Informasi, 
                      Fakultas Ilmu Komputer, Universitas Sriwijaya. Saat ini, saya sedang fokus
                      mempelajari UI/UX Design dan Pemrograman Web untuk memperdalam keterampilan 
                      saya dalam menciptakan solusi digital yang kreatif dan bermanfaat. 
                      Sebelumnya, saya bersekolah di SMA Negeri 1 Pagaralam, dengan jurusan MIPA, 
                      di sana saya mulai belajar dasar pengetahuan dalam ilmu sains dan teknologi.</p>
                    <p><strong>Pengalaman Organisasi</strong></p>
                    <p> Di luar dunia akademik, saya juga memiliki pengalaman dalam  organisasi, yaitu menjadi
                        bagian dari BEM KM Fasilkom UNSRI sebagai Staff Dinas Sosial Masyarakat dan Lingkungan. 
                        Pengalaman ini telah memberikan saya banyak pelajaran berharga, seperti:</p>
                    <ul>
                        <li> Menumbuhkan rasa cinta terhadap lingkungan.</li>
                        <li> Belajar empati dan cara bersimpati terhadap berbagai isu sosial.</li>
                        <li> Mengelola perbedaan pandangan dan bekerja sama dengan beragam individu.</li>
                    </ul>
                    <p>Selain itu, melalui kegiatan ini, saya juga mengembangkan kemampuan seperti:</p>
                    <ul>
                        <li><b>Kerja sama tim,</b> yang membantu saya memahami cara efektif mencapai tujuan bersama.</li>
                        <li><b>Manajemen waktu,</b>agar saya tetap produktif dan terorganisir meski memiliki banyak tanggung jawab.</li>
                        <li><b>Kepemimpinan,</b> yang mempersiapkan saya untuk memimpin proyek dan tim di masa depan</li>
                    </ul>
                   
                    <p><strong>Misi Saya</strong><br>
                        Saya ingin terus belajar dan berkembang di bidang teknologi, menciptakan solusi digital yang tidak
                        hanya inovatif, tetapi juga mampu meningkatkan kualitas hidup banyak orang.
                    </p>
                </div>
            </div>
        </section>

        <section id="projek" class="projek">
            <h2  style="color:white">Projek</h2>
            <div class="projek-item">
                <img src="qos1.jpg" alt="Project 1">
                <img src="qos2.jpg" alt="Project 1">
                <div>
                    <h3>QOS Analisis</h3>
                    <p>Saya Melakukan Analisis QOS di Gedung D Fasilkom UNSRI untuk memenuhi
                    tugas proyek Jaringan Komputer. Pada saat melakukan analisis saya 
                    mendapatkan beberapa ilmu baru. Saya juga melakukan presentasi selama 3 menit untuk
                    menjelaskan hasil analisis saya.</p>
                </div>
            </div>
            <div class="projek-item">
                <img src="jekwave.jpg" alt="Project 2">
                <div>
                    <h3>Jekwave</h3>
                    <p>Pada Semester 3 saya dan kelompok saya di berikan tugas projek Rekayasa 
                    perangkat Lunak berupa pembuatan Aplikasi/Web untuk pengguna transportasi.
                    kami memberi nama web tersebut Jekwave. Pada saat ini saya dan satu rekan saya 
                    mendapatkan bagian untuk mendesain UI web tersebut.</p>
                </div>
            </div>
        </section>

        <section id="Kontak" class="kontak">
            <h2 style="color:white">kontak</h2>
            <div class="kontak-konten">
            <div class="kontact-teks">
                 <h5>Kamu bisa menghubungi saya melalui kontak dibawah ini :</h5>
                    <a href="https://www.linkedin.com/in/syifa-alfariani-532b2a331?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                    <img src="linkedln.jpeg" alt="linkedln" style="width: 100px; height: auto; max-width: 100%;"></a>
                    <a href=" mailto:09031282328096@student.unsri.ac.id" >
                    <img src="Gmail.png" alt="gmail" style="width: 100px; height: auto; max-width: 100%;"></a>
                    <a href=" mailto:Syifaalfariani1403@gmail.com" >
                    <img src="Gmail.png" alt="gmail" style="width: 100px; height: auto; max-width: 100%;"></a>
                    <a href="https://www.instagram.com/syif_alfa?igsh=OG56bGZkNW14MnM3" target="_blank">
                    <img src="insta.jpeg" alt="instagram" style="width: 50px; height: auto; max-width: 100%;"></a>
            </div>
            </div>
           
        </section>
    </div>
</body>
</html>
