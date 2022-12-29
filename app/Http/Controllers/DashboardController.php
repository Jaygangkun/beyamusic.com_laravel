<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\MP3File;
use App\Models\User;
use App\Models\Music;
use App\Models\Album;
use App\Models\Genre;
use App\Models\Artist;

class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('pages.dashboard.home');
    }

    public function genres()
    {
        $data = array(
            'genres' => Genre::all()
        );

        return view('pages.dashboard.genres', $data);
    }

    public function genre_details($genre_id)
    {
        $data = array(
            'genre' => Genre::where('id', $genre_id)->get(),
            'genre_musics' => DB::table('musics')
                ->where('genre_id', $genre_id)
                ->join('artists', 'musics.artist_id', '=', 'artists.id')
                ->select('musics.*', 'artists.*')->get()
        );

        return view('pages.dashboard.genre-details', $data);
    }

    public function free_musics()
    {
        $data = array(
            // 'free_musics' => Music::where('price', 'free')->get(),
            'free_musics' => DB::table('musics')
                ->join('artists', 'musics.artist_id', '=', 'artists.id')
                ->join('albums', 'musics.album_id', '=', 'albums.id')
                ->select('musics.*', 'artists.first_name as artist_first_name', 'artists.last_name as artist_last_name', 'albums.name as album_name')->get()
        );

        return view('pages.dashboard.free-musics', $data);
    }

    public function music_details($music_id)
    {
        $music = Music::where('id', $music_id)->get();
        if(count($music) == 0) {
            return view('pages.dashboard.not-found');
        }
        $artist = Artist::where('id', $music[0]->artist_id)->get();
        $data = array(
            'music' => $music,
            'artist' => Artist::where('id', $music[0]->artist_id)->get(),
            'composer' => Artist::where('id', $music[0]->composer_id)->get(),
            'director' => Artist::where('id', $music[0]->director_id)->get(),
            'lyricist' => Artist::where('id', $music[0]->lyricist_id)->get(),
            'album' => Album::where('id', $music[0]->album_id)->get(),
            'genre' => Genre::where('id', $music[0]->genre_id)->get(),
        );

        return view('pages.dashboard.music-details', $data);
    }

    public function albums()
    {
        $data = array(
            'free_albums' => Album::where('price', 'free')->get()
        );

        return view('pages.dashboard.albums', $data);
    }

    public function album_details($album_id)
    {
        $data = array(
            'album' => Album::where('id', $album_id)->get(),
            'album_musics' => Music::where('album_id', $album_id)->get()
        );

        return view('pages.dashboard.album-details', $data);
    }

    public function artists()
    {
        $data = array(
            'artists' => Artist::all()
        );

        return view('pages.dashboard.artists', $data);
    }

    public function artist_details($artist_id)
    {
        $data = array(
            'artist' => Artist::where('id', $artist_id)->get(),
            'artist_musics' => Music::where('artist_id', $artist_id)->get()
        );

        return view('pages.dashboard.artist-details', $data);
    }

    public function favorites()
    {
        return view('pages.dashboard.favorites');
    }

    public function history()
    {
        return view('pages.dashboard.history');
    }

    public function add_music()
    {
        $data = array(
            'genres' => Genre::all()
        );

        return view('pages.dashboard.add-music', $data);
    }

    public function add_music_post(Request $request)
    {
        // $user = new Music;
        // $user->user_name = $request->user_name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->user_type = $request->user_type;
        // $user->save();

        return view('pages.dashboard.add-music');
    }
    
    public function profile()
    {
        return view('pages.dashboard.profile');
    }
}
