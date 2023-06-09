<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <title><?php the_title(); ?></title>
    <?php icon(); ?>
</head>
<body>
	<header>
    <nav id="bar">
            <div onclick="location.href = 'https://nolderajat.ub.ac.id/'" id="bar-logo">
                <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/logo-Putih.png"
                    alt="logo-nolder">
                <h2 id="title-bar">Nol Derajat Film</h2>
            </div>
            <ul id="menu-home">
                <li id="menu-title">
                    <p id="text-menu-title" onclick="location.href = 'https://nolderajat.ub.ac.id/'">Home</p>
                </li>
                <li id="menu-title">
                    <div id="menu-drop">
                        <p id="text-menu-title" onclick="location.href = '#identitas'">Profile</p>
                        <i onclick="submenu(1)" id="menu-drop-1" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-1" class="profil-menu">
                        <li onclick="location.href = '#pengurus'">
                            <p id="submenu-title">PANORAMA</p>
                        </li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-inti/'"><p id="submenu-title">Inti</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-anf/'"><p id="submenu-title">AnF</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-psdi/'"><p id="submenu-title">PSDI</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-psdm/'"><p id="submenu-title">PSDM</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-dea/'"><p id="submenu-title">DEA</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-produksi/'"><p id="submenu-title">Produksi</p></li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/pengurus-humi/'"><p id="submenu-title">HUMI</p></li>
                    </ul>
                </li>
                <li id="menu-title">
                    <p id="text-menu-title" onclick="location.href = '#berita'">News</p>
                </li>
                <li id="menu-title">
                    <div id="menu-drop">
                        <p id="text-menu-title" onclick="location.href = 'http://nolderajatfilm.ub.ac.id#film'">Movie
                        </p>
                        <i onclick="submenu(2)" id="menu-drop-2" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-2" class="profil-menu">
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/film/'">
                            <p id="submenu-title">Our Movies</p>
                        </li>
                    </ul>
                </li>
                <li id="menu-title">
                    <p id="text-menu-title" onclick="location.href = '#konten'">Content</p>
                </li>
                <li id="menu-title">
                    <div id="menu-drop">
                        <p id="text-menu-title">Our Store</p>
                        <i onclick="submenu(3)" id="menu-drop-3" class="fa-solid fa-angle-right"></i>
                    </div>
                    <ul id="profil-menu-3" class="profil-menu">
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/merchandise/'">
                            <p id="submenu-title">Merchandise</p>
                        </li>
                        <li onclick="location.href = 'https://nolderajat.ub.ac.id/nolder-rent/'">
                            <p id="submenu-title">Penyewaan Barang</p>
                        </li>
                    </ul>
                </li>
                <li id="menu-title">
                    <p id="text-menu-title" onclick="location.href = '#kontak'">Contact</p>
                </li>
                <li id="menu-title">
                    <p id="text-menu-title" onclick="location.href = 'https://nolderajat.ub.ac.id/film-submission/'">
                        Freshman Prod.</p>
                </li>
                <!-- <li id="menu-title"><p id="text-menu-title" onclick="location.href = 'born-7-0/'">BORN 7.0</p></li> -->
                <li id="btn-close" onclick="bar()"><i class="fa-solid fa-xmark"></i></li>
            </ul>
            <div id="short-nav" onclick="bar()">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>