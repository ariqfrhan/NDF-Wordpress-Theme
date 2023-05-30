<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        /* Hero */

        body {
            height: auto;
        }

        #title-post {
            display: none;
        }

        #vr-glass {
            display: none;
        }

        #content-post {
            filter: blur(0px);
            padding: 0;
        }

        #decor-post1 #decor-post2,
        #decor-post3,
        #decor-post4,
        #decor-post5 {
            display: none;
        }

        #hero {
            height: 95vh;
            background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%);
            /* padding-top: 10vh; */
        }

        #hero .container {
            padding-top: 25vh;
        }

        .fs-title {
            font-family: 'Poppins';
            font-weight: 700;
            font-size: 80px;
            color: white;
            margin-top: 5vh;
        }

        #image-background {
            width: 686px;
            height: 55vh;
            background-color: white;
            border-radius: 25px;
            position: absolute;
        }

        #image-background .baju {
            height: 30vw;
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translateX(-50%) translateY(-55%);
        }

        #image-background .decor {
            position: absolute;
            top: -10%;
            left: -5%;
        }

        /* Foot Hero */
        #foothero {
            height: 6vh;
            background-color: #32524E;
        }

        #merch-gap,
        #merch-gap-element {
            display: flex;
            transform: translateX(-75px);
            background-color: #32524E;
        }

        #merch-gap-element * {
            margin: auto 30px;
            color: white;
            font-weight: 700;
        }

        #merch-gap-element p {
            font-size: calc(10px + .25vw);
        }

        #merch-gap-element img {
            width: calc(20px + .25vw);
            height: calc(20px + .25vw);
        }

        /* PriceList */
        #priceList {
            height: 100vh;
            padding-top: 2%;
            background-color: white;
        }

        section h2 {
            font-family: 'Philosopher', sans-serif;
            font-size: 56px;
            font-weight: bold;
            color: black;
        }

        section hr {
            border: 1px solid black;
            opacity: 100;
        }

        #priceList #tabel {
            margin-top: 3%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }

        #tabel td,
        #tabel th {
            border: 1px solid #F3BC2C;
        }

        #tabel th {
            background-color: #32524E;
            color: #F7F7F7;
            font-family: 'Philosopher', sans-serif;
            font-weight: 500;
            font-size: 20px;
        }

        #tabel tr {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #F7F7F7;
            font-weight: medium;
            font-size: 16px;
        }

        #tabel tr:nth-child(odd) {
            background-color: #8A5780;
        }

        #tabel tr:nth-child(even) {
            background-color: #BD8FB4;
        }

        #tabel tr:hover {
            background-color: #4B1B50;
        }

        /* How to Rent */
        #how {
            height: auto;
            margin-bottom: 30px;
        }

        .accordion-button {
            background-color: #8A5780;
            color: white;
            font-family: 'Philosopher', sans-serif;
            font-size: 24px;
        }

        .accordion {
            --bs-accordion-bg: #F3CFE1;
            --bs-accordion-active-bg: #8A5780;
            --bs-accordion-active-color: white;
            --bs-accordion-btn-focus-box-shadow: white;
        }

        .accordion-button::after {
            background-image : url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-button:not(.collapsed)::after{
            background-image : url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); 
        }


        .accordion li {
            margin-top: 10px;
        }

        .accordion-body {
            font-size: 18px;
        }

        .btn-light {
            color: #428059;
            font-family: 'Poppins';
            font-size: 20px;
            font-weight: bold;
            width: 13vw;
            border-radius: 30px;
        }

        .btn-warning {
            color: #32524E;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 24px;
            font-weight: bold;
            width: 13vw;
            border-radius: 30px;
        }

        .btn-warning:hover {
            background-color: #32524E;
            color: #F3BC2C;
            border-color: #32524E;
            filter: drop-shadow(0px 0px 3px #000);
        }

        @media (max-width: 840px) {
            #hero #image-background {
                display: none;
            }

            .btn-light {
                width: 180px;
            }

            .btn-warning{
                width: 180px;
            }
        }
    </style>
</head>

