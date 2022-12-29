<?php
if(isset($genres) && count($genres) > 0) {
    ?>
    <div class="mb-4">
        <h6>Genres</h6>
        <div class="row g-4 list">
            <?php
            foreach($genres as $genre) {
                $genre_cover = url('images/background/horizontal/1.jpg');
                ?>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="list__item">
                        <a href="{{url('genre/'.$genre->id)}}" class="list__cover">
                            <img src="<?php echo $genre_cover?>" alt="<?php echo $genre->name?>">
                        </a>
                        <div class="list__content">
                            <a href="{{url('genre/'.$genre->id)}}" class="list__title text-truncate"><?php echo $genre->name?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>

<?php
if(isset($artists) && count($artists) > 0) {
    ?>
    <div class="mb-4">
        <h6>Artists</h6>
        <div class="row g-4 list">
            <?php
            foreach($artists as $artist) {
                $artist_img = url('images/cover/large/1.jpg');
                $artist_name = $artist->first_name.' '.$artist->last_name;
                ?>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="list__item">
                        <a href="{{url('artist/'.$artist->id)}}" class="list__cover">
                            <img src="<?php echo $artist_img?>" alt="<?php echo $artist_name?>">
                        </a>
                        <div class="list__content">
                            <a href="{{url('artist/'.$artist->id)}}" class="list__title text-truncate"><?php echo $artist_name?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>

<?php
if(isset($musics) && count($musics) > 0) {
    ?>
    <div class="mb-4">
        <h6>Music</h6>
        <div class="row g-4 list">
            <?php
            foreach($musics as $music) {
                $music_cover = url("images/cover/small/1.jpg");
                $music_name = $music->name;
                ?>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="list__item">
                        <a href="{{url('music/'.$music->id)}}" class="list__cover">
                            <img src="<?php echo $artist_img?>" alt="<?php echo $music_name?>">
                        </a>
                        <div class="list__content">
                            <a href="{{url('music/'.$music->id)}}" class="list__title text-truncate"><?php echo $music_name?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>