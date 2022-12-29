<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\Music;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;

class AjaxController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_music(Request $request)
    {
        $resp = array(
            'success' => true
        );

        if($request->music_name == '') {
            $resp['success'] = false;
            $resp['message'] = 'No Music name';
            return $resp;
        }

        $music_file_path = '';
        if($request->file('music_file')) {
            $music_file_path = $request->file('music_file')->store('music_files');
        }

        if($music_file_path == '') {
            $resp['success'] = false;
            $resp['message'] = 'No Music file';
            return $resp;
        }

        $music_img_path = '';
        if($request->file('music_img_file')) {
            $music_img_path = $request->file('music_img_file')->store('music_imgs');
        }

        $music = new Music;
        $music->img = $music_img_path;
        $music->name = $request->music_name;
        $music->file = $music_file_path;

        if(!empty($request->music_artist)) {
            $music->artist_id = create_artist_if_not_exist(array(
                'name' => $request->music_artist
            ));
        }

        if(!empty($request->music_composer)) {
            $music->composer_id = create_artist_if_not_exist(array(
                'name' => $request->music_composer
            ));
        }
        
        if(!empty($request->music_lyricist)) {
            $music->lyricist_id = create_artist_if_not_exist(array(
                'name' => $request->music_lyricist
            ));
        }
        
        if(!empty($request->music_director)) {
            $music->director_id = create_artist_if_not_exist(array(
                'name' => $request->music_director
            ));
        }

        if(!empty($request->music_genre)) {
            $music->genre_id = $request->music_genre;
        }
        
        $music->lyrics = $request->music_lyrics;
        $music->price = $request->music_price;
        
        $music->save();

        return $resp;
    }


    public function add_album(Request $request)
    {
        $resp = array(
            'success' => true
        );

        if($request->album_name == '') {
            $resp['success'] = false;
            $resp['message'] = 'No Album name';
            return $resp;
        }

        $album_img_path = '';
        if($request->file('album_img_file')) {
            $album_img_path = $request->file('album_img_file')->store('album_imgs');
        }

        $album = new Album;
        $album->img = $album_img_path;
        $album->name = $request->album_name;
        $album->price = $request->album_price;
        $album->save();
        $album_id = $album->id;

        $music_count = count($request->music_count);
        $req_music_names = $request->music_name;
        $req_music_files = $request->file('music_file');
        $req_music_artists = $request->music_artist;
        $req_music_composers = $request->music_composer;
        $req_music_lyricists = $request->music_lyricist;
        $req_music_directors = $request->music_director;
        $req_music_categories = $request->music_genre;
        $req_music_lyricss = $request->music_lyrics;
        
        for($m_index = 0; $m_index < $music_count; $m_index++) {
            $music_file_path = '';
            if($req_music_files[$m_index]) {
                $music_file_path = $req_music_files[$m_index]->store('music_files');
            }
            
            $music = new Music;
            $music->name = $req_music_names[$m_index];
            $music->file = $music_file_path;

            if(!empty($req_music_artists[$m_index])) {
                $music->artist_id = create_artist_if_not_exist(array(
                    'name' => $req_music_artists[$m_index]
                ));
            }

            if(!empty($req_music_composers[$m_index])) {
                $music->composer_id = create_artist_if_not_exist(array(
                    'name' => $req_music_composers[$m_index]
                ));
            }

            if(!empty($req_music_lyricists[$m_index])) {
                $music->lyricist_id = create_artist_if_not_exist(array(
                    'name' => $req_music_lyricists[$m_index]
                ));
            }

            if(!empty($req_music_directors[$m_index])) {
                $music->director_id = create_artist_if_not_exist(array(
                    'name' => $req_music_directors[$m_index]
                ));
            }

            $music->genre_id = $req_music_categories[$m_index];
            $music->lyrics = $req_music_lyricss[$m_index];
            $music->price = $request->album_price;
            $music->album_id = $album_id;
            $music->save();
        }

        return $resp;
    }

    public function search() {
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

        $data = array(
            'genres' => Genre::where('name', 'like', '%'.$keyword.'%')->get(),
            'artists' => Artist::where('first_name', 'like', '%'.$keyword.'%')->orwhere('last_name', 'like', '%'.$keyword.'%')->get(),
            'musics' => Music::where('name', 'like', '%'.$keyword.'%')->get(),
        );

        return view('ajax.search-result', $data);

        // return $genres;
    }
}
