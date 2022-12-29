@extends('pages.dashboard.layout')
@section('title', 'Albums')

@php
    $page = "albums";
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
                    <span class="d-block pe-3 fs-6 fw-semi-bold"><?php echo isset($free_albums) ? count($free_albums) : 0?> Free Albums in the list</span>
                    <div>
                        <select class="form-select" aria-label="Filter album">
                            <option value="Popular">Popular</option>
                            <option value="Most loved">Most loved</option>
                            <option value="A to Z">A to Z</option>
                            <option value="Z to A">Z to A</option>
                        </select>
                    </div>
                </div>

                <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                <div class="list list--lg">
                    <div class="row">
                        <?php
                        if(isset($free_albums)) {
                            foreach($free_albums as $free_album) {
                                $album_cover = url("images/cover/small/1.jpg");
                                if(!empty($free_album->img) && Storage::exists($free_album->img)) {
                                    $album_cover = get_storage_url($free_album->img);
                                }

                                $album_title = 'No Title';
                                if(!empty($free_album->name)) {
                                    $album_title = $free_album->name;
                                }
                                ?>
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="{{url('album/'.$free_album->id)}}" class="list__cover">
                                            <img src="<?php echo $album_cover?>" alt="<?php echo $album_title?>">
                                        </a>
                                        <div class="list__content">
                                            <a href="{{url('album/'.$free_album->id)}}" class="list__title text-truncate"><?php echo $album_title?></a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Arebica Luna</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="100">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="100">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="{{url('album/'.$free_album->id)}}">View details</a></li>
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


