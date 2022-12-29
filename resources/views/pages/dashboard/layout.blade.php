<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="images/logos/favicon.png" rel="icon"/>

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="images/logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="{{asset('css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/styles.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
@php
    $session_user = Session::get('user');
@endphp
<body data-theme="dark">

    <!-- Line loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="line_loader"></div>
    
    <!-- Start:: loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="loader">
        <div class="loader">
            <div class="loader__eq mx-auto">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="loader__text mt-2">Loading</span>
        </div>
    </div>
    <!-- End:: loader -->

    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">

        <!-- Start:: sidebar [[ Find at scss/framework/sidebar.scss ]] -->
        <aside id="sidebar" data-sidebar="green">
            <div class="sidebar-head d-flex align-items-center justify-content-between">
                <a href="index.html" class="brand external">
                    <img src="{{url('images/logos/logo.svg')}}" alt="Listen app">
                </a>
                
                <a href="javascript:void(0);" role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
                    <div class="d-none d-lg-block">
                        <i class="ri-menu-3-line sidebar-menu-1"></i>
                        <i class="ri-menu-line sidebar-menu-2"></i>
                    </div>
                    <i class="ri-menu-fold-line d-lg-none"></i>
                </a>
            </div>

            <div class="sidebar-body" data-scroll="true">
                <nav class="navbar d-block p-0">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a href="/home" class="nav-link d-flex align-items-center {{isset($page) && $page == 'home' ? 'active' : ''}}">
                                <i class="ri-home-4-line fs-5"></i>
                                <span class="ps-3">Home</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{url('/genres')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'genres' ? 'active' : ''}}">
                                <i class="ri-disc-line fs-5"></i>
                                <span class="ps-3">Genres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/free-musics')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'free_musics' ? 'active' : ''}}">
                                <i class="ri-music-2-line fs-5"></i>
                                <span class="ps-3">Free Music</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/albums')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'albums' ? 'active' : ''}}">
                                <i class="ri-album-line fs-5"></i>
                                <span class="ps-3">Albums</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/artists')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'artists' ? 'active' : ''}}">
                                <i class="ri-mic-line fs-5"></i>
                                <span class="ps-3">Artists</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item--head">
                            <span class="nav-item--head__text">Music</span>
                            <span class="nav-item--head__dots">...</span>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/favorites')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'favorites' ? 'active' : ''}}">
                                <i class="ri-heart-line fs-5"></i>
                                <span class="ps-3">Favorites</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/history')}}" class="nav-link d-flex align-items-center {{isset($page) && $page == 'history' ? 'active' : ''}}">
                                <i class="ri-history-line fs-5"></i>
                                <span class="ps-3">History</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            @if (is_artist())
                <div class="sidebar-foot">
                    <a href="{{url('/add-music')}}" class="btn btn-primary d-flex">
                        <div class="btn__wrap">
                            <i class="ri-music-fill"></i>
                            <span>Add Music</span>
                        </div>
                    </a>
                </div>
            @endif
            
        </aside>
        <!-- End:: sidebar -->

        <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
        <header id="header" data-header="green">
            <div class="container">
                <div class="header-container">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0);" role="button" class="header-text sidebar-toggler d-lg-none me-3" aria-label="Sidebar toggler">
                            <i class="ri-menu-3-line"></i>
                        </a>

                        <!-- Start:: search form [[ Find at scss/framework/search.scss ]] -->
                        <form action="#" id="search_form" class="me-3">
                            <label for="search_input">
                                <i class="ri-search-2-line"></i>
                            </label>
                            <input type="text" placeholder="Type anything to get result..." id="search_input" class="form-control form-control-sm">
                        </form>
                        <!-- End:: search form -->

                        <!-- Start:: search [[ Find at scss/framework/search.scss ]] -->
                        <div id="search_results_container" class="search pb-3">
                            <div id="search_results_loading">
                                <div class="loader">
                                    <div class="loader__eq mx-auto">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <span class="loader__text mt-2">Searching</span>
                                </div>
                            </div>
                            <div id="search_results_body">
                                <div class="search__body" data-scroll="true">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End:: search -->

                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="header-text d-flex align-items-center" role="button" id="language_menu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="ri-earth-line fs-5"></i>
                                    <span class="d-none d-md-block ms-1">Language</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="language_menu">
                                    <div class="py-2 px-4">
                                        <span class="d-block fw-bold">What music do you like?</span>
                                        <p>Select languages you want to listen.</p>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex flex-wrap py-2">
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_1">
                                                <label class="form-check-label fw-semi-bold" for="lang_1">Hindi</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_2">
                                                <label class="form-check-label fw-semi-bold" for="lang_2">Punjabi</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_3">
                                                <label class="form-check-label fw-semi-bold" for="lang_3">Tamil</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_4">
                                                <label class="form-check-label fw-semi-bold" for="lang_4">Bengali</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_5">
                                                <label class="form-check-label fw-semi-bold" for="lang_5">Kannada</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_6">
                                                <label class="form-check-label fw-semi-bold" for="lang_6">Gujarati</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_7">
                                                <label class="form-check-label fw-semi-bold" for="lang_7">Urdu</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_8">
                                                <label class="form-check-label fw-semi-bold" for="lang_8">English</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_9">
                                                <label class="form-check-label fw-semi-bold" for="lang_9">Telugu</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_10">
                                                <label class="form-check-label fw-semi-bold" for="lang_10">Bhojpuri</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_11">
                                                <label class="form-check-label fw-semi-bold" for="lang_11">Malayalam</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_12">
                                                <label class="form-check-label fw-semi-bold" for="lang_12">Marathi</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_13">
                                                <label class="form-check-label fw-semi-bold" for="lang_13">Haryanvi</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_14">
                                                <label class="form-check-label fw-semi-bold" for="lang_14">Rajasthani</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_15">
                                                <label class="form-check-label fw-semi-bold" for="lang_15">Assamese</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_16">
                                                <label class="form-check-label fw-semi-bold" for="lang_16">Odia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="py-2 px-4">
                                        <button type="button" class="btn btn-primary w-100 justify-content-center">Update</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown ms-3 ms-sm-4">
                                <a href="javascript:void(0);" class="avatar header-text" role="button" id="user_menu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar__image">
                                        <img src="images/users/thumb.jpg" alt="user">
                                    </div>
                                    <span class="ps-2 d-none d-sm-block">{{$session_user ? $session_user['user_name'] : ''}}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-md dropdown-menu-end" aria-labelledby="user_menu">
                                    <li>
                                        <div class="py-2 px-3 avatar avatar--lg">
                                            <div class="avatar__image">
                                                <img src="images/users/thumb.jpg" alt="user">
                                            </div>
                                            <div class="avatar__content">
                                                <span class="avatar__title">{{$session_user ? $session_user['user_name'] : ''}}</span>
                                                <span class="avatar__subtitle">{{$session_user ? $session_user['user_type'] : ''}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="{{url('profile')}}">
                                            <i class="ri-user-3-line fs-5"></i>
                                            <span class="ps-2">Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center external text-danger" href="{{url('logout')}}">
                                            <i class="ri-logout-circle-line fs-5"></i>
                                            <span class="ps-2">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End:: header -->
        @yield('content')
    </div>
    <!-- End:: wrapper -->

    <!-- Start:: player [[ Find at scss/framework/player.scss ]] -->
    <div id="player" data-player="green">
        <div class="container">
            <div class="player-container">
                <div class="player-progress">
                    <progress class="amplitude-buffered-progress player-progress__bar" value="0"></progress>
                    <progress class="amplitude-song-played-progress player-progress__bar"></progress>
                    <input type="range" class="amplitude-song-slider player-progress__slider" aria-label="Progress slider">
                </div>
        
                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                <div class="cover d-flex align-items-center">
                    <div class="cover__image">
                        <img data-amplitude-song-info="cover_art_url" src="images/cover/small/1.jpg" alt="">
                    </div>
                    <div class="cover__content ps-3 d-none d-sm-block">
                        <a href="song-details.html" class="cover__title text-truncate" data-amplitude-song-info="name"></a>
                        <a href="artist-details.html" class="cover__subtitle text-truncate" data-amplitude-song-info="artist"></a>
                    </div>
                </div>
                <!-- End:: cover -->
        
                <div class="player-control">
                    <button type="button" class="amplitude-repeat btn btn-icon me-4 d-none d-md-block" aria-label="Repeat">
                        <i class="ri-repeat-2-fill fs-5"></i>
                    </button>
                    <button type="button" class="amplitude-prev btn btn-icon" aria-label="Backward">
                        <i class="ri-skip-back-mini-fill"></i>
                    </button>
                    <button type="button" class="amplitude-play-pause btn btn-icon btn-default rounded-pill" aria-label="Play pause">
                        <i class="ri-play-fill icon-play"></i>
                        <i class="ri-pause-fill icon-pause"></i>
                    </button>
                    <button type="button" class="amplitude-next btn btn-icon" aria-label="Forward">
                        <i class="ri-skip-forward-mini-fill"></i>
                    </button>
                    <button type="button" class="amplitude-shuffle amplitude-shuffle-off btn btn-icon ms-4 d-none d-md-block" aria-label="Shuffle">
                        <i class="ri-shuffle-fill fs-5"></i>
                    </button>
                </div>

                <div class="player-info">
                    <div class="me-4 d-none d-xl-block">
                        <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </div>
                    <div class="player-volume dropdown d-none d-md-block">
                        <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Volume" aria-expanded="false">
                            <i class="ri-volume-mute-fill fs-5 d-none"></i>
                            <i class="ri-volume-down-fill fs-5"></i>
                            <i class="ri-volume-up-fill fs-5 d-none"></i>
                        </button>
                        <div class="dropdown-menu prevent-click">
                            <input type="range" class="amplitude-volume-slider" value="50" min="0" max="100" aria-label="Volume slider">
                        </div>
                    </div>
                    <div class="dropstart d-none d-md-block">
                        <button class="btn btn-icon" data-bs-toggle="dropdown" aria-label="Song options" aria-expanded="false">
                            <i class="ri-more-2-fill fs-5"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm" id="player_options">
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                            <!-- <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li> -->
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('music/1')}}">View details</a></li>
                        </ul>
                    </div>

                    <!-- Start:: playlist [[ Find at scss/framework/playlist.scss ]] -->
                    <div class="playlist dropstart me-3">
                        <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Playlist" aria-expanded="false">
                            <i class="ri-play-list-fill fs-5"></i>
                        </button>
                        <div class="dropdown-menu playlist__dropdown">
                            <div class="playlist__head d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Next Lineup</h6>
                                <a href="javascript:void(0);" role="button" id="clear_playlist" class="btn btn-link">Clear</a>
                            </div>
                            <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                            <div id="playlist" class="list playlist__body" data-scroll="true">
                                <div class="col-sm-8 col-10 mx-auto mt-5 text-center">
                                    <i class="ri-music-2-line mb-3"></i>
                                    <p>No songs, album or playlist are added on lineup.</p>
                                </div>
                            </div>
                            <!-- End:: list -->
                        </div>
                    </div>
                    <!-- End:: playlist -->
                </div>
            </div>
        </div>
    </div>
    <!-- End:: player -->

    <!-- Backdrop [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="backdrop"></div>
    <!-- Scripts -->
    <script src="{{asset('js/plugins.bundle.js')}}"></script>
    <script src="{{asset('js/scripts.bundle.js')}}"></script>

    <script src="{{asset('js/libs/donetyping.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    @yield('foot')
</body>
</html>