

<!DOCTYPE html>
<html lang="nb">
    <head>
        <meta property="og:title" content="Flytsti-utfordringen - SegmentChallenge" />
        <meta property="fb:app_id" content="1559419401032598" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://segmentchallenge.lopsloggen.no/challenge/flytsti-utfordringen" />
        <meta property="og:image" content="http://segmentchallenge.lopsloggen.no/segmentchallenge.png" />
        <meta property="og:description" content="Flytstier i Østmarka" />
        <meta property="og:locale" content="nb_NO" />
        <meta property="og:site_name" content="segmentChallenge" />
        
        
       
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>      
        
        
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        
        <script src=" https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        
        
        
        <link rel="stylesheet" href="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css" />
        <script src="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.js"></script>
        
		<script src="/Baertur-master/assets/lib/L.TileLayer.Kartverket/dist/L.TileLayer.Kartverket.min.js"></script>
		<script src="/Baertur-master/assets/lib/leaflet-gpx/gpx.js"></script>
       
         <!--CUSTOM-->
        <script src="/js/custom.js"></script>
        <link rel="stylesheet" href="/css/custom.css" />

   
        
        <title>Flytsti-utfordringen - SegmentChallenge - SegmentChallenge</title>
    </head>
    


    
    <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nb_NO/sdk.js#xfbml=1&version=v2.7&appId=1559419401032598";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1559419401032598',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
            <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-38163228-9', 'auto');
          ga('send', 'pageview');
            
            

        </script>
    
    
<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">

    <!-- Brand -->
    <a class="navbar-brand" href="/">
        <img src="/segmentchallenge.png" style="width:50px;display:inline;"/> 
        SegmentChallenge
    </a>

    <!-- Links -->
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a  class="nav-link"  href="/">Oversikt</a> 
        </li>
    </ul>
    <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item">
            
        </li>
                        <li class="nav-item">
                                <a href="https://www.strava.com/oauth/authorize?client_id=3493&redirect_uri=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Findex.php&response_type=code&approval_prompt=auto"><img src="/LogInWithStrava.png" /></a>
                        </li>
    </ul>
</nav>
<div  class="container-fluid"><script>
var filterData = "all";
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {

        var sex = data[3];
 
        if ( sex == filterData || filterData == "all")
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    
    var table = $('#effort').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input

    $("#filter_all").click(function(event){
       event.preventDefault();
        filterData = "all";
        table.draw();
   });
    $("#filter_m").click(function(event){
       event.preventDefault();
        filterData = "M";
        table.draw();
   });
 $("#filter_w").click(function(event){
       event.preventDefault();
        filterData = "F";
        table.draw();
   });
     
    $(".toggle-map-link").click(function(event){
       event.preventDefault();
   });
} ); 
    
 function toggleMap(str) {
     $(str).toggle();
 }    
    
</script>
<script>document.body.style.backgroundImage = 'url(/images/Forest-Trail-Seneca_ForestWander.JPG)';</script>
    <!-- ****************************************************** -->
    <!-- ********************  INFOBOKSER ********************** -->
    <!-- ****************************************************** -->
<header>
    <div style="margin-top: 150px;margin-bottom: 50px;">
    <h1 style="float:left;">Flytsti-utfordringen</h1>
    <div  style="margin: 10 0 0 20px;float:left;" class="fb-share-button" data-href="http://segmentchallenge.lopsloggen.no/challenge/flytsti-utfordringen" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Fchallenge%2Fflytsti-utfordringen&amp;src=sdkpreparse">Del</a></div>

    <div style="font-size:16px;margin-top:-50px;margin-bottom:50px; clear:both;">
        <span class="tag tag-info">Totallengde: 2490 meter</span>
        <span class="tag tag-info">Høydemeter: 71 meter</span>
        
    </div>
    </div>

    
</header> 
    <p style=" clear:both;font-size:26px;"><span class="tag tag-warning">
        Ingen tidsbegrensing        </span>

<span class="tag tag-warning">
        Segmentene kan løpes individuelt
        </span>
</p>




    <!-- Første rad -->
    <div style="clear:both;" class="row">
        <!-- Kolonne 2 -->
           <div class="col-sm-12"><div class="card-columns">

<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/1598656">Fjellstadputtstien</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            566 m | 9 hm | Forsøk siste 24 t: 1        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map1598656');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map1598656"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map1598656',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/1598656.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Atle Smenes: 00:02:13 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/7134257">Godstien (løp)</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            634 m | 12 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map7134257');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map7134257"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map7134257',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/7134257.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Ola Marius Pedersen: 00:02:35 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/6958323">Smørhullet - Langvannsbekken</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            1290 m | 50 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map6958323');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map6958323"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map6958323',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/6958323.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Sigve Vågsnes: 00:05:33 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
    
               
        </div>
