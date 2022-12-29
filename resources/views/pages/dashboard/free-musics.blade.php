@extends('pages.dashboard.layout')
@section('title', 'Free Musics')

@php
    $page = "free_musics";
@endphp

@section('content')
    <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
    <main id="page_content">

        <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="hero" style="background-image: url(images/banner/song.jpg);"></div>

        <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="under-hero container">

            <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
            <div class="section">
                <div class="section__head align-items-center">
                    <span class="d-block pe-3 fs-6 fw-semi-bold"><?php echo isset($free_musics) ? count($free_musics) : 0?> Free Songs in the list</span>
                    <div>
                        <select class="form-select" aria-label="Filter song">
                            <option value="Popular">Popular</option>
                            <option value="Most played">Most played</option>
                            <option value="A to Z">A to Z</option>
                            <option value="Z to A">Z to A</option>
                        </select>
                    </div>
                </div>

                <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                <div class="list">
                    <div class="row">
                        <?php
                        if(isset($free_musics)) {
                            foreach($free_musics as $free_music) {

                                $music_id = $free_music->id;
                                $music_cover = url("images/cover/small/1.jpg");
                                if(!empty($free_music->img) && Storage::exists($free_music->img)) {
                                    $music_cover = get_storage_url($free_music->img);
                                }

                                $music_name = 'No Title';
                                if(!empty($free_music->name)) {
                                    $music_name = $free_music->name;
                                }
                                
                                $music_artist = 'No Artist';
                                $music_artist_id = null;
                                if(!empty($free_music->artist_id)) {
                                    $music_artist = $free_music->artist_first_name.' '.$free_music->artist_last_name;
                                    $music_artist_id = $free_music->artist_id;
                                }

                                $album_name = 'No Album';
                                if(!empty($free_music->album_id)) {
                                    $album_name = $free_music->album_name;
                                }


                                $music_file = '';
                                $music_duration = '';
                                if(!empty($free_music->file)) {
                                    $music_file = get_storage_url($free_music->file);

                                    $mp3info = new Mp3Info(Storage::path($free_music->file), true);
                                    $music_duration = get_format_duration($mp3info->duration);
                                }

                                
                                
                                ?>
                                <div class="col-xl-6">
                                    <div class="list__item" 
                                    data-song-id="<?php echo $music_id?>"
                                    data-song-name="<?php echo $music_name?>"
                                    data-song-artist="<?php echo $music_artist?>"
                                    data-song-album="<?php echo $album_name?>"
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
                <!-- End:: list -->

                <div class="mt-5 text-center" style="display:none">
                    <a href="javascript:void(0);" class="btn btn-primary">
                        <div class="btn__wrap">
                            <i class="ri-loader-3-fill"></i>
                            <span>Load more</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End:: section -->
        </div>
        <!-- End:: under hero -->


    </main>
    <!-- End:: page content -->
@endsection


