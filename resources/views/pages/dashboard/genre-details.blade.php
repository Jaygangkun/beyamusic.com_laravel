@extends('pages.dashboard.layout')
@section('title', 'Genre Details')

@php
    $page = "genres";
@endphp

@section('content')
    <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
    <main id="page_content">

        <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>

        <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="under-hero container">

            <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
            <div class="section">
                <div class="section__head">
                    <h3 class="mb-0"><?php echo !empty($genre) ? $genre[0]->name : ''?></h3>
                </div>
                <div class="list">
                    <div class="row">
                        <?php
                        if(isset($genre_musics)) {
                            foreach($genre_musics as $genre_music) {

                                $music_id = $genre_music->id;
                                $music_cover = url("images/cover/small/1.jpg");
                                if(!empty($genre_music->img) && Storage::exists($genre_music->img)) {
                                    $music_cover = get_storage_url($genre_music->img);
                                }

                                $music_name = 'No Title';
                                if(!empty($genre_music->name)) {
                                    $music_name = $genre_music->name;
                                }
                                
                                $music_artist = 'No Artist';
                                $music_artist_id = -1;
                                if(!empty($genre_music->artist_id)) {
                                    $music_artist = $genre_music->first_name.' '.$genre_music->last_name;
                                    $music_artist_id = $genre_music->artist_id;
                                }

                                $music_file = '';
                                $music_duration = '';
                                if(!empty($genre_music->file)) {
                                    $music_file = get_storage_url($genre_music->file);

                                    $mp3info = new Mp3Info(Storage::path($genre_music->file), true);
                                    $music_duration = get_format_duration($mp3info->duration);
                                }

                                ?>
                                <div class="col-xl-6">
                                    <div class="list__item" 
                                    data-song-id="<?php echo $music_id?>"
                                    data-song-name="<?php echo $music_name?>"
                                    data-song-artist="<?php echo $music_artist?>"
                                    data-song-album="Mummy"
                                    data-song-url="<?php echo $music_file?>"
                                    data-song-cover="<?php echo $music_cover;?>">
                                        <div class="list__cover">
                                            <img src="<?php echo $music_cover?>" alt="<?php echo $music_name?>">
                                            <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="<?php echo $music_id?>" aria-label="Play pause">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </a>
                                        </div>
                                        <div class="list__content">
                                            <a href="{{url('music/'.$music_id)}}" class="list__title text-truncate"><?php echo $music_name?></a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="{{url('artist/'.$music_artist_id)}}"><?php echo $music_artist?></a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="1">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li><?php echo $music_duration?></li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="<?php echo $music_id?>">Play</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        
                    </div>                        
                </div>
            </div>
            <!-- End:: list -->
        </div>

    </main>
    <!-- End:: page content -->
@endsection


