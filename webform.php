<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assets/style.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,700&display=swap');

        /* ----------header----------- */
        #submission {
            font-family: 'Philosopher', sans-serif;
            padding-top: 10vh;
            padding-bottom: 10vh;
            padding: 10vw;
            /* background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%); */
        }

        #content-post {
            background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%);
            filter: blur(0px);
            padding: 0;
        }

        #decor-post1 #decor-post2,
        #decor-post3,
        #decor-post4,
        #decor-post5 {
            background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%);
        }

        /* ------------Form------------- */

        #msform fieldset {
            border: none;
            box-sizing: border-box;
            width: 100%;
            margin-top: -12%;
            padding-bottom: 10px;
            padding-top: 5px;
            position: relative;
        }

        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #submission .fs-title {
            font-size: calc(48px + .5vw);
            color: #ffffff;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        #submission h1 {
            font-weight: bolder;
            color: #32524E;
            font-size: calc(63px + .1vw);
            margin-top: -2%;
            opacity: 100%;
        }

        /* Progress Bar */
        #progressbar {
            top: 15%;
            margin-bottom: 0px;
            overflow: hidden;
            color: grey;
            display: flex;
        }

        #progressbar .active {
            color: black;
        }

        #progressbar li {
            list-style-type: none;
            float: left;
            position: relative;
            width: 25%;
            padding-left: 20%;
            padding-top: 5%;
        }

        #progressbar #produser:before {
            font-family: Poppins;
            content: "1";
        }

        #progressbar #produser:before {
            font-family: Poppins;
            content: "1";
            background-color: rgba(243, 188, 44, 1);
            color: #000;
            border-radius: 50%;
            padding: 8px;
            display: inline-block;
        }

        #progressbar #produser:after {
            content: '';
            width: 50%;
            height: 10px;
            line-height: 1px;
            position: absolute;
            left: 1px;
            top: 50px;
            z-index: 0;
            margin-left: 30%;
            padding-left: 50%;
            display: none;
            /* menambahkan properti ini untuk menghilangkan garis */
        }


        #progressbar #film:before {
            font-family: Poppins;
            content: "2";
        }

        #progressbar #check:before {
            font-family: Poppins;
            content: "3";
        }

        #progressbar li:before {
            width: calc(30px + .25vw);
            height: calc(30px + .25vw);
            line-height: 15px;
            display: block;
            font-size: 18px;
            font-weight: bold;
            color: #000000;
            background: #797979;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 8px;
            text-align: center;
            z-index: 0;
        }

        /*ProgressBar connectors*/
        #progressbar li {
            list-style-type: none;
            float: left;
            position: relative;
            width: 25%;
            /* hapus padding-left */
            padding-top: 5%;
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 10px;
            line-height: 1px;
            background: #797979;
            position: absolute;
            left: -12%;
            top: 40%;
            z-index: -1;
            margin-left: -1px;
            padding-left: 0px;
            opacity: 1;
        }

        #progressbar #check:after {
            left: -15%;
            top: 28%;
        }



        /*Color number of the step and the connector before it*/
        #progressbar li.active:before {
            background: rgba(243, 188, 44, 1);
            /* tambahkan animasi untuk memperbesar lingkaran */
            animation: grow-circle 0.5s ease-in-out forwards;
        }

        #progressbar li.active:after {
            background: rgba(243, 188, 44, 1);
        }

        /* tambahkan animasi untuk memperbesar lingkaran */
        @keyframes grow-circle {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }


        #submission .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

        #left {
            margin-left: -8vw;
            z-index: 100;
        }

        #submission .card {
            margin-right: -23%;
            padding: 3vw;
            background-color: #8a578091;
            border-radius: 15px;
            margin-bottom: 10vh;
        }


        label {
            color: white;
            font-weight: bold;
        }

        #submission input {
            background: linear-gradient(90deg, #FDEDAA 0%, #f3bb2ca7 66%);
            /* box-shadow: 0 0 2px rgba(0, 0, 0, 0.6); */
        }

        input::placeholder {
            font-family: 'Poppins', sans-serif;
            font-style: italic;
            font-size: 14px;
            color: rgba(112, 112, 112, 0.205);
            opacity: 0.1;
        }

        #submission input[type="text"] {
            font-size: 20px;
        }

        #submission .btn-primary {
            background-color: #32524E;
            border-color: #32524E;
            font-weight: bold;
            font-size: 20px;
            width: 8vw;
        }

        #submission .btn-primary:hover {
            background-color: #4B7671;
            border-color: #4B7671;
        }

        #submission .btn-danger {
            background-color: #F3BC2C;
            border-color: #F3BC2C;
            color: black;
            font-weight: bold;
            font-size: 20px;
            width: 11%;
        }

        #submission .btn-danger:hover {
            background-color: #ffda7b;
            border-color: #ffda7b;
            color: black;
        }

        hr {
            border: 3px solid white;
            z-index: 100;
            opacity: 1;
            margin-top: -0.5%;
        }

        #submission .title {
            margin-left: -10px;
        }

        #submission p {
            color: white;
        }

        #step-3 h3 {
            color: #4B1B50;
        }

        #step-3 hr {
            border: 2px solid #32524E;
        }

        #step-3 label {
            color: #4B1B50;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: medium;
            font-size: 16px;
            margin-bottom: 1px;
        }

        #step-3 p {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 24px;
            font-weight: bold;
        }

        #submission .image {
            position: absolute;
            right: 150px;
            width: 64px;
            top: -100px;
        }


        #submission .form-control {
            border: #8A5780;
            box-shadow: inset 0 1px px rgba(0, 0, 0, 0.075), inset 0 0 8px #8A5780;
        }


        #submission .form-control:focus {
            border-color: #F3BC2C;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 12px #F3BC2C;
        }

        /* --------------responsive----------- */

        @media only screen and (max-width: 1180px) {
            header {
                height: auto;
            }

            #submission h1 {
                font-size: 80px;
            }

            .judul {
                padding-top: 10vh;
                text-align: center;
                transform: translateX(5%);
            }


            #title-bar {
                display: none;
            }

            .movie {
                display: none;
            }

            .image {
                display: none;
            }

            #submission .card {
                margin-right: 0vw;
            }


            /* * Progress Bar */

            #progressbar li:after {
                top:-10px;
            }

            #progressbar li:before {
                top:-20px;
            } 

        }

        @media only screen and (max-width: 928px) {

            .movie {
                display: none;
            }

            .image {
                display: none;
            }

            #submission .card {
                margin-right: 0vw;
                padding: 5vw;
                width: 85vw;
                transform: translateX(-5%);
            }

            #left {
                text-align: center;
            }

            #submission h1 {
                font-size: 48px;
            }

            header {
                height: auto;
            }

            #step-3 p {
                font-size: 16px;
            }

            #step-3 label {
                font-size: 10px;
            }

            #submission .btn-primary {
                font-size: 18px;
                width: 31%;
            }

            #submission .btn-danger {
                font-size: 18px;
                width: 27%;
            }

            #submission .fs-title {
                font-size: 40px;
            }

            /* * Progress Bar */
            #progressbar {
                top: 15%;
                margin-bottom: 15px;
                overflow: hidden;
                color: grey;
                display: flex;
            }

            #progressbar .active {
                color: black;
            }

            #progressbar li {
                list-style-type: none;
                float: left;
                position: relative;
                width: 25%;
                padding-left: 10%;
                padding-top: 5%;
            }

            #progressbar li:before {
                width: 30px;
                height: 30px;
                line-height: 15px;
                display: block;
                font-size: 18px;
                font-weight: bold;
                color: #000000;
                background: #797979;
                border-radius: 50%;
                margin: 0 auto 10px auto;
                padding: 8px;
                text-align: center;
                z-index: 0;
                top: -20%;
                right: 20%;
            }

            /*ProgressBar connectors*/
            #progressbar li {
                list-style-type: none;
                float: left;
                position: relative;
                width: 25%;
                /* hapus padding-left */
                padding-top: 5%;
            }

            #progressbar li:after {
                content: '';
                width: 100%;
                height: 10px;
                line-height: 1px;
                background: #797979;
                position: absolute;
                left: -25%;
                top: 25%;
                z-index: -1;
                margin-left: -1px;
                padding-left: 0px;
                opacity: 1;
            }

            #progressbar #check:after {
                top: 18%;
            }
        }

        #copyright {
            background-color: #8A5780;
            color: white;
            height: 5vh;
            text-align: center;
            padding: 5px 0;
            font-family: "Poppins", sans-serif !important;
        }

        #vr-glass {
            display: none;
        }

        #decor-post3 {
            display: none;
        }
    </style>


