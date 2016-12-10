

<!DOCTYPE html>
<html lang="nb">
    <head>
        <meta property="og:title" content="Haukåsen-trippelen - SegmentChallenge" />
        <meta property="fb:app_id" content="1559419401032598" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://segmentchallenge.lopsloggen.no/challenge/haukasen-trippelen" />
        <meta property="og:image" content="http://segmentchallenge.lopsloggen.no/segmentchallenge.png" />
        <meta property="og:description" content="3 knallharde segmenter opp til kula på toppen av Haukåsen" />
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
        
		<script src="/lib/Baertur-master/assets/lib/L.TileLayer.Kartverket/dist/L.TileLayer.Kartverket.min.js"></script>
		<script src="/lib/Baertur-master/assets/lib/leaflet-gpx/gpx.js"></script>
       
         <!--CUSTOM-->
        <script src="/lib/js/custom.js"></script>
        <link rel="stylesheet" href="/css/custom.css" />

   
        
        <title>Haukåsen-trippelen - SegmentChallenge - SegmentChallenge</title>
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
        <img src="/png/segmentchallenge.png" style="width:50px;display:inline;"/> 
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
                                <a href="https://www.strava.com/oauth/authorize?client_id=3493&redirect_uri=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Findex.php&response_type=code&approval_prompt=auto"><img src="/png/LogInWithStrava.png" /></a>
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
<script>document.body.style.backgroundImage = 'url(/images/IMAG0314.jpg)';</script>
    <!-- ****************************************************** -->
    <!-- ********************  INFOBOKSER ********************** -->
    <!-- ****************************************************** -->
