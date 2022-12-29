@extends('pages.dashboard.layout')
@section('title', 'Album Details')

@php
    $page = "albums";
@endphp

@section('content')
    <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
    <main id="page_content">

        <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>

        <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="under-hero container">
            <div class="section">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-md-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <?php
                        $album_cover = url('images/cover/large/5.jpg');
                        $album_title = 'No Title';
                        if(!empty($album)) {
                            if(Storage::exists($album[0]->img)) {
                                $album_cover = get_storage_url($album[0]->img);
                            }

                            $album_title = $album[0]->name;
                        }
                        ?>
                        <div class="cover cover--round">
                            <div class="cover__image">
                                <img src="<?php echo $album_cover?>" alt="Treasure face">
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-1 d-none d-xl-block"></div>
                    <div class="col-md-8 mt-5 mt-md-0">
                        <div class="d-flex flex-wrap mb-2">
                            <span class="text-dark fs-4 fw-semi-bold pe-2"><?php echo $album_title?></span>
                            <div class="dropstart d-inline-flex ms-auto">
                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-sm">
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Add to playlist</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Add to queue</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Next to play</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-collection-play-id="1">Play</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                        <ul class="info-list info-list--dotted mb-3">
                            <li><?php echo !empty($album_musics) ? count($album_musics) : '' ?> Songs</li>
                        </ul>
                        <!-- End:: info list -->
                        <p class="mb-5">By: <a href="artist-details.html" class="text-dark fw-medium">Jina Moore</a>, <a href="artist-details.html" class="text-dark fw-medium">Lenisa Gory</a></p>
                        <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                        <ul class="info-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <button type="button" id="play_all" class="btn btn-icon btn-primary rounded-pill" data-collection-play-id="1">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </button>
                                    <label for="play_all" class="ps-2 fw-semi-bold text-primary mb-0" style="cursor: pointer;">Play all</label>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0);" role="button" class="text-dark d-flex align-items-center" aria-label="Favorite" data-favorite-id="1">
                                    <i class="ri-heart-line heart-empty"></i>
                                    <i class="ri-heart-fill heart-fill"></i>
                                    <span class="ps-2 fw-medium">121</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" role="button" class="text-dark d-flex align-items-center" aria-label="Download">
                                    <i class="ri-download-2-line"></i>
                                    <span class="ps-2 fw-medium">24</span>
                                </a>
                            </li>
                            <li>
                                <span class="text-dark d-flex align-items-center">
                                    <i class="ri-star-fill text-warning"></i>
                                    <span class="ps-2 fw-medium">4.5</span>
                                </span>
                            </li>
                        </ul>
                        <!-- End:: info list -->
                    </div>
                </div>
            </div>
            <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
            <div class="section">
                <div class="list">
                    <div class="row">
                        <?php
                        if(isset($album_musics)) {
                            foreach($album_musics as $album_music) {

                                $music_id = $album_music->id;
                                $music_cover = url("images/cover/small/1.jpg");
                                if(!empty($album_music->img) && Storage::exists($album_music->img)) {
                                    $music_cover = get_storage_url($album_music->img);
                                }

                                $music_name = 'No Title';
                                if(!empty($album_music->name)) {
                                    $music_name = $album_music->name;
                                }
                                
                                $music_artist = 'No Artist';
                                if(!empty($album_music->artist)) {
                                    $music_artist = $album_music->artist;
                                }

                                $music_file = '';
                                $music_duration = '';
                                if(!empty($album_music->file)) {
                                    $music_file = get_storage_url($album_music->file);

                                    $mp3info = new Mp3Info(Storage::path($album_music->file), true);
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
                                            <a href="song-details.html" class="list__title text-truncate"><?php echo $music_name?></a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html"><?php echo $music_artist?></a>
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


