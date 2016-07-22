@extends('frontend.layout')

@section('meta')
    <meta property="og:title" content="SLUG 2016 - GALLERY" />
    <meta property="og:description" content="slug 2016 photo gallery." />
    <meta property="og:image" content="" />
@stop
@section('title', 'SLUG 2016 - GALLERY')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fbalbum/jquery.fb.albumbrowser.css')}}" />
@stop

@section('content')
    <div class="container">
        <h1 class="font-oswald side-lines text-center">SLUG GALLERY</h1>

        <div class="font-coda text-uppercase" style="padding: 20px 0;">
            <div class="fb-album-container"></div>
        </div>
    </div>
@endsection


@section('script')
    @parent
    <script type="text/javascript" src="{{URL::asset('fbalbum/jquery.fb.albumbrowser.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".fb-album-container").FacebookAlbumBrowser({
                account: "moraspirit.fanpage",
                accessToken: "160013237748743|ydIe-lgdyxwZQsHmLJJD5NafVTw",
                showComments: true,
                thumbnailSize: 200,
                skipAlbums: ["Profile Pictures", "Timeline Photos"],
                commentsLimit:3,
                showAccountInfo: false,
                showImageCount: true,
                showImageText: true,
                shareButton: false,
                albumsPageSize: 25,
                photosPageSize: 20,
                lightbox: true,
                photosCheckbox: false,
                pluginImagesPath: "../fbalbum/",
                likeButton: true,
                shareButton: true,
                addThis: null,
                photoChecked: function(photo){
                    /*console.log("PHOTO CHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);*/
                },
                photoUnchecked: function (photo) {
                    /*console.log("PHOTO UNCHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                    console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);*/
                },
                albumSelected: function (photo) {
//                    console.log("ALBUM CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                },
                photoSelected: function (photo) {
//                    console.log("PHOTO CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                }
            });

        });
    </script>
@endsection