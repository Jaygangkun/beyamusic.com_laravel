@extends('pages.dashboard.layout')
@section('title', 'Music Details')

@php
    $page = "";
@endphp

@section('content')
    <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
    <main id="page_content">

        <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
        <?php
        $music_cover = url("images/cover/small/1.jpg");
        if(!empty($music->img) && Storage::exists($music[0]->img)) {
            $music_cover = get_storage_url($music[0]->img);
        }

        $music_file = '';
        $music_duration = '';
        if(!empty($music[0]->file)) {
            $music_file = get_storage_url($music[0]->file);

            $mp3info = new Mp3Info(Storage::path($music[0]->file), true);
            $music_duration = get_format_duration($mp3info->duration);
        }

        $composer_name = '';
        if(isset($composer) && count($composer) > 0) {
            $composer_name = $composer[0]->first_name.' '.$composer[0]->last_name;
        }

        $lyricist_name = '';
        if(isset($lyricist) && count($lyricist) > 0) {
            $lyricist_name = $lyricist[0]->first_name.' '.$lyricist[0]->last_name;
        }

        $director_name = '';
        if(isset($director) && count($director) > 0) {
            $director_name = $director[0]->first_name.' '.$director[0]->last_name;
        }
        
        ?>
        <div class="hero" style="background-image: url(<?php echo $music_cover?>);"></div>

        <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="under-hero container">

            <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
            <div class="section">
                <div class="row"
                data-song-id="<?php echo $music[0]->id?>"
                data-song-name="<?php echo $music[0]->name?>"
                data-song-artist="<?php echo (isset($artist) && count($artist) >0) ? $artist[0]->first_name.' '.$artist[0]->last_name : ''?>"
                data-song-album="<?php echo (isset($album) && count($album) >0) ? $album[0]->name : ''?>"
                data-song-url="<?php echo $music_file?>"
                data-song-cover="<?php echo $music_cover?>">
                    <div class="col-xl-3 col-md-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__image">
                                <img src="<?php echo $music_cover?>" alt="<?php echo $music[0]->name?>">
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-1 d-none d-xl-block"></div>
                    <div class="col-md-8 mt-5 mt-md-0">
                        <div class="d-flex flex-wrap mb-2">
                            <span class="text-dark fs-4 fw-semi-bold pe-2"><?php echo $music[0]->name?></span>
                            <div class="dropstart d-inline-flex ms-auto">
                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-sm">
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="8">Add to playlist</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="8">Add to queue</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="8">Next to play</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="8">Play</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                        <ul class="info-list info-list--dotted mb-3">
                            <li><?php echo (isset($genre) && count($genre) >0) ? $genre[0]->name : ''?></li>
                            <li><?php echo $music_duration?></li>
                        </ul>
                        <!-- End:: info list -->
                        <div class="mb-4">
                            <p class="mb-2">Compose by: <span class="text-dark fw-medium">{{$composer_name}}</span></p>
                            <p class="mb-2">Lyrics by: <span class="text-dark fw-medium">{{$lyricist_name}}</span></p>
                            <p class="mb-2">Music director: <span class="text-dark fw-medium">{{$director_name}}</span></p>
                        </div>
                        <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                        <ul class="info-list mb-5">
                            <li>
                                <div class="d-flex align-items-center">
                                    <button type="button" id="play_all" class="btn btn-icon btn-primary rounded-pill" data-play-id="8">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </button>
                                    <span class="ps-2 fw-semi-bold">{{$music[0]->plays == '' ? '0' : $music[0]->plays}}</span>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0);" role="button" class="text-dark d-flex align-items-center" aria-label="Favorite" data-favorite-id="1">
                                    <i class="ri-heart-line heart-empty"></i>
                                    <i class="ri-heart-fill heart-fill"></i>
                                    <span class="ps-2 fw-medium">{{$music[0]->likes == '' ? '0' : $music[0]->likes}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" role="button" class="text-dark d-flex align-items-center" aria-label="Download">
                                    <i class="ri-download-2-line"></i>
                                    <span class="ps-2 fw-medium">{{$music[0]->downloads == '' ? '0' : $music[0]->downloads}}</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End:: info list -->
                        <div class="mt-2">
                            <span class="d-block text-dark fs-6 fw-semi-bold mb-3">Lyrics</span>
                            <p><?php echo $music[0]->lyrics?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: section -->
        </div>
        <!-- End:: under hero -->
    </main>
    <!-- End:: page content -->
@endsection


