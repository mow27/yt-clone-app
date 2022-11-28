<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use VideoThumbnail;
use App\Models\Channel;
use App\Models\Channel_Video;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request){
       $keyword = $request->input(['search']);
       $filter_result = DB::table('channel__videos')
        ->join('channels', 'channels.id', '=', 'channel__videos.channel_id')
        ->where('title', 'like', '%'.$keyword.'%')
        ->get();
        return view('welcome', ['filter_result' => $filter_result]);
    }
    public function channel(){
        return view('channel.index');
    }
    public function video_thumbnail(){
        
        VideoThumbnail::createThumbnail(
            public_path('uploads\1668090164.mp4'), 
            public_path('thumbs/'), 
            'movie_thumb.jpg', 
            2, 
            1920, 
            1080
        );
    }
    public function video_details($id){
        $channel_videos = Channel_Video::where('id',$id)->get();
        $data = json_decode($channel_videos,true);
        return view('channel.video_details',['data' => $data]);
    }
    public function channel_details($id){
        $channel_videos = Channel_Video::where('channel_id',$id)->get();
        $data = json_decode($channel_videos,true);
        return view('channel.channel_details',['data' => $data]);
    }
    public function like_details(Request $request){
      //  echo $request->ajax();
      //  $count = count($request->ajax());
       // print_r($request->ajax());
       // echo "likes: "; print_r($request->ajax());
       // exit();
       $id = 1;
        Channel_Video::where('id', $id)
       ->update([
           'likes' => $request->ajax()
        ]);
    //    $channel_videos = Channel_Video::where('channel_id',$id)->get();
    //    $data = json_decode($channel_videos,true);
        return true;
    }
}
