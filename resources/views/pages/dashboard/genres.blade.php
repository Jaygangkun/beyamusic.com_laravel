@extends('pages.dashboard.layout')
@section('title', 'Genres')

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

        <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
        <div class="section">
            <div class="section__head">
                <h3 class="mb-0">Genres</h3>
            </div>
            <div class="row g-4">
                <?php
                if(isset($genres)) {
                    foreach($genres as $genre) {
                        $genre_cover = url('images/background/horizontal/1.jpg');
                        ?>
                        <div class="col-xl-3 col-sm-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="{{url('genre/'.$genre->id)}}" class="cover__image">
                                    <img src="<?php echo $genre_cover?>" alt="<?php echo $genre->name?>">
                                    <div class="cover__image__content">
                                        <span class="cover__title mb-1 fs-6 text-truncate"><?php echo $genre->name?></span>
                                    </div>
                                </a>
                            </div>
                            <!-- End:: cover -->
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- End:: section -->

    </main>
    <!-- End:: page content -->
@endsection


