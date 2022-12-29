<?php
use App\Models\Artist;

if(!function_exists('is_subscriber')) {
    function is_subscriber() {
        $session_user = Session::get('user');
        if($session_user['user_type'] == 'Subscriber') {
            return true;
        }

        return false;
    }
}

if(!function_exists('is_artist')) {
    function is_artist() {
        $session_user = Session::get('user');
        if($session_user['user_type'] == 'Artist') {
            return true;
        }

        return false;
    }
}

if(!function_exists('get_storage_url')) {
    function get_storage_url($path) {
        return url('storage/'.$path);
    }
}

if(!function_exists('get_format_duration')) {
    function get_format_duration($duration) {
        $hours = floor($duration / 3600);
        $minutes = floor( ($duration - ($hours * 3600)) / 60);
        $seconds = $duration - ($hours * 3600) - ($minutes * 60);
        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }
}

if(!function_exists('create_artist_if_not_exist')) {
    function create_artist_if_not_exist($data) {
        $artist_names = explode(' ', $data['name']);
        $artist_first_name = '';
        $artist_last_name = '';
        if(count($artist_names) == 2) {
            $artist_first_name = $artist_names[0];
            $artist_last_name = $artist_names[1];
        }
        else if(count($artist_names) == 1) {
            $artist_first_name = $artist_names[0];
        }

        $artists_found = Artist::where('first_name', $artist_first_name)->where('last_name', $artist_last_name)->get();
        
        if(count($artists_found) > 0) {
            return $artists_found[0]->id;
        }
        else {
            $artist = new Artist;
            $artist->first_name = $artist_first_name;
            $artist->last_name = $artist_last_name;
            $artist->save();
            return $artist->id;
        }
    }
}