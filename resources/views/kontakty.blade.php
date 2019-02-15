
@extends('template')

@section('title') {{$page->metaTitle}} @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection

@section('content')
    <div class="header-links-jump_back-body alert">

        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">@lang('messages.contact')</span>


    </div>
    
    {!! $page->content !!}
    <section class="section-map">
    <div id="map"></div>
    </section>   
    {!! $services->content !!}
    <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
               
            google.maps.event.addDomListener(window, 'load', init);
                    
                        function init() {
                            // Basic options for a simple Google Map
                            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                            var mapOptions = {
                                // How zoomed in you want the map to start at (always required)
                                zoom: 16,            
                                // The latitude and longitude to center the map (always required)
                                center: new google.maps.LatLng(53.869725, 27.488214), // Minsk
            
                                // How you would like to style the map. 
                                // This is where you would paste any style found on Snazzy Maps.
                             styles: [{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]}]
                            };
            
                            // Get the HTML DOM element that will contain your map 
                            // We are using a div with id="map" seen below in the <body>
                            var mapElement = document.getElementById('map');
            
                            // Create the Google Map using our element and options defined above
                            var map = new google.maps.Map(mapElement, mapOptions);
                            // Let's also add a marker while we're at it
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(53.869725, 27.488214),
                                map: map,
                                title: 'Mediamart'
                            });
                        }
            </script>  
@endsection