<body>
    <header id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="fs-title text-white">NOLDER <br> RENT</h1>
                    <button type="button" class="btn btn-warning" onclick="window.open('https://api.whatsapp.com/send?phone=6285212639453&text=Halo+admin,+Saya+ingin+Meminjam', '_blank')">Book Now</button>
                </div>
                <div class="col-lg-6">
                    <div id="image-background">
                        <img class="decor" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Star-1.png">
                        <img class="baju" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Hero-Penyewaan-1.png" alt="rent">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="foothero">
        <div id="merch-gap">
            <?php
            for ($i = 0; $i < 20; $i++) {
            ?>
                <div id="merch-gap-element">
                    <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Star-4.png" alt="star-decor">
                    <p>nolder.store</p>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <section id="priceList">
        <div class="container">
            <div class="price-judul mt-3">
                <h2 class="price">Price List</h2>
                <hr>
            </div>

            <table id="tabel" cellspacing="0" cellpadding="5">
                <tr>
                    <th width="80px" rowspan="2" class="text-center">No</th>
                    <th width="500px" rowspan="2" class="text-center">Nama Barang</th>
                    <th width="200px" colspan="2" class="text-center">Harga Sewa</th>
                </tr>
                <tr>
                    <th class="text-center">12 Jam</th>
                    <th class="text-center">24 Jam</th>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Godox SL60 W + Softbox Godox</td>
                    <td>Rp45.000</td>
                    <td>Rp85.000</td>
                </tr>
                <tr class="text-center">
                    <td>2</td>
                    <td>Godox SL 60 W</td>
                    <td>Rp45.000</td>
                    <td>Rp70.000</td>
                </tr>
                <tr class="text-center">
                    <td>3</td>
                    <td>Softbox Godox</td>
                    <td>Rp15.000</td>
                    <td>Rp20.000</td>
                </tr>
                <tr class="text-center">
                    <td>4</td>
                    <td>Boom Pole Kecil</td>
                    <td>-</td>
                    <td>Rp10.000</td>
                </tr>
                <tr class="text-center">
                    <td>5</td>
                    <td>Canon 80D (Body Only)</td>
                    <td>Rp75.000</td>
                    <td>Rp110.000</td>
                </tr>
                <tr class="text-center">
                    <td>6</td>
                    <td>Canon 80D + Kit</td>
                    <td>Rp85.000</td>
                    <td>Rp125.000</td>
                </tr>
                <tr class="text-center">
                    <td>7</td>
                    <td>Zoom H1N</td>
                    <td>Rp15.000</td>
                    <td>Rp25.000</td>
                </tr>
                <tr class="text-center">
                    <td>8</td>
                    <td>Reflektor Kecil</td>
                    <td>-</td>
                    <td>Rp10.000</td>
                </tr>
                <tr class="text-center">
                    <td>9</td>
                    <td>Clapper</td>
                    <td>Rp15.000</td>
                    <td>Rp20.000</td>
                </tr>
                <tr class="text-center">
                    <td>10</td>
                    <td>Green Screen</td>
                    <td>-</td>
                    <td>Rp10.000</td>
                </tr>
            </table>

            <div class="available text-center mt-3">
                <p><b>For Availability :</b></p>
                <button type="button" class="btn btn-warning" onclick="window.open('https://api.whatsapp.com/send?phone=6285212639453&text=Halo+admin,+Saya+ingin+Meminjam', '_blank')" target="_blank">BOOK NOW</button>
            </div>
        </div>
    </section>

    <section id="how">
        <div class="container">
            <div class="how-judul">
                <h2>How To Rent</h2>
                <hr>
            </div>
            <div class="accordion" id="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Star-4.png" style="width:32px;"> Alur Penyewaan Inventaris
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ol>
                                <li>Pemohon menghubungi Penanggung Jawab (PJ) Inventaris melalui WhatsApp untuk mengonfirmasi ketersediaan alat pada tanggal yang dibutuhkan. Permohonan penyewaan paling lambat H-3 dari tanggal yang dibutuhkan.</li>
                                <li>Pemohon mengisi formulir setelah PJ Inventaris mengonfirmasi ketersediaan alat pada tanggal yang dibutuhkan oleh Pemohon.</li>
                                <li>Pemohon mengonfirmasi peminjaman kepada PJ Inventaris melalui WhatsApp.</li>
                                <li>Pemohon dapat melakukan pembayaran penyewaan inventaris setelah PJ Inventaris menyetujui Surat Penyewaan Pemohon.<br>
                                    Pembayaran inventaris:
                                    <ul style="list-style-type:circle;">
                                        <ol>BCA: 1230721676</ol>
                                        <ol>MANDIRI: 1440023451070</ol>
                                        <ol>DANA 085755433320</ol>
                                        <ol>GOPAY 085755433320</ol>
                                        <ol>Shopeepay 085755433320</ol>
                                    </ul>
                                </li>
                                <li>Pengambilan barang dapat disesuaikan sesuai kesepakatan KEDUA PIHAK setelah Pemohon membayar penyewaan inventaris disetujui.</li>
                                <li>Apabila ada pergantian atau perpanjangan penyewaan, segera hubungi PJ Inventaris untuk melakukan konfirmasi <strong>maksimal H+1</strong> dari tanggal pengembalian. Pembayaran tambahan dilakukan bersamaan. Apabila tidak ada konfirmasi perpanjangan dan belum dikembalikan, denda diberlakukan.</li>
                                <li>Jaminan yang diberikan peminjam berupa <strong>KTP/SIM ASLI.</strong></li>
                                <li>Pengambilan inventaris dibuka pada hari kerja (Senin - Jumat).</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Star-4.png" style="width:32px;"> Alur Pengembalian Inventaris
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <ol>
                                <li>Barang dikembalikan sesuai dengan waktu yang telah disepakati.</li>
                                <li>Apabila terlambat melakukan pengembalian, akan dikenakan <strong>sanksi</strong> berupa uang dengan nominal Rp 10.000 untuk keterlambatan 1 (satu) hari, dan bertambah Rp 5.000 untuk hari berikutnya.</li>
                                <li>Menghubungi PJ Inventaris sebelum melakukan pengembalian.</li>
                                <li>PJ Inventaris harus mengecek kondisi inventaris yang dipinjam sebelum mengembalikan <strong>KTM/SIM/KTP</strong> peminjam.</li>
                                <li>Jika pengembalian ingin dilakukan sebelum tanggal yang disepakati, harap menghubungi PJ Inventaris agar jadwal pengembalian dapat disesuaikan dengan waktu KEDUA PIHAK selama tidak melebihi waktu pengembalian yang semula.</li>
                                <li>Apabila PJ Inventaris menemukan kekurangan/kecacatan/kehilangan barang yang disewakan, Pemohon <strong>wajib</strong> untuk mengganti barang tersebut.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Star-4.png" style="width:32px;"> Alur Pembatalan Inventaris
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <ol>
                                <li>Pemohon memberitahukan pembatalan dan alasan pembatalan kepada PJ Inventaris <strong>maksimal</strong> H-1 tanggal penyewaan.</li>
                                <li>Setelah dikonfirmasi oleh PJ Inventaris, proses penyewaan resmi dibatalkan.</li>
                                <li>Biaya sewa akan dikembalikan kepada Pemohon dalam 3x24 pada hari kerja sebesar 100%.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>