@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="d-flex p-2">
            <img src="{{ asset('uploads/1668084397.png') }}" class="card-img-top" alt="thumbnail" style="height: 175px;">
      </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Channel Dashboard') }}</div>
                <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                <!--    <span class="navbar-toggler-icon"></span>  -->
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--    <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link" href="#" onclick="myFunction()">Video</a>
                        </li>
                <!--    <li class="nav-item">
                          <a class="nav-link" href="#">Playlist</a> 
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('upload-video') }}">Upload Video</a>
                        </li> -->
                    </ul>
                    
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>
                <div class="card-body">
                <div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @foreach($data as $value)
                <div class="card col-3" style="width: 15rem;">
                    @if(!empty($value->thumbnail_file))
                    <iframe class="embed-responsive-item" src="{{ asset('uploads/1668090164.mp4') }}"></iframe>
                <!--    <img src="{{ asset('uploads/1668090164.mp4') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                    @else
                    <iframe class="embed-responsive-item" src="{{ asset('uploads/1668090164.mp4') }}"></iframe>
                <!--    <img src="{{ asset('uploads/1668090164.png') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                    @endif
                    <div class="card-body">
                        @if(!empty($value['title']))
                        <b style="font-size: 14px;">{{ $value['title'] }}</b>
                        @else
                        <b>Video Title </b>
                        @endif
                        @if(!empty($value['description']))
                        <p class="card-text" style="font-size: 12px;">{{ $value['description'] }}</p>
                        @else
                        <p class="card-text">Video Description </p>
                        @endif
                        <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<b style="font-size:9px;">0</b>
                        <span class="pull-right">
                            <b style="font-size:9px;">0</b>
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;<b style="font-size:9px;">0</b>
                        </span>
                    </div>
                </div>&nbsp;&nbsp; @endforeach &nbsp;
            </div>
         </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<script>
function myFunction() {
  var x = document.getElementById("upload-video-form");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
$(document).ready(function () {
            $('#upload-video-form').ajaxForm({
                beforeSubmit: validate,
                beforeSend: function () {
                    var percentage = '0';
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('.progress .progress-bar').css("width", percentage+'%', function() {
                      return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function (xhr) {
                    console.log('File has uploaded');
                }
            });
});
</script>


@endsection
