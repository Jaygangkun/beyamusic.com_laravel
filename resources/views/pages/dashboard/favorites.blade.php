@extends('pages.dashboard.layout')
@section('title', 'Favorites')

@php
    $page = "favorites";
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
                <div class="section__head">
                    <h3 class="mb-0">Songs</h3>
                </div>

                <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                <div class="list list--order">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="list__item" 
                            data-song-id="1"
                            data-song-name="I love you mummy"
                            data-song-artist="Arebica Luna"
                            data-song-album="Mummy"
                            data-song-url="audio/ringtone-1.mp3"
                            data-song-cover="images/cover/small/1.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/1.jpg" alt="I love you mummy">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="1" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">I love you mummy</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Arebica Luna</a>
                                    </p>
                                </div>
                                <ul class="list__option">
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="1">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>01:14</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="1">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="2"
                            data-song-name="Shack your butty"
                            data-song-artist="Gerrina Linda"
                            data-song-album="Hot shot"
                            data-song-url="audio/ringtone-2.mp3"
                            data-song-cover="images/cover/small/2.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/2.jpg" alt="Shack your butty">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Shack your butty</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Gerrina Linda</a>
                                    </p>
                                </div>
                                <ul class="list__option">
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="2">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>03:24</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="3"
                            data-song-name="Do it your way(Female)"
                            data-song-artist="Zunira Willy & Nutty Nina"
                            data-song-album="Own way"
                            data-song-url="audio/ringtone-3.mp3"
                            data-song-cover="images/cover/small/3.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/3.jpg" alt="Do it your way(Female)">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="3" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Do it your way(Female)</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Zunira Willy & Nutty Nina</a>
                                    </p>
                                </div>
                                <ul class="list__option">
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="3">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>01:41</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="3">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="3">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="3">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="3">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="4"
                            data-song-name="Say yes"
                            data-song-artist="Johnny Marro"
                            data-song-album="Say yes"
                            data-song-url="audio/ringtone-4.mp3"
                            data-song-cover="images/cover/small/4.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/4.jpg" alt="Say yes">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="4" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Say yes</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Johnny Marro</a>
                                    </p>
                                </div>
                                <ul class="list__option">                                       
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="4">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>02:20</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="5"
                            data-song-name="Where is your letter"
                            data-song-artist="Jina Moore & Lenisa Gory"
                            data-song-album="Letter"
                            data-song-url="audio/ringtone-5.mp3"
                            data-song-cover="images/cover/small/5.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/5.jpg" alt="Where is your letter">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="5" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Where is your letter</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Jina Moore & Lenisa Gory</a>
                                    </p>
                                </div>
                                <ul class="list__option">  
                                    <li>
                                        <span class="badge rounded-pill bg-info">
                                            <i class="ri-vip-crown-fill"></i>
                                        </span>
                                    </li>                                          
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="5">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>02:36</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="5">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="5">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="5">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="5">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="list__item"
                            data-song-id="6"
                            data-song-name="Hey not me"
                            data-song-artist="Rasomi Pelina"
                            data-song-album="Find soul"
                            data-song-url="audio/ringtone-6.mp3"
                            data-song-cover="images/cover/small/6.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/6.jpg" alt="Hey not me">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="6" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Rasomi Pelina</a>
                                    </p>
                                </div>
                                <ul class="list__option">                                        
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="6">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>03:47</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="7"
                            data-song-name="Deep inside"
                            data-song-artist="Pimila Holliwy"
                            data-song-album="Deep inside"
                            data-song-url="audio/ringtone-7.mp3"
                            data-song-cover="images/cover/small/7.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/7.jpg" alt="Deep inside">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="7" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Deep inside</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Pimila Holliwy</a>
                                    </p>
                                </div>
                                <ul class="list__option">    
                                    <li>
                                        <span class="badge rounded-pill bg-info">
                                            <i class="ri-vip-crown-fill"></i>
                                        </span>
                                    </li>                                        
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="7">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>01:04</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="7">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="7">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="7">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="7">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="8"
                            data-song-name="Sadness inside"
                            data-song-artist="Karen Jennings"
                            data-song-album="Sadness"
                            data-song-url="audio/ringtone-8.mp3"
                            data-song-cover="images/cover/small/8.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/8.jpg" alt="Sadness">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="8" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Sadness</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Karen Jennings</a>
                                    </p>
                                </div>
                                <ul class="list__option">    
                                    <li>
                                        <span class="badge rounded-pill bg-info">
                                            <i class="ri-vip-crown-fill"></i>
                                        </span>
                                    </li>                                        
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="8">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>04:43</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="8">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="8">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="8">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="8">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="9"
                            data-song-name="Electric wave"
                            data-song-artist="Lenisa Gory"
                            data-song-album="Electric wave"
                            data-song-url="audio/ringtone-3.mp3"
                            data-song-cover="images/cover/small/9.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/9.jpg" alt="Electric wave">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="9" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Electric wave</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Lenisa Gory</a>
                                    </p>
                                </div>
                                <ul class="list__option">                                      
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="9">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>02:48</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="9">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="9">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="9">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="9">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list__item"
                            data-song-id="10"
                            data-song-name="Nothing like your eyes"
                            data-song-artist="Nutty Nina"
                            data-song-album="Lover soul"
                            data-song-url="audio/ringtone-2.mp3"
                            data-song-cover="images/cover/small/10.jpg">
                                <div class="list__cover">
                                    <img src="images/cover/small/10.jpg" alt="Nothing like your eyes">
                                    <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="10" aria-label="Play pause">
                                        <i class="ri-play-fill icon-play"></i>
                                        <i class="ri-pause-fill icon-pause"></i>
                                    </a>
                                </div>
                                <div class="list__content">
                                    <a href="song-details.html" class="list__title text-truncate">Nothing like your eyes</a>
                                    <p class="list__subtitle text-truncate">
                                        <a href="artist-details.html">Nutty Nina</a>
                                    </p>
                                </div>
                                <ul class="list__option">                                        
                                    <li>
                                        <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="10">
                                            <i class="ri-heart-line heart-empty"></i>
                                            <i class="ri-heart-fill heart-fill"></i>
                                        </a>
                                    </li>
                                    <li>03:24</li>
                                    <li class="dropstart d-inline-flex">
                                        <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="10">Add to playlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="10">Add to queue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="10">Next to play</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="10">Play</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                        
                </div>
                <!-- End:: list -->
            </div>
            <!-- End:: section -->

            <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
            <div class="section">
                <div class="section__head">
                    <h3 class="mb-0">Albums</h3>
                </div>

                <div class="row g-4">
                    <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__head">
                                <ul class="cover__label d-flex">
                                    <li>
                                        <span class="badge rounded-pill bg-danger">
                                            <i class="ri-heart-fill"></i>
                                        </span>
                                    </li>
                                </ul>
                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="100">Favorite</a></li>
                                        <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="album-details.html" class="cover__image">
                                <img src="images/cover/large/1.jpg" alt="Mummy">
                            </a>
                            <div class="cover__foot">
                                <a href="album-details.html" class="cover__title text-truncate">Mummy</a>
                                <p class="cover__subtitle text-truncate">
                                    <a href="artist-details.html">Arebica Luna</a>
                                </p>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__head">
                                <ul class="cover__label d-flex">
                                    <li>
                                        <span class="badge rounded-pill bg-danger">
                                            <i class="ri-heart-fill"></i>
                                        </span>
                                    </li>
                                </ul>
                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="102">Favorite</a></li>
                                        <li><a class="dropdown-item" href="audio/ringtone-3.mp3" download>Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="album-details.html" class="cover__image">
                                <img src="images/cover/large/3.jpg" alt="Own way">
                            </a>
                            <div class="cover__foot">
                                <a href="album-details.html" class="cover__title text-truncate">Own way</a>
                                <p class="cover__subtitle text-truncate">
                                    <a href="artist-details.html">Zunira Willy</a>,
                                    <a href="artist-details.html">Nutty Nina</a>
                                </p>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__head">
                                <ul class="cover__label d-flex">
                                    <li>
                                        <span class="badge rounded-pill bg-danger">
                                            <i class="ri-heart-fill"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="badge rounded-pill bg-info">
                                            <i class="ri-vip-crown-fill"></i>
                                        </span>
                                    </li>
                                </ul>
                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="103">Favorite</a></li>
                                        <li><a class="dropdown-item" href="audio/ringtone-4.mp3" download>Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="album-details.html" class="cover__image">
                                <img src="images/cover/large/4.jpg" alt="Say yes">
                            </a>
                            <div class="cover__foot">
                                <a href="album-details.html" class="cover__title text-truncate">Say yes</a>
                                <p class="cover__subtitle text-truncate">
                                    <a href="artist-details.html">Johnny Marro</a>
                                </p>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__head">
                                <ul class="cover__label d-flex">
                                    <li>
                                        <span class="badge rounded-pill bg-danger">
                                            <i class="ri-heart-fill"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="badge rounded-pill bg-info">
                                            <i class="ri-vip-crown-fill"></i>
                                        </span>
                                    </li>
                                </ul>
                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="105">Favorite</a></li>
                                        <li><a class="dropdown-item" href="audio/ringtone-6.mp3" download>Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="album-details.html" class="cover__image">
                                <img src="images/cover/large/6.jpg" alt="Find soul">
                            </a>
                            <div class="cover__foot">
                                <a href="album-details.html" class="cover__title text-truncate">Find soul</a>
                                <p class="cover__subtitle text-truncate">
                                    <a href="artist-details.html">Rasomi Pelina</a>
                                </p>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                </div>
            </div>
            <!-- End:: section -->

        </div>
        <!-- End:: under hero -->

        <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
        <footer id="footer">
            <div class="container">
                <div class="text-center mb-4">
                    <a href="mailto:info@listenapp.com" class="display-5 email">info@listenapp.com</a>
                </div>
                <div class="app-btn-group pt-2">
                    <a href="#" class="btn btn-lg btn-primary">
                        <div class="btn__wrap">
                            <i class="ri-google-play-fill"></i>
                            <span class="ms-2">Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-lg btn-primary">
                        <div class="btn__wrap">
                            <i class="ri-app-store-fill"></i>
                            <span class="ms-2">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End:: footer -->

    </main>
    <!-- End:: page content -->
@endsection


