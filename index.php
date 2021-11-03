<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <title>Téléchargement de vidéo youtube</title>
</head>
<body>
<style>
        body{
            background-image: url("img/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
        }
        .bg{
            background-color: rgba(0, 54, 104, 0.9);
        }
        .fw{
            font-weight: bold;
            font-size: 1.3em;
        }
    </style>
    <div class="container bg p-5">
        <div class="row">
            <div class=" col col-md-8 mx-auto my-2">
                <!-- <img src="img/icon-contact.png" alt="icon contact" class="icon-contact" style="max-width: 50px;"> -->
                <div class="left-conteneur-text">
                    <!-- <h5 class="fw text-center">Inscrivez-Vous</h5> -->
                    <p class="fw text-center">Télécharger votre vidéo Youtube </p>
                </div>
                <form action="" method="post">
                    <div class="form-inline">
                        <input type="url" name="urltoyoutube" id="YoutubeUrl" placeholder="Collez le lien de la vidéo ici"  class="form-control col rounded-left rounded-0">
                        <button type="submit" name="submit" class="btn btn-danger p-2 rounded-right">Rechercher la vidéo</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col col-md-8 mx-auto">
            <?php 
                if (isset($_POST['urltoyoutube']) && !empty($_POST['urltoyoutube'])) {
                    $YoutubeUrl = $_POST['urltoyoutube'];
                    $fixurl = "https://www.youtube.com/watch?v=";
                    if (strpos($YoutubeUrl, $fixurl) !== false) { // Verifie si $fixrul existe dans la chaîne $Youtube
                        $UserUrl = str_replace($fixurl, "https://www.youtube.com/embed/", $YoutubeUrl); // replacer $fixurl dans la chaîne par " " 
                    
                ?>
            <div class="card mx-auto p-5" style="">
                <div class=" mx-auto">
                    <iframe width="450" height="" src="<?php echo $UserUrl;?>" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <h5 class="my-auto ml-md-4 text-primary text-center pb-2">Titre de la vidéo</h5>
                </div>
                    <p class="card-text text-primary mx-auto text-dark">Chargement terminé...</p>
                    <a href="<?php
                        // readfile($YoutubeUrl); 
                    echo $YoutubeUrl 
                    ?>" target="_blank" class="btn btn-primary">Télécharger la vidéo </a>
                </div>
            </div>
                <Script>
                    var NewUrl = document.getElementById("YoutubeUrl");
                    NewUrl.value = "<?php echo $YoutubeUrl;?>";
                </Script>
            <?php
                    }else echo "<p class='text-center text-danger'> Url invalid </p>";
                }
            ?>
        </div>
    </div>
</body>
</html>