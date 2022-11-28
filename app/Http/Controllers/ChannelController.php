<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Models\Channel_Video;
use Carbon;
use Thumbnail;
class ChannelController extends Controller
{
    //

    public function edit(){

      $channel = Channel::with('user')->get();
      return view('channel.edit', compact('channel'));

    }
    public function testThumbnail($request)
    {
      
      // get file from input data
      $file = $request->file('video_file');
      
      // get file type
      $extension_type   =  $file->getClientMimeType();
      
      // set storage path to store the file (actual video)
      $destination_path = storage_path().'/uploads';
  
      // get file extension
      $extension        = $file->getClientOriginalExtension();
  
      $timestamp        = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $file_name        = $timestamp;
      
      $upload_status    = $file->move($destination_path, $file_name);         
  
      if($upload_status)
      {
        // file type is video
        // set storage path to store the file (image generated for a given video)
        $thumbnail_path   = storage_path().'/images';
  
        $video_path  =  $destination_path.'/'.$file_name;
        $new_video_path = $destination_path.'/'.$file_name;
  
        // set thumbnail image name
        $thumbnail_image  = auth()->user()->id.".".$timestamp.".jpg";
        
        // set the thumbnail image "palyback" video button
        $water_mark       = storage_path().'/thumbnails/p.png';
  
        // get video length and process it
        // assign the value to time_to_image (which will get screenshot of video at that specified seconds)
        $time_to_image    = 0; //floor(($data['video_length'])/2);
  
  
        $thumbnail_status = Thumbnail::getThumbnail($video_path,$thumbnail_path,$thumbnail_image,$time_to_image);
        if($thumbnail_status)
        {
          echo "Thumbnail generated";
        }
        else
        {
          echo "thumbnail generation has failed";
        }
      }
    }

    public function upload_file(Request $request){
         $request->validate([
             'title' => 'required|regex:/^[a-z\d\-_\s]+$/i',
             'description' => 'required',
             'thumbnail_file' => 'required|mimes:jpeg,png,jpg|max:10240',
             'video_file' => 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:500000',
         ]);
         
        /*  Create Thumbnail From Video   */
          //  $this->testThumbnail($request);

            $fileNamethumbnail = time().'.'.$request->thumbnail_file->extension(); 
            $fileNamevideo = time().'.'.$request->video_file->extension(); 
            $thumbnail_path = $request->thumbnail_file->move(public_path('uploads'), $fileNamethumbnail);
            $video_path = $request->video_file->move(public_path('uploads'), $fileNamevideo);
            $user_id = auth()->user()->id;
            $channel = Channel::where('user_id',$user_id)->first();

        /*  Create enteries in database table channel__video    */    
            Channel_Video::create([
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail_file' => $thumbnail_path,
                'video_file' => $video_path,
                'channel_id' => $channel->id
            ]);
            
            return redirect()->route('upload-video')->with('message','upload process completed');
    }


    public function generate_thumbnail(Request $request){

      $request->validate([
          'video' => 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:500000',
      ]);
  
         $fileNamevideo = time().'.'.$request->video->extension(); 
         $video = $fileNamevideo; //$command = "usr/local/bin/ffmpeg -i ". $video . " vf fps=1 output-%3d.png";
         $command = "../../../ffmpeg -i ". $video . " vf fps=1 /xampp/htdocs/youtube-clone-app/storage/thumbnails/output-%3d.png";
         
         $projectPublicPath = base_path();
        // echo $projectPublicPath."<br>";
        // $output = exec('cd/');
        // echo $output;
        // exit();
        // $command = "../../../ffmpeg -i ". $video;

        // shell_exec('cd '.$projectPublicPath.' && /usr/bin/php '. $command .' > /dev/null 2>&1 &');
        // return 'cd '.$projectPublicPath.' && /usr/bin/php '. $command .' > /dev/null 2>&1 &';
         $command = "ffmpeg -i ". $video . " vf fps=1 /storage/thumbnails/output-%3d.png";
         echo $command;
         system($command);
         
         return redirect()->route('thumbnail')->with('message','thumbnail generated');
    }


}