</head>

<body>
    <header id="submission">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div id="left">
                        <div class="judul">
                            <h1 class="">FILM</h1>
                            <h1 class="">SUBMISSION</h1>
                            <hr>
                        </div>
                        <div class="movie">
                            <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/Asset-1-1.png" alt="Movie" width="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 formIn">
                    <div class="card shadow-lg border-0">
                        <div class="image">
                            <img src="https://nolderajat.ub.ac.id/wp-content/uploads/2023/05/cinema-1.png" alt="cinema">
                        </div>
                        <form role="form" action="https://script.google.com/macros/s/AKfycby7Nb9u57HfJDFUvKgkJ8N9Awr23o4ek1lWOR3BCUhUglYPmvDJCvA-0G7AviAd8HpkmQ/exec" method="POST" id="msform">
                            <div class="container col-lg-11 float-start">
                                <ul id="progressbar">
                                    <li class="active" id="produser"><strong></strong></li>
                                    <li id="film"><strong></strong></li>
                                    <li id="check"><strong></strong></li>
                                </ul>
                            </div>
                            <div class="container col-lg-11 float-start">
                                <fieldset class="setup-content" id="step-1">
                                    <h2 class="fs-title text-center">Producer Identity</h2>
                                    <div class="form-group">
                                        <label for="nama" class="control-label">Nama Lengkap</label>
                                        <input id="nama" name="nama" class="form-control" type="text" placeholder="Type your name" required />
                                        <div class="invalid-feedback">
                                            Please input your name
                                        </div>
                                    </div>
                                    <div class="form-group row row-cols-md-1 mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nim" class="control-label">NIM</label>
                                                <input id="nim" name="nim" class="form-control" type="text" placeholder="Type your NIM" required />
                                                <div class="invalid-feedback">
                                                    Please input your NIM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fakultas" class="control-label">Fakultas</label>
                                                <input id="fakultas" name="fakultas" class="form-control" type="text" placeholder="Type your faculty" required />
                                                <div class="invalid-feedback">
                                                    Please input your Faculty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row row-cols-sm-1 mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="whatsapp" class="control-label">Nomor WA</label>
                                                <input id="whatsapp" name="whatsapp" class="form-control" type="text" placeholder="Type your WhatsApp Number" required />
                                                <div class="invalid-feedback">
                                                    Please input your WhatsApp Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="line" class="control-label">ID Line</label>
                                                <input id="line" name="line" class="form-control" type="text" placeholder="Type your Line ID" required />
                                                <div class="invalid-feedback">
                                                    Please input your Line ID
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-md float-end mt-3 nextBtn">
                                        Next
                                    </button>
                                </fieldset>

                                <fieldset class="setup-content" id="step-2">
                                    <h2 class="fs-title text-center">Movie Identity</h2>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="title" class="control-label">Film Title</label>
                                            <input id="title" name="title" class="form-control" type="text" placeholder="Type your Film Title" required />
                                            <div class="invalid-feedback">
                                                Please input your Film Title
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row row-cols-1 mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="director" class="control-label">Director</label>
                                                <input id="director" name="director" class="form-control" type="text" placeholder="Type your Director Name" required />
                                                <div class="invalid-feedback">
                                                    Please input your director name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="genre" class="control-label">Genre</label>
                                                <input id="genre" name="genre" class="form-control" type="text" placeholder="Type your Film Genre" required />
                                                <div class="invalid-feedback">
                                                    Please input your film genre
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="file" class="control-label">Presskit File</label>
                                        <input id="file" name="file" class="form-control" type="text" placeholder="Drop the link" required />
                                        <div class="invalid-feedback">
                                            Please input your file link
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-md float-end mt-3 nextBtn" onclick="display()">
                                        Next
                                    </button>
                                    <button type="button" class="btn btn-danger btn-md float-end mt-3 backBtn mx-3">
                                        Back
                                    </button>
                                </fieldset>
                                <fieldset class="setup-content" id="step-3">
                                    <h2 class="fs-title text-center">Confirmation</h2>
                                    <div class="container" id="identity">
                                        <h3>Producer Identity</h3>
                                        <hr>
                                        <div class="col">
                                            <label for="FullName">Full Name:</label>
                                            <p id="FullName"><span id="display-nama"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="Faculty">Faculty:</label>
                                                <p id="Faculty"><span id="display-fakultas"></p>
                                            </div>
                                            <div class="col-6">
                                                <label for="nim">NIM:</label>
                                                <p id="nim"><span id="display-nim"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="Whatsapp">WhatsApp:</label>
                                                <p id="Whatsapp"><span id="display-whatsapp"></p>
                                            </div>
                                            <div class="col-6">
                                                <label for="line">Line ID:</label>
                                                <p id="FullName"><span id="display-line"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <h3>Movie Identity</h3>
                                        <hr>
                                        <div class="col">
                                            <label for="FilmTitle">Film Title:</label>
                                            <p id="FilmTitle"><span id="display-title"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="Director">Director:</label>
                                                <p id="Director"><span id="display-director"></p>
                                            </div>
                                            <div class="col-6">
                                                <label for="Genre">Genre:</label>
                                                <p id="Genre"><span id="display-genre"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="FileLink">Presskit Link:</label>
                                                <p id="FileLink"><span id="display-file"></p>
                                            </div>
                                            <p">*Data that has been stored cannot be changed anymore. make sure the data you fill in is correct</p>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-md float-end mt-3 nextBtn">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-md float-end mt-3 backBtn mx-3">
                                        Back
                                    </button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- <footer class="footer-navigation text-center">
        <p>Copyright &copy; 2023 IT-NolDerajatFilm</p>
    </footer> -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    document.getElementById('title-post').style.display = 'none';
    $(document).ready(function() {
        var current_fs, next_fs, previous_fs;
        var opacity;

        $(".nextBtn").click(function() {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            // Validasi form sebelum beralih ke langkah berikutnya
            var isValid = true;
            current_fs.find(":input[required]").each(function() {
                if ($(this).val() === "") {
                    isValid = false;
                    $(this).addClass("error");
                    $(this).siblings(".invalid-feedback").show();
                } else {
                    $(this).removeClass("error");
                    $(this).siblings(".invalid-feedback").hide();
                }
            });

            if (isValid) {
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        next_fs.css({
                            opacity: opacity
                        });
                    },
                    duration: 600,
                });
            }
        });

        $(".backBtn").click(function() {
            current_fs = $(this).parent();
            next_fs = $(this).parent().prev();

            $("#progressbar li")
                .eq($("fieldset").index(current_fs))
                .removeClass("active");

            next_fs.show();

            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    next_fs.css({
                        opacity: opacity
                    });
                },
                duration: 600,
            });
        });

        $("#msform").submit(function() {
            var txt = $("whatsapp");
            txt.val("'" + txt.val());
        });
    });

    function display() {
        const nama = document.getElementById("nama").value;
        const nim = document.getElementById("nim").value;
        const fakultas = document.getElementById("fakultas").value;
        const whatsapp = document.getElementById("whatsapp").value;
        const line = document.getElementById("line").value;
        const title = document.getElementById("title").value;
        const genre = document.getElementById("genre").value;
        const file = document.getElementById("file").value;
        const director = document.getElementById("director").value;

        // Store
        document.getElementById("display-nama").innerText = nama;
        document.getElementById("display-nim").innerText = nim;
        document.getElementById("display-fakultas").innerText = fakultas;
        document.getElementById("display-whatsapp").innerText = whatsapp;
        document.getElementById("display-line").innerText = line;
        document.getElementById("display-title").innerText = title;
        document.getElementById("display-genre").innerText = genre;
        document.getElementById("display-file").innerText = file;
        document.getElementById("display-director").innerText = director;
    }

    // window.addEventListener("load", function() {
    //     const form = this.document.getElementById("msform");
    //     form.addEventListener("submit", function(e) {
    //         e.preventDefault();
    //         const data = new FormData(form);
    //         const action = e.target.action;

    //         fetch(action, {
    //             method: "POST",
    //             body: data,
    //         }).then(() => {
    //             alert("Submit Form Sukses");
    //         });
    //     });
    // });
</script>

<script src="./js/webform.js" type="text/javascript"></script>

</html>