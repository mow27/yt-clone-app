<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Youtube Clone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="container-fulid">
        <nav class="navbar navbar-expand-lg bg-light"> &nbsp;
                   <span class="navbar-toggler-icon"></span> &nbsp;
                    <a class="navbar-brand" href="#">Youtube Clone</a>
                    <form class="d-flex p-2 w-50" role="search" action="{{ url('search') }}" method="POST">
                    {{ csrf_field() }}
                        <input class="form-control me-2" type="test" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <style>
                        .dot {
                        height:25px;
                        width: 25px;
                        background-color: #bbb;
                        border-radius: 50%;
                        display: inline-block;
                        }
                        </style>
                        <div>
                          <span class="dot"></span>
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 pt-3">Channel Name</a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">SignIn</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Create Channel</a>
                        @endif
                    @endauth
                </div>
            @endif &nbsp;&nbsp;&nbsp;
        </nav>
        <div class="row row-offcanvas row-offcanvas-left vh-100">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas h-100 overflow-auto bg-light pl-0" id="sidebar" role="navigation">
            <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
            <!--    <li class="nav-item"><a class="nav-link" href="#">Video</a></li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Channels▾</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">                        
                       <li class="nav-item"><a class="nav-link" href="">Report 1</a></li>
                       <li class="nav-item"><a class="nav-link" href="">Report 2</a></li>
                    </ul>
                </li>
                @php $channel = DB::table('channels')->get();  @endphp
                @foreach($channel as $data)
                @if (Auth::user())
                <li class="nav-item"><a class="nav-link" href="{{ url('channel_details/'.$data->id) }}">{{ $data->name }}</a></li>
                @endif
                @endforeach
        <!--    <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Export</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Snippets</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Flexbox</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Layouts</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Templates</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Themes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Last Item</a></li> -->
            </ul>
        </div>   
        <div class="col-md-7 col-lg-10">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="row">  
            @php $data = DB::table('channel__videos')
                    ->select('channels.id as c_id','channel__videos.id as cv_id','channels.user_id','channels.name','channels.description as c_description','channel__videos.title','channel__videos.description as cv_description','channel__videos.thumbnail_file','channel__videos.video_file','channel__videos.likes')
                    ->join('channels', 'channels.id', '=', 'channel__videos.channel_id')
                    ->get();
            @endphp
            @if(isset($filter_result))  
            @foreach($filter_result as $search)
            <div class="card col-3 mt-2 mb-2 ml-2" style="width: auto; height: auto;">
            <a href="video_detail">
                @if(!empty($search->video_file))
                @php $search->video_file; $path = substr($search->video_file,49); @endphp
                <iframe class="embed-responsive-item" src="{{ asset('uploads/'.$path) }}" id="playvideo"></iframe>
            <!--    <img src="{{ asset('uploads/1668090164.mp4') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                @else
                <iframe class="embed-responsive-item" src="{{ asset('uploads/'.$path) }}" id="playvideo"></iframe>
            <!--    <img src="{{ asset('uploads/1668084397.png') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                @endif
                <style>
                .dot {
                height:25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                }
                </style>
                <div class="card-body">
                <span class="dot"></span>
                    @if(!empty($search->name))
                    <b style="font-size:11px;">{{ $search->name }}</b>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    @else
                    <b>Channel Name </b>
                    @endif <br>
                    @if(!empty($search->title))
                    <b style="font-size:14px;">{{ $search->title }}</b>
                    @else
                    <b>Video Title </b>
                    @endif
                    @if(!empty($search->description))
                    <p class="card-text" style="font-size:14px;">{{ substr($search->description,0,25) }}</p>
                    @else
                    <p class="card-text">Video Description </p>
                    @endif
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<b style="font-size:9px;" id="views">0</b>
                    <span class="pull-right">
                        <b style="font-size:9px;" id="counter"></b>
                        <i class="fa fa-thumbs-up" aria-hidden="true" id="click"></i>
                        <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;<b style="font-size:9px;">0</b>
                    </span>
                </div>
            </a>
            </div> &nbsp;
            @endforeach            
            @else
            @foreach($data as $value)
            <div class="card col-3 mt-2 mb-2 ml-4" style="width: auto; height: auto;">
            <a href="{{ url('video_details/'.$value->cv_id) }}">
                @if(!empty($value->video_file))
                @php $value->video_file; $path = substr($value->video_file,49); @endphp
                <iframe class="embed-responsive-item" src="{{ asset('uploads/'.$path) }}"></iframe>
            <!--    <img src="{{ asset('uploads/1668090164.mp4') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                @else
                <iframe class="embed-responsive-item" src="{{ asset('uploads/'.$path) }}"></iframe>
            <!--    <img src="{{ asset('uploads/1668084397.png') }}" class="card-img-top" alt="thumbnail" style="height: 175px;"> -->
                @endif
                <style>
                .dot {
                height:25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                }
                </style>
                <div class="card-body">
                <span class="dot"></span>
                    @if(!empty($value->name))
                    <b style="font-size:11px;">{{ $value->name }}</b>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    @else
                    <b>Channel Name </b>
                    @endif <br>
                    @if(!empty($value->title))
                    <b style="font-size:14px;">{{ $value->title }}</b>
                    @else
                    <b>Video Title </b>
                    @endif
                    @if(!empty($value->cv_description))
                    <p class="card-text" style="font-size:14px;">{{ $value->cv_description }}</p>
                    @else
                    <p class="card-text">Video Description </p>
                    @endif
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<b style="font-size:9px;">0</b>
                    <span class="pull-right">
                        <b style="font-size:9px;" id="counter">0</b>
                        <i class="fa fa-thumbs-up" aria-hidden="true" > {{ $value->likes }}</i>
                        <i class="fa fa-comments" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i>&nbsp;<b style="font-size:9px;">0</b>
                     <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                   ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </span>
                </div>
            </a>
            </div>&nbsp;
            @endforeach
            @endif
        </div>   
        </div>
        </div>
</div>
</div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    function Like() {
        let counter = document.getElementById("counter").innerHTML;
        let likes = +counter+1;
        document.getElementById("counter").innerHTML = likes;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({            
            type: "POST",
            url: '/video_likes',
            data: { likes: likes, },
            success: function(data) {
             console.log(data);
        }
        });
    }
    $("#playvide").one(function(){
        let views = document.getElementById("views").innerHTML;
        console.log(+views+1);
    });
</script>