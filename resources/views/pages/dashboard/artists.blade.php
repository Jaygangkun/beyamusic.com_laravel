@extends('pages.dashboard.layout')
@section('title', 'Artists')

@php
    $page = "artists";
@endphp

@section('content')
    <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
    <main id="page_content">

        <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="hero" style="background-image: url(images/banner/artists.jpg);"></div>

        <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
        <div class="under-hero container">

            <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
            <div class="section">
                <div class="section__head">
                    <h3 class="mb-0">Artists</h3>
                </div>

                <div class="row g-4">
                    <?php
                    if(isset($artists)) {
                        foreach($artists as $artist) {
                            $artist_img = url('images/cover/large/1.jpg');
                            $artist_name = $artist->first_name.' '.$artist->last_name;
                            ?>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="{{url('artist/'.$artist->id)}}" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="<?php echo $artist_img?>" alt="<?php echo $artist_name?>">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate"><?php echo $artist_name?></span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>

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


