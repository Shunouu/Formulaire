<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Vidéo et Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="Logo CityCar.png" alt="Logo" id="logo">
    </header>
    <div class="container">
        <div id="video-section">
            <div class="video-container">
                <video id="promo-video" width="640" height="360" controls>
                    <source src="Vidéo pub.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <a id="show-form-link" href="formulaire.html" class="cta-link" style="display:none;">Cliquer ici pour vous inscrire</a>
        </div>
    </div>

    <script>
        var video = document.getElementById("promo-video");
        var showFormLink = document.getElementById("show-form-link");

        video.onended = function() {
            showFormLink.style.display = "block";
        };
    </script>
</body>
</html>
