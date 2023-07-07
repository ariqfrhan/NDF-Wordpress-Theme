<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Hero */
        #title-post {
            display: none;
        }

        #content-post {
            padding: 0;
            background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%);
        }

        #vr-glass {
            display: none;
        }

        #hero {
            height: auto;
            padding-top: 15vh;
            padding-bottom: 10vh;
            font-family: 'Philosopher', sans-serif;
        }

        /* Judul */
        #nama-bidang {
            background-color: #8A5780;
            color: white;
            padding: 5px;
            font-size: 52px;
            font-weight: bold;
        }

        #panjang-bidang {
            background-color: #F3BC2C;
            color: #32524E;
            padding: 5px;
            margin-top: -1%;
            font-size: 32px;
        }

        /* Proker-Kabid */
        #kabid-proker {
            padding-top: 1.5%;
        }

        #tupoksi {
            border-radius: 10px;
            background-color: #8A5780;
            color: white;
            padding: 25px;
            padding-bottom: 10px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            text-align: justify;
        }

        #proker {
            border-radius: 10px;
            background-color: #8A5780;
            color: white;
            padding: 28px;
            padding-bottom: 5px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
        }

        #proker li {
            padding-top: 2px;
        }

        #foto-bph {
            width: 53vw;
        }

        #foto-staff{
            width: 39vw;
        }

        /* Staff */

        #title-staff {
            background-color: #F3BC2C;
            color: #32524E;
            padding: 5px;
            font-size: 32px;
        }

        @media only screen and (max-width: 428px) {

            #foto-bph {
                padding-top: 13px;
                width: 95vw;
            }

            #foto-staff {
                width: 95vw;
            }

            #tupoksi p{
                font-size: 12px;
            }

            #proker {
                padding: 24px;
                padding-bottom: 5px;
                font-size: 12px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width:1194px) {

            #foto-bph {
                padding-top: 13px;
                width: 83.5vw;
            }

            #foto-staff {
                width: 83.5vw;
            }
            
        }

        @media only screen and (min-width: 768px) and (max-width:1194px) and (orientation:landscape) {

            #foto-bph {
                width: 625px;
            }

            #foto-staff {
                width: 38.5vw;
            }

            #tupoksi {
                padding: 24px;
                padding-bottom: 5px;
                font-size: 14px;
            }

            #tupoksi p{
                font-size: 12px;
            }

            #proker {
                padding: 24px;
                padding-bottom: 5px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <header id="hero">
        <div class="container">
            <div data-aos="zoom-in" class="col-lg-12">
                <h1 id="nama-bidang" class="text-center">PSDI</h1>
                <h2 id="panjang-bidang" class="text-center fw-bold">Pengembangan Sumber Daya Internal</h2>
            </div>

            <div id="kabid-proker" class="row">
                <div data-aos="fade-right" class="col-lg-4">
                    <div id="tupoksi" class="col">
                        <h3 class="fw-bold">Tupoksi</h3>
                        <p class="pt-2">Merancang dan melaksanakan segala kegiatan yang berhubungan dengan distribusi, ekshibisi, dan apresiasi film-film hasil karya Nol Derajat Film.</p>
                    </div>
                    <div id="proker" class="col mt-4">
                        <h3 class="fw-bold">Program Kerja</h3>
                        <ul class="pt-1 pb-2">
                            <li>Staff of The Month</li>
                            <li>Staff Report</li>
                            <li>Suara Rakyat</li>
                            <li>Makrab Nolder</li>
                            <li>Upgrading Kepengurusan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img data-aos="fade-left" id="foto-bph" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/07/HUMI-BPH-card.png">
                </div>
            </div>

            <div id="staff" class="pt-4">
                <div class="col-lg-12">
                    <h1 data-aos="zoom-in" id="title-staff" class="text-center fw-bold">Staff</h1>
                </div>

                <div class="row justify-content-center ">
                    <div data-aos="fade-right" class="col-lg-6 mt-3">
                        <img id="foto-staff" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/07/HUMI_Staff-card-1.png">
                    </div>
                    <div data-aos="fade-left" class="col-lg-6 mt-3">
                        <img id="foto-staff" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/07/HUMI_Staff-card-2.png">
                    </div>
                    <div data-aos="fade-up" class="col-lg-6 mt-4">
                        <img id="foto-staff" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/07/HUMI_Staff-card-3.png">
                    </div>
                    <div data-aos="fade-up" class="col-lg-6 mt-4">
                        <img id="foto-staff" src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/07/HUMI_Staff-card-4.png">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>