<header>
    <div style="margin-top: 150px;margin-bottom: 50px;">
    <h1 style="float:left;">Haukåsen-trippelen</h1>
    <div  style="margin: 10 0 0 20px;float:left;" class="fb-share-button" data-href="http://segmentchallenge.lopsloggen.no/challenge/haukasen-trippelen" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Fchallenge%2Fhaukasen-trippelen&amp;src=sdkpreparse">Del</a></div>

    <div style="font-size:16px;margin-top:-50px;margin-bottom:50px; clear:both;">
        <span class="tag tag-info">Totallengde: 5296 meter</span>
        <span class="tag tag-info">Høydemeter: 494 meter</span>
        
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
        <a  target="_blank" href="https://www.strava.com/segments/1282927">Hauken (Mariholtet Sportsstue - Haukåsen)</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            2279 m | 160 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map1282927');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map1282927"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map1282927',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/1282927.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Steffen S. Paulsen: 00:09:25 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/5331533">Lutdalen - Branntårn</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            1552 m | 171 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map5331533');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map5331533"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map5331533',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/5331533.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Inge Hasund: 00:09:24 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/4917545">Haukåsen rett opp brutal</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            1465 m | 163 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map4917545');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map4917545"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map4917545',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/4917545.gpx';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '/lib/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    CR: Steffen S. Paulsen: 00:09:22 | Du: <i>ikke logget inn</i>                   </p>
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
                 
                    
   
    <script>var xhr = $.ajax({url: 'http://segmentchallenge.lopsloggen.no/cache/haukasen-trippelen.json',success: function(response) {var d = new Date( xhr.getResponseHeader('Last-Modified') );var datetext=d.getHours()+':'+d.getMinutes();$('#tid').html('Sist oppdatert: ' + datetext);}});</script>        <table id="effort" class="display" cellspacing="0" width="100%">
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
                                       <th style="font-size:10px;font-weight:lighter;">Hauken (Mariholtet Sportsstue - Haukåsen)</th>
                                        <th style="font-size:10px;font-weight:lighter;">Lutdalen - Branntårn</th>
                                        <th style="font-size:10px;font-weight:lighter;">Haukåsen rett opp brutal</th>
                                        
                </tr>  
            </thead>
            <tbody>
            <tr>
                            <td  >1</td>
                            <td  >Steffen S.</td>
                            <td  >Paulsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5814758&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211134227%2Fsegments%2F4978704432' data-trigger='focus'  title='Top 5 forsøk'>00:09:25</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5814758&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F649932343%2Fsegments%2F15895552075' data-trigger='focus'  title='Top 5 forsøk'>00:09:39</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5814758&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F647728213%2Fsegments%2F15840130925' data-trigger='focus'  title='Top 5 forsøk'>00:09:22</a> (2) </td><td >00:28:26</td>
                        </tr><tr>
                            <td  >2</td>
                            <td  >Inge</td>
                            <td  >Hasund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7455367&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F666182525%2Fsegments%2F16312224914' data-trigger='focus'  title='Top 5 forsøk'>00:09:55</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7455367&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F662069421%2Fsegments%2F16211859386' data-trigger='focus'  title='Top 5 forsøk'>00:09:24</a> (5) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7455367&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F682373079%2Fsegments%2F16725266084' data-trigger='focus'  title='Top 5 forsøk'>00:09:39</a> (1) </td><td >00:28:58</td>
                        </tr><tr>
                            <td  >3</td>
                            <td  >Hermann</td>
                            <td  >Bruun</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211358198%2Fsegments%2F4986322427' data-trigger='focus'  title='Top 5 forsøk'>00:10:30</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F642609561%2Fsegments%2F15704529972' data-trigger='focus'  title='Top 5 forsøk'>00:09:42</a> (6) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F612854221%2Fsegments%2F14948586361' data-trigger='focus'  title='Top 5 forsøk'>00:10:00</a> (5) </td><td >00:30:12</td>
                        </tr><tr>
                            <td  >4</td>
                            <td  >Mads</td>
                            <td  >Blomfeldt</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=535974&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593232312%2Fsegments%2F14447002687' data-trigger='focus'  title='Top 5 forsøk'>00:10:20</a> (9) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=535974&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F646078147%2Fsegments%2F15800370332' data-trigger='focus'  title='Top 5 forsøk'>00:10:43</a> (5) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=535974&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F599890282%2Fsegments%2F14618254535' data-trigger='focus'  title='Top 5 forsøk'>00:10:10</a> (2) </td><td >00:31:13</td>
                        </tr><tr>
                            <td  >5</td>
                            <td  >Keino</td>
                            <td  >Valstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6898628&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F657190612%2Fsegments%2F16083472153' data-trigger='focus'  title='Top 5 forsøk'>00:11:14</a> (5) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6898628&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F618485924%2Fsegments%2F15092399028' data-trigger='focus'  title='Top 5 forsøk'>00:10:54</a> (12) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6898628&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F620054345%2Fsegments%2F15127408711' data-trigger='focus'  title='Top 5 forsøk'>00:12:42</a> (1) </td><td >00:34:50</td>
                        </tr><tr>
                            <td  >6</td>
                            <td  >Torbjørn</td>
                            <td  >Høvde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305127344%2Fsegments%2F7185193705' data-trigger='focus'  title='Top 5 forsøk'>00:10:11</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F391178082%2Fsegments%2F9368841578' data-trigger='focus'  title='Top 5 forsøk'>00:14:25</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F661023476%2Fsegments%2F16187392150' data-trigger='focus'  title='Top 5 forsøk'>00:13:09</a> (1) </td><td >00:37:45</td>
                        </tr><tr>
                            <td  >7</td>
                            <td  >Atle</td>
                            <td  >Smenes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305099176%2Fsegments%2F7184494682' data-trigger='focus'  title='Top 5 forsøk'>00:10:07</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F310628361%2Fsegments%2F7326507581' data-trigger='focus'  title='Top 5 forsøk'>00:17:41</a> (8) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F295451442%2Fsegments%2F6943665079' data-trigger='focus'  title='Top 5 forsøk'>00:11:48</a> (3) </td><td >00:39:36</td>
                        </tr><tr>
                            <td  >8</td>
                            <td  >Stig</td>
                            <td  >Bjerke</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10266213&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F411432416%2Fsegments%2F9883678923' data-trigger='focus'  title='Top 5 forsøk'>00:19:32</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10266213&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F374190857%2Fsegments%2F8939998642' data-trigger='focus'  title='Top 5 forsøk'>00:18:51</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10266213&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F411469065%2Fsegments%2F9884618605' data-trigger='focus'  title='Top 5 forsøk'>00:18:29</a> (2) </td><td >00:56:52</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje</td>
                            <td  >Alstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3279019&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F650570335%2Fsegments%2F15912068678' data-trigger='focus'  title='Top 5 forsøk'>00:14:55</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3279019&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F657314637%2Fsegments%2F16086842996' data-trigger='focus'  title='Top 5 forsøk'>00:23:33</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas</td>
                            <td  >Brustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6761441&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F370166577%2Fsegments%2F8842994747' data-trigger='focus'  title='Top 5 forsøk'>00:14:35</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6761441&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F543188243%2Fsegments%2F13098955569' data-trigger='focus'  title='Top 5 forsøk'>00:14:54</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cato</td>
                            <td  >Tangen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2091832&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F306691733%2Fsegments%2F7234152469' data-trigger='focus'  title='Top 5 forsøk'>00:13:59</a> (6) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2091832&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F472263756%2Fsegments%2F11341098983' data-trigger='focus'  title='Top 5 forsøk'>00:30:11</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peer Morten</td>
                            <td  >Løchting</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574121&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423172792%2Fsegments%2F10181195406' data-trigger='focus'  title='Top 5 forsøk'>00:13:27</a> (10) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574121&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F370506385%2Fsegments%2F8851729063' data-trigger='focus'  title='Top 5 forsøk'>00:14:40</a> (14) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Dombestein</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3041706&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F151369180%2Fsegments%2F3484822190' data-trigger='focus'  title='Top 5 forsøk'>00:14:24</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3041706&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F126853486%2Fsegments%2F2852333788' data-trigger='focus'  title='Top 5 forsøk'>00:13:57</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Nikolaisen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=573784&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F25479513%2Fsegments%2F455460431' data-trigger='focus'  title='Top 5 forsøk'>00:12:49</a> (10) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=573784&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F686473063%2Fsegments%2F16826292202' data-trigger='focus'  title='Top 5 forsøk'>00:15:00</a> (14) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >Tjuvstu Engen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8060406&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F676933250%2Fsegments%2F16592604934' data-trigger='focus'  title='Top 5 forsøk'>00:12:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8060406&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F676933250%2Fsegments%2F16592605033' data-trigger='focus'  title='Top 5 forsøk'>00:11:49</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torbjørn</td>
                            <td  >Bergersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7214981&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F360210531%2Fsegments%2F8591792792' data-trigger='focus'  title='Top 5 forsøk'>00:12:01</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7214981&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F345347253%2Fsegments%2F8209616043' data-trigger='focus'  title='Top 5 forsøk'>00:13:03</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Liv-Janne</td>
                            <td  >Øvrebust</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=404842&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423167205%2Fsegments%2F10181071514' data-trigger='focus'  title='Top 5 forsøk'>00:12:40</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=404842&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F85818562%2Fsegments%2F1768394461' data-trigger='focus'  title='Top 5 forsøk'>00:23:13</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Børge </td>
                            <td  >Larsson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5501604&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708987035%2Fsegments%2F17397275166' data-trigger='focus'  title='Top 5 forsøk'>00:14:56</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5501604&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F455972004%2Fsegments%2F10963157974' data-trigger='focus'  title='Top 5 forsøk'>00:16:28</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rasmus</td>
                            <td  >Evrin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1547517&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759533042%2Fsegments%2F18602926964' data-trigger='focus'  title='Top 5 forsøk'>00:12:57</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1547517&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F628012377%2Fsegments%2F15335423133' data-trigger='focus'  title='Top 5 forsøk'>00:16:42</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Åge</td>
                            <td  >Osvoll</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760453984%2Fsegments%2F18626660904' data-trigger='focus'  title='Top 5 forsøk'>00:13:16</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F372811397%2Fsegments%2F8907542988' data-trigger='focus'  title='Top 5 forsøk'>00:17:20</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Truls</td>
                            <td  >Grøstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8192340&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F517594750%2Fsegments%2F12441048739' data-trigger='focus'  title='Top 5 forsøk'>00:16:27</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8192340&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F528257273%2Fsegments%2F12711790515' data-trigger='focus'  title='Top 5 forsøk'>00:19:08</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jarle</td>
                            <td  >Martinsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3770592&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F172565882%2Fsegments%2F4025891294' data-trigger='focus'  title='Top 5 forsøk'>00:18:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3770592&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F188432880%2Fsegments%2F4423314268' data-trigger='focus'  title='Top 5 forsøk'>00:17:20</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Steen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2759241&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F101412647%2Fsegments%2F2178671025' data-trigger='focus'  title='Top 5 forsøk'>00:18:32</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2759241&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F159510613%2Fsegments%2F3697300369' data-trigger='focus'  title='Top 5 forsøk'>00:15:01</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hege</td>
                            <td  >Kvitting</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11246312&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F515529539%2Fsegments%2F12389314967' data-trigger='focus'  title='Top 5 forsøk'>00:21:03</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11246312&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573979772%2Fsegments%2F13923272370' data-trigger='focus'  title='Top 5 forsøk'>00:21:00</a> (4) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut Rune</td>
                            <td  >Halvorsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10579447&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F366483840%2Fsegments%2F8751230486' data-trigger='focus'  title='Top 5 forsøk'>00:26:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10579447&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F375717321%2Fsegments%2F8983005481' data-trigger='focus'  title='Top 5 forsøk'>00:24:24</a> (14) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marie</td>
                            <td  >Stephensen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10340787&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F366478374%2Fsegments%2F8751119835' data-trigger='focus'  title='Top 5 forsøk'>00:27:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10340787&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F375719105%2Fsegments%2F8983062367' data-trigger='focus'  title='Top 5 forsøk'>00:24:25</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >simen</td>
                            <td  >aabøe</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2053529&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F534503130%2Fsegments%2F12875491909' data-trigger='focus'  title='Top 5 forsøk'>00:18:04</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2053529&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F649938406%2Fsegments%2F15895702601' data-trigger='focus'  title='Top 5 forsøk'>00:17:54</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rory</td>
                            <td  >Gundersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3101556&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780666268%2Fsegments%2F19096949415' data-trigger='focus'  title='Top 5 forsøk'>00:16:31</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3101556&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F627568728%2Fsegments%2F15321974417' data-trigger='focus'  title='Top 5 forsøk'>00:26:07</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon Christopher</td>
                            <td  >Knudsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=247240&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F168794785%2Fsegments%2F3931534036' data-trigger='focus'  title='Top 5 forsøk'>00:15:50</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=247240&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F162920015%2Fsegments%2F3782284952' data-trigger='focus'  title='Top 5 forsøk'>00:14:39</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pål Oskar</td>
                            <td  >Engen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2242743&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F692013554%2Fsegments%2F16964965810' data-trigger='focus'  title='Top 5 forsøk'>00:15:31</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2242743&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F569488094%2Fsegments%2F13812880342' data-trigger='focus'  title='Top 5 forsøk'>00:18:36</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jane</td>
                            <td  >Nilsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4587110&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211382763%2Fsegments%2F4987236964' data-trigger='focus'  title='Top 5 forsøk'>00:16:16</a> (12) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4587110&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F560942406%2Fsegments%2F13582806418' data-trigger='focus'  title='Top 5 forsøk'>00:27:01</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegar</td>
                            <td  >Angelo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2199625&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759425859%2Fsegments%2F18600530978' data-trigger='focus'  title='Top 5 forsøk'>00:11:55</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2199625&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F752317811%2Fsegments%2F18431816812' data-trigger='focus'  title='Top 5 forsøk'>00:16:29</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gunnar</td>
                            <td  >Sandnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15072798&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F687567141%2Fsegments%2F16852649855' data-trigger='focus'  title='Top 5 forsøk'>00:16:30</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15072798&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F588815706%2Fsegments%2F14328532193' data-trigger='focus'  title='Top 5 forsøk'>00:16:19</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Person</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6131839&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F691053528%2Fsegments%2F16936241439' data-trigger='focus'  title='Top 5 forsøk'>00:15:14</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6131839&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F725833194%2Fsegments%2F17812194958' data-trigger='focus'  title='Top 5 forsøk'>00:12:24</a> (79) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Johan Sander</td>
                            <td  >Alvheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1018402&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F53326018%2Fsegments%2F964348258' data-trigger='focus'  title='Top 5 forsøk'>00:23:40</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1018402&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F53326803%2Fsegments%2F1378960901' data-trigger='focus'  title='Top 5 forsøk'>00:25:07</a> (6) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tony</td>
                            <td  >Gjerde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1072063&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F90856544%2Fsegments%2F1901998002' data-trigger='focus'  title='Top 5 forsøk'>00:10:43</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1072063&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F89222353%2Fsegments%2F1859760392' data-trigger='focus'  title='Top 5 forsøk'>00:11:17</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Leif-Andre</td>
                            <td  >Trøhaugen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759115319%2Fsegments%2F18592579004' data-trigger='focus'  title='Top 5 forsøk'>00:10:01</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F640452263%2Fsegments%2F15650502171' data-trigger='focus'  title='Top 5 forsøk'>00:11:37</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørnar</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2422643&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F202679238%2Fsegments%2F4772671881' data-trigger='focus'  title='Top 5 forsøk'>00:10:42</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2422643&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F604786405%2Fsegments%2F14742428001' data-trigger='focus'  title='Top 5 forsøk'>00:10:06</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Kristian</td>
                            <td  >Sørland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759437218%2Fsegments%2F18600789393' data-trigger='focus'  title='Top 5 forsøk'>00:10:20</a> (9) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F197329827%2Fsegments%2F4648257831' data-trigger='focus'  title='Top 5 forsøk'>00:15:32</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas</td>
                            <td  >Nermoen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3243624&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F424363528%2Fsegments%2F10213288828' data-trigger='focus'  title='Top 5 forsøk'>00:10:54</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3243624&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F363267409%2Fsegments%2F8666450026' data-trigger='focus'  title='Top 5 forsøk'>00:14:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Petter</td>
                            <td  >Skippervold</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=206164&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211111072%2Fsegments%2F4978308502' data-trigger='focus'  title='Top 5 forsøk'>00:09:55</a> (13) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=206164&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F196273234%2Fsegments%2F4620550978' data-trigger='focus'  title='Top 5 forsøk'>00:13:02</a> (6) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Kjølstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1126591&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F28944149%2Fsegments%2F512416411' data-trigger='focus'  title='Top 5 forsøk'>00:11:22</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1126591&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F462379778%2Fsegments%2F11121619464' data-trigger='focus'  title='Top 5 forsøk'>00:18:28</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Helge</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574106&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F25478487%2Fsegments%2F455446996' data-trigger='focus'  title='Top 5 forsøk'>00:11:22</a> (9) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574106&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F167286181%2Fsegments%2F3890647656' data-trigger='focus'  title='Top 5 forsøk'>00:15:47</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Haug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=117564&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F55736327%2Fsegments%2F1016188117' data-trigger='focus'  title='Top 5 forsøk'>00:11:13</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=117564&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F24891293%2Fsegments%2F1596299080' data-trigger='focus'  title='Top 5 forsøk'>00:13:22</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas</td>
                            <td  >Olsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1218462&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F89887797%2Fsegments%2F1876941880' data-trigger='focus'  title='Top 5 forsøk'>00:10:10</a> (5) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1218462&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F25110415%2Fsegments%2F1596299276' data-trigger='focus'  title='Top 5 forsøk'>00:13:27</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas</td>
                            <td  >Nielsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2103041&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F152186888%2Fsegments%2F3505894065' data-trigger='focus'  title='Top 5 forsøk'>00:10:21</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2103041&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F174370271%2Fsegments%2F4067338909' data-trigger='focus'  title='Top 5 forsøk'>00:10:06</a> (17) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Bago</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=768152&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593143858%2Fsegments%2F14444727464' data-trigger='focus'  title='Top 5 forsøk'>00:11:36</a> (5) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=768152&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F234099230%2Fsegments%2F5520721677' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Axel</td>
                            <td  >Pettersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1757912&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423207504%2Fsegments%2F10181916373' data-trigger='focus'  title='Top 5 forsøk'>00:10:26</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1757912&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F146628415%2Fsegments%2F3357824629' data-trigger='focus'  title='Top 5 forsøk'>00:11:35</a> (9) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Paul Håvard</td>
                            <td  >Østby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=943343&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F17690303%2Fsegments%2F323326251' data-trigger='focus'  title='Top 5 forsøk'>00:11:50</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=943343&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F75334429%2Fsegments%2F1596121628' data-trigger='focus'  title='Top 5 forsøk'>00:18:15</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut</td>
                            <td  >Lutnæs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=576310&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211117138%2Fsegments%2F4978413017' data-trigger='focus'  title='Top 5 forsøk'>00:10:33</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=576310&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F197344265%2Fsegments%2F4648567521' data-trigger='focus'  title='Top 5 forsøk'>00:15:48</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sveinung</td>
                            <td  >Syversen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6672951&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F487454063%2Fsegments%2F11692509056' data-trigger='focus'  title='Top 5 forsøk'>00:17:10</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Røkenes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1746970&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F97839570%2Fsegments%2F2085566802' data-trigger='focus'  title='Top 5 forsøk'>00:17:14</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Olav</td>
                            <td  >Walmann</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=65835&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F546689718%2Fsegments%2F13189155243' data-trigger='focus'  title='Top 5 forsøk'>00:17:47</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Isabel</td>
                            <td  >Karlsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12054271&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593347261%2Fsegments%2F14449979063' data-trigger='focus'  title='Top 5 forsøk'>00:17:48</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Gulliksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2738575&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F202712926%2Fsegments%2F4773332285' data-trigger='focus'  title='Top 5 forsøk'>00:17:46</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hedvig</td>
                            <td  >Å</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11478440&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F657723561%2Fsegments%2F16096033072' data-trigger='focus'  title='Top 5 forsøk'>00:17:16</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steinar</td>
                            <td  >Kvaale</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2277708&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F159684636%2Fsegments%2F3701647989' data-trigger='focus'  title='Top 5 forsøk'>00:17:39</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Christoffersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=424834&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F183057483%2Fsegments%2F4277751791' data-trigger='focus'  title='Top 5 forsøk'>00:17:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elisabeth</td>
                            <td  >Longva Berger</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=982647&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F76747507%2Fsegments%2F1596121068' data-trigger='focus'  title='Top 5 forsøk'>00:17:24</a> (9) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mats</td>
                            <td  >Næss</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1248118&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F75837219%2Fsegments%2F1596298808' data-trigger='focus'  title='Top 5 forsøk'>00:17:46</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tage</td>
                            <td  >Godtland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2401550&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F559390054%2Fsegments%2F13539775440' data-trigger='focus'  title='Top 5 forsøk'>00:18:06</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >anne</td>
                            <td  >orheim</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2127596&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F289963434%2Fsegments%2F6807917430' data-trigger='focus'  title='Top 5 forsøk'>00:18:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erika</td>
                            <td  >Wollner</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9698445&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F333248491%2Fsegments%2F7896598639' data-trigger='focus'  title='Top 5 forsøk'>00:18:30</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Holmelin</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8883792&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F600844347%2Fsegments%2F14642962307' data-trigger='focus'  title='Top 5 forsøk'>00:18:57</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eirik</td>
                            <td  >Dekko</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1184928&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F29247565%2Fsegments%2F1596298978' data-trigger='focus'  title='Top 5 forsøk'>00:19:10</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øivind</td>
                            <td  >Ørstavik</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2861788&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F387807120%2Fsegments%2F9280213169' data-trigger='focus'  title='Top 5 forsøk'>00:19:19</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Moslet</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2357717&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F185208301%2Fsegments%2F4336502128' data-trigger='focus'  title='Top 5 forsøk'>00:19:11</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andreas Svensen</td>
                            <td  >Hjelme</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=871733&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F723047091%2Fsegments%2F17738163636' data-trigger='focus'  title='Top 5 forsøk'>00:18:20</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ingvild</td>
                            <td  >aaløkken</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=682442&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F613944713%2Fsegments%2F14981119743' data-trigger='focus'  title='Top 5 forsøk'>00:18:18</a> (6) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steinar</td>
                            <td  >Borø</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1086593&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753484193%2Fsegments%2F18462717169' data-trigger='focus'  title='Top 5 forsøk'>00:18:03</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Wettre</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6176275&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F700038379%2Fsegments%2F17168160173' data-trigger='focus'  title='Top 5 forsøk'>00:18:02</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >K</td>
                            <td  >Andersen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14583249&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708597191%2Fsegments%2F17386191437' data-trigger='focus'  title='Top 5 forsøk'>00:17:02</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian</td>
                            <td  >Sagstad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4209378&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F268601388%2Fsegments%2F6291398665' data-trigger='focus'  title='Top 5 forsøk'>00:18:08</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rasmus</td>
                            <td  >Dinessen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2335241&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F598911533%2Fsegments%2F14590628425' data-trigger='focus'  title='Top 5 forsøk'>00:18:17</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torbjørn</td>
                            <td  >Blomsnes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10874373&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780979304%2Fsegments%2F19103873945' data-trigger='focus'  title='Top 5 forsøk'>00:17:58</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Eilertsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=74422&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F202974363%2Fsegments%2F4780761408' data-trigger='focus'  title='Top 5 forsøk'>00:16:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >yvan</td>
                            <td  >couver</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=779254&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F19670833%2Fsegments%2F1596299316' data-trigger='focus'  title='Top 5 forsøk'>00:15:05</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut Harald</td>
                            <td  >Hylleseth</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3268171&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F561962709%2Fsegments%2F13612387235' data-trigger='focus'  title='Top 5 forsøk'>00:15:03</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir</td>
                            <td  >Kværk</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1008221&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F51745569%2Fsegments%2F1596298885' data-trigger='focus'  title='Top 5 forsøk'>00:14:59</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Einar</td>
                            <td  >Dørum</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4876236&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F296001273%2Fsegments%2F6957277179' data-trigger='focus'  title='Top 5 forsøk'>00:15:15</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simon</td>
                            <td  >Innvær</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14328784&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F545019170%2Fsegments%2F13145800038' data-trigger='focus'  title='Top 5 forsøk'>00:15:23</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Syvertsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3364585&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F675355864%2Fsegments%2F16548721791' data-trigger='focus'  title='Top 5 forsøk'>00:15:34</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Sørensen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7163893&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F337637635%2Fsegments%2F8008885402' data-trigger='focus'  title='Top 5 forsøk'>00:15:30</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >harald</td>
                            <td  >skarpeteig</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7260469&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F661274527%2Fsegments%2F16192012786' data-trigger='focus'  title='Top 5 forsøk'>00:14:47</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Tommy</td>
                            <td  >Lid-Strand</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=123770&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80086818%2Fsegments%2F1626375091' data-trigger='focus'  title='Top 5 forsøk'>00:14:37</a> (4) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Lundell</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1042874&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698186989%2Fsegments%2F17118758849' data-trigger='focus'  title='Top 5 forsøk'>00:14:20</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Sannes</td>
                            <td  >Marthinsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2700934&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F582900118%2Fsegments%2F14174092423' data-trigger='focus'  title='Top 5 forsøk'>00:14:10</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aksel</td>
                            <td  >Overskott</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14082774&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698177663%2Fsegments%2F17118549147' data-trigger='focus'  title='Top 5 forsøk'>00:14:22</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håken</td>
                            <td  >Stark</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=424892&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80076421%2Fsegments%2F1626024927' data-trigger='focus'  title='Top 5 forsøk'>00:14:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Haakon</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3346445&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F94693365%2Fsegments%2F2004289946' data-trigger='focus'  title='Top 5 forsøk'>00:14:32</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders S.</td>
                            <td  >Heen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1383841&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80072908%2Fsegments%2F1625933798' data-trigger='focus'  title='Top 5 forsøk'>00:14:32</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor Olav</td>
                            <td  >Runde</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16015546&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753409909%2Fsegments%2F18460520002' data-trigger='focus'  title='Top 5 forsøk'>00:15:37</a> (8) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Truls</td>
                            <td  >Stangeland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14104233&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606835894%2Fsegments%2F14797379594' data-trigger='focus'  title='Top 5 forsøk'>00:15:41</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Dreyer</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=427850&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F224803121%2Fsegments%2F9752864773' data-trigger='focus'  title='Top 5 forsøk'>00:16:28</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Rosenvold</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5930671&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F182845259%2Fsegments%2F4273404512' data-trigger='focus'  title='Top 5 forsøk'>00:16:27</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars Kristian</td>
                            <td  >Solem</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9750129&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F433987711%2Fsegments%2F10437939151' data-trigger='focus'  title='Top 5 forsøk'>00:16:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Piero</td>
                            <td  >Notaro</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2577372&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F378830532%2Fsegments%2F9055260939' data-trigger='focus'  title='Top 5 forsøk'>00:19:20</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peder</td>
                            <td  >Natvig</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1123728&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F339033200%2Fsegments%2F8044935210' data-trigger='focus'  title='Top 5 forsøk'>00:16:50</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frode</td>
                            <td  >Heiestad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16765019&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F689723072%2Fsegments%2F16902266589' data-trigger='focus'  title='Top 5 forsøk'>00:16:33</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karsten</td>
                            <td  >Gerdrup</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1185375&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F320654265%2Fsegments%2F7578367489' data-trigger='focus'  title='Top 5 forsøk'>00:16:26</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5136390&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F541111272%2Fsegments%2F13047856876' data-trigger='focus'  title='Top 5 forsøk'>00:16:25</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag</td>
                            <td  >Aalvik</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6502898&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F795370732%2Fsegments%2F19428726546' data-trigger='focus'  title='Top 5 forsøk'>00:15:50</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas</td>
                            <td  >Aassved Hjort</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15081383&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F607402156%2Fsegments%2F14811855086' data-trigger='focus'  title='Top 5 forsøk'>00:15:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sturle</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4856386&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F339441770%2Fsegments%2F8057052750' data-trigger='focus'  title='Top 5 forsøk'>00:15:58</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørgen</td>
                            <td  >Tenfjord</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2124565&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F60718508%2Fsegments%2F1596121349' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars </td>
                            <td  >Wessel</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=104371&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F789110560%2Fsegments%2F19286754332' data-trigger='focus'  title='Top 5 forsøk'>00:16:22</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Amario</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15937973&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F662305229%2Fsegments%2F16216798557' data-trigger='focus'  title='Top 5 forsøk'>00:16:18</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ingvild</td>
                            <td  >Andersen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=930257&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F224666663%2Fsegments%2F5312209839' data-trigger='focus'  title='Top 5 forsøk'>00:16:57</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Lindstad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2856068&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F354379815%2Fsegments%2F8438276126' data-trigger='focus'  title='Top 5 forsøk'>00:19:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mats Ove</td>
                            <td  >Vada</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11658016&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F407559706%2Fsegments%2F9778558201' data-trigger='focus'  title='Top 5 forsøk'>00:15:31</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øistein</td>
                            <td  >Løvik</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1151768&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F359774901%2Fsegments%2F8578922241' data-trigger='focus'  title='Top 5 forsøk'>00:15:30</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Skaslien</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10392877&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F643024466%2Fsegments%2F15715436530' data-trigger='focus'  title='Top 5 forsøk'>00:15:38</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan Erik</td>
                            <td  >Gullhaug</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7657635&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F724396348%2Fsegments%2F17774015915' data-trigger='focus'  title='Top 5 forsøk'>00:15:58</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Arind</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1171503&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F293749882%2Fsegments%2F6904623439' data-trigger='focus'  title='Top 5 forsøk'>00:17:00</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Marthinsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=605634&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F223988921%2Fsegments%2F5294234510' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Otnes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=157766&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F204132485%2Fsegments%2F4810728712' data-trigger='focus'  title='Top 5 forsøk'>00:15:25</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hege</td>
                            <td  >Øwre-Johnsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=202423&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F287075828%2Fsegments%2F6737274623' data-trigger='focus'  title='Top 5 forsøk'>00:15:12</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Myklebust</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10355626&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F552813217%2Fsegments%2F13359602946' data-trigger='focus'  title='Top 5 forsøk'>00:13:48</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mads Stebekk</td>
                            <td  >Moe</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16243609&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F637591891%2Fsegments%2F15583092120' data-trigger='focus'  title='Top 5 forsøk'>00:13:37</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tore</td>
                            <td  >Stensrud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=348630&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F204132082%2Fsegments%2F4810723993' data-trigger='focus'  title='Top 5 forsøk'>00:14:16</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >andreas</td>
                            <td  >eskelund</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2643321&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F160936009%2Fsegments%2F3731488743' data-trigger='focus'  title='Top 5 forsøk'>00:14:33</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Gulliksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4441492&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F179701254%2Fsegments%2F5060858035' data-trigger='focus'  title='Top 5 forsøk'>00:14:58</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir</td>
                            <td  >Torgersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1323165&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F715031983%2Fsegments%2F17546293417' data-trigger='focus'  title='Top 5 forsøk'>00:14:47</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Runar</td>
                            <td  >Eraker</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8618461&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F331923455%2Fsegments%2F7864396740' data-trigger='focus'  title='Top 5 forsøk'>00:17:08</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >B. Rykken</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=699634&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F219373662%2Fsegments%2F5183543506' data-trigger='focus'  title='Top 5 forsøk'>00:17:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ylva</td>
                            <td  >Ekberg</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4680390&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F411656808%2Fsegments%2F9888406994' data-trigger='focus'  title='Top 5 forsøk'>00:23:39</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Skaalerud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11536007&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F530779282%2Fsegments%2F12774627125' data-trigger='focus'  title='Top 5 forsøk'>00:20:56</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thorbjørn</td>
                            <td  >Skamo</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10436824&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F454688805%2Fsegments%2F10928729475' data-trigger='focus'  title='Top 5 forsøk'>00:28:31</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanne Riise</td>
                            <td  >Mæhlum</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16596509&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F715235582%2Fsegments%2F17551485948' data-trigger='focus'  title='Top 5 forsøk'>00:29:06</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor-Inge</td>
                            <td  >Kristiansen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=135871&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F360836587%2Fsegments%2F8606195577' data-trigger='focus'  title='Top 5 forsøk'>01:18:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trine</td>
                            <td  >Westergaard</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2748267&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F194348690%2Fsegments%2F4571892777' data-trigger='focus'  title='Top 5 forsøk'>00:30:35</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lill Monika</td>
                            <td  >Ruud</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=772825&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F609004370%2Fsegments%2F14854438588' data-trigger='focus'  title='Top 5 forsøk'>00:20:04</a> (5) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trygve</td>
                            <td  >Veslum</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=918401&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F203549991%2Fsegments%2F4796817724' data-trigger='focus'  title='Top 5 forsøk'>00:18:51</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marthinsen</td>
                            <td  >Roger</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=552206&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F52301315%2Fsegments%2F1378960853' data-trigger='focus'  title='Top 5 forsøk'>00:17:38</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marius</td>
                            <td  >Stavenæs</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155030&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F723133257%2Fsegments%2F17740873284' data-trigger='focus'  title='Top 5 forsøk'>00:17:25</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marit</td>
                            <td  >Vala</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2919058&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F412414558%2Fsegments%2F9907863668' data-trigger='focus'  title='Top 5 forsøk'>00:18:38</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tom</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=484461&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F389383341%2Fsegments%2F9319521518' data-trigger='focus'  title='Top 5 forsøk'>00:18:42</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristine</td>
                            <td  >Larsen</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4488530&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707185763%2Fsegments%2F17346562779' data-trigger='focus'  title='Top 5 forsøk'>00:18:43</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørn</td>
                            <td  >Øveraas</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=395503&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F408169601%2Fsegments%2F9795143721' data-trigger='focus'  title='Top 5 forsøk'>00:13:21</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Edvard</td>
                            <td  >Dyb</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10614836&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F709853645%2Fsegments%2F17422757937' data-trigger='focus'  title='Top 5 forsøk'>00:12:55</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Haugberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=611017&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F181094983%2Fsegments%2F4233882533' data-trigger='focus'  title='Top 5 forsøk'>00:21:36</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Audun</td>
                            <td  >Solli</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6376726&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F676250011%2Fsegments%2F16574149837' data-trigger='focus'  title='Top 5 forsøk'>00:21:31</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole André</td>
                            <td  >Hagen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1105650&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F358725732%2Fsegments%2F8545047523' data-trigger='focus'  title='Top 5 forsøk'>00:21:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Stensrud</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7440585&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F353048875%2Fsegments%2F8400078506' data-trigger='focus'  title='Top 5 forsøk'>00:22:00</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henning</td>
                            <td  >Lauridsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1160094&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566428205%2Fsegments%2F13729589688' data-trigger='focus'  title='Top 5 forsøk'>00:22:33</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >tonje</td>
                            <td  >haugberg</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2763906&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606878952%2Fsegments%2F14798581115' data-trigger='focus'  title='Top 5 forsøk'>00:22:02</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor</td>
                            <td  >Strøm</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574229&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F568717828%2Fsegments%2F13791368554' data-trigger='focus'  title='Top 5 forsøk'>00:20:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørnar</td>
                            <td  >Hjelmevold</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12834109&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F616648756%2Fsegments%2F15050350557' data-trigger='focus'  title='Top 5 forsøk'>00:20:45</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Røsand</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10901714&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F582862332%2Fsegments%2F14173120089' data-trigger='focus'  title='Top 5 forsøk'>00:14:05</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øystein</td>
                            <td  >Urke</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6421660&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F647771560%2Fsegments%2F15841230557' data-trigger='focus'  title='Top 5 forsøk'>00:19:42</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aili Kristina</td>
                            <td  >Hannisdal</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8315802&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F387791918%2Fsegments%2F9279934901' data-trigger='focus'  title='Top 5 forsøk'>00:19:47</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Jernberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=552774&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305474324%2Fsegments%2F7195427254' data-trigger='focus'  title='Top 5 forsøk'>00:20:06</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thine Wilkens</td>
                            <td  >Jernberg</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=870919&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305476486%2Fsegments%2F7195491134' data-trigger='focus'  title='Top 5 forsøk'>00:20:30</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje V.</td>
                            <td  >Fordal</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2578821&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F200772656%2Fsegments%2F4732452099' data-trigger='focus'  title='Top 5 forsøk'>00:20:12</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ann kristin</td>
                            <td  >knutsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1273662&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F149007165%2Fsegments%2F3421126361' data-trigger='focus'  title='Top 5 forsøk'>00:23:23</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hugo</td>
                            <td  >Moen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=437146&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F98237055%2Fsegments%2F2096160419' data-trigger='focus'  title='Top 5 forsøk'>00:23:46</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Aune</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=699591&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F386870844%2Fsegments%2F10548775594' data-trigger='focus'  title='Top 5 forsøk'>00:10:11</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Magnus</td>
                            <td  >Aulie</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2497097&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F221922245%2Fsegments%2F5246998469' data-trigger='focus'  title='Top 5 forsøk'>00:32:29</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas Morgan</td>
                            <td  >Knutsen</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9890722&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F404208350%2Fsegments%2F9690549308' data-trigger='focus'  title='Top 5 forsøk'>00:10:16</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simen</td>
                            <td  >Eid</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1105665&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F618614793%2Fsegments%2F15094742277' data-trigger='focus'  title='Top 5 forsøk'>00:11:09</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Løvik</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=65819&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F294357964%2Fsegments%2F6918888336' data-trigger='focus'  title='Top 5 forsøk'>00:12:36</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian Stadsøy</td>
                            <td  >Grjotheim</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=853049&sid=4917545&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F679696327%2Fsegments%2F16657184898' data-trigger='focus'  title='Top 5 forsøk'>00:11:46</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Haugros</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4942181&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F454991536%2Fsegments%2F10936649368' data-trigger='focus'  title='Top 5 forsøk'>00:29:25</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mads</td>
                            <td  >Gulbrandsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2940291&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F315795837%2Fsegments%2F7459194791' data-trigger='focus'  title='Top 5 forsøk'>00:28:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Edle</td>
                            <td  >Frandsen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5524424&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F330699772%2Fsegments%2F7835073082' data-trigger='focus'  title='Top 5 forsøk'>00:23:55</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eirik</td>
                            <td  >Tandrevold</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=935095&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F218228298%2Fsegments%2F5154636410' data-trigger='focus'  title='Top 5 forsøk'>00:23:54</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John Harald</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15321996&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746356795%2Fsegments%2F18298700110' data-trigger='focus'  title='Top 5 forsøk'>00:26:46</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Odberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10895533&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F739441204%2Fsegments%2F18135968930' data-trigger='focus'  title='Top 5 forsøk'>00:27:04</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ingrid</td>
                            <td  >lunde</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5556925&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F292925635%2Fsegments%2F6883189604' data-trigger='focus'  title='Top 5 forsøk'>00:27:50</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Strøm</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5243861&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F453437306%2Fsegments%2F10898671216' data-trigger='focus'  title='Top 5 forsøk'>00:19:37</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cato</td>
                            <td  >Rokne</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=118931&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80271692%2Fsegments%2F3150804981' data-trigger='focus'  title='Top 5 forsøk'>00:12:54</a> (8) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tom-Ole</td>
                            <td  >Løvås</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=394023&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F55510974%2Fsegments%2F1011929566' data-trigger='focus'  title='Top 5 forsøk'>00:11:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørn Arne</td>
                            <td  >Sørslett</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6900993&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305105653%2Fsegments%2F7184652585' data-trigger='focus'  title='Top 5 forsøk'>00:14:33</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Daniel</td>
                            <td  >Carlsson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2061490&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746182835%2Fsegments%2F18294584441' data-trigger='focus'  title='Top 5 forsøk'>00:14:47</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Robert</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13443803&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F630044558%2Fsegments%2F15391242790' data-trigger='focus'  title='Top 5 forsøk'>00:14:49</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olav Andre</td>
                            <td  >Braaten</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=681347&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423155842%2Fsegments%2F10180802031' data-trigger='focus'  title='Top 5 forsøk'>00:10:58</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >gloria</td>
                            <td  >vinstedt</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3905315&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F353654053%2Fsegments%2F8417038426' data-trigger='focus'  title='Top 5 forsøk'>00:14:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torgeir</td>
                            <td  >Hamre</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11143701&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F406262202%2Fsegments%2F9745806781' data-trigger='focus'  title='Top 5 forsøk'>00:14:32</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Musdalslien</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7111945&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583322888%2Fsegments%2F14186156716' data-trigger='focus'  title='Top 5 forsøk'>00:14:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christophe</td>
                            <td  >Pons</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8722283&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759331511%2Fsegments%2F18598419658' data-trigger='focus'  title='Top 5 forsøk'>00:14:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øyvind</td>
                            <td  >Hagen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3377007&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F190617036%2Fsegments%2F4477324210' data-trigger='focus'  title='Top 5 forsøk'>00:14:00</a> (13) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øistein</td>
                            <td  >Olsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2695133&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F233885471%2Fsegments%2F5515329142' data-trigger='focus'  title='Top 5 forsøk'>00:14:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kim</td>
                            <td  >Berg-Olsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3212323&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211422940%2Fsegments%2F4988804542' data-trigger='focus'  title='Top 5 forsøk'>00:14:21</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ola Grønning</td>
                            <td  >Bustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=173233&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423122592%2Fsegments%2F10180000084' data-trigger='focus'  title='Top 5 forsøk'>00:11:04</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >T J</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2328240&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F638611997%2Fsegments%2F15606255976' data-trigger='focus'  title='Top 5 forsøk'>00:14:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjersti Fransson</td>
                            <td  >Leiksett</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5853334&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F623710398%2Fsegments%2F15228081887' data-trigger='focus'  title='Top 5 forsøk'>00:15:10</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Helge</td>
                            <td  >Langen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2448822&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746897712%2Fsegments%2F18311518888' data-trigger='focus'  title='Top 5 forsøk'>00:15:49</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14615007&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759448038%2Fsegments%2F18601009194' data-trigger='focus'  title='Top 5 forsøk'>00:10:45</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nils Arne</td>
                            <td  >Kværnhaug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8723905&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F312342189%2Fsegments%2F7368495040' data-trigger='focus'  title='Top 5 forsøk'>00:15:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Alejandro</td>
                            <td  >Prados</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1343679&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F597936184%2Fsegments%2F14563329156' data-trigger='focus'  title='Top 5 forsøk'>00:15:57</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gunnar</td>
                            <td  >Bjørndal-Riis</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=402921&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F447807764%2Fsegments%2F10763529787' data-trigger='focus'  title='Top 5 forsøk'>00:16:22</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >micke</td>
                            <td  >dahlberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2604657&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F575996563%2Fsegments%2F13982268705' data-trigger='focus'  title='Top 5 forsøk'>00:16:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Joar</td>
                            <td  >Brørs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2314182&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F91631282%2Fsegments%2F1921985460' data-trigger='focus'  title='Top 5 forsøk'>00:15:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mona</td>
                            <td  >Skjørtorp</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11494472&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F677293065%2Fsegments%2F16600127207' data-trigger='focus'  title='Top 5 forsøk'>00:15:23</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elisabeth</td>
                            <td  >Solum</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=637051&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F306943701%2Fsegments%2F7235946206' data-trigger='focus'  title='Top 5 forsøk'>00:15:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kenneth</td>
                            <td  >Breen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6413243&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F195000477%2Fsegments%2F4588481421' data-trigger='focus'  title='Top 5 forsøk'>00:15:10</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Brørs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155564&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759330105%2Fsegments%2F18598387073' data-trigger='focus'  title='Top 5 forsøk'>00:10:51</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegar</td>
                            <td  >Sandvik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=435318&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F457069133%2Fsegments%2F10990703873' data-trigger='focus'  title='Top 5 forsøk'>00:15:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars Philip</td>
                            <td  >Olaussen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10714296&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F589490351%2Fsegments%2F14344271845' data-trigger='focus'  title='Top 5 forsøk'>00:15:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Neil</td>
                            <td  >Dryland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2165546&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F373429859%2Fsegments%2F8921936267' data-trigger='focus'  title='Top 5 forsøk'>00:13:57</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >hanne</td>
                            <td  >blomfeldt</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2161116&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759360895%2Fsegments%2F18599096537' data-trigger='focus'  title='Top 5 forsøk'>00:13:57</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne Olav</td>
                            <td  >Sunde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=333695&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F180945437%2Fsegments%2F4230175549' data-trigger='focus'  title='Top 5 forsøk'>00:12:31</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sondre</td>
                            <td  >Sveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9931424&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F739065094%2Fsegments%2F18125570534' data-trigger='focus'  title='Top 5 forsøk'>00:12:31</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne </td>
                            <td  >Hatlen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=119316&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F209281672%2Fsegments%2F4937062978' data-trigger='focus'  title='Top 5 forsøk'>00:12:31</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rune</td>
                            <td  >Sørheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3213004&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F421969567%2Fsegments%2F10161911240' data-trigger='focus'  title='Top 5 forsøk'>00:12:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Carlsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8877282&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F615350417%2Fsegments%2F15019719974' data-trigger='focus'  title='Top 5 forsøk'>00:11:27</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sven</td>
                            <td  >Danielsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5924735&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F176397222%2Fsegments%2F4117731307' data-trigger='focus'  title='Top 5 forsøk'>00:12:38</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut</td>
                            <td  >Nandrup</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8023828&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F671339517%2Fsegments%2F16444313090' data-trigger='focus'  title='Top 5 forsøk'>00:12:18</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Erstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=109783&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F572731006%2Fsegments%2F13893095683' data-trigger='focus'  title='Top 5 forsøk'>00:12:12</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Kallevig</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=469613&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F66694452%2Fsegments%2F1278952411' data-trigger='focus'  title='Top 5 forsøk'>00:11:59</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Boymo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=548143&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593257242%2Fsegments%2F14447633507' data-trigger='focus'  title='Top 5 forsøk'>00:11:58</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erlend</td>
                            <td  >Angelo</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3227864&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593295120%2Fsegments%2F14448628314' data-trigger='focus'  title='Top 5 forsøk'>00:11:28</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jacob</td>
                            <td  >Jacobsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389620&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759394427%2Fsegments%2F18599841288' data-trigger='focus'  title='Top 5 forsøk'>00:12:09</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Truls</td>
                            <td  >Wagener</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1514725&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F91414132%2Fsegments%2F1915618491' data-trigger='focus'  title='Top 5 forsøk'>00:12:09</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trygve</td>
                            <td  >Westrum</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13591278&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F694552258%2Fsegments%2F17029592091' data-trigger='focus'  title='Top 5 forsøk'>00:12:46</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Nylund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5013973&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F622538192%2Fsegments%2F15201097970' data-trigger='focus'  title='Top 5 forsøk'>00:11:25</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peter</td>
                            <td  >Laskowski</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2336194&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759419843%2Fsegments%2F18600404018' data-trigger='focus'  title='Top 5 forsøk'>00:13:16</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >morten</td>
                            <td  >storli</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2405543&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F184098544%2Fsegments%2F4307360465' data-trigger='focus'  title='Top 5 forsøk'>00:13:15</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1074594&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F225566987%2Fsegments%2F5331551376' data-trigger='focus'  title='Top 5 forsøk'>00:13:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sigrid</td>
                            <td  >Oftebro</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2625489&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593209969%2Fsegments%2F14446398044' data-trigger='focus'  title='Top 5 forsøk'>00:11:14</a> (33) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >B</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=660741&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573936414%2Fsegments%2F13922189772' data-trigger='focus'  title='Top 5 forsøk'>00:13:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Børge</td>
                            <td  >Sollie</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=799839&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F66003366%2Fsegments%2F1262499230' data-trigger='focus'  title='Top 5 forsøk'>00:13:33</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Zipp</td>
                            <td  >303</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=669501&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F741689555%2Fsegments%2F18186980479' data-trigger='focus'  title='Top 5 forsøk'>00:13:12</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Egil</td>
                            <td  >Gjerde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1863618&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F194809621%2Fsegments%2F4584001704' data-trigger='focus'  title='Top 5 forsøk'>00:13:07</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjørnar</td>
                            <td  >Haugane</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2423795&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760351033%2Fsegments%2F18623971448' data-trigger='focus'  title='Top 5 forsøk'>00:12:57</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag</td>
                            <td  >Standal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=341974&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F7358526%2Fsegments%2F137886656' data-trigger='focus'  title='Top 5 forsøk'>00:12:52</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Yngve</td>
                            <td  >Angelo</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11991420&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F426755848%2Fsegments%2F10269120221' data-trigger='focus'  title='Top 5 forsøk'>00:12:58</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=398890&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F311385537%2Fsegments%2F7345813349' data-trigger='focus'  title='Top 5 forsøk'>00:13:01</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Bergstrøm</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1741609&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F392284415%2Fsegments%2F9399547376' data-trigger='focus'  title='Top 5 forsøk'>00:13:06</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steffen</td>
                            <td  >Kvisler</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2586836&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F665271734%2Fsegments%2F16289795707' data-trigger='focus'  title='Top 5 forsøk'>00:16:26</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Linda</td>
                            <td  >Jacobsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5006374&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F283314818%2Fsegments%2F6672178107' data-trigger='focus'  title='Top 5 forsøk'>00:16:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kolbjørn</td>
                            <td  >Vogt</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15823847&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759354502%2Fsegments%2F18598954952' data-trigger='focus'  title='Top 5 forsøk'>00:26:09</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Liestøl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2217971&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F666231073%2Fsegments%2F16313670246' data-trigger='focus'  title='Top 5 forsøk'>00:25:23</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Toril</td>
                            <td  >Sandvold</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3246960&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F661814928%2Fsegments%2F16207156662' data-trigger='focus'  title='Top 5 forsøk'>00:27:12</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag-Inge</td>
                            <td  >Flatraaker</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3276811&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659811650%2Fsegments%2F16158492501' data-trigger='focus'  title='Top 5 forsøk'>00:27:28</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans Inge</td>
                            <td  >Holtet</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15098008&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581295509%2Fsegments%2F14130267903' data-trigger='focus'  title='Top 5 forsøk'>00:28:40</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tommy</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1121622&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211454498%2Fsegments%2F4989741583' data-trigger='focus'  title='Top 5 forsøk'>00:28:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erling</td>
                            <td  >Torseth</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=948175&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F377416773%2Fsegments%2F9023458549' data-trigger='focus'  title='Top 5 forsøk'>00:25:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sebastian</td>
                            <td  >Torgersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3374139&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F145570003%2Fsegments%2F3331332958' data-trigger='focus'  title='Top 5 forsøk'>00:10:04</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mari</td>
                            <td  >Blandhol</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4793565&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F200495077%2Fsegments%2F4726820874' data-trigger='focus'  title='Top 5 forsøk'>00:21:26</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Håkon</td>
                            <td  >Madland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6622673&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F419896920%2Fsegments%2F10102767758' data-trigger='focus'  title='Top 5 forsøk'>00:21:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Finn</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=469281&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F23605503%2Fsegments%2F421440046' data-trigger='focus'  title='Top 5 forsøk'>00:21:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roald</td>
                            <td  >Ramsdal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1439253&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F492777090%2Fsegments%2F11828585380' data-trigger='focus'  title='Top 5 forsøk'>00:22:19</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Julie</td>
                            <td  >Gjerding</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9039869&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F551345351%2Fsegments%2F13321203364' data-trigger='focus'  title='Top 5 forsøk'>00:23:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anita</td>
                            <td  >Lilloe</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6772985&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F320985502%2Fsegments%2F7588212342' data-trigger='focus'  title='Top 5 forsøk'>00:29:39</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kim</td>
                            <td  >Hamli</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6059741&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F314071886%2Fsegments%2F7414133257' data-trigger='focus'  title='Top 5 forsøk'>00:30:48</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Arild</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1178726&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F61351532%2Fsegments%2F1596121336' data-trigger='focus'  title='Top 5 forsøk'>00:13:23</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ola Marius</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1384213&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F454914619%2Fsegments%2F10934414707' data-trigger='focus'  title='Top 5 forsøk'>00:12:59</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanne</td>
                            <td  >Kristiansen-Haugland</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12726019&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F658491795%2Fsegments%2F16118575891' data-trigger='focus'  title='Top 5 forsøk'>00:13:28</a> (7) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ludvig</td>
                            <td  >Rødnes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12825924&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F789748438%2Fsegments%2F19300920397' data-trigger='focus'  title='Top 5 forsøk'>00:13:28</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian K</td>
                            <td  >Elton</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5017919&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F337065188%2Fsegments%2F7994857763' data-trigger='focus'  title='Top 5 forsøk'>00:13:49</a> (9) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lene</td>
                            <td  >Håskjold</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=597118&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F188093386%2Fsegments%2F4415330739' data-trigger='focus'  title='Top 5 forsøk'>00:13:46</a> (7) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jørgen</td>
                            <td  >Saxegaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1098098&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F90487860%2Fsegments%2F1893645069' data-trigger='focus'  title='Top 5 forsøk'>00:11:54</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gløer</td>
                            <td  >Winsvold</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1445503&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F405119987%2Fsegments%2F9715323262' data-trigger='focus'  title='Top 5 forsøk'>00:12:47</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Birkenes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10996304&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F686343863%2Fsegments%2F16823498592' data-trigger='focus'  title='Top 5 forsøk'>00:10:50</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pedram</td>
                            <td  >Fard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14000364&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F543260518%2Fsegments%2F13100336695' data-trigger='focus'  title='Top 5 forsøk'>00:31:18</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dennis</td>
                            <td  >Rahbek</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2517924&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F65865204%2Fsegments%2F1596299311' data-trigger='focus'  title='Top 5 forsøk'>00:11:58</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Ihler</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5914488&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F421754473%2Fsegments%2F10149206713' data-trigger='focus'  title='Top 5 forsøk'>00:12:44</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Sundnes</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1123816&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793208918%2Fsegments%2F19381123533' data-trigger='focus'  title='Top 5 forsøk'>00:12:45</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten T.</td>
                            <td  >Vaagsbø</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=355867&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423155810%2Fsegments%2F10180801299' data-trigger='focus'  title='Top 5 forsøk'>00:10:05</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astri Helen</td>
                            <td  >Madland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11939728&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423731166%2Fsegments%2F10195625197' data-trigger='focus'  title='Top 5 forsøk'>00:20:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kathrine</td>
                            <td  >Lie</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6145567&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423752016%2Fsegments%2F10196140442' data-trigger='focus'  title='Top 5 forsøk'>00:17:44</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Monsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8113871&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F400467674%2Fsegments%2F9594221231' data-trigger='focus'  title='Top 5 forsøk'>00:17:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >johan</td>
                            <td  >holmgren</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10610866&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F583877264%2Fsegments%2F14202820749' data-trigger='focus'  title='Top 5 forsøk'>00:17:46</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Janne</td>
                            <td  >Mäntyniemi</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12050732&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F440848767%2Fsegments%2F10596392285' data-trigger='focus'  title='Top 5 forsøk'>00:18:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nicolas A.</td>
                            <td  >Wærenskjold</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=980848&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F558471303%2Fsegments%2F13515563311' data-trigger='focus'  title='Top 5 forsøk'>00:18:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rich</td>
                            <td  >Malcolm</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7875050&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F429426490%2Fsegments%2F10333163788' data-trigger='focus'  title='Top 5 forsøk'>00:18:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >sveinung</td>
                            <td  >Grov</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2707784&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F91796255%2Fsegments%2F1926353173' data-trigger='focus'  title='Top 5 forsøk'>00:17:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6250970&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F592000510%2Fsegments%2F14414216683' data-trigger='focus'  title='Top 5 forsøk'>00:17:09</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henning</td>
                            <td  >Olsrud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=118598&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F216278828%2Fsegments%2F5108113846' data-trigger='focus'  title='Top 5 forsøk'>00:16:38</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Øyvind</td>
                            <td  >Sætre</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=995542&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F174884629%2Fsegments%2F4080430265' data-trigger='focus'  title='Top 5 forsøk'>00:16:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan Magnus</td>
                            <td  >Brevik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6585642&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F562872501%2Fsegments%2F13638724701' data-trigger='focus'  title='Top 5 forsøk'>00:16:40</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Paivarinne</td>
                            <td  >Markus</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3872911&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F353560430%2Fsegments%2F8414174949' data-trigger='focus'  title='Top 5 forsøk'>00:16:55</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Beate</td>
                            <td  >Elvebakk</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12871902&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F568078843%2Fsegments%2F13773639280' data-trigger='focus'  title='Top 5 forsøk'>00:17:05</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans Kristian</td>
                            <td  >Bekkevard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=607714&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F59768920%2Fsegments%2F1113729288' data-trigger='focus'  title='Top 5 forsøk'>00:18:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Arenberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2818150&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F96811952%2Fsegments%2F2059634441' data-trigger='focus'  title='Top 5 forsøk'>00:18:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jo Simen</td>
                            <td  >Skog</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6943241&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F476459791%2Fsegments%2F11429880463' data-trigger='focus'  title='Top 5 forsøk'>00:20:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Joakim</td>
                            <td  >Gren</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=128114&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F415777021%2Fsegments%2F9997905216' data-trigger='focus'  title='Top 5 forsøk'>00:19:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Snellingen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14571410&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F696746704%2Fsegments%2F17082239689' data-trigger='focus'  title='Top 5 forsøk'>00:20:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trine</td>
                            <td  >Seeberg</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=811667&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F410722424%2Fsegments%2F9863841959' data-trigger='focus'  title='Top 5 forsøk'>00:20:01</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karl</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5130478&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F305465706%2Fsegments%2F7195190086' data-trigger='focus'  title='Top 5 forsøk'>00:20:09</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simen</td>
                            <td  >Seeberg-Rommetveit</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10476146&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F383546573%2Fsegments%2F9165525512' data-trigger='focus'  title='Top 5 forsøk'>00:20:08</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Hæhre</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=114550&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F89826464%2Fsegments%2F1875442363' data-trigger='focus'  title='Top 5 forsøk'>00:10:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas </td>
                            <td  >Wang</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=71263&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F358305145%2Fsegments%2F8532939577' data-trigger='focus'  title='Top 5 forsøk'>00:18:57</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Ilseng</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3210318&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759421875%2Fsegments%2F18600448998' data-trigger='focus'  title='Top 5 forsøk'>00:10:17</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marisa</td>
                            <td  >Exposito</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4456588&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F433101857%2Fsegments%2F10426262164' data-trigger='focus'  title='Top 5 forsøk'>00:18:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Daniel</td>
                            <td  >Aarum</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2054230&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F373240613%2Fsegments%2F8917587265' data-trigger='focus'  title='Top 5 forsøk'>00:18:33</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Engholm</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1015085&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F619459343%2Fsegments%2F15113628251' data-trigger='focus'  title='Top 5 forsøk'>00:18:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >André</td>
                            <td  >Fjeldhammer</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=135709&sid=1282927&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F99296381%2Fsegments%2F2122877386' data-trigger='focus'  title='Top 5 forsøk'>00:18:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Helge</td>
                            <td  >Løberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2714516&sid=5331533&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F188248216%2Fsegments%2F4419638792' data-trigger='focus'  title='Top 5 forsøk'>00:13:55</a> (3) </td><td  class='desktop'>-</td><td >-</td>
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

