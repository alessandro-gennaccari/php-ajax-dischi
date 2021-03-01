<?php
    include 'partials-php/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Music</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="container">
            <img class="margin-top-15" src="img/spotify-logo.png" alt="Logo Spotify">
        </div>
    </header>

    <main class="padding-50">
        <div class="container">
            <div class="list">

                <?php foreach ($musics as $music) { ?>

                <div class="card padding-30">
                    <div class="layover">
                        <i class="far fa-play-circle"></i>
                    </div>
                    <div class="cover">
                        <img src="<?php echo $music['poster']?>" alt="">
                    </div>
                    <div class="info margin-top-50">
                        <h3><?php echo $music['title']?></h3>
                        <span class="margin-top-20"><?php echo $music['author']?></span>
                        <span class="margin-top-30"><?php echo $music['genre']?></span>
                        <span class="margin-top-5"><?php echo $music['year']?></span>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </main>
    
</body>
</html>