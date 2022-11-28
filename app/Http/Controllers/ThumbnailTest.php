<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use Thumbnail;

class ThumbnailTest extends Controller
{
    public function testThumbnail()
    {
      // get file from input data
      //$file             = $this->request->file('file');
      $file = public_path('uploads/1668090164.mp4');
      // get file type
      $extension_type   =  'mp4';  //$file->getClientMimeType();
      
      // set storage path to store the file (actual video)
      $destination_path = storage_path().'/uploads';
  
      // get file extension
      $extension        = 'mp4';//$file->getClientOriginalExtension();
  
  
      $timestamp        = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $file_name        = $timestamp;
      
      $upload_status    = $file->move($destination_path, $file_name);         
  
      if($upload_status)
      {
        // file type is video
        // set storage path to store the file (image generated for a given video)
        $thumbnail_path   = storage_path().'/images';
  
        $video_path       = $destination_path.'/'.$file_name;
  
        // set thumbnail image name
        $thumbnail_image  = $fb_user_id.".".$timestamp.".jpg";
        
        // set the thumbnail image "palyback" video button
        $water_mark       = storage_path().'/p.png';
  
        // get video length and process it
        // assign the value to time_to_image (which will get screenshot of video at that specified seconds)
        $time_to_image    = floor(($data['video_length'])/2);
  
  
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
}
