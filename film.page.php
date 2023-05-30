<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #content-post{
            padding: 0;
            padding-top: 90px;
        }
        #content-page-film{
            background: none;
            background-color: rgba(157, 115, 149);
        }
        #title-post{
            display: none;
        }
        #trailer-1{
          margin: auto;
        }
    </style>
</head>
<?php 
	global $wpdb;
	$id_film = $_GET["id_movie"];
	$film = $wpdb->get_results("SELECT * FROM db_film WHERE id_film = $id_film");
?>

<body>

    <div id="content-page-film">
    <div id="poster-film">
        <img src="<?php echo $film[0]->link_foto; ?>" alt="poster">
        <div id="poster-film-border"></div>
    </div>
        <div id="judul">
            <h1><?php echo $film[0]->nama; ?></h1>
        </div>
        <ul id="rating">
            <!--<li>13+</li>-->
            <li><?php echo $film[0]->tahun; ?></li>
            <!--<li>13 menit</li>-->
        </ul>
        <!--<ul id="genre">
            <li>action</li>
            <li>comedy</li>
        </ul>-->
        <div id="sutradara">
            <label for="sut-name">Sutradara:</label>
            <h4 id="sut-name"><?php echo $film[0]->director; ?></h4>
        </div>

        <div id="desc-film">
            <label for="desc-film-txt">Deskripsi:</label>
            <p id="desc-film-txt"><?php echo $film[0]->sinopsis; ?></p>
        </div>

        <div id="trailer">
            <div id="trailer-1">
                <div id="trailer-movie">
                    <iframe src="<?php echo $film[0]->link_trailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <span onclick="Trailer(1)">&times;</span>
                </div>
            </div>
        </div>
        <div id="btn-trailer">
            <button onclick="Trailer(1)"><i class="fa-solid fa-play"></i>watch trailer</button>
        </div>
        <div id="ornament-wrapper">
            <div class="top">
                <div class="ornament"></div>
            </div>
            <div class="bottom">
                <div class="ornament"></div>
            </div>
        </div>
    </div>
    <script>
        function Trailer(idTrailer){
            document.getElementsByTagName("body")[0].classList.toggle('noscroll');
            document.getElementById('trailer').classList.toggle('active');
            document.getElementById('trailer-'+idTrailer).classList.toggle('active');
        }
    </script>
</body>

</html>