</div>
</div>

    <!-- STARTER TABELL -->    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <small>Tabellen oppdateres hver halvtime. <span id='tid'></span></small>
                    
                    <span style="float:right"><a id="filter_all" href="#">Alle</a> |  <a id="filter_m" href="#">Menn</a> |  <a  id="filter_w" href="#">Damer</a></span>
                    
                    <!-- *VARSELKNAPP -->
                                         <!-- *SLUTT VARSELKNAPP -->
                </div>
                <div class="card-block">
                 
                    
   
    <script>var xhr = $.ajax({url: '/cache/flytsti-utfordringen.json',success: function(response) {var d = new Date( xhr.getResponseHeader('Last-Modified') );var datetext=d.getHours()+':'+d.getMinutes();$('#tid').html('Sist oppdatert: ' + datetext);}});</script>        <table id="effort" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">Fornavn</th>
                     <th rowspan="2">Etternavn</th>
                    <th rowspan="2">Kjønn</th>
                    <th colspan="3">Segmenter <small>(antall forsøk i parentes)</small></th>
                    <th rowspan="2">Total</th>
                </tr>
                <tr>
                                       <th style="font-size:10px;font-weight:lighter;">Fjellstadputtstien</th>
                                        <th style="font-size:10px;font-weight:lighter;">Godstien (løp)</th>
                                        <th style="font-size:10px;font-weight:lighter;">Smørhullet - Langvannsbekken</th>
                                        
                </tr>  
            </thead>
            <tbody>
            <tr>
                            <td  >-</td>
                            <td  >Karl</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5130478&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F682920704%2Fsegments%2F16739045901' data-trigger='focus'  title='Top 5 forsøk'>00:03:55</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5130478&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659512575%2Fsegments%2F16148582258' data-trigger='focus'  title='Top 5 forsøk'>00:05:16</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hermann</td>
                            <td  >Bruun</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F638280546%2Fsegments%2F15597872373' data-trigger='focus'  title='Top 5 forsøk'>00:03:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F766613339%2Fsegments%2F18768446324' data-trigger='focus'  title='Top 5 forsøk'>00:12:47</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Eilertsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=74422&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F616508752%2Fsegments%2F15046625880' data-trigger='focus'  title='Top 5 forsøk'>00:03:53</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=74422&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F576492115%2Fsegments%2F13997884018' data-trigger='focus'  title='Top 5 forsøk'>00:09:10</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marit</td>
                            <td  >Vala</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2919058&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608435018%2Fsegments%2F14839970269' data-trigger='focus'  title='Top 5 forsøk'>00:03:53</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2919058&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F592431316%2Fsegments%2F14425699291' data-trigger='focus'  title='Top 5 forsøk'>00:10:42</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Enok</td>
                            <td  >Vatnar</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3009896&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F667675209%2Fsegments%2F16355132251' data-trigger='focus'  title='Top 5 forsøk'>00:03:40</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3009896&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F667675209%2Fsegments%2F16355132092' data-trigger='focus'  title='Top 5 forsøk'>00:09:29</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Eilertsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10943922&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F616508770%2Fsegments%2F15046625103' data-trigger='focus'  title='Top 5 forsøk'>00:03:53</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10943922&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F576492154%2Fsegments%2F13997884850' data-trigger='focus'  title='Top 5 forsøk'>00:09:10</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Brekken</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2674229&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608347302%2Fsegments%2F14837937351' data-trigger='focus'  title='Top 5 forsøk'>00:03:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2674229&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F621849749%2Fsegments%2F15179397923' data-trigger='focus'  title='Top 5 forsøk'>00:10:03</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Storbraten</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=807108&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F736402525%2Fsegments%2F18053836963' data-trigger='focus'  title='Top 5 forsøk'>00:04:51</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=807108&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F626288924%2Fsegments%2F15288885766' data-trigger='focus'  title='Top 5 forsøk'>00:11:27</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christine</td>
                            <td  >Arnkværn</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6698710&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F563979379%2Fsegments%2F13669014796' data-trigger='focus'  title='Top 5 forsøk'>00:04:55</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6698710&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F730743724%2Fsegments%2F17921748260' data-trigger='focus'  title='Top 5 forsøk'>00:09:40</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Kristian</td>
                            <td  >Sørland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F786732134%2Fsegments%2F19231507006' data-trigger='focus'  title='Top 5 forsøk'>00:04:12</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731541109%2Fsegments%2F17942799748' data-trigger='focus'  title='Top 5 forsøk'>00:08:57</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >didrik</td>
                            <td  >dæhlin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=268076&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F563106004%2Fsegments%2F13646327053' data-trigger='focus'  title='Top 5 forsøk'>00:04:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=268076&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F548362486%2Fsegments%2F13237978499' data-trigger='focus'  title='Top 5 forsøk'>00:09:30</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jacob</td>
                            <td  >Jacobsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389620&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753152502%2Fsegments%2F18454513123' data-trigger='focus'  title='Top 5 forsøk'>00:04:15</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389620&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F663179690%2Fsegments%2F16237903013' data-trigger='focus'  title='Top 5 forsøk'>00:09:22</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørund</td>
                            <td  >Vala</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2883909&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F653200786%2Fsegments%2F15984136877' data-trigger='focus'  title='Top 5 forsøk'>00:04:23</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2883909&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F669089038%2Fsegments%2F16389968165' data-trigger='focus'  title='Top 5 forsøk'>00:10:12</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan</td>
                            <td  >Rylund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5125990&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F557372975%2Fsegments%2F13545896636' data-trigger='focus'  title='Top 5 forsøk'>00:04:43</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5125990&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566341461%2Fsegments%2F13727740681' data-trigger='focus'  title='Top 5 forsøk'>00:08:53</a> (31) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørgen</td>
                            <td  >Saxegaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1098098&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606854462%2Fsegments%2F14797904508' data-trigger='focus'  title='Top 5 forsøk'>00:03:33</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1098098&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780458063%2Fsegments%2F19092648357' data-trigger='focus'  title='Top 5 forsøk'>00:08:36</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Smenes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F649429963%2Fsegments%2F15883485405' data-trigger='focus'  title='Top 5 forsøk'>00:03:54</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659403250%2Fsegments%2F16144921833' data-trigger='focus'  title='Top 5 forsøk'>00:05:12</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5136390&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583138279%2Fsegments%2F14181292045' data-trigger='focus'  title='Top 5 forsøk'>00:03:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5136390&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F604023811%2Fsegments%2F14722073837' data-trigger='focus'  title='Top 5 forsøk'>00:08:18</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Leif-Andre</td>
                            <td  >Trøhaugen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707138424%2Fsegments%2F17345507206' data-trigger='focus'  title='Top 5 forsøk'>00:03:15</a> (6) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707138424%2Fsegments%2F17345507107' data-trigger='focus'  title='Top 5 forsøk'>00:04:18</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elisabeth</td>
                            <td  >Longva Berger</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=982647&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F667509772%2Fsegments%2F16350221152' data-trigger='focus'  title='Top 5 forsøk'>00:08:25</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=982647&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F720355998%2Fsegments%2F17675265606' data-trigger='focus'  title='Top 5 forsøk'>00:09:31</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Axel</td>
                            <td  >Pettersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1757912&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F669910411%2Fsegments%2F16409049300' data-trigger='focus'  title='Top 5 forsøk'>00:03:19</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1757912&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F584159793%2Fsegments%2F14211211053' data-trigger='focus'  title='Top 5 forsøk'>00:07:34</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Olav</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=991311&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F612760105%2Fsegments%2F14945815826' data-trigger='focus'  title='Top 5 forsøk'>00:06:19</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=991311&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F716402025%2Fsegments%2F17581803629' data-trigger='focus'  title='Top 5 forsøk'>00:11:23</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Kristian</td>
                            <td  >Haug</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=62852&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F693471714%2Fsegments%2F17001036266' data-trigger='focus'  title='Top 5 forsøk'>00:08:50</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Inge</td>
                            <td  >Hasund</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7455367&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F724090497%2Fsegments%2F17766547105' data-trigger='focus'  title='Top 5 forsøk'>00:09:47</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eivind</td>
                            <td  >Bjørhei</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=341767&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746592589%2Fsegments%2F18304731233' data-trigger='focus'  title='Top 5 forsøk'>00:09:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erika</td>
                            <td  >Wollner</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9698445&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F725799491%2Fsegments%2F17811488521' data-trigger='focus'  title='Top 5 forsøk'>00:09:36</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pål</td>
                            <td  >Nordseth</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10344253&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F774274494%2Fsegments%2F18945264283' data-trigger='focus'  title='Top 5 forsøk'>00:09:36</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andreas Svenningsen</td>
                            <td  >Hjelle</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7171776&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F601788649%2Fsegments%2F14666686040' data-trigger='focus'  title='Top 5 forsøk'>00:09:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astri</td>
                            <td  >Nordløkken</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1845136&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581272267%2Fsegments%2F14129817506' data-trigger='focus'  title='Top 5 forsøk'>00:09:47</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Selmer</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2153195&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746659639%2Fsegments%2F18306142791' data-trigger='focus'  title='Top 5 forsøk'>00:09:40</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Lundell</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1042874&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731976835%2Fsegments%2F17953534251' data-trigger='focus'  title='Top 5 forsøk'>00:08:32</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Patrik</td>
                            <td  >Paulsson</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3893567&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780502291%2Fsegments%2F19093459155' data-trigger='focus'  title='Top 5 forsøk'>00:08:14</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mila</td>
                            <td  >Zaharinova</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12218083&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F786795520%2Fsegments%2F19232638651' data-trigger='focus'  title='Top 5 forsøk'>00:09:52</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard Ringsby</td>
                            <td  >Hasselgård</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12548722&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F683772860%2Fsegments%2F16762909857' data-trigger='focus'  title='Top 5 forsøk'>00:09:53</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mathias</td>
                            <td  >Fossum</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7965024&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F604099396%2Fsegments%2F14723699092' data-trigger='focus'  title='Top 5 forsøk'>00:08:16</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Svankil</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=878781&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732010139%2Fsegments%2F17954383594' data-trigger='focus'  title='Top 5 forsøk'>00:08:23</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Åge</td>
                            <td  >Osvoll</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698580928%2Fsegments%2F17128445671' data-trigger='focus'  title='Top 5 forsøk'>00:08:51</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mr.</td>
                            <td  >Bang</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1739669&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780468180%2Fsegments%2F19092845140' data-trigger='focus'  title='Top 5 forsøk'>00:08:30</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Falch</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2434843&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F716226873%2Fsegments%2F17577130982' data-trigger='focus'  title='Top 5 forsøk'>00:09:47</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mads</td>
                            <td  >Michelsen</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16003162&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F638250715%2Fsegments%2F15597144058' data-trigger='focus'  title='Top 5 forsøk'>00:09:24</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Keino</td>
                            <td  >Valstad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6898628&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F651516675%2Fsegments%2F15938923597' data-trigger='focus'  title='Top 5 forsøk'>00:08:56</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Akersveen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=203016&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F693477823%2Fsegments%2F17001177183' data-trigger='focus'  title='Top 5 forsøk'>00:08:53</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Forland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=446077&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780462206%2Fsegments%2F19092720522' data-trigger='focus'  title='Top 5 forsøk'>00:09:15</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Tokerud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2849867&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F611456770%2Fsegments%2F14912826686' data-trigger='focus'  title='Top 5 forsøk'>00:09:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan-Hugo</td>
                            <td  >Lundberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15367678&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F592454784%2Fsegments%2F14426411263' data-trigger='focus'  title='Top 5 forsøk'>00:09:08</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Skaalerud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11536007&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F545048105%2Fsegments%2F13146444369' data-trigger='focus'  title='Top 5 forsøk'>00:08:58</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >frode</td>
                            <td  >nergård</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2062208&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F660152260%2Fsegments%2F16167932939' data-trigger='focus'  title='Top 5 forsøk'>00:09:06</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Tendal</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2689755&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F616090379%2Fsegments%2F15036676272' data-trigger='focus'  title='Top 5 forsøk'>00:09:53</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas</td>
                            <td  >Krogstad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15431683&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F660709440%2Fsegments%2F16181796946' data-trigger='focus'  title='Top 5 forsøk'>00:09:17</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bent</td>
                            <td  >Rodem</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13665413&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F631025892%2Fsegments%2F15414428533' data-trigger='focus'  title='Top 5 forsøk'>00:08:57</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8767318&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F697987153%2Fsegments%2F17113544838' data-trigger='focus'  title='Top 5 forsøk'>00:09:24</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simen</td>
                            <td  >Eid</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1105665&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F684107149%2Fsegments%2F16771392344' data-trigger='focus'  title='Top 5 forsøk'>00:09:33</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torbjørn</td>
                            <td  >Høvde</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F559325902%2Fsegments%2F13538300730' data-trigger='focus'  title='Top 5 forsøk'>00:09:23</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sandra</td>
                            <td  >Steinbø</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6055936&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F611258442%2Fsegments%2F14908247625' data-trigger='focus'  title='Top 5 forsøk'>00:09:19</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tore Henning</td>
                            <td  >Helmersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7784469&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F662151885%2Fsegments%2F16213381612' data-trigger='focus'  title='Top 5 forsøk'>00:09:19</a> (22) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13748104&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F728058045%2Fsegments%2F17861446067' data-trigger='focus'  title='Top 5 forsøk'>00:08:52</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jenny </td>
                            <td  >Lyngstad</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8588064&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F601836482%2Fsegments%2F14667981784' data-trigger='focus'  title='Top 5 forsøk'>00:09:33</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pål Thomas</td>
                            <td  >Kvil</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2152200&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708061894%2Fsegments%2F17370155293' data-trigger='focus'  title='Top 5 forsøk'>00:10:19</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Inge A.</td>
                            <td  >Øien</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1938688&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732954303%2Fsegments%2F17979543581' data-trigger='focus'  title='Top 5 forsøk'>00:11:55</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tony</td>
                            <td  >Gjerde</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1072063&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F737188393%2Fsegments%2F18073749884' data-trigger='focus'  title='Top 5 forsøk'>00:12:10</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Finn</td>
                            <td  >Bovim</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12639894&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581842534%2Fsegments%2F14145105007' data-trigger='focus'  title='Top 5 forsøk'>00:12:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Camilla</td>
                            <td  >Ramberg</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5018813&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759021929%2Fsegments%2F18590323592' data-trigger='focus'  title='Top 5 forsøk'>00:12:23</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjell Olav Mandt</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3171020&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F726890049%2Fsegments%2F17835925014' data-trigger='focus'  title='Top 5 forsøk'>00:11:54</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Charlotte</td>
                            <td  >Knudsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2542948&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F727813915%2Fsegments%2F17856532913' data-trigger='focus'  title='Top 5 forsøk'>00:11:48</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anette</td>
                            <td  >Hesselroth</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15755076&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745387347%2Fsegments%2F18271997126' data-trigger='focus'  title='Top 5 forsøk'>00:11:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hugo</td>
                            <td  >Moen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=437146&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F774119492%2Fsegments%2F18941127676' data-trigger='focus'  title='Top 5 forsøk'>00:11:41</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bård</td>
                            <td  >Bråten</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2459307&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698766062%2Fsegments%2F17133418626' data-trigger='focus'  title='Top 5 forsøk'>00:11:45</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Linda</td>
                            <td  >Andersen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14962841&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F716769944%2Fsegments%2F17592102946' data-trigger='focus'  title='Top 5 forsøk'>00:12:24</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ingvild</td>
                            <td  >aaløkken</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=682442&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F635045857%2Fsegments%2F15513170773' data-trigger='focus'  title='Top 5 forsøk'>00:12:31</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon-Halvor</td>
                            <td  >Aas</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14776478&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F605703161%2Fsegments%2F14765552613' data-trigger='focus'  title='Top 5 forsøk'>00:16:49</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hege</td>
                            <td  >Kvitting</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11246312&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793059809%2Fsegments%2F19377866233' data-trigger='focus'  title='Top 5 forsøk'>00:18:02</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mette</td>
                            <td  >Steinbø</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5029434&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F725096840%2Fsegments%2F17791497796' data-trigger='focus'  title='Top 5 forsøk'>00:19:10</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Wold</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2152304&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F497071464%2Fsegments%2F11931593826' data-trigger='focus'  title='Top 5 forsøk'>00:16:16</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Søreng</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8466490&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F568425161%2Fsegments%2F13783943854' data-trigger='focus'  title='Top 5 forsøk'>00:15:03</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pål Christian</td>
                            <td  >Ingierd</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1037426&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F767470446%2Fsegments%2F18787714629' data-trigger='focus'  title='Top 5 forsøk'>00:13:05</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ove Kenneth</td>
                            <td  >Nilsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4430486&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659879890%2Fsegments%2F16160289487' data-trigger='focus'  title='Top 5 forsøk'>00:13:37</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristin</td>
                            <td  >J</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9875331&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F554227596%2Fsegments%2F13400347974' data-trigger='focus'  title='Top 5 forsøk'>00:14:05</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Toril</td>
                            <td  >AG Husby</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9781375&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583241651%2Fsegments%2F14183956401' data-trigger='focus'  title='Top 5 forsøk'>00:11:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frank-Tore</td>
                            <td  >Toresen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1165756&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F726887502%2Fsegments%2F17835877978' data-trigger='focus'  title='Top 5 forsøk'>00:11:20</a> (6) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag</td>
                            <td  >Hylin</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3308283&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F536576217%2Fsegments%2F12931240187' data-trigger='focus'  title='Top 5 forsøk'>00:10:22</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roar</td>
                            <td  >Heidenstrøm</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4285007&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F748807308%2Fsegments%2F18353722510' data-trigger='focus'  title='Top 5 forsøk'>00:10:25</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Skar</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2160523&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745343370%2Fsegments%2F18271026980' data-trigger='focus'  title='Top 5 forsøk'>00:10:29</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørn Ole</td>
                            <td  >Myklebust</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10063242&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608258500%2Fsegments%2F14835951618' data-trigger='focus'  title='Top 5 forsøk'>00:08:13</a> (9) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Eriksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10999208&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F597865623%2Fsegments%2F14561366414' data-trigger='focus'  title='Top 5 forsøk'>00:10:13</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas</td>
                            <td  >Brustad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6761441&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F533571003%2Fsegments%2F12845562648' data-trigger='focus'  title='Top 5 forsøk'>00:10:00</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørgen</td>
                            <td  >Tveita</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5663524&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F669242203%2Fsegments%2F16392883571' data-trigger='focus'  title='Top 5 forsøk'>00:10:03</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sebastian</td>
                            <td  >Torgersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3374139&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F669180957%2Fsegments%2F16391693416' data-trigger='focus'  title='Top 5 forsøk'>00:10:05</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rolf</td>
                            <td  >Hustvedt</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8701851&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F546710218%2Fsegments%2F13189553452' data-trigger='focus'  title='Top 5 forsøk'>00:10:36</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Martin</td>
                            <td  >Bollandsås</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11427933&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566464346%2Fsegments%2F13730366101' data-trigger='focus'  title='Top 5 forsøk'>00:10:37</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andris</td>
                            <td  >Wangensteen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2414105&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573834243%2Fsegments%2F13919880068' data-trigger='focus'  title='Top 5 forsøk'>00:11:01</a> (5) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Åshild</td>
                            <td  >Ludvigsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16278357&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F637866916%2Fsegments%2F15589392752' data-trigger='focus'  title='Top 5 forsøk'>00:11:08</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thorbjørn</td>
                            <td  >Herbrandsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6316769&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F629013601%2Fsegments%2F15369351039' data-trigger='focus'  title='Top 5 forsøk'>00:11:08</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Markus</td>
                            <td  >Olsson</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5037906&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583526130%2Fsegments%2F14191742047' data-trigger='focus'  title='Top 5 forsøk'>00:10:58</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >randolf</td>
                            <td  >walderhaug</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=541879&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F630663414%2Fsegments%2F15406313256' data-trigger='focus'  title='Top 5 forsøk'>00:10:57</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tord</td>
                            <td  >Aslaksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4842677&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732071644%2Fsegments%2F17955852642' data-trigger='focus'  title='Top 5 forsøk'>00:10:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nils Christian</td>
                            <td  >Haugen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14870008&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F620223209%2Fsegments%2F15132611077' data-trigger='focus'  title='Top 5 forsøk'>00:10:40</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per-Ø</td>
                            <td  >Pettersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7775584&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F683814045%2Fsegments%2F16763954239' data-trigger='focus'  title='Top 5 forsøk'>00:10:49</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dennis</td>
                            <td  >Jakobsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4551586&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F557419507%2Fsegments%2F13490104507' data-trigger='focus'  title='Top 5 forsøk'>00:09:56</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Østli</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5730189&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F577190040%2Fsegments%2F14019606802' data-trigger='focus'  title='Top 5 forsøk'>00:07:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Røkenes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1746970&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F795427670%2Fsegments%2F19429865748' data-trigger='focus'  title='Top 5 forsøk'>00:04:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andy</td>
                            <td  >Yu</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6193694&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F603897486%2Fsegments%2F14719370954' data-trigger='focus'  title='Top 5 forsøk'>00:04:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hedvig</td>
                            <td  >Å</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11478440&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F611851139%2Fsegments%2F14922461698' data-trigger='focus'  title='Top 5 forsøk'>00:04:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Brørs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155564&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F600708916%2Fsegments%2F14639733984' data-trigger='focus'  title='Top 5 forsøk'>00:04:06</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanna</td>
                            <td  >Sæverås Breivold</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8392142&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F616586060%2Fsegments%2F15048798265' data-trigger='focus'  title='Top 5 forsøk'>00:04:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Petter</td>
                            <td  >Stiland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=124154&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F601765217%2Fsegments%2F14666115954' data-trigger='focus'  title='Top 5 forsøk'>00:03:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Maren</td>
                            <td  >Mohagen Hansen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7036968&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608216598%2Fsegments%2F14834990003' data-trigger='focus'  title='Top 5 forsøk'>00:04:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bendik</td>
                            <td  >Drevvatne</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=190011&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F730736847%2Fsegments%2F17921583460' data-trigger='focus'  title='Top 5 forsøk'>00:04:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Malin</td>
                            <td  >H</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9569767&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573824063%2Fsegments%2F13919662632' data-trigger='focus'  title='Top 5 forsøk'>00:04:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Irene</td>
                            <td  >Hammerlund</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3603541&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F558064275%2Fsegments%2F13506097628' data-trigger='focus'  title='Top 5 forsøk'>00:04:17</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mette</td>
                            <td  >Jakobsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5471670&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566089324%2Fsegments%2F13720363062' data-trigger='focus'  title='Top 5 forsøk'>00:04:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Fjeld</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5655217&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F715286849%2Fsegments%2F17552715270' data-trigger='focus'  title='Top 5 forsøk'>00:04:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne </td>
                            <td  >Hatlen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=119316&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F464806420%2Fsegments%2F11169984370' data-trigger='focus'  title='Top 5 forsøk'>00:05:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arve</td>
                            <td  >Kvien</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=171730&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731870076%2Fsegments%2F17950638250' data-trigger='focus'  title='Top 5 forsøk'>00:04:37</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kent-Gøran</td>
                            <td  >Carlsson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=482970&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F729139317%2Fsegments%2F17885119633' data-trigger='focus'  title='Top 5 forsøk'>00:04:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mai</td>
                            <td  >Watson</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8368502&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F677343313%2Fsegments%2F16601148056' data-trigger='focus'  title='Top 5 forsøk'>00:04:18</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ove</td>
                            <td  >Sparengen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2710181&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593164440%2Fsegments%2F14445219191' data-trigger='focus'  title='Top 5 forsøk'>00:04:18</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elise</td>
                            <td  >Tveita</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5711246&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F677107231%2Fsegments%2F16596332459' data-trigger='focus'  title='Top 5 forsøk'>00:04:19</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tore Eugen</td>
                            <td  >Kvalheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7852758&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753371716%2Fsegments%2F18459504524' data-trigger='focus'  title='Top 5 forsøk'>00:03:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >TÆNDIS</td>
                            <td  >P</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7456064&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593752633%2Fsegments%2F14460411398' data-trigger='focus'  title='Top 5 forsøk'>00:03:54</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Paal</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=346748&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593020833%2Fsegments%2F14442250874' data-trigger='focus'  title='Top 5 forsøk'>00:03:08</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olav Johannes</td>
                            <td  >Deelstra</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4353351&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F791617586%2Fsegments%2F19338728734' data-trigger='focus'  title='Top 5 forsøk'>00:03:13</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Michal</td>
                            <td  >Glowacki</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=139931&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F720103952%2Fsegments%2F17669809959' data-trigger='focus'  title='Top 5 forsøk'>00:03:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir André</td>
                            <td  >Hoksnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4923819&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F747625384%2Fsegments%2F18329400046' data-trigger='focus'  title='Top 5 forsøk'>00:03:07</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nicolai</td>
                            <td  >Klem</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4542217&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F644403065%2Fsegments%2F15754951350' data-trigger='focus'  title='Top 5 forsøk'>00:03:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sjur</td>
                            <td  >HM</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2889314&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608269719%2Fsegments%2F14836220695' data-trigger='focus'  title='Top 5 forsøk'>00:02:48</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian</td>
                            <td  >Unhjem</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4319248&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F610138299%2Fsegments%2F14880744340' data-trigger='focus'  title='Top 5 forsøk'>00:02:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frode Holtung</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=401500&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F575671037%2Fsegments%2F13973396064' data-trigger='focus'  title='Top 5 forsøk'>00:02:59</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sølve</td>
                            <td  >Paulsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5553091&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F655665529%2Fsegments%2F16041854615' data-trigger='focus'  title='Top 5 forsøk'>00:03:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Takla</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9229288&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F571679276%2Fsegments%2F13870479797' data-trigger='focus'  title='Top 5 forsøk'>00:03:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ivar</td>
                            <td  >Sletta</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1097042&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F584127795%2Fsegments%2F14210240418' data-trigger='focus'  title='Top 5 forsøk'>00:03:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon Christian</td>
                            <td  >Nyhus</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10213817&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593437067%2Fsegments%2F14452829441' data-trigger='focus'  title='Top 5 forsøk'>00:03:46</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Styrk</td>
                            <td  >Kamsvåg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4787957&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606121051%2Fsegments%2F14776888653' data-trigger='focus'  title='Top 5 forsøk'>00:03:47</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Solberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7708617&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F596478977%2Fsegments%2F14524464723' data-trigger='focus'  title='Top 5 forsøk'>00:03:33</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12373195&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F498899745%2Fsegments%2F11978072070' data-trigger='focus'  title='Top 5 forsøk'>00:03:32</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjorn</td>
                            <td  >Hoye</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=647965&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F605084194%2Fsegments%2F14749936283' data-trigger='focus'  title='Top 5 forsøk'>00:03:25</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Tverrli</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1134510&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F541203287%2Fsegments%2F13050722330' data-trigger='focus'  title='Top 5 forsøk'>00:03:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andre</td>
                            <td  >Jean</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=416751&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F647758588%2Fsegments%2F15840894433' data-trigger='focus'  title='Top 5 forsøk'>00:05:32</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Julianne</td>
                            <td  >Krohn-Hansen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12507875&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F478487536%2Fsegments%2F11485191290' data-trigger='focus'  title='Top 5 forsøk'>00:06:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arvid</td>
                            <td  >Mathiesen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2434098&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F711088835%2Fsegments%2F17452342621' data-trigger='focus'  title='Top 5 forsøk'>00:05:54</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Carlsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8877282&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F612774537%2Fsegments%2F14946237145' data-trigger='focus'  title='Top 5 forsøk'>00:06:05</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ola Marius</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1384213&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F472620821%2Fsegments%2F11348590718' data-trigger='focus'  title='Top 5 forsøk'>00:02:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian Steen</td>
                            <td  >Eriksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1367733&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F569090779%2Fsegments%2F13802094484' data-trigger='focus'  title='Top 5 forsøk'>00:05:37</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørn Tore</td>
                            <td  >Aune</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=666827&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F752258762%2Fsegments%2F18430037495' data-trigger='focus'  title='Top 5 forsøk'>00:05:35</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gorm</td>
                            <td  >Nøkleby</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=873837&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659625968%2Fsegments%2F16152510460' data-trigger='focus'  title='Top 5 forsøk'>00:05:16</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nissik</td>
                            <td  >Juell</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=75119&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F554402648%2Fsegments%2F13405530463' data-trigger='focus'  title='Top 5 forsøk'>00:05:16</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håvard Atle</td>
                            <td  >Skaug</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10563378&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F607039990%2Fsegments%2F14802653716' data-trigger='focus'  title='Top 5 forsøk'>00:05:27</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Melissa</td>
                            <td  >Laanela</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15273848&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793304345%2Fsegments%2F19383380051' data-trigger='focus'  title='Top 5 forsøk'>00:11:37</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kay-ove</td>
                            <td  >Vetland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4227993&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581412578%2Fsegments%2F14133427112' data-trigger='focus'  title='Top 5 forsøk'>00:15:43</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >simen</td>
                            <td  >aabøe</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2053529&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F572679693%2Fsegments%2F13892204856' data-trigger='focus'  title='Top 5 forsøk'>00:08:06</a> (8) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut</td>
                            <td  >Aasheim</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11742354&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F709563038%2Fsegments%2F17415400131' data-trigger='focus'  title='Top 5 forsøk'>00:08:08</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peter</td>
                            <td  >Mannfjord</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10222929&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F587578430%2Fsegments%2F14298602974' data-trigger='focus'  title='Top 5 forsøk'>00:08:09</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Midttømme</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15349852&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F738048658%2Fsegments%2F18096772888' data-trigger='focus'  title='Top 5 forsøk'>00:08:00</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >Tjuvstu Engen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8060406&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F789778210%2Fsegments%2F19301542249' data-trigger='focus'  title='Top 5 forsøk'>00:07:55</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >S</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5463378&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707032563%2Fsegments%2F17342982961' data-trigger='focus'  title='Top 5 forsøk'>00:06:59</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan</td>
                            <td  >Solhøy</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4906911&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F590684490%2Fsegments%2F14375556381' data-trigger='focus'  title='Top 5 forsøk'>00:07:12</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >A</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=768217&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F554370202%2Fsegments%2F13404715227' data-trigger='focus'  title='Top 5 forsøk'>00:05:12</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torbjørn</td>
                            <td  >Blomsnes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10874373&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780979304%2Fsegments%2F19103874209' data-trigger='focus'  title='Top 5 forsøk'>00:05:07</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Egil</td>
                            <td  >Olafsson</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=130641&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F692360961%2Fsegments%2F16973303287' data-trigger='focus'  title='Top 5 forsøk'>00:04:28</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kai Eirik</td>
                            <td  >Espedal</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7621084&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F609085375%2Fsegments%2F14856035936' data-trigger='focus'  title='Top 5 forsøk'>00:04:30</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arnt</td>
                            <td  >Mortensen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=131539&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F692225423%2Fsegments%2F16970175170' data-trigger='focus'  title='Top 5 forsøk'>00:04:31</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Høgholen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11223326&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F609131849%2Fsegments%2F14856834898' data-trigger='focus'  title='Top 5 forsøk'>00:04:25</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henrik</td>
                            <td  >Føien</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=123175&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759368081%2Fsegments%2F18599270985' data-trigger='focus'  title='Top 5 forsøk'>00:04:08</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan Erik</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1002048&sid=1598656&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F621242696%2Fsegments%2F15161752030' data-trigger='focus'  title='Top 5 forsøk'>00:07:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Myklebust</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10355626&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F613295507%2Fsegments%2F14961449680' data-trigger='focus'  title='Top 5 forsøk'>00:03:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henning</td>
                            <td  >Olsrud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=118598&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F605670973%2Fsegments%2F14764545322' data-trigger='focus'  title='Top 5 forsøk'>00:03:50</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Petter</td>
                            <td  >Skedsmo</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2462628&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731072394%2Fsegments%2F17928959613' data-trigger='focus'  title='Top 5 forsøk'>00:04:36</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rune</td>
                            <td  >Busch</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5491985&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F607058538%2Fsegments%2F14803086012' data-trigger='focus'  title='Top 5 forsøk'>00:04:47</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Kaspartu</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10855408&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F712337320%2Fsegments%2F17479841445' data-trigger='focus'  title='Top 5 forsøk'>00:04:54</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trude</td>
                            <td  >Elde</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=131562&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583315759%2Fsegments%2F14185946594' data-trigger='focus'  title='Top 5 forsøk'>00:05:03</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steffen S.</td>
                            <td  >Paulsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5814758&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659563133%2Fsegments%2F16150342477' data-trigger='focus'  title='Top 5 forsøk'>00:05:04</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peter</td>
                            <td  >Laskowski</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2336194&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780905426%2Fsegments%2F19102294671' data-trigger='focus'  title='Top 5 forsøk'>00:04:52</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje</td>
                            <td  >Falstad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1279731&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F599040070%2Fsegments%2F14593807590' data-trigger='focus'  title='Top 5 forsøk'>00:04:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørn</td>
                            <td  >Sørland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=644510&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759194550%2Fsegments%2F18594922267' data-trigger='focus'  title='Top 5 forsøk'>00:04:49</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aksel</td>
                            <td  >Overskott</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14082774&sid=7134257&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606974230%2Fsegments%2F14801100819' data-trigger='focus'  title='Top 5 forsøk'>00:04:49</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Moe</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13973067&sid=6958323&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760146515%2Fsegments%2F18619370695' data-trigger='focus'  title='Top 5 forsøk'>00:08:13</a> (1) </td><td >-</td>
                        </tr>            </tbody>
        </table> 
        </div>
    </div>
    </div>
    </div>



    


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                    <p class="card-text">SegmentChallenge sammenligner Strava-løpere over flere segmenter i samme område, innenfor en tidsperiode. En utfordring består av flere segmenter. Det er sammenlagttiden som rangerer hvem som er sjefen. Denne nettsiden er foreløpig i en Beta-versjon. I beta-perioden blir Østmarka i Oslo fokus. Kanskje det dukker opp utfordringer andre steder etter hvert!</p>
                    <p class="card-text">Har du lyst til å lage en egen utfordring? Send en PM på <a target="_blank" href="https://www.facebook.com/Segmentchallenge/">Facebook-siden</a></p>

                    <p class="card-text">Denne siden baserer seg på data fra <a href="http://www.strava.com">Strava</a> via dems <a target="_blank" href="https://strava.github.io/api/">API V3</a>, hvis du av en eller annen grunn skulle lure...</p>
                    <p class="card-text">Spørsmål, feilmeldinger og forslag til forbedringer taes i mot på  <a target="_blank" href="https://www.facebook.com/Segmentchallenge/">Facebook-siden</a></p>                       
                    <p class="card-text">God tur!</p>            
            </div>
        </div>
    </div>
</div>



</body>

</html>

