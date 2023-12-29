<?php
require 'init/init.php';
$biodataDiri = new BiodataDiri("Muhammad Arlianto", "Palangka Raya", "arlianto9999@gmail.com",  "085705542193");
$kemampuan = new Kemampuan("HTML", "CSS", "Javascript", "PHP", "Python", "C++", "SPSS", "R", "Scilab", "Bahasa Inggris", "Bahasa Jerman", "Bahasa Belanda", "Bahasa Italia", "Bahasa Jepang", "Bahasa Mandarin", "Planning Of Target");
$pendidikan = new Pendidikan("Muhammad Arlianto", "SMA PGRI 2 Palangka Raya");
$experience1 = new PengalamanKerja("Muhammad Arlianto", "PT. Bisma Dharma Kencana", "2018-2020", "Database & Data Science Sawit");
$experience2 = new PengalamanKerja("Muhammad Arlianto", "Hotel Bahalap", "2020-2021", "Database & Data Science Customer");
$experience3 = new PengalamanKerja("Muhammad Arlianto", "BOSF MAWAS", "2021-2022", "Database & Data Science Conservation");
$experience4 = new PengalamanKerja("Muhammad Arlianto", "Klinik Hanfris", "2022-2023", "Database & Data Science Pasien");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae Muhammad Arlianto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="container1">
            <div class="path1">
            </div>
            <h1>PORTOFOLIO</h1>

            <div class="path2">
                <h2><u>RESUME</u></h2>
                <p><a href = "https://github.com/Lian9999">Github</a></p>
                <p><a href = "https://www.instagram.com/l14n111/">Instagram</a></p>
                <p><a href = "https://www.tiktok.com/@lian97791">TikTok</a></p>
            </div>
            <div class="path3">
                <h2><u>CONTACT</u></h2>
                <p>Whatsapp</p>
                <p>Telegram</p>
                <p>Dicord</p>
            </div>
        </div>

        <div class="section1">
            <h2>Informasi Pribadi</h2>
            <p>Nama: <?php echo $biodataDiri->name(); ?></p>
            <p>Alamat: <?php echo $biodataDiri->location(); ?></p>
            <p>Email: <?php echo $biodataDiri->email(); ?></p>
            <p>Telepon: <?php echo $biodataDiri->contactme(); ?></p>
        </div>

        <div class="section2">
            <h2>Pendidikan</h2>
            <h3><?php echo $pendidikan->sma() ?></h3>
            <p>Tahun: 2015 - 2018</p>
            <p>Jurusan: IPA</p>
        </div>

        <div class="section3">
            <h2>Pengalaman Kerja</h2>
            <h3><?php echo $experience4->work(); ?></h3>
            <p>Tahun: <?php echo $experience4->year(); ?></p>
            <p>Posisi: <?php echo $experience4->position(); ?></p>
            <h3><?php echo $experience3->work(); ?></h3>
            <p>Tahun: <?php echo $experience3->year(); ?></p>
            <p>Posisi: <?php echo $experience3->position(); ?></p>
            <h3><?php echo $experience2->work(); ?></h3>
            <p>Tahun: <?php echo $experience2->year(); ?></p>
            <p>Posisi: <?php echo $experience2->position(); ?></p>
            <h3><?php echo $experience1->work(); ?></h3>
            <p>Tahun: <?php echo $experience1->year(); ?></p>
            <p>Posisi: <?php echo $experience1->position(); ?></p>
        </div>

        <div class="section4">
            <h2>Keterampilan</h2>
            <p><?php echo $kemampuan->skill1(); ?></p>
            <p><?php echo $kemampuan->skill2(); ?></p>
            <p><?php echo $kemampuan->skill3(); ?></p>
            <p><?php echo $kemampuan->skill4(); ?></p>
            <p><?php echo $kemampuan->skill5(); ?></p>
            <p><?php echo $kemampuan->skill6(); ?></p>
            <p><?php echo $kemampuan->skill7(); ?></p>
            <p><?php echo $kemampuan->skill8(); ?></p>
            <p><?php echo $kemampuan->skill9(); ?></p>
            <p><?php echo $kemampuan->skill10(); ?></p>
            <p><?php echo $kemampuan->skill11(); ?></p>
            <p><?php echo $kemampuan->skill12(); ?></p>
            <p><?php echo $kemampuan->skill13(); ?></p>
            <p><?php echo $kemampuan->skill14(); ?></p>
            <p><?php echo $kemampuan->skill15(); ?></p>
        </div>

        <div class="section5">
            <h2>Tentang Saya</h2>
            <p>I am an IT with experience as a software support specialist and system/network technician student. A person who is very thorough, creative, innovative, efficient and skilled in operating various IT support platforms.

Have good communication skills and able to explain complex software issues in easy-to-understand terms.</p>
        </div>
    </div>
</body>

</html>