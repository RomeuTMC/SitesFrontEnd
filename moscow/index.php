<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
$NOCACHE=uniqid();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
        <meta http-equiv="pragma" content="no-cache" />
        <title>Moscow - O Filme</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
            integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <link href="css/global.css?v=<?php echo $NOCACHE; ?>" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js?v=<?php echo $NOCACHE; ?>"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    </head>
<body>
<div id='principal' class='w-100'>
<div id ='mbanner' class='w-100'>
    <!-- BANNER SUPERIOR CARROUSSEL -->
    <div id="CarrousselBanner" class="carousel slide" data-ride="carousel" data-interval="3500">
        <!-- <ol class="carousel-indicators">
        <li data-target="#CarrousselBanner" data-slide-to="0" class="active"></li>
        <li data-target="#CarrousselBanner" data-slide-to="1"></li>
        </ol> -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="elementos/banner1.jpg">
        </div>
        <!-- <div class="carousel-item">
            <img class="d-block w-100" src="elementos/banner2.jpg">
        </div> -->
        </div>
    </div>
    <!-- FIM DO BANNER -->
</div>
</div>
<div id='main' class='w-100'>
  <div id='smain' class='w-100'>
    <div class="w-100">
        <!-- Inicio do alerta VOCE ESTA PREPARADO -->
        <div class='space'>&nbsp;</div>
        <center><img src='elementos/vcpreparado.png' id='preparado'></center>
        <!-- FIM do alerta VOCE ESTA PREPARADO -->
        <!-- INICIO ELENCO -->
        <div id="CarrousselElenco" class="carousel slide d-flex justify-content-center" data-interval="false" data-ride="carousel">

            <div id='elenco' class="carousel-inner elenco">
                <div class="carousel-caption d-none d-md-block">
                    <h1>ELENCO</h1>
                  </div>
            <div class="carousel-item active">
                <center><img class="d-block w-25" src="elementos/elenco_val.png" alt="First slide"></center>
            </div>
            <div class="carousel-item">
                <center><img class="d-block w-25" src="elementos/elenco_tony.png" alt="Second slide"></center>
            </div>
            </div>
            <a class="carousel-control-prev" href="#CarrousselElenco" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#CarrousselElenco" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- FIM ELENCO -->
        <!-- Inicio NA MIDIA -->
        <div class='space'>&nbsp;</div>
        <div class='namidia'><span class='btn btn-danger btn-red'><h1>NA M&Iacute;DIA</h1></span></div>
        <div id='midia'>
        <div id='noticias' class='d-flex w-100'>
            <div class='noticia'>
                <center><a href='https://revistaquem.globo.com/Series-e-filmes/noticia/2020/08/moscow-filme-com-ludmilla-e-thaila-foi-rodado-em-12-dias-na-pandemia.html' target="blank"><img src='elementos/noticia1.png'></a></center>
            </div>
            <div class='noticia'>
                <center><a href='https://veja.abril.com.br/blog/veja-gente/os-bastidores-de-moscow-filme-gravado-na-pandemia-em-sao-paulo/' target="blank"><img src='elementos/noticia2.png'></a></center>
            </div>
            <div class='noticia'>
                <center><a href='https://kogut.oglobo.globo.com/noticias-da-tv/noticia/2020/08/thaila-ayala-sera-protagonista-de-moscow-filme-rodado-em-12-dias-na-pandemia.html' target="blank"><img src='elementos/noticia3.png'></a></center>
            </div>
        </div>
        </div>
        <div class='space'>&nbsp;</div>
        <!-- FIM NA MIDIA -->
        <!-- Inicio EQUIPE -->
        <center class='equipe'>
            <img src='elementos/equipe.png' id='equipe'>
        </center>
        <!-- FIM EQUIPE -->
    </div>
    <div>&nbsp;</div>
  </div>
  <div class='space'>&nbsp;</div>
</div>
<div id='redesocial'>
    <a href='https://www.facebook.com/Moscow-O-Filme-102459428218256' target="blank"><img src='elementos/face.png' class='redes'></a>
    <a href='https://www.instagram.com/moscowofilme/' target="blank"><img src='elementos/insta.png' class='redes'></a>
    <a href='https://twitter.com/moscowofilme' target="blank"><img src='elementos/twitter.png' class='redes'></a>
</div>
</body>
</html>