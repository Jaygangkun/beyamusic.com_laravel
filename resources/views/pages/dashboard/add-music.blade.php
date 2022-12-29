@extends('pages.dashboard.layout')
@section('title', 'Add Music')

@php
    $page = "add-music";
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
                <div class="row">
                    <div class="col-xl-7 col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header pb-0">
                                <!-- Start:: mat tabs [[ Find at scss/components/nav.scss ]] -->
                                <div class="mat-tabs">
                                    <ul class="nav nav-tabs" id="add_music" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="music" data-bs-toggle="tab" data-bs-target="#music_pane" type="button" role="tab" aria-controls="music_pane" aria-selected="true">Add Music</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="album" data-bs-toggle="tab" data-bs-target="#album_pane" type="button" role="tab" aria-controls="album_pane" aria-selected="false">Add Album</button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End:: mat tabs -->
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="add_music_content">
                                    <div class="tab-pane fade show active" id="music_pane" role="tabpanel" aria-labelledby="music" tabindex="0">
                                        <form id="form_add_music" class="row">
                                            @csrf
                                            <div class="col-12 mb-4">
                                                <div class="dropzone text-center" id="dropzone_add_music_img">
                                                    <div class="dz-message">
                                                        <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                        <span class=" d-block fs-6 mt-2 mb-4">Drag & Drop or click to Upload</span>
                                                        <!-- <span class=" d-block form-text mb-4">320x320 (Max: 120KB)</span> -->
                                                        <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div id="upload_img_dropzone_template">
                                                    <div class="upload-img-template-wrap">
                                                        <img src="data:," alt="" data-dz-thumbnail />
                                                        <span class="btn-upload-img-close" data-dz-remove><i class="ri-close-fill"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <input type="text" class="form-control" name="music_name" placeholder="Music name">
                                            </div>
                                            <div class="col-12 mb-4">
                                                <label for="music_file" class="form-label">Music file</label>
                                                <input type="file" id="music_file" name="music_file" class="form-control">
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <input type="text" class="form-control" name="music_artist" placeholder="Artist">
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <input type="text" class="form-control" name="music_composer" placeholder="Composer">
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <input type="text" class="form-control" name="music_lyricist" placeholder="Lyricist">
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <input type="text" class="form-control" name="music_director" placeholder="Music director">
                                            </div>
                                            <div class="col-12 mb-4">
                                                <select class="form-select" aria-label="Select Genre" name="music_genre">
                                                    <option selected disabled hidden>Select Genre</option>
                                                    <?php
                                                        if(!empty($genres)) {
                                                            foreach($genres as $genre) {
                                                                ?>
                                                                <option value="<?php echo $genre->id?>"><?php echo $genre->name?></option>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <textarea id="music_lyrics" cols="30" rows="4" class="form-control" name="music_lyrics" placeholder="Lyrics"></textarea>
                                            </div>
                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <div class="form-check me-4">
                                                    <input class="form-check-input" type="radio" name="music_price" value="free" id="music_price_free" checked>
                                                    <label class="form-check-label" for="music_price_free">Free</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="music_price" value="paid" id="music_price_paid">
                                                    <label class="form-check-label" for="music_price_paid">Paid</label>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <span class="btn btn-primary" id="btn_add_music" style="min-width: 140px;">Add Music</span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="album_pane" role="tabpanel" aria-labelledby="album" tabindex="0">
                                        <form id="form_add_album" class="row">
                                            @csrf
                                            <div class="col-12 mb-4">
                                                <div class="dropzone text-center" id="dropzone_add_album_img">
                                                    <div class="dz-message">
                                                        <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                        <span class=" d-block fs-6 mt-2">Drag & Drop or click to Upload</span>
                                                        <span class=" d-block form-text mb-4">320x320 (Max: 120KB)</span>
                                                        <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <input type="text" class="form-control" name="album_name" placeholder="Album name">
                                            </div>
                                            <div id="album_music_list">
                                                <div class="row" id="album_music_wrap">
                                                    <input type="hidden" name="music_count[]" placeholder="Music name">
                                                    <div class="col-12 mb-4">
                                                        <input type="text" class="form-control" name="music_name[]" placeholder="Music name">
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <label for="song_file_2" class="form-label">Music file</label>
                                                        <input type="file" name="music_file[]" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <input type="text" class="form-control" name="music_artist[]" placeholder="Artist">
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <input type="text" class="form-control" name="music_composer[]" placeholder="Composer">
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <input type="text" class="form-control" name="music_lyricist[]" placeholder="Lyricist">
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <input type="text" class="form-control" name="music_director[]" placeholder="Music director">
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <select class="form-select" aria-label="Select Genre" name="music_genre[]">
                                                            <option selected disabled hidden>Select Genre</option>
                                                            <?php
                                                            if(!empty($genres)) {
                                                                foreach($genres as $genre) {
                                                                    ?>
                                                                    <option value="<?php echo $genre->id?>"><?php echo $genre->name?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <textarea name="music_lyrics[]" cols="30" rows="4" class="form-control" placeholder="Lyrics"></textarea>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <div class="form-check me-4">
                                                    <input class="form-check-input" type="radio" name="album_price" id="album_price_free" value="free" checked>
                                                    <label class="form-check-label" for="album_price_free">Free</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="album_price" id="album_price_paid" value="paid">
                                                    <label class="form-check-label" for="album_price_paid">Paid</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-12">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-light-primary">
                                                    <div class="btn__wrap">
                                                        <i class="ri-add-line"></i>
                                                        <span>Add New</span>
                                                    </div>
                                                </a>
                                            </div> -->

                                            <div class="text-end">
                                                <span class="btn btn-primary" id="btn_add_album" style="min-width: 140px;">Add Album</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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


@section('foot')
    <script src="{{asset('js/pages/add-music.js')}}"></script>
@endsection