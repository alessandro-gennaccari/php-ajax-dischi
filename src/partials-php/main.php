<main class="padding-50">
        <div class="container">
            <div class="list">

                <?php foreach ($musics as $music) { ?>

                <div class="card padding-30">
                    <div class="layover">
                        <i class="far fa-play-circle"></i>
                    </div>
                    <div class="cover">
                        <img src="<?php echo $music['poster']?>" alt="Cover">
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