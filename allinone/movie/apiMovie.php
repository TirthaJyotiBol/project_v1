
<?php

$api_key='121637e27fe7c108abef3b18d97cb40f';


$data=file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=121637e27fe7c108abef3b18d97cb40f&language=en-US');

$popular=file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=121637e27fe7c108abef3b18d97cb40f&page=2');
$trending=file_get_contents('https://api.themoviedb.org/3/trending/movie/week?api_key=121637e27fe7c108abef3b18d97cb40f');
$now_playing = file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=121637e27fe7c108abef3b18d97cb40f');
$top_rated = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=121637e27fe7c108abef3b18d97cb40f&language=en-US');
$videos = file_get_contents('https://api.themoviedb.org/3/movie/278/videos?api_key=121637e27fe7c108abef3b18d97cb40f');



$now_playing = json_decode($now_playing,true);
$videos = json_decode($videos,true);
$top_rated = json_decode($top_rated,true);
$data = json_decode($data,true);
$popular = json_decode($popular,true);
$trending = json_decode($trending,true);


// echo "<pre>";
// print_r($videos);
?>





