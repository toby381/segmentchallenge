
<!DOCTYPE html>
<html lang="nb">
    <head>
        <meta property="og:title" content="Rundvann-trippelen - SegmentChallenge" />
        <meta property="fb:app_id" content="1559419401032598" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://localhost:8888/segmentchallenge/challenge/rundvann-trippelen" />
        <meta property="og:image" content="http://localhost:8888/segmentchallenge/segmentchallenge.png" />
        <meta property="og:description" content="3 av de mest populÃ¦re stiene opp til Rundvann (ved Ã˜stmarkskapellet)" />
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

   
        
        <title>Rundvann-trippelen - SegmentChallenge - SegmentChallenge</title>
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
    <a class="navbar-brand" href="/segmentchallenge/">
        <img src="/segmentchallenge/segmentchallenge.png" style="width:50px;display:inline;"/> 
        SegmentChallenge
    </a>

    <!-- Links -->
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a  class="nav-link"  href="/segmentchallenge/">Oversikt</a> 
        </li>
    </ul>
    <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item">
            
        </li>
                        <li class="nav-item">
                                <a href="https://www.strava.com/oauth/authorize?client_id=3493&redirect_uri=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Findex.php&response_type=code&approval_prompt=auto"><img src="/segmentchallenge/LogInWithStrava.png" /></a>
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
<script>document.body.style.backgroundImage = 'url(/segmentchallenge/images/rundvann.jpg)';</script>
    <!-- ****************************************************** -->
    <!-- ********************  INFOBOKSER ********************** -->
    <!-- ****************************************************** -->
<header>
    <div style="margin-top: 150px;margin-bottom: 50px;">
    <h1 style="float:left;">Rundvann-trippelen</h1>
    <div  style="margin: 10 0 0 20px;float:left;" class="fb-share-button" data-href="http://localhost:8888/segmentchallenge/challenge/rundvann-trippelen" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8888%2Fsegmentchallenge%2Fchallenge%2Frundvann-trippelen&amp;src=sdkpreparse">Del</a></div>

    <div style="font-size:16px;margin-top:-50px;margin-bottom:50px; clear:both;">
        <span class="tag tag-info">Totallengde: 4934 meter</span>
        <span class="tag tag-info">Høydemeter: 243 meter</span>
        
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
        <a  target="_blank" href="https://www.strava.com/segments/1598642">Vannrenseanlegget - Rundvann (løping) 2</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            1799 m | 95 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map1598642');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map1598642"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map1598642',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/1598642.gpx';
                               
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
                    CR: Sigve Vågsnes: 00:07:48 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/6800132">Grønmo - Rundvann</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            1088 m | 70 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map6800132');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map6800132"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map6800132',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/6800132.gpx';
                               
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
                    CR: Knut Aasheim: 00:06:04 | Du: <i>ikke logget inn</i>                   </p>
  </div>
</div><p></p>
       
        
        
   
<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/6931204">Fjellstadputten - Rundvann</a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            2047 m | 78 hm | Forsøk siste 24 t: 0        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map6931204');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map6931204"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map6931204',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '/gpx/6931204.gpx';
                               
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
                    CR: Torbjørn Høvde: 00:09:51 | Du: <i>ikke logget inn</i>                   </p>
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
                 
                    
   
    <script>var xhr = $.ajax({url: '/cache/rundvann-trippelen.json',success: function(response) {var d = new Date( xhr.getResponseHeader('Last-Modified') );var datetext=d.getHours()+':'+d.getMinutes();$('#tid').html('Sist oppdatert: ' + datetext);}});</script>        <table id="effort" class="display" cellspacing="0" width="100%">
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
                                       <th style="font-size:10px;font-weight:lighter;">Vannrenseanlegget - Rundvann (løping) 2</th>
                                        <th style="font-size:10px;font-weight:lighter;">Grønmo - Rundvann</th>
                                        <th style="font-size:10px;font-weight:lighter;">Fjellstadputten - Rundvann</th>
                                        
                </tr>  
            </thead>
            <tbody>
            <tr>
                            <td  >1</td>
                            <td  >TorbjÃ¸rn</td>
                            <td  >HÃ¸vde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F197658691%2Fsegments%2F4656318473' data-trigger='focus'  title='Top 5 forsøk'>00:09:38</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F136831906%2Fsegments%2F3099409181' data-trigger='focus'  title='Top 5 forsøk'>00:06:15</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F143017330%2Fsegments%2F3266174533' data-trigger='focus'  title='Top 5 forsøk'>00:09:51</a> (40) </td><td >00:25:44</td>
                        </tr><tr>
                            <td  >2</td>
                            <td  >Roar</td>
                            <td  >HeidenstrÃ¸m</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4285007&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F292221285%2Fsegments%2F6864496505' data-trigger='focus'  title='Top 5 forsøk'>00:11:42</a> (52) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4285007&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F136093764%2Fsegments%2F3082600627' data-trigger='focus'  title='Top 5 forsøk'>00:06:29</a> (15) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4285007&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F293132159%2Fsegments%2F6888318446' data-trigger='focus'  title='Top 5 forsøk'>00:17:37</a> (1) </td><td >00:35:48</td>
                        </tr><tr>
                            <td  >3</td>
                            <td  >Trond Ã…ge</td>
                            <td  >Osvoll</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771682377%2Fsegments%2F18883140632' data-trigger='focus'  title='Top 5 forsøk'>00:11:02</a> (13) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F582915978%2Fsegments%2F14174530215' data-trigger='focus'  title='Top 5 forsøk'>00:15:03</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1306964&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F140753386%2Fsegments%2F3199484685' data-trigger='focus'  title='Top 5 forsøk'>00:12:50</a> (37) </td><td >00:38:55</td>
                        </tr><tr>
                            <td  >4</td>
                            <td  >Marit</td>
                            <td  >Aamdal</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5449197&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F404262358%2Fsegments%2F9692083168' data-trigger='focus'  title='Top 5 forsøk'>00:15:28</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5449197&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F163026234%2Fsegments%2F3784594100' data-trigger='focus'  title='Top 5 forsøk'>00:10:05</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5449197&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F664454695%2Fsegments%2F16268014437' data-trigger='focus'  title='Top 5 forsøk'>00:18:57</a> (1) </td><td >00:44:30</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sigve</td>
                            <td  >VÃ¥gsnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8954039&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F427381881%2Fsegments%2F10281771174' data-trigger='focus'  title='Top 5 forsøk'>00:07:48</a> (11) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8954039&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F590979016%2Fsegments%2F14383473609' data-trigger='focus'  title='Top 5 forsøk'>00:18:40</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Glenn</td>
                            <td  >JÃ¸rgensen</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12262157&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F603839732%2Fsegments%2F14717861439' data-trigger='focus'  title='Top 5 forsøk'>00:12:55</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12262157&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F640549838%2Fsegments%2F15652925831' data-trigger='focus'  title='Top 5 forsøk'>00:07:35</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjell</td>
                            <td  >Haugen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1812966&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F437239744%2Fsegments%2F10513562893' data-trigger='focus'  title='Top 5 forsøk'>00:13:22</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1812966&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F454958095%2Fsegments%2F10935756547' data-trigger='focus'  title='Top 5 forsøk'>00:16:32</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Olav</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=991311&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F60677273%2Fsegments%2F1135847377' data-trigger='focus'  title='Top 5 forsøk'>00:13:16</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=991311&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F60520793%2Fsegments%2F2827412318' data-trigger='focus'  title='Top 5 forsøk'>00:17:10</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sandra</td>
                            <td  >SteinbÃ¸</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6055936&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F611258442%2Fsegments%2F14908247554' data-trigger='focus'  title='Top 5 forsøk'>00:13:10</a> (13) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6055936&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F187864161%2Fsegments%2F4407676029' data-trigger='focus'  title='Top 5 forsøk'>00:17:31</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Carlsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8877282&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F379883882%2Fsegments%2F9080650392' data-trigger='focus'  title='Top 5 forsøk'>00:13:09</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8877282&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F437258888%2Fsegments%2F10513980690' data-trigger='focus'  title='Top 5 forsøk'>00:21:51</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Storbraten</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=807108&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731971031%2Fsegments%2F17953386416' data-trigger='focus'  title='Top 5 forsøk'>00:13:06</a> (10) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=807108&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F344432312%2Fsegments%2F8186573427' data-trigger='focus'  title='Top 5 forsøk'>00:09:33</a> (8) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=398890&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F556468042%2Fsegments%2F13466325928' data-trigger='focus'  title='Top 5 forsøk'>00:13:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=398890&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F7996535%2Fsegments%2F2827412261' data-trigger='focus'  title='Top 5 forsøk'>00:15:46</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜istein</td>
                            <td  >RÃ¸island</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6166012&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F339570819%2Fsegments%2F8061299738' data-trigger='focus'  title='Top 5 forsøk'>00:12:58</a> (10) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6166012&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F642735768%2Fsegments%2F15707868452' data-trigger='focus'  title='Top 5 forsøk'>00:08:47</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >knut</td>
                            <td  >smith-erichsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=956961&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F63234278%2Fsegments%2F1195038707' data-trigger='focus'  title='Top 5 forsøk'>00:12:26</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=956961&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F156176214%2Fsegments%2F3607154489' data-trigger='focus'  title='Top 5 forsøk'>00:07:31</a> (32) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sveinung</td>
                            <td  >Svendsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=371890&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F792224325%2Fsegments%2F19353909345' data-trigger='focus'  title='Top 5 forsøk'>00:12:40</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=371890&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F408202684%2Fsegments%2F9796276205' data-trigger='focus'  title='Top 5 forsøk'>00:08:23</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hermann</td>
                            <td  >Bruun</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F166267480%2Fsegments%2F3867379063' data-trigger='focus'  title='Top 5 forsøk'>00:12:38</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F638280546%2Fsegments%2F15597872346' data-trigger='focus'  title='Top 5 forsøk'>00:08:28</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Haakon</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=101139&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F83090597%2Fsegments%2F1695489498' data-trigger='focus'  title='Top 5 forsøk'>00:13:36</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=101139&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F24297563%2Fsegments%2F2625587114' data-trigger='focus'  title='Top 5 forsøk'>00:09:04</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eivind</td>
                            <td  >Christiansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2480345&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F374942676%2Fsegments%2F8960653787' data-trigger='focus'  title='Top 5 forsøk'>00:12:21</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2480345&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F391484405%2Fsegments%2F9377069710' data-trigger='focus'  title='Top 5 forsøk'>00:08:36</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Wigaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2368070&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F644117619%2Fsegments%2F15747486640' data-trigger='focus'  title='Top 5 forsøk'>00:12:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2368070&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F134667860%2Fsegments%2F3055290335' data-trigger='focus'  title='Top 5 forsøk'>00:16:00</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >harald</td>
                            <td  >skarpeteig</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7260469&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F346449224%2Fsegments%2F8234546739' data-trigger='focus'  title='Top 5 forsøk'>00:12:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7260469&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F540732721%2Fsegments%2F13037896073' data-trigger='focus'  title='Top 5 forsøk'>00:13:39</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13748104&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F703959118%2Fsegments%2F17265893141' data-trigger='focus'  title='Top 5 forsøk'>00:12:03</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13748104&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760292076%2Fsegments%2F18622506229' data-trigger='focus'  title='Top 5 forsøk'>00:14:18</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eivind</td>
                            <td  >SkjÃ¦rven</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2644085&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F591673743%2Fsegments%2F14404777006' data-trigger='focus'  title='Top 5 forsøk'>00:12:02</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2644085&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F134611802%2Fsegments%2F3054043955' data-trigger='focus'  title='Top 5 forsøk'>00:09:10</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Skaret</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12287335&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F472908111%2Fsegments%2F11355878058' data-trigger='focus'  title='Top 5 forsøk'>00:11:53</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12287335&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F472909636%2Fsegments%2F11355914902' data-trigger='focus'  title='Top 5 forsøk'>00:14:58</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sebastian</td>
                            <td  >Torgersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3374139&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F618475885%2Fsegments%2F15092192992' data-trigger='focus'  title='Top 5 forsøk'>00:11:44</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3374139&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F95865031%2Fsegments%2F2625587040' data-trigger='focus'  title='Top 5 forsøk'>00:08:27</a> (4) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nicolai</td>
                            <td  >Martinsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1079668&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F298049611%2Fsegments%2F8436408450' data-trigger='focus'  title='Top 5 forsøk'>00:13:28</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1079668&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F294820647%2Fsegments%2F8436349589' data-trigger='focus'  title='Top 5 forsøk'>00:15:58</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ivind</td>
                            <td  >Ã˜rstavik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2861788&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698871252%2Fsegments%2F17136813713' data-trigger='focus'  title='Top 5 forsøk'>00:13:49</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2861788&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566100097%2Fsegments%2F13720671997' data-trigger='focus'  title='Top 5 forsøk'>00:09:09</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ingvild</td>
                            <td  >aalÃ¸kken</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=682442&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435660669%2Fsegments%2F10475540081' data-trigger='focus'  title='Top 5 forsøk'>00:13:36</a> (11) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=682442&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F373530698%2Fsegments%2F8923781278' data-trigger='focus'  title='Top 5 forsøk'>00:11:58</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >robin</td>
                            <td  >kvien-nordgaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2713998&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F136880607%2Fsegments%2F3100794027' data-trigger='focus'  title='Top 5 forsøk'>00:15:16</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2713998&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F72107016%2Fsegments%2F2625586992' data-trigger='focus'  title='Top 5 forsøk'>00:12:09</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jostein Sand</td>
                            <td  >Nilsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5794428&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F700534486%2Fsegments%2F17180905810' data-trigger='focus'  title='Top 5 forsøk'>00:10:16</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5794428&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F412439111%2Fsegments%2F9908509806' data-trigger='focus'  title='Top 5 forsøk'>00:16:31</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜yvind</td>
                            <td  >Brusevold</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=590236&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F422134460%2Fsegments%2F10157253446' data-trigger='focus'  title='Top 5 forsøk'>00:31:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=590236&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F29490865%2Fsegments%2F2827412323' data-trigger='focus'  title='Top 5 forsøk'>00:18:41</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Moslet</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2357717&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F187272982%2Fsegments%2F4384223887' data-trigger='focus'  title='Top 5 forsøk'>00:23:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2357717&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F163271736%2Fsegments%2F3793857236' data-trigger='focus'  title='Top 5 forsøk'>00:17:05</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristin</td>
                            <td  >Haraldsson</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=287314&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F9792715%2Fsegments%2F196644808' data-trigger='focus'  title='Top 5 forsøk'>00:17:48</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=287314&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F10004247%2Fsegments%2F2827412278' data-trigger='focus'  title='Top 5 forsøk'>00:20:19</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hege</td>
                            <td  >Kopp</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10867113&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F606863896%2Fsegments%2F14798168948' data-trigger='focus'  title='Top 5 forsøk'>00:17:05</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10867113&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F628754079%2Fsegments%2F15358533456' data-trigger='focus'  title='Top 5 forsøk'>01:02:55</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Riulf F.</td>
                            <td  >Rustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8338354&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F325848356%2Fsegments%2F7711884955' data-trigger='focus'  title='Top 5 forsøk'>00:15:55</a> (2) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8338354&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F336177551%2Fsegments%2F7973891447' data-trigger='focus'  title='Top 5 forsøk'>00:07:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peder</td>
                            <td  >Eriksson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2224860&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F96812808%2Fsegments%2F2061273294' data-trigger='focus'  title='Top 5 forsøk'>00:15:44</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2224860&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F107425563%2Fsegments%2F2625587082' data-trigger='focus'  title='Top 5 forsøk'>00:11:12</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >BrÃ¸rs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155564&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F600708916%2Fsegments%2F14639733881' data-trigger='focus'  title='Top 5 forsøk'>00:15:19</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155564&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608221079%2Fsegments%2F14835077814' data-trigger='focus'  title='Top 5 forsøk'>00:27:10</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sander</td>
                            <td  >Tufte</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=259882&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F278109746%2Fsegments%2F6514503919' data-trigger='focus'  title='Top 5 forsøk'>00:15:18</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=259882&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F102330717%2Fsegments%2F2892154601' data-trigger='focus'  title='Top 5 forsøk'>00:11:09</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian Steen</td>
                            <td  >Eriksen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1367733&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F384122304%2Fsegments%2F9178916342' data-trigger='focus'  title='Top 5 forsøk'>00:15:14</a> (6) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1367733&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F82551509%2Fsegments%2F2625587089' data-trigger='focus'  title='Top 5 forsøk'>00:10:02</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torgeir</td>
                            <td  >Hamre</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11143701&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F709822237%2Fsegments%2F17422135311' data-trigger='focus'  title='Top 5 forsøk'>00:11:23</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11143701&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F445386238%2Fsegments%2F10708476497' data-trigger='focus'  title='Top 5 forsøk'>00:15:40</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Patrick</td>
                            <td  >MÃ¸rk</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10943943&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F432307163%2Fsegments%2F10397274692' data-trigger='focus'  title='Top 5 forsøk'>00:15:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10943943&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F680855755%2Fsegments%2F16683921984' data-trigger='focus'  title='Top 5 forsøk'>00:18:53</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tormod</td>
                            <td  >TÃ¸rstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2402721&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F190518322%2Fsegments%2F4474989410' data-trigger='focus'  title='Top 5 forsøk'>00:14:55</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2402721&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F82546689%2Fsegments%2F2625587028' data-trigger='focus'  title='Top 5 forsøk'>00:10:11</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Maanum</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2932824&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F228837977%2Fsegments%2F5402137196' data-trigger='focus'  title='Top 5 forsøk'>00:14:54</a> (4) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2932824&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F345788353%2Fsegments%2F8220060311' data-trigger='focus'  title='Top 5 forsøk'>00:08:44</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Egil</td>
                            <td  >Sande</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7505698&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F285114780%2Fsegments%2F6688746685' data-trigger='focus'  title='Top 5 forsøk'>00:14:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7505698&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F289702292%2Fsegments%2F6802449834' data-trigger='focus'  title='Top 5 forsøk'>00:17:54</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mats</td>
                            <td  >Finsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8310788&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F554954589%2Fsegments%2F13422403029' data-trigger='focus'  title='Top 5 forsøk'>00:14:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8310788&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F680845766%2Fsegments%2F16683701000' data-trigger='focus'  title='Top 5 forsøk'>00:18:50</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >PÃ¥l</td>
                            <td  >Figenschau</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=343695&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F8842415%2Fsegments%2F196644872' data-trigger='focus'  title='Top 5 forsøk'>00:14:09</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=343695&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211322964%2Fsegments%2F4984931276' data-trigger='focus'  title='Top 5 forsøk'>00:09:47</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arve</td>
                            <td  >Kvien</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=171730&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F148616660%2Fsegments%2F3411848436' data-trigger='focus'  title='Top 5 forsøk'>00:13:59</a> (41) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=171730&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F150969710%2Fsegments%2F3472206465' data-trigger='focus'  title='Top 5 forsøk'>00:09:15</a> (5) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hallvard</td>
                            <td  >Berg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=135113&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80911551%2Fsegments%2F1649276544' data-trigger='focus'  title='Top 5 forsøk'>00:13:57</a> (18) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=135113&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F17256381%2Fsegments%2F2827412335' data-trigger='focus'  title='Top 5 forsøk'>00:35:57</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Skjerven</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=681424&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F104397386%2Fsegments%2F2256213510' data-trigger='focus'  title='Top 5 forsøk'>00:13:52</a> (1) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=681424&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F321203044%2Fsegments%2F7593011727' data-trigger='focus'  title='Top 5 forsøk'>00:08:40</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Egil</td>
                            <td  >Klokkersveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4324032&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F294883935%2Fsegments%2F6930711891' data-trigger='focus'  title='Top 5 forsøk'>00:13:52</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4324032&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F570776961%2Fsegments%2F13847429974' data-trigger='focus'  title='Top 5 forsøk'>00:17:01</a> (5) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Leif-Andre</td>
                            <td  >TrÃ¸haugen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F418640861%2Fsegments%2F10068921190' data-trigger='focus'  title='Top 5 forsøk'>00:11:36</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F63991908%2Fsegments%2F2827412298' data-trigger='focus'  title='Top 5 forsøk'>00:13:31</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elise</td>
                            <td  >Tveita</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5711246&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F571299715%2Fsegments%2F13861761530' data-trigger='focus'  title='Top 5 forsøk'>00:14:24</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5711246&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F338147935%2Fsegments%2F8021383545' data-trigger='focus'  title='Top 5 forsøk'>00:18:29</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Skaalerud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11536007&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771635136%2Fsegments%2F18882259848' data-trigger='focus'  title='Top 5 forsøk'>00:10:43</a> (13) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11536007&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F736031274%2Fsegments%2F18046337031' data-trigger='focus'  title='Top 5 forsøk'>00:07:08</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >S</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5463378&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F605757789%2Fsegments%2F14767199638' data-trigger='focus'  title='Top 5 forsøk'>00:10:31</a> (12) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5463378&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F361747973%2Fsegments%2F8629033025' data-trigger='focus'  title='Top 5 forsøk'>00:07:24</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Smenes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F151343601%2Fsegments%2F3484122701' data-trigger='focus'  title='Top 5 forsøk'>00:09:11</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2825109&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F153304776%2Fsegments%2F3533590963' data-trigger='focus'  title='Top 5 forsøk'>00:10:16</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Haug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=117564&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F62710163%2Fsegments%2F1183275359' data-trigger='focus'  title='Top 5 forsøk'>00:09:28</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=117564&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F59963005%2Fsegments%2F2827412270' data-trigger='focus'  title='Top 5 forsøk'>00:15:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Kristian</td>
                            <td  >SÃ¸rland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771656055%2Fsegments%2F18882628013' data-trigger='focus'  title='Top 5 forsøk'>00:09:04</a> (26) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F136431106%2Fsegments%2F3089633005' data-trigger='focus'  title='Top 5 forsøk'>00:09:10</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Patrik</td>
                            <td  >Paulsson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3893567&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435655502%2Fsegments%2F10475449585' data-trigger='focus'  title='Top 5 forsøk'>00:10:44</a> (3) </td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3893567&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F419392602%2Fsegments%2F10088510399' data-trigger='focus'  title='Top 5 forsøk'>00:06:36</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ola Marius</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1384213&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435683097%2Fsegments%2F10475962997' data-trigger='focus'  title='Top 5 forsøk'>00:09:36</a> (15) </td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1384213&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F32494639%2Fsegments%2F2827412301' data-trigger='focus'  title='Top 5 forsøk'>00:14:31</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arild</td>
                            <td  >Tveita</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5634150&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F329076961%2Fsegments%2F7788202535' data-trigger='focus'  title='Top 5 forsøk'>00:16:11</a> (14) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Line Maria Solberg</td>
                            <td  >Martinsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2868573&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F195885811%2Fsegments%2F4609434712' data-trigger='focus'  title='Top 5 forsøk'>00:16:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rolf-Eric</td>
                            <td  >Birknes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=810991&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F101970755%2Fsegments%2F2193768878' data-trigger='focus'  title='Top 5 forsøk'>00:16:08</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanne</td>
                            <td  >Stabell</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=893557&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F364288489%2Fsegments%2F8692025050' data-trigger='focus'  title='Top 5 forsøk'>00:16:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marius</td>
                            <td  >Tandberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7120356&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F674408666%2Fsegments%2F16521200462' data-trigger='focus'  title='Top 5 forsøk'>00:16:06</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Michael Just</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5376270&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F666273970%2Fsegments%2F16315041354' data-trigger='focus'  title='Top 5 forsøk'>00:16:03</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ingrid</td>
                            <td  >V</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2190045&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F60427998%2Fsegments%2F1129305160' data-trigger='focus'  title='Top 5 forsøk'>00:16:03</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >PÃ¥l Thomas</td>
                            <td  >Kvil</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2152200&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F561846688%2Fsegments%2F13608556251' data-trigger='focus'  title='Top 5 forsøk'>00:16:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans-Gunnar</td>
                            <td  >Grepperud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2663500&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F91637838%2Fsegments%2F1922112964' data-trigger='focus'  title='Top 5 forsøk'>00:16:12</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bastien</td>
                            <td  >Barriere</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6528018&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F302059927%2Fsegments%2F7109723956' data-trigger='focus'  title='Top 5 forsøk'>00:16:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mikael</td>
                            <td  >Nyberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5933915&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F667851359%2Fsegments%2F16360076149' data-trigger='focus'  title='Top 5 forsøk'>00:11:11</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Inger Marie</td>
                            <td  >Skaug</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7249527&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F424348201%2Fsegments%2F10212826923' data-trigger='focus'  title='Top 5 forsøk'>00:16:02</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Sagvolden</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4039923&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F448775381%2Fsegments%2F10786784935' data-trigger='focus'  title='Top 5 forsøk'>00:15:55</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anette</td>
                            <td  >Smenes</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4775690&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F184134952%2Fsegments%2F4308286414' data-trigger='focus'  title='Top 5 forsøk'>00:15:53</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein Gjessing</td>
                            <td  >Karlsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8617856&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F292712140%2Fsegments%2F6877610961' data-trigger='focus'  title='Top 5 forsøk'>00:15:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Busengdal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6636330&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F338306938%2Fsegments%2F8024863337' data-trigger='focus'  title='Top 5 forsøk'>00:15:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >simen</td>
                            <td  >aabÃ¸e</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2053529&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F208826730%2Fsegments%2F4922879259' data-trigger='focus'  title='Top 5 forsøk'>00:15:49</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Isabel</td>
                            <td  >Karlsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12054271&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F440236304%2Fsegments%2F10579459360' data-trigger='focus'  title='Top 5 forsøk'>00:15:49</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Felix</td>
                            <td  >Reinemo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1181479&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F697014349%2Fsegments%2F17088526504' data-trigger='focus'  title='Top 5 forsøk'>00:15:48</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >PÃ¥l</td>
                            <td  >Saga</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2817557&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F447321776%2Fsegments%2F10752594846' data-trigger='focus'  title='Top 5 forsøk'>00:15:48</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erlend</td>
                            <td  >TÃ¸rstad</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2627893&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211826789%2Fsegments%2F5001825679' data-trigger='focus'  title='Top 5 forsøk'>00:15:47</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Guro</td>
                            <td  >Halsa Bakken</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1722854&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F379886456%2Fsegments%2F9080720056' data-trigger='focus'  title='Top 5 forsøk'>00:16:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stig</td>
                            <td  >Bjerke</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10266213&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F690799912%2Fsegments%2F16930064148' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Solve</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11666592&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F650383124%2Fsegments%2F15906390304' data-trigger='focus'  title='Top 5 forsøk'>00:16:13</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Merete</td>
                            <td  >Ihler</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9611895&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F361974975%2Fsegments%2F8634060656' data-trigger='focus'  title='Top 5 forsøk'>00:16:54</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ove</td>
                            <td  >Sparengen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2710181&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F149507922%2Fsegments%2F3432319294' data-trigger='focus'  title='Top 5 forsøk'>00:17:17</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fanny </td>
                            <td  >Chaba</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1663111&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F154563429%2Fsegments%2F3566431648' data-trigger='focus'  title='Top 5 forsøk'>00:17:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik N.</td>
                            <td  >Resell</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=972735&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F26191305%2Fsegments%2F468589599' data-trigger='focus'  title='Top 5 forsøk'>00:17:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >Blakstad</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5250483&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F308367693%2Fsegments%2F7268043446' data-trigger='focus'  title='Top 5 forsøk'>00:17:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rune</td>
                            <td  >NergÃ¥rd</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1821602&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F322812984%2Fsegments%2F7630091766' data-trigger='focus'  title='Top 5 forsøk'>00:17:10</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2788231&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F677301468%2Fsegments%2F16600305501' data-trigger='focus'  title='Top 5 forsøk'>00:17:02</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BÃ¥rd</td>
                            <td  >BrÃ¥ten</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2459307&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698766062%2Fsegments%2F17133418578' data-trigger='focus'  title='Top 5 forsøk'>00:17:00</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >tonje</td>
                            <td  >haugberg</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2763906&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F197157348%2Fsegments%2F4642487662' data-trigger='focus'  title='Top 5 forsøk'>00:16:59</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >HÃ¥vard</td>
                            <td  >Moksnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9596649&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F522508636%2Fsegments%2F12564466349' data-trigger='focus'  title='Top 5 forsøk'>00:16:57</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >tove</td>
                            <td  >helene</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=780612&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F21997862%2Fsegments%2F393127637' data-trigger='focus'  title='Top 5 forsøk'>00:16:55</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã…shild</td>
                            <td  >Ludvigsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16278357&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F637866916%2Fsegments%2F15589392675' data-trigger='focus'  title='Top 5 forsøk'>00:16:51</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aleksander de Lange</td>
                            <td  >Claussen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1172598&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F307707058%2Fsegments%2F7253386043' data-trigger='focus'  title='Top 5 forsøk'>00:15:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kari-Mette</td>
                            <td  >Ã˜rbog</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15232643&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F639514206%2Fsegments%2F15627538103' data-trigger='focus'  title='Top 5 forsøk'>00:16:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arild</td>
                            <td  >Busengdal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16688557&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793260569%2Fsegments%2F19382278388' data-trigger='focus'  title='Top 5 forsøk'>00:16:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jenny Andreassen</td>
                            <td  >Moe</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2296521&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F536776616%2Fsegments%2F12935034972' data-trigger='focus'  title='Top 5 forsøk'>00:16:33</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >LÃ¸p</td>
                            <td  >LÃ¸pesen</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2777946&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F73578848%2Fsegments%2F3998456618' data-trigger='focus'  title='Top 5 forsøk'>00:16:32</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andrew</td>
                            <td  >Fiamingo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1051369&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F438378774%2Fsegments%2F10539786100' data-trigger='focus'  title='Top 5 forsøk'>00:16:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kyrre</td>
                            <td  >Hansen</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16755529&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F718398486%2Fsegments%2F17632034193' data-trigger='focus'  title='Top 5 forsøk'>00:16:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sigurd</td>
                            <td  >Wilmo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2675681&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F79126320%2Fsegments%2F1601046181' data-trigger='focus'  title='Top 5 forsøk'>00:16:25</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ingvild</td>
                            <td  >Reymert</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13713468&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F741220978%2Fsegments%2F18177501300' data-trigger='focus'  title='Top 5 forsøk'>00:16:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Turid</td>
                            <td  >Welo</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6905129&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F329093870%2Fsegments%2F7788623226' data-trigger='focus'  title='Top 5 forsøk'>00:16:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristin</td>
                            <td  >Stenerud</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16407935&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760056489%2Fsegments%2F18617834443' data-trigger='focus'  title='Top 5 forsøk'>00:16:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roar</td>
                            <td  >Ã˜verÃ¥s</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=67519&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F81283056%2Fsegments%2F1656954907' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Markus</td>
                            <td  >Olsson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5037906&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F587462618%2Fsegments%2F14295927047' data-trigger='focus'  title='Top 5 forsøk'>00:15:46</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Malin</td>
                            <td  >H</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9569767&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573824063%2Fsegments%2F13919662568' data-trigger='focus'  title='Top 5 forsøk'>00:15:44</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eelco</td>
                            <td  >Van Weerdhuizen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8506899&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F433247214%2Fsegments%2F10420358330' data-trigger='focus'  title='Top 5 forsøk'>00:15:45</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Tobiasson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5411064&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F623547033%2Fsegments%2F15224789743' data-trigger='focus'  title='Top 5 forsøk'>00:14:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje V.</td>
                            <td  >Fordal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2578821&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F415788682%2Fsegments%2F9998263230' data-trigger='focus'  title='Top 5 forsøk'>00:15:09</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aili Kristina</td>
                            <td  >Hannisdal</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8315802&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F379861722%2Fsegments%2F9080025960' data-trigger='focus'  title='Top 5 forsøk'>00:15:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristen</td>
                            <td  >BjorÃ¥</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14869957&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F575435147%2Fsegments%2F13966145552' data-trigger='focus'  title='Top 5 forsøk'>00:15:05</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Ã˜degÃ¥rden</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=470960&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F416023754%2Fsegments%2F10005054497' data-trigger='focus'  title='Top 5 forsøk'>00:15:04</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Robert</td>
                            <td  >Steen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2284610&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F86251536%2Fsegments%2F1778886597' data-trigger='focus'  title='Top 5 forsøk'>00:15:03</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Martin</td>
                            <td  >BollandsÃ¥s</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11427933&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F560651259%2Fsegments%2F13574697598' data-trigger='focus'  title='Top 5 forsøk'>00:15:03</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >J</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6476972&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F469058982%2Fsegments%2F11269508847' data-trigger='focus'  title='Top 5 forsøk'>00:15:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peer Morten</td>
                            <td  >LÃ¸chting</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574121&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F432483475%2Fsegments%2F10401244959' data-trigger='focus'  title='Top 5 forsøk'>00:15:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erlend</td>
                            <td  >Wiig</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389458&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F325001345%2Fsegments%2F7687771684' data-trigger='focus'  title='Top 5 forsøk'>00:15:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hedvig</td>
                            <td  >Ã…</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11478440&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F636224965%2Fsegments%2F15547080358' data-trigger='focus'  title='Top 5 forsøk'>00:14:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marie</td>
                            <td  >Ã†rÃ¸ Haugesten</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6623092&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746052394%2Fsegments%2F18291922644' data-trigger='focus'  title='Top 5 forsøk'>00:14:56</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Robert</td>
                            <td  >M</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7905435&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F697001436%2Fsegments%2F17088215831' data-trigger='focus'  title='Top 5 forsøk'>00:15:12</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >Blindheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2746263&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F363828010%2Fsegments%2F8680336568' data-trigger='focus'  title='Top 5 forsøk'>00:09:33</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Westnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9554828&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F320648163%2Fsegments%2F7578178576' data-trigger='focus'  title='Top 5 forsøk'>00:14:55</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond</td>
                            <td  >KjÃ¸lstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1126591&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435753484%2Fsegments%2F10477804042' data-trigger='focus'  title='Top 5 forsøk'>00:09:34</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jim</td>
                            <td  >Olsby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8020100&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F336687760%2Fsegments%2F7986270466' data-trigger='focus'  title='Top 5 forsøk'>00:14:53</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Magnus</td>
                            <td  >Moltzau</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2895235&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F182088051%2Fsegments%2F4256927055' data-trigger='focus'  title='Top 5 forsøk'>00:14:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas</td>
                            <td  >Brikselli</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2078856&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708441978%2Fsegments%2F17381841702' data-trigger='focus'  title='Top 5 forsøk'>00:14:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >testside</td>
                            <td  >for spaning</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6045295&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F179981882%2Fsegments%2F4208944939' data-trigger='focus'  title='Top 5 forsøk'>00:14:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ingrid</td>
                            <td  >Berge</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5919117&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708731908%2Fsegments%2F17390122572' data-trigger='focus'  title='Top 5 forsøk'>00:14:51</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gaute</td>
                            <td  >Gunleiksrud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1872671&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F325019768%2Fsegments%2F7688238079' data-trigger='focus'  title='Top 5 forsøk'>00:14:51</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steffen S.</td>
                            <td  >Paulsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5814758&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F416470082%2Fsegments%2F10015715551' data-trigger='focus'  title='Top 5 forsøk'>00:14:50</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >Hallberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2876110&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708363682%2Fsegments%2F17379413086' data-trigger='focus'  title='Top 5 forsøk'>00:14:48</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans Petter</td>
                            <td  >Mortveit</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7773941&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F433061486%2Fsegments%2F10415851528' data-trigger='focus'  title='Top 5 forsøk'>00:15:09</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jesper</td>
                            <td  >Staunstrup</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2116351&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F413573067%2Fsegments%2F9938556152' data-trigger='focus'  title='Top 5 forsøk'>00:09:30</a> (24) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eirik</td>
                            <td  >Hagen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5047770&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435718728%2Fsegments%2F10476940985' data-trigger='focus'  title='Top 5 forsøk'>00:09:12</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Katinka</td>
                            <td  >Ã˜degaard</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9406636&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707108186%2Fsegments%2F17344786302' data-trigger='focus'  title='Top 5 forsøk'>00:15:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Oda</td>
                            <td  >Myhrvold</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6563060&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F372678367%2Fsegments%2F8904947679' data-trigger='focus'  title='Top 5 forsøk'>00:17:25</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4765189&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F379337311%2Fsegments%2F9066975133' data-trigger='focus'  title='Top 5 forsøk'>00:15:39</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Nina</td>
                            <td  >KjÃ¦rvoll</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5809760&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F441431691%2Fsegments%2F10611471627' data-trigger='focus'  title='Top 5 forsøk'>00:15:39</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor Hernan</td>
                            <td  >Floor</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9725373&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F369343271%2Fsegments%2F8820160411' data-trigger='focus'  title='Top 5 forsøk'>00:15:37</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andy</td>
                            <td  >Yu</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6193694&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F603897486%2Fsegments%2F14719370869' data-trigger='focus'  title='Top 5 forsøk'>00:15:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans</td>
                            <td  >Braadland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3222342&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F154344990%2Fsegments%2F3561445500' data-trigger='focus'  title='Top 5 forsøk'>00:15:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ingvild</td>
                            <td  >Reymert</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4645317&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F200957997%2Fsegments%2F4737523153' data-trigger='focus'  title='Top 5 forsøk'>00:15:35</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole Tommy</td>
                            <td  >Lid-Strand</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=123770&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F241119866%2Fsegments%2F5666937051' data-trigger='focus'  title='Top 5 forsøk'>00:15:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Mosvoll</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1158160&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F639445778%2Fsegments%2F15625513124' data-trigger='focus'  title='Top 5 forsøk'>00:15:33</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BjÃ¸rn</td>
                            <td  >Ã˜verby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=160409&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F459420324%2Fsegments%2F11052277920' data-trigger='focus'  title='Top 5 forsøk'>00:15:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ketil</td>
                            <td  >Heyerdahl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3624038&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423776410%2Fsegments%2F10196742202' data-trigger='focus'  title='Top 5 forsøk'>00:15:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tim</td>
                            <td  >Fuesting</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=537423&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F415385235%2Fsegments%2F9987091959' data-trigger='focus'  title='Top 5 forsøk'>00:09:15</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ivar</td>
                            <td  >Sletta</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1097042&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423795336%2Fsegments%2F10197303905' data-trigger='focus'  title='Top 5 forsøk'>00:15:14</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eline</td>
                            <td  >Granne Andresen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13101965&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745067185%2Fsegments%2F18264413519' data-trigger='focus'  title='Top 5 forsøk'>00:15:25</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mathias</td>
                            <td  >Gullien</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9437626&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F344785784%2Fsegments%2F8196388474' data-trigger='focus'  title='Top 5 forsøk'>00:15:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karl</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5130478&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F369332111%2Fsegments%2F8819877904' data-trigger='focus'  title='Top 5 forsøk'>00:15:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut</td>
                            <td  >Hesthammer</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14743486&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745287790%2Fsegments%2F18269779778' data-trigger='focus'  title='Top 5 forsøk'>00:15:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Robert</td>
                            <td  >HafsrÃ¸d</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3641408&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F391316703%2Fsegments%2F9373108557' data-trigger='focus'  title='Top 5 forsøk'>00:15:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer Fiane</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4751610&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F667962515%2Fsegments%2F16363065347' data-trigger='focus'  title='Top 5 forsøk'>00:09:16</a> (42) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Klaesson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14900081&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F596297330%2Fsegments%2F14520233920' data-trigger='focus'  title='Top 5 forsøk'>00:15:19</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sverre</td>
                            <td  >Akersveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=217939&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F132741898%2Fsegments%2F3007122948' data-trigger='focus'  title='Top 5 forsøk'>00:09:20</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Charlotte</td>
                            <td  >Knudsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2542948&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F727813915%2Fsegments%2F17856532865' data-trigger='focus'  title='Top 5 forsøk'>00:15:16</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan Andreas</td>
                            <td  >EdstrÃ¸m</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6475875&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771655646%2Fsegments%2F18882618819' data-trigger='focus'  title='Top 5 forsøk'>00:09:27</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Felipe</td>
                            <td  >Hefler</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=247125&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F656880761%2Fsegments%2F16073314553' data-trigger='focus'  title='Top 5 forsøk'>00:15:15</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >von Essen</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10360642&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708012909%2Fsegments%2F17368926683' data-trigger='focus'  title='Top 5 forsøk'>00:17:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Alstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1357763&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F81025597%2Fsegments%2F1652477083' data-trigger='focus'  title='Top 5 forsøk'>00:17:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >PÃ¥l Christian</td>
                            <td  >Ingierd</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1037426&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753204704%2Fsegments%2F18455573494' data-trigger='focus'  title='Top 5 forsøk'>00:17:29</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >H</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6339499&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F356008686%2Fsegments%2F8475901437' data-trigger='focus'  title='Top 5 forsøk'>00:10:09</a> (3) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >HÃ¥vard</td>
                            <td  >Heggen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=122178&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F179335063%2Fsegments%2F4192413358' data-trigger='focus'  title='Top 5 forsøk'>00:15:28</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Solberg</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389845&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F141070255%2Fsegments%2F3208190572' data-trigger='focus'  title='Top 5 forsøk'>00:15:17</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simen</td>
                            <td  >Smestad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2514273&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F72940662%2Fsegments%2F2827412293' data-trigger='focus'  title='Top 5 forsøk'>00:15:00</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Brekken</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2674229&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F681878278%2Fsegments%2F16710869806' data-trigger='focus'  title='Top 5 forsøk'>00:14:48</a> (8) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Petter</td>
                            <td  >Kittelsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15303832&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F752046598%2Fsegments%2F18425013779' data-trigger='focus'  title='Top 5 forsøk'>00:14:30</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Gjertsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=17708690&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F752087622%2Fsegments%2F18425817094' data-trigger='focus'  title='Top 5 forsøk'>00:14:29</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trine</td>
                            <td  >Vangen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6154039&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F195431928%2Fsegments%2F4599218863' data-trigger='focus'  title='Top 5 forsøk'>00:22:41</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stein Ã˜yvind</td>
                            <td  >Engell</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1998853&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F175854662%2Fsegments%2F4105356243' data-trigger='focus'  title='Top 5 forsøk'>00:14:40</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegar</td>
                            <td  >Antonsen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16367296&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F658868268%2Fsegments%2F16128488351' data-trigger='focus'  title='Top 5 forsøk'>00:10:42</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas Munch</td>
                            <td  >Wahl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=241928&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F149069545%2Fsegments%2F3422165887' data-trigger='focus'  title='Top 5 forsøk'>00:08:36</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Viktor Steen</td>
                            <td  >Eriksen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2337763&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F82556661%2Fsegments%2F2625587079' data-trigger='focus'  title='Top 5 forsøk'>00:10:03</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >Sandbakken</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9430844&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F445385388%2Fsegments%2F10708455478' data-trigger='focus'  title='Top 5 forsøk'>00:15:32</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Inge A.</td>
                            <td  >Ã˜ien</td>
                            <td  ></td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1938688&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F714114543%2Fsegments%2F17524127250' data-trigger='focus'  title='Top 5 forsøk'>00:09:54</a> (4) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mona</td>
                            <td  >Tran</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=121464&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F699991992%2Fsegments%2F17166899118' data-trigger='focus'  title='Top 5 forsøk'>00:09:51</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag Erlend</td>
                            <td  >FÃ¸rsund</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11533874&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F422464917%2Fsegments%2F10179833260' data-trigger='focus'  title='Top 5 forsøk'>00:09:14</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >Tverrli</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1134510&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F415412466%2Fsegments%2F9987822680' data-trigger='focus'  title='Top 5 forsøk'>00:09:12</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Janne</td>
                            <td  >SÃ¦ther</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5692006&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F621228422%2Fsegments%2F15161335860' data-trigger='focus'  title='Top 5 forsøk'>00:08:18</a> (1) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan</td>
                            <td  >SolhÃ¸y</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4906911&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F214829542%2Fsegments%2F5075220645' data-trigger='focus'  title='Top 5 forsøk'>00:07:42</a> (4) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cornelius</td>
                            <td  >Poppe</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=430750&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F209888169%2Fsegments%2F4952021654' data-trigger='focus'  title='Top 5 forsøk'>00:07:35</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjell Vidar</td>
                            <td  >Hanssen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=536565&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F55156997%2Fsegments%2F2625587200' data-trigger='focus'  title='Top 5 forsøk'>00:07:27</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henrik</td>
                            <td  >Heiestad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=993034&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F80426614%2Fsegments%2F2625587158' data-trigger='focus'  title='Top 5 forsøk'>00:07:25</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut</td>
                            <td  >Aasheim</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11742354&sid=6800132&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F578912783%2Fsegments%2F14069596931' data-trigger='focus'  title='Top 5 forsøk'>00:06:04</a> (2) </td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sunniva N.</td>
                            <td  >Berg</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6774646&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F614465896%2Fsegments%2F14997335475' data-trigger='focus'  title='Top 5 forsøk'>01:08:57</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Markus</td>
                            <td  >Living</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7526361&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708303903%2Fsegments%2F17377384233' data-trigger='focus'  title='Top 5 forsøk'>00:15:30</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mila</td>
                            <td  >Zaharinova</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12218083&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F587878006%2Fsegments%2F14305679817' data-trigger='focus'  title='Top 5 forsøk'>00:15:45</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karl Johan</td>
                            <td  >Klokk</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9334675&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F311307241%2Fsegments%2F7343887650' data-trigger='focus'  title='Top 5 forsøk'>00:32:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Linda</td>
                            <td  >Andersen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14962841&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F711792125%2Fsegments%2F17467845575' data-trigger='focus'  title='Top 5 forsøk'>00:17:44</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Engholm</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7994809&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F700205344%2Fsegments%2F17173072901' data-trigger='focus'  title='Top 5 forsøk'>00:30:07</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjell</td>
                            <td  >Kildal Askvig</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=355202&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F5896409%2Fsegments%2F2827412328' data-trigger='focus'  title='Top 5 forsøk'>00:26:44</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lille</td>
                            <td  >Sandnes</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6889740&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F420128070%2Fsegments%2F10108803059' data-trigger='focus'  title='Top 5 forsøk'>00:23:24</a> (4) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ellen Skjold</td>
                            <td  >KvÃ¥le</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=136166&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F300676221%2Fsegments%2F7071975060' data-trigger='focus'  title='Top 5 forsøk'>00:23:22</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Julie</td>
                            <td  >Gjerding</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9039869&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F629809630%2Fsegments%2F15386351557' data-trigger='focus'  title='Top 5 forsøk'>00:23:09</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Margrethe</td>
                            <td  >Overn</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10435183&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F622459228%2Fsegments%2F15199052939' data-trigger='focus'  title='Top 5 forsøk'>00:22:23</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Knut Lorns</td>
                            <td  >Feragen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15066305&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F573541463%2Fsegments%2F13913059077' data-trigger='focus'  title='Top 5 forsøk'>00:19:37</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans</td>
                            <td  >Braadland</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2720080&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F358762295%2Fsegments%2F8545896510' data-trigger='focus'  title='Top 5 forsøk'>00:19:32</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arvid</td>
                            <td  >Mathiesen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2434098&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F645483606%2Fsegments%2F15783115725' data-trigger='focus'  title='Top 5 forsøk'>00:19:21</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elin</td>
                            <td  >Dommersnes</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4964663&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F665695169%2Fsegments%2F16299609565' data-trigger='focus'  title='Top 5 forsøk'>00:18:03</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steffan</td>
                            <td  >Bos-Haugen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2938387&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F465306082%2Fsegments%2F11178993698' data-trigger='focus'  title='Top 5 forsøk'>00:17:27</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Hillestad</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7992730&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F390064223%2Fsegments%2F9337318104' data-trigger='focus'  title='Top 5 forsøk'>00:15:55</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marius</td>
                            <td  >Ã˜stgaard</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6945646&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745192216%2Fsegments%2F18267359416' data-trigger='focus'  title='Top 5 forsøk'>00:17:13</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Claudiu</td>
                            <td  >Zaharia</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=590919&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F99167514%2Fsegments%2F2827412331' data-trigger='focus'  title='Top 5 forsøk'>00:17:13</a> (2) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Martin</td>
                            <td  >HÃ¸gholen</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11223326&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745230033%2Fsegments%2F18268405632' data-trigger='focus'  title='Top 5 forsøk'>00:17:11</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kai Eirik</td>
                            <td  >Espedal</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7621084&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745188306%2Fsegments%2F18267254084' data-trigger='focus'  title='Top 5 forsøk'>00:17:10</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Bago</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=768152&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F234084392%2Fsegments%2F5520410027' data-trigger='focus'  title='Top 5 forsøk'>00:17:08</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Dombestein</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3041706&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F163253853%2Fsegments%2F3790549122' data-trigger='focus'  title='Top 5 forsøk'>00:17:06</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sofie</td>
                            <td  >Jensen</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5633206&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F198874221%2Fsegments%2F4686113681' data-trigger='focus'  title='Top 5 forsøk'>00:16:34</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peder</td>
                            <td  >Figenbaum</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1008267&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F26189958%2Fsegments%2F2827412292' data-trigger='focus'  title='Top 5 forsøk'>00:16:21</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian</td>
                            <td  >Orvedal</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10300901&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F587862361%2Fsegments%2F14305266893' data-trigger='focus'  title='Top 5 forsøk'>00:16:17</a> (3) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tord</td>
                            <td  >Loe</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1292985&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F161272281%2Fsegments%2F3739783292' data-trigger='focus'  title='Top 5 forsøk'>00:16:12</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anette</td>
                            <td  >Wigaard</td>
                            <td  >F</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1490333&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F134668759%2Fsegments%2F3055305435' data-trigger='focus'  title='Top 5 forsøk'>00:16:09</a> (1) </td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon</td>
                            <td  >Arlov</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11305244&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F419950336%2Fsegments%2F10104220594' data-trigger='focus'  title='Top 5 forsøk'>01:02:43</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard LÃ¸nborg</td>
                            <td  >Jensen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7427934&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F716473972%2Fsegments%2F17584012721' data-trigger='focus'  title='Top 5 forsøk'>00:31:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Toril</td>
                            <td  >AG Husby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9781375&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423474960%2Fsegments%2F10189139247' data-trigger='focus'  title='Top 5 forsøk'>00:14:48</a> (12) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tone Yvonne</td>
                            <td  >Boye Killengreen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5018056&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F347982123%2Fsegments%2F8271173128' data-trigger='focus'  title='Top 5 forsøk'>00:18:26</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lena</td>
                            <td  >Hestnes</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2178538&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F203498364%2Fsegments%2F4795423554' data-trigger='focus'  title='Top 5 forsøk'>00:19:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mette</td>
                            <td  >Jakobsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5471670&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F701578374%2Fsegments%2F17208832328' data-trigger='focus'  title='Top 5 forsøk'>00:19:21</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vibeke</td>
                            <td  >Tungland</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8383453&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F276502693%2Fsegments%2F6478307882' data-trigger='focus'  title='Top 5 forsøk'>00:19:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Helen</td>
                            <td  >Roald</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5025873&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F630943639%2Fsegments%2F15412979747' data-trigger='focus'  title='Top 5 forsøk'>00:19:12</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >StÃ¥le</td>
                            <td  >Guriby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5451457&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F192629225%2Fsegments%2F4527159198' data-trigger='focus'  title='Top 5 forsøk'>00:19:04</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Heidi</td>
                            <td  >Fleischer</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2494699&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F77390780%2Fsegments%2F1553575803' data-trigger='focus'  title='Top 5 forsøk'>00:18:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >May-Britt</td>
                            <td  >Kleive</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6014860&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F369621851%2Fsegments%2F8827224286' data-trigger='focus'  title='Top 5 forsøk'>00:18:52</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aslak</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=372403&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760286320%2Fsegments%2F18622365624' data-trigger='focus'  title='Top 5 forsøk'>00:18:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Aasne Fenne</td>
                            <td  >Hoksrud</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2635752&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760209452%2Fsegments%2F18620586070' data-trigger='focus'  title='Top 5 forsøk'>00:18:30</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frode</td>
                            <td  >Veie</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5069058&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F401214245%2Fsegments%2F9615006393' data-trigger='focus'  title='Top 5 forsøk'>00:18:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eivind </td>
                            <td  >Killengreen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2074189&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F347977617%2Fsegments%2F8271127465' data-trigger='focus'  title='Top 5 forsøk'>00:18:21</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristin </td>
                            <td  >Brekke </td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8734418&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F614615880%2Fsegments%2F15001836170' data-trigger='focus'  title='Top 5 forsøk'>00:19:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karianne</td>
                            <td  >Listerud</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4536263&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F386858103%2Fsegments%2F9257817752' data-trigger='focus'  title='Top 5 forsøk'>00:18:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Camilla</td>
                            <td  >Ramberg</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5018813&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F423511444%2Fsegments%2F10189853853' data-trigger='focus'  title='Top 5 forsøk'>00:18:09</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anita</td>
                            <td  >Hansen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2086739&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F293716718%2Fsegments%2F6903937799' data-trigger='focus'  title='Top 5 forsøk'>00:18:05</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hilde</td>
                            <td  >Risstad</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2187012&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F75973114%2Fsegments%2F1516916882' data-trigger='focus'  title='Top 5 forsøk'>00:17:58</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tomas Lauvland</td>
                            <td  >Pettersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=867899&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F425244103%2Fsegments%2F10235732132' data-trigger='focus'  title='Top 5 forsøk'>00:17:55</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astrid</td>
                            <td  >Tesaker</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1882013&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F65555661%2Fsegments%2F1251893520' data-trigger='focus'  title='Top 5 forsøk'>00:17:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >Tjuvstu Engen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8060406&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F589574224%2Fsegments%2F14346796348' data-trigger='focus'  title='Top 5 forsøk'>00:08:59</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Line</td>
                            <td  >Cedervall</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1081516&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F288240381%2Fsegments%2F6767545792' data-trigger='focus'  title='Top 5 forsøk'>00:17:42</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cato</td>
                            <td  >Eigeland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2323013&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F396768366%2Fsegments%2F9510912948' data-trigger='focus'  title='Top 5 forsøk'>00:17:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Celine</td>
                            <td  >Olafsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9888563&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F614608693%2Fsegments%2F15001622221' data-trigger='focus'  title='Top 5 forsøk'>00:17:39</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Holtvedt</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5961722&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F584039401%2Fsegments%2F14207458411' data-trigger='focus'  title='Top 5 forsøk'>00:17:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kari</td>
                            <td  >Langbraaten</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=544989&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F405206494%2Fsegments%2F9717789154' data-trigger='focus'  title='Top 5 forsøk'>00:19:32</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >hans petter</td>
                            <td  >erikstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3669644&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F219346612%2Fsegments%2F5183032982' data-trigger='focus'  title='Top 5 forsøk'>00:19:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eirik</td>
                            <td  >Rustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13214455&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771682411%2Fsegments%2F18883141368' data-trigger='focus'  title='Top 5 forsøk'>00:08:51</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >David</td>
                            <td  >Carlsson</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3164101&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F203601544%2Fsegments%2F4798127673' data-trigger='focus'  title='Top 5 forsøk'>00:24:19</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Liv Aina</td>
                            <td  >Kristiansen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11183763&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F541001331%2Fsegments%2F13044495442' data-trigger='focus'  title='Top 5 forsøk'>00:31:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >GisnÃ¥s</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2706161&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F71357165%2Fsegments%2F1403819802' data-trigger='focus'  title='Top 5 forsøk'>00:30:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Emma</td>
                            <td  >Ã…rskog</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=868295&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F371321408%2Fsegments%2F8871916268' data-trigger='focus'  title='Top 5 forsøk'>00:29:04</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Magnus </td>
                            <td  >LÃ¸seth </td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4268878&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F136904870%2Fsegments%2F3101363160' data-trigger='focus'  title='Top 5 forsøk'>00:28:13</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tove</td>
                            <td  >LindegÃ¥rd</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10320020&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707237247%2Fsegments%2F17347838949' data-trigger='focus'  title='Top 5 forsøk'>00:27:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen Andreas</td>
                            <td  >Hasle</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2697791&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F121464094%2Fsegments%2F2710725916' data-trigger='focus'  title='Top 5 forsøk'>00:27:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cecilie</td>
                            <td  >Aubert</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10955943&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732121169%2Fsegments%2F17957062126' data-trigger='focus'  title='Top 5 forsøk'>00:26:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lavanya</td>
                            <td  >.</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2246110&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F168446054%2Fsegments%2F3922092946' data-trigger='focus'  title='Top 5 forsøk'>00:25:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erling</td>
                            <td  >Holen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=499719&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F205137333%2Fsegments%2F4831337219' data-trigger='focus'  title='Top 5 forsøk'>00:25:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Arne</td>
                            <td  >Normann</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12568916&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F569438027%2Fsegments%2F13811413694' data-trigger='focus'  title='Top 5 forsøk'>00:24:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stefan</td>
                            <td  >Bahrawy</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1102888&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F166664010%2Fsegments%2F3876755562' data-trigger='focus'  title='Top 5 forsøk'>00:24:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Magnus</td>
                            <td  >Erstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1408639&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771628232%2Fsegments%2F18882144855' data-trigger='focus'  title='Top 5 forsøk'>00:08:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astrid</td>
                            <td  >Skaugseth</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10724906&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F365244684%2Fsegments%2F8719663261' data-trigger='focus'  title='Top 5 forsøk'>00:19:54</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >dag</td>
                            <td  >finstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1024161&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F401219026%2Fsegments%2F9615144318' data-trigger='focus'  title='Top 5 forsøk'>00:23:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >hÃ¥var</td>
                            <td  >hilde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1698420&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F39603955%2Fsegments%2F649719641' data-trigger='focus'  title='Top 5 forsøk'>00:22:23</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Camilla</td>
                            <td  >SÃ¦terdal</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4923457&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F206438800%2Fsegments%2F4867823142' data-trigger='focus'  title='Top 5 forsøk'>00:21:55</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >SkarbÃ¸</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4779795&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F139457603%2Fsegments%2F3167796520' data-trigger='focus'  title='Top 5 forsøk'>00:21:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Lyngstol</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2234311&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793475862%2Fsegments%2F19387575558' data-trigger='focus'  title='Top 5 forsøk'>00:21:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BÃ¸rre</td>
                            <td  >Lagesen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=985895&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F634929726%2Fsegments%2F15509463215' data-trigger='focus'  title='Top 5 forsøk'>00:21:42</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Siw</td>
                            <td  >Boye</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14366216&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F540100619%2Fsegments%2F13018980762' data-trigger='focus'  title='Top 5 forsøk'>00:21:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜yvind</td>
                            <td  >Maarud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9328049&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F316090268%2Fsegments%2F7468243780' data-trigger='focus'  title='Top 5 forsøk'>00:21:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kay-ove</td>
                            <td  >Vetland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4227993&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F131180955%2Fsegments%2F2967077182' data-trigger='focus'  title='Top 5 forsøk'>00:21:19</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sebastian</td>
                            <td  >Falch</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4722639&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F183464420%2Fsegments%2F4287658699' data-trigger='focus'  title='Top 5 forsøk'>00:20:37</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gina</td>
                            <td  >Karoline</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14859669&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F664376681%2Fsegments%2F16266518408' data-trigger='focus'  title='Top 5 forsøk'>00:20:23</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Line</td>
                            <td  >ScheistrÃ¸en</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8066041&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F633388170%2Fsegments%2F15469613488' data-trigger='focus'  title='Top 5 forsøk'>00:14:48</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Rosenvold</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5930671&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F182859290%2Fsegments%2F4273794178' data-trigger='focus'  title='Top 5 forsøk'>00:14:46</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >TorbjÃ¸rn</td>
                            <td  >Staff</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15389058&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F740550567%2Fsegments%2F18163072436' data-trigger='focus'  title='Top 5 forsøk'>00:14:46</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >S</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8878568&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F622375533%2Fsegments%2F15197331989' data-trigger='focus'  title='Top 5 forsøk'>00:12:39</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Paivarinne</td>
                            <td  >Markus</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3872911&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F279627494%2Fsegments%2F6552353389' data-trigger='focus'  title='Top 5 forsøk'>00:12:48</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor</td>
                            <td  >Fadum-Aas</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11615540&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F406244633%2Fsegments%2F9745361875' data-trigger='focus'  title='Top 5 forsøk'>00:12:48</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >J</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2988942&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F184676966%2Fsegments%2F4323204277' data-trigger='focus'  title='Top 5 forsøk'>00:12:44</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Eriksen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10999208&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F380787007%2Fsegments%2F9105701757' data-trigger='focus'  title='Top 5 forsøk'>00:12:43</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Sund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2658434&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F296413079%2Fsegments%2F6967685252' data-trigger='focus'  title='Top 5 forsøk'>00:12:42</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ivar</td>
                            <td  >Lima</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1253960&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F596506994%2Fsegments%2F14525233351' data-trigger='focus'  title='Top 5 forsøk'>00:12:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jonas</td>
                            <td  >Brustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6761441&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F533571003%2Fsegments%2F12845562515' data-trigger='focus'  title='Top 5 forsøk'>00:12:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gorm</td>
                            <td  >NÃ¸kleby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=873837&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F390310980%2Fsegments%2F9344993765' data-trigger='focus'  title='Top 5 forsøk'>00:12:41</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Steen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3023042&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F187183438%2Fsegments%2F4382019269' data-trigger='focus'  title='Top 5 forsøk'>00:10:43</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir</td>
                            <td  >Byberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=702985&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F206066265%2Fsegments%2F4856344571' data-trigger='focus'  title='Top 5 forsøk'>00:12:40</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BÃ¥rd Johan</td>
                            <td  >Svensson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1030256&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F83878289%2Fsegments%2F1715785846' data-trigger='focus'  title='Top 5 forsøk'>00:12:38</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜yvind</td>
                            <td  >Husby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=356131&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F58949829%2Fsegments%2F1094886154' data-trigger='focus'  title='Top 5 forsøk'>00:12:51</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Nyhus</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9852344&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F427933459%2Fsegments%2F10296175034' data-trigger='focus'  title='Top 5 forsøk'>00:12:38</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã–yvind</td>
                            <td  >Boe</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11376218&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F393698982%2Fsegments%2F9433575037' data-trigger='focus'  title='Top 5 forsøk'>00:12:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jon Rune</td>
                            <td  >Lorentzen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6907222&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F603620778%2Fsegments%2F14712846281' data-trigger='focus'  title='Top 5 forsøk'>00:12:36</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >fredriksen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=346806&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F315465016%2Fsegments%2F7450795920' data-trigger='focus'  title='Top 5 forsøk'>00:12:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tine</td>
                            <td  >Thorsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10701889&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F373432715%2Fsegments%2F8921993136' data-trigger='focus'  title='Top 5 forsøk'>00:12:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Myklebust</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10355626&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F365146017%2Fsegments%2F8716951202' data-trigger='focus'  title='Top 5 forsøk'>00:12:32</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erika</td>
                            <td  >Wollner</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9698445&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F728858314%2Fsegments%2F17879549429' data-trigger='focus'  title='Top 5 forsøk'>00:12:29</a> (11) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein Kvaal</td>
                            <td  >Ã˜sterbÃ¸</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=187408&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F367339847%2Fsegments%2F8772377208' data-trigger='focus'  title='Top 5 forsøk'>00:12:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BjÃ¸rn</td>
                            <td  >SÃ¸rland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=644510&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F773344580%2Fsegments%2F18921611863' data-trigger='focus'  title='Top 5 forsøk'>00:12:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Endre</td>
                            <td  >Wigaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2738714&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F315439103%2Fsegments%2F7450157942' data-trigger='focus'  title='Top 5 forsøk'>00:12:27</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Jacobsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2730759&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F773327720%2Fsegments%2F18921164876' data-trigger='focus'  title='Top 5 forsøk'>00:12:27</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Magnus</td>
                            <td  >Blix</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1110955&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F642553880%2Fsegments%2F15702898564' data-trigger='focus'  title='Top 5 forsøk'>00:12:50</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor-Arne</td>
                            <td  >Arnesen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3175249&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F729115448%2Fsegments%2F17884598501' data-trigger='focus'  title='Top 5 forsøk'>00:12:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frode</td>
                            <td  >Tobiasson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8235206&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F289716413%2Fsegments%2F6802783830' data-trigger='focus'  title='Top 5 forsøk'>00:12:24</a> (40) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Pearse</td>
                            <td  >Connolly</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=130843&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F121224670%2Fsegments%2F2704002178' data-trigger='focus'  title='Top 5 forsøk'>00:13:04</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan</td>
                            <td  >Rylund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5125990&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593157260%2Fsegments%2F14445050437' data-trigger='focus'  title='Top 5 forsøk'>00:13:10</a> (48) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne</td>
                            <td  >Albrektsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5451612&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F175401340%2Fsegments%2F4094239408' data-trigger='focus'  title='Top 5 forsøk'>00:13:10</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hans</td>
                            <td  >SmedsrÃ¸d</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10448277&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F588834943%2Fsegments%2F14328874513' data-trigger='focus'  title='Top 5 forsøk'>00:10:30</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje</td>
                            <td  >Falstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1279731&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F698780898%2Fsegments%2F17133856975' data-trigger='focus'  title='Top 5 forsøk'>00:13:09</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eivind</td>
                            <td  >H.</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=422646&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F420287026%2Fsegments%2F10113069345' data-trigger='focus'  title='Top 5 forsøk'>00:13:08</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Felix</td>
                            <td  >B</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2582185&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F760597660%2Fsegments%2F18630338966' data-trigger='focus'  title='Top 5 forsøk'>00:13:08</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sonja Brigitte</td>
                            <td  >Dransfeld</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6050471&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F269623070%2Fsegments%2F6314750490' data-trigger='focus'  title='Top 5 forsøk'>00:13:06</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >Hjelm</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=105434&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F601165478%2Fsegments%2F14652451793' data-trigger='focus'  title='Top 5 forsøk'>00:10:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Strava</td>
                            <td  >Athlete</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6264772&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F188625093%2Fsegments%2F4428040101' data-trigger='focus'  title='Top 5 forsøk'>00:13:06</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >John</td>
                            <td  >Solberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7708617&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F596478977%2Fsegments%2F14524464677' data-trigger='focus'  title='Top 5 forsøk'>00:13:05</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >Klemetsrud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=124027&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F148111850%2Fsegments%2F3398598011' data-trigger='focus'  title='Top 5 forsøk'>00:13:04</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristian</td>
                            <td  >Monsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8113871&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F356452088%2Fsegments%2F8486978610' data-trigger='focus'  title='Top 5 forsøk'>00:12:52</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜ystein</td>
                            <td  >Falch</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2434843&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F745267304%2Fsegments%2F18269302072' data-trigger='focus'  title='Top 5 forsøk'>00:13:04</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Audun</td>
                            <td  >Hvenekilde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6231826&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F593157039%2Fsegments%2F14445045397' data-trigger='focus'  title='Top 5 forsøk'>00:13:04</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tony</td>
                            <td  >Gjerde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1072063&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F737188393%2Fsegments%2F18073749839' data-trigger='focus'  title='Top 5 forsøk'>00:13:00</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Yngve</td>
                            <td  >Rimberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=797173&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F180929016%2Fsegments%2F11120899152' data-trigger='focus'  title='Top 5 forsøk'>00:13:00</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir AndrÃ©</td>
                            <td  >Hoksnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4923819&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F293623081%2Fsegments%2F6902251807' data-trigger='focus'  title='Top 5 forsøk'>00:10:36</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Robert</td>
                            <td  >Rehnmark RawViking</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10697611&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F793399883%2Fsegments%2F19385798574' data-trigger='focus'  title='Top 5 forsøk'>00:12:56</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6536709&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771659575%2Fsegments%2F18882697015' data-trigger='focus'  title='Top 5 forsøk'>00:10:37</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Karina Eriksen</td>
                            <td  >Lorentzen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8965329&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F547000636%2Fsegments%2F13197796168' data-trigger='focus'  title='Top 5 forsøk'>00:12:54</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Carl Fredrik</td>
                            <td  >Hagen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=134614&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F6914252%2Fsegments%2F196644855' data-trigger='focus'  title='Top 5 forsøk'>00:12:54</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >El Fakiri</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5824889&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F279643448%2Fsegments%2F6552756169' data-trigger='focus'  title='Top 5 forsøk'>00:12:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >gloria</td>
                            <td  >vinstedt</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3905315&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F279691611%2Fsegments%2F6553874789' data-trigger='focus'  title='Top 5 forsøk'>00:12:53</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >claes</td>
                            <td  >holmberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1343509&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F380940115%2Fsegments%2F9109909802' data-trigger='focus'  title='Top 5 forsøk'>00:10:44</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanne</td>
                            <td  >Kristiansen-Haugland</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12726019&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F577202010%2Fsegments%2F14019988305' data-trigger='focus'  title='Top 5 forsøk'>00:12:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2572810&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F149428748%2Fsegments%2F3430787812' data-trigger='focus'  title='Top 5 forsøk'>00:13:11</a> (22) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Truls</td>
                            <td  >Hestengen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1609395&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F636055037%2Fsegments%2F15541694150' data-trigger='focus'  title='Top 5 forsøk'>00:11:30</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rund</td>
                            <td  >Vala</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2883909&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F168623170%2Fsegments%2F3926745116' data-trigger='focus'  title='Top 5 forsøk'>00:11:39</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andris</td>
                            <td  >Wangensteen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2414105&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F144324464%2Fsegments%2F3299332650' data-trigger='focus'  title='Top 5 forsøk'>00:11:39</a> (27) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Forland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=446077&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435672512%2Fsegments%2F10475729339' data-trigger='focus'  title='Top 5 forsøk'>00:11:38</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Torleiv</td>
                            <td  >Lohne</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1266320&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F211092314%2Fsegments%2F4978027511' data-trigger='focus'  title='Top 5 forsøk'>00:11:10</a> (26) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Peter</td>
                            <td  >Mannfjord</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10222929&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F576712034%2Fsegments%2F14005113793' data-trigger='focus'  title='Top 5 forsøk'>00:11:34</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard Ringsby</td>
                            <td  >HasselgÃ¥rd</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12548722&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F599820159%2Fsegments%2F14616261363' data-trigger='focus'  title='Top 5 forsøk'>00:11:32</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Helge</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574106&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F84671302%2Fsegments%2F1737688306' data-trigger='focus'  title='Top 5 forsøk'>00:11:31</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olav</td>
                            <td  >Nedrelid</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=189869&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F179258251%2Fsegments%2F4190718409' data-trigger='focus'  title='Top 5 forsøk'>00:11:31</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Selmer</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2153195&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F348980289%2Fsegments%2F8298583120' data-trigger='focus'  title='Top 5 forsøk'>00:11:30</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Alexander</td>
                            <td  >BjÃ¸rvik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6886832&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F683743128%2Fsegments%2F16762143893' data-trigger='focus'  title='Top 5 forsøk'>00:11:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Harald</td>
                            <td  >Amundsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7914673&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F557643905%2Fsegments%2F13494048244' data-trigger='focus'  title='Top 5 forsøk'>00:11:27</a> (13) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Preben</td>
                            <td  >Hafnor</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15873052&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F625372897%2Fsegments%2F15266499925' data-trigger='focus'  title='Top 5 forsøk'>00:11:42</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sindre</td>
                            <td  >Nordhagen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4079269&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F626707373%2Fsegments%2F15298175167' data-trigger='focus'  title='Top 5 forsøk'>00:11:25</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >MidttÃ¸mme</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15349852&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F685148257%2Fsegments%2F16796240440' data-trigger='focus'  title='Top 5 forsøk'>00:11:11</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Pedersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15521161&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F623929380%2Fsegments%2F15233044648' data-trigger='focus'  title='Top 5 forsøk'>00:11:22</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor Helge</td>
                            <td  >Huse</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=66720&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F453408869%2Fsegments%2F10898010206' data-trigger='focus'  title='Top 5 forsøk'>00:11:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Morten</td>
                            <td  >Tokerud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2849867&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F151935677%2Fsegments%2F3499012933' data-trigger='focus'  title='Top 5 forsøk'>00:11:22</a> (12) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jan-Hugo</td>
                            <td  >Lundberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15367678&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F592454812%2Fsegments%2F14426411965' data-trigger='focus'  title='Top 5 forsøk'>00:11:21</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian</td>
                            <td  >Sagstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4209378&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F130178122%2Fsegments%2F2941566858' data-trigger='focus'  title='Top 5 forsøk'>00:11:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag</td>
                            <td  >Torp-Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=154835&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F10306800%2Fsegments%2F196644818' data-trigger='focus'  title='Top 5 forsøk'>00:11:21</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne </td>
                            <td  >Hatlen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=119316&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F204111521%2Fsegments%2F4810423228' data-trigger='focus'  title='Top 5 forsøk'>00:11:19</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Matias</td>
                            <td  >Corona</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1956017&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F78481071%2Fsegments%2F1582599860' data-trigger='focus'  title='Top 5 forsøk'>00:11:19</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Tendal</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2689755&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F373594530%2Fsegments%2F8925267974' data-trigger='focus'  title='Top 5 forsøk'>00:11:18</a> (21) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rasmus</td>
                            <td  >Evrin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1547517&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771696323%2Fsegments%2F18883426299' data-trigger='focus'  title='Top 5 forsøk'>00:11:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Fredrik</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5136390&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F379787388%2Fsegments%2F9078359180' data-trigger='focus'  title='Top 5 forsøk'>00:11:09</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dennis</td>
                            <td  >Jakobsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4551586&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F412246430%2Fsegments%2F9903761255' data-trigger='focus'  title='Top 5 forsøk'>00:12:21</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >Saxegaard</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1098098&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F297123426%2Fsegments%2F6988170917' data-trigger='focus'  title='Top 5 forsøk'>00:12:04</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frank-Tore</td>
                            <td  >Toresen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1165756&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F88497782%2Fsegments%2F1838461512' data-trigger='focus'  title='Top 5 forsøk'>00:12:21</a> (29) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Trond Stian</td>
                            <td  >Nytveit</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16290983&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F639151996%2Fsegments%2F15617894827' data-trigger='focus'  title='Top 5 forsøk'>00:12:20</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Salvatore</td>
                            <td  >Scoglietti</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5998239&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F407261742%2Fsegments%2F9771350734' data-trigger='focus'  title='Top 5 forsøk'>00:12:18</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Njaal</td>
                            <td  >Reitan</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12174617&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F717935740%2Fsegments%2F17620287022' data-trigger='focus'  title='Top 5 forsøk'>00:12:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Boymo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=548143&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F144354862%2Fsegments%2F3299817253' data-trigger='focus'  title='Top 5 forsøk'>00:10:49</a> (26) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hanna</td>
                            <td  >Eriksson</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=866849&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F47074135%2Fsegments%2F818556557' data-trigger='focus'  title='Top 5 forsøk'>00:10:51</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per</td>
                            <td  >Lundell</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1042874&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731976835%2Fsegments%2F17953534209' data-trigger='focus'  title='Top 5 forsøk'>00:12:10</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mathias</td>
                            <td  >Fossum</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7965024&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731947061%2Fsegments%2F17952753030' data-trigger='focus'  title='Top 5 forsøk'>00:12:08</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristoffer</td>
                            <td  >Dahl</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8767318&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F697987153%2Fsegments%2F17113544803' data-trigger='focus'  title='Top 5 forsøk'>00:12:08</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kim</td>
                            <td  >BjÃ¸rke</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=602440&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F203079578%2Fsegments%2F4784109454' data-trigger='focus'  title='Top 5 forsøk'>00:12:06</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Svankil</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=878781&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732010139%2Fsegments%2F17954383517' data-trigger='focus'  title='Top 5 forsøk'>00:12:06</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜yvind</td>
                            <td  >Berntsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3141715&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F419135169%2Fsegments%2F10082619481' data-trigger='focus'  title='Top 5 forsøk'>00:12:04</a> (17) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Oddgeir</td>
                            <td  >Ommelstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3179040&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F548544691%2Fsegments%2F13243634828' data-trigger='focus'  title='Top 5 forsøk'>00:11:03</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olaf</td>
                            <td  >Sletner</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1634027&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F47367303%2Fsegments%2F825009270' data-trigger='focus'  title='Top 5 forsøk'>00:12:04</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christoffer</td>
                            <td  >Wilner</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1297779&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F375607776%2Fsegments%2F8979870697' data-trigger='focus'  title='Top 5 forsøk'>00:10:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >PÃ¥l</td>
                            <td  >Svenssen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9419783&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F327485334%2Fsegments%2F7749441686' data-trigger='focus'  title='Top 5 forsøk'>00:12:02</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kevin</td>
                            <td  >Gjulem</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2394742&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F195953873%2Fsegments%2F4610977143' data-trigger='focus'  title='Top 5 forsøk'>00:10:56</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bent Erik</td>
                            <td  >Skaug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=462045&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F731858349%2Fsegments%2F17950310345' data-trigger='focus'  title='Top 5 forsøk'>00:12:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stian</td>
                            <td  >Bryde-Erichsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9863442&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F661134568%2Fsegments%2F16189322182' data-trigger='focus'  title='Top 5 forsøk'>00:12:01</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >HÃ¥kon</td>
                            <td  >Dreyer</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=427850&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F20947814%2Fsegments%2F375238944' data-trigger='focus'  title='Top 5 forsøk'>00:12:00</a> (21) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ã˜yvind</td>
                            <td  >Holmen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=940053&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F196266113%2Fsegments%2F4620416663' data-trigger='focus'  title='Top 5 forsøk'>00:11:58</a> (12) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Amund</td>
                            <td  >Riiser</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2248336&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F84397311%2Fsegments%2F1730682243' data-trigger='focus'  title='Top 5 forsøk'>00:11:56</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >didrik</td>
                            <td  >dÃ¦hlin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=268076&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F599551042%2Fsegments%2F14609330540' data-trigger='focus'  title='Top 5 forsøk'>00:11:56</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Kristian</td>
                            <td  >Haug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=62852&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F575596476%2Fsegments%2F13971115250' data-trigger='focus'  title='Top 5 forsøk'>00:11:02</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stig</td>
                            <td  >Framnes</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9767146&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771679334%2Fsegments%2F18883076536' data-trigger='focus'  title='Top 5 forsøk'>00:10:29</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Frederic </td>
                            <td  >Mignotte</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10684264&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F584563706%2Fsegments%2F14223654220' data-trigger='focus'  title='Top 5 forsøk'>00:13:11</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tommy</td>
                            <td  >Bysveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5525176&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F182058973%2Fsegments%2F4256813329' data-trigger='focus'  title='Top 5 forsøk'>00:14:46</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gaute</td>
                            <td  >Mikkelsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3065668&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F122657191%2Fsegments%2F2741201951' data-trigger='focus'  title='Top 5 forsøk'>00:14:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hege Resvoll</td>
                            <td  >Skaug</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2659555&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F72467865%2Fsegments%2F1426034011' data-trigger='focus'  title='Top 5 forsøk'>00:14:23</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rune</td>
                            <td  >Dreiem</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=17044827&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F716849912%2Fsegments%2F17594095880' data-trigger='focus'  title='Top 5 forsøk'>00:14:23</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Camilla</td>
                            <td  >RÃ¸nning</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8717235&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F354273821%2Fsegments%2F8435435596' data-trigger='focus'  title='Top 5 forsøk'>00:14:23</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mai</td>
                            <td  >Watson</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8368502&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F677343313%2Fsegments%2F16601147987' data-trigger='focus'  title='Top 5 forsøk'>00:14:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christine</td>
                            <td  >ArnkvÃ¦rn</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6698710&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F730743724%2Fsegments%2F17921748193' data-trigger='focus'  title='Top 5 forsøk'>00:14:22</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Hugo</td>
                            <td  >Moen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=437146&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F732447785%2Fsegments%2F17964967937' data-trigger='focus'  title='Top 5 forsøk'>00:14:21</a> (33) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anine </td>
                            <td  >Falch</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4576101&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F613021173%2Fsegments%2F14952992424' data-trigger='focus'  title='Top 5 forsøk'>00:14:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >randolf</td>
                            <td  >walderhaug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=541879&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F601904309%2Fsegments%2F14669941909' data-trigger='focus'  title='Top 5 forsøk'>00:14:19</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders</td>
                            <td  >WallÃ¸e</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15471678&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F700081474%2Fsegments%2F17169344720' data-trigger='focus'  title='Top 5 forsøk'>00:14:17</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Siri</td>
                            <td  >Johnsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4335144&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F369773648%2Fsegments%2F8831434004' data-trigger='focus'  title='Top 5 forsøk'>00:14:17</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >FlÃ¸isand</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3448867&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F659812543%2Fsegments%2F16158516995' data-trigger='focus'  title='Top 5 forsøk'>00:14:16</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Michal</td>
                            <td  >Glowacki</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=139931&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F62366075%2Fsegments%2F1175425244' data-trigger='focus'  title='Top 5 forsøk'>00:08:35</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bent</td>
                            <td  >Rodem</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13665413&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F711035114%2Fsegments%2F17451200618' data-trigger='focus'  title='Top 5 forsøk'>00:14:15</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >StÃ¥le</td>
                            <td  >Fenstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=983227&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F609238904%2Fsegments%2F14858753389' data-trigger='focus'  title='Top 5 forsøk'>00:14:12</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Eirik</td>
                            <td  >Tveito</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=591409&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F746382866%2Fsegments%2F18299325528' data-trigger='focus'  title='Top 5 forsøk'>00:14:11</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole</td>
                            <td  >Skaugseth</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4728222&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F578217806%2Fsegments%2F14051236495' data-trigger='focus'  title='Top 5 forsøk'>00:14:09</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >JÃ¸rgen</td>
                            <td  >Tveita</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5663524&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F669242203%2Fsegments%2F16392883199' data-trigger='focus'  title='Top 5 forsøk'>00:14:09</a> (5) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ole AndrÃ©</td>
                            <td  >Hagen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1105650&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F81294590%2Fsegments%2F1657107667' data-trigger='focus'  title='Top 5 forsøk'>00:09:42</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=573670&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759129756%2Fsegments%2F18592987757' data-trigger='focus'  title='Top 5 forsøk'>00:14:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stig</td>
                            <td  >Hultgreen Karlsen</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=18220429&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F756975156%2Fsegments%2F18540420462' data-trigger='focus'  title='Top 5 forsøk'>00:14:07</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >Johansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4110426&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F124820664%2Fsegments%2F2799745894' data-trigger='focus'  title='Top 5 forsøk'>00:14:05</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjetil</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1666730&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F668889943%2Fsegments%2F16386148329' data-trigger='focus'  title='Top 5 forsøk'>00:14:05</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tormod</td>
                            <td  >Vatten</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6176078&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F391191667%2Fsegments%2F9369221722' data-trigger='focus'  title='Top 5 forsøk'>00:14:02</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Irene</td>
                            <td  >Hammerlund</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3603541&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F615907006%2Fsegments%2F15032576568' data-trigger='focus'  title='Top 5 forsøk'>00:14:23</a> (44) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Per Morten</td>
                            <td  >Rennan</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7451030&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F334484801%2Fsegments%2F7931007269' data-trigger='focus'  title='Top 5 forsøk'>00:14:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Roger</td>
                            <td  >Eilertsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=74422&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F411735976%2Fsegments%2F9890380960' data-trigger='focus'  title='Top 5 forsøk'>00:14:00</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Sondre</td>
                            <td  >Halden</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2449033&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F708987605%2Fsegments%2F17397289979' data-trigger='focus'  title='Top 5 forsøk'>00:14:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Audun</td>
                            <td  >Wangensteen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=154405&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F311507421%2Fsegments%2F7348819581' data-trigger='focus'  title='Top 5 forsøk'>00:11:13</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Atle</td>
                            <td  >Nikolaisen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=573784&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F432453218%2Fsegments%2F10400559217' data-trigger='focus'  title='Top 5 forsøk'>00:14:45</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Gard</td>
                            <td  >Skari</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6682574&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F763346858%2Fsegments%2F18694279986' data-trigger='focus'  title='Top 5 forsøk'>00:14:45</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lasse</td>
                            <td  >Petersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6171964&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F730513581%2Fsegments%2F17916204821' data-trigger='focus'  title='Top 5 forsøk'>00:14:44</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >TorbjÃ¸rn</td>
                            <td  >GrÃ¸nningen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2945402&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F459956792%2Fsegments%2F11064881219' data-trigger='focus'  title='Top 5 forsøk'>00:14:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mats</td>
                            <td  >NÃ¦ss</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1248118&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F75837171%2Fsegments%2F1513686641' data-trigger='focus'  title='Top 5 forsøk'>00:14:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lill</td>
                            <td  >WickstrÃ¸m</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5513189&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F405370696%2Fsegments%2F9721829974' data-trigger='focus'  title='Top 5 forsøk'>00:14:40</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Steinar</td>
                            <td  >LÃ¥g</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=674371&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F55369484%2Fsegments%2F1008413314' data-trigger='focus'  title='Top 5 forsøk'>00:14:37</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Stenerud</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16414697&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F671536423%2Fsegments%2F16448806854' data-trigger='focus'  title='Top 5 forsøk'>00:14:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Claus</td>
                            <td  >Leite</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1730268&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F613166866%2Fsegments%2F14957028311' data-trigger='focus'  title='Top 5 forsøk'>00:14:35</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Rygh</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1263917&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F25891259%2Fsegments%2F463129327' data-trigger='focus'  title='Top 5 forsøk'>00:14:35</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Svein</td>
                            <td  >Espeland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4461577&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F199943721%2Fsegments%2F4711990312' data-trigger='focus'  title='Top 5 forsøk'>00:14:25</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olav</td>
                            <td  >Torgersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1277558&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F355099489%2Fsegments%2F8455988754' data-trigger='focus'  title='Top 5 forsøk'>00:14:34</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Terje</td>
                            <td  >Haustreis</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8767480&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F703890534%2Fsegments%2F17264429364' data-trigger='focus'  title='Top 5 forsøk'>00:14:34</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >BÃ¸e</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9600867&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F391143068%2Fsegments%2F9367853030' data-trigger='focus'  title='Top 5 forsøk'>00:14:32</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jenny </td>
                            <td  >Lyngstad</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8588064&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F344517729%2Fsegments%2F8189076611' data-trigger='focus'  title='Top 5 forsøk'>00:14:32</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Kolstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2925516&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F327926926%2Fsegments%2F7760189226' data-trigger='focus'  title='Top 5 forsøk'>00:14:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >martine</td>
                            <td  >opsahl</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4098499&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F122070987%2Fsegments%2F2731106186' data-trigger='focus'  title='Top 5 forsøk'>00:14:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjartan</td>
                            <td  >Aukland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9653407&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F362087386%2Fsegments%2F8636999107' data-trigger='focus'  title='Top 5 forsøk'>00:14:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Jacob</td>
                            <td  >Jacobsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389620&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771635493%2Fsegments%2F18882265858' data-trigger='focus'  title='Top 5 forsøk'>00:09:39</a> (32) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kjell Olav Mandt</td>
                            <td  >Larsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3171020&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F726890049%2Fsegments%2F17835924948' data-trigger='focus'  title='Top 5 forsøk'>00:14:28</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Henrik</td>
                            <td  >Bering</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=788506&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F172056844%2Fsegments%2F4014578701' data-trigger='focus'  title='Top 5 forsøk'>00:14:25</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Andreas Svenningsen</td>
                            <td  >Hjelle</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7171776&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F604604572%2Fsegments%2F14737836041' data-trigger='focus'  title='Top 5 forsøk'>00:14:25</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kristin</td>
                            <td  >J</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9875331&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F554227596%2Fsegments%2F13400347902' data-trigger='focus'  title='Top 5 forsøk'>00:14:01</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Arne Olav</td>
                            <td  >Sunde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=333695&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F625482228%2Fsegments%2F15269040122' data-trigger='focus'  title='Top 5 forsøk'>00:09:46</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BjÃ¸rn Tore</td>
                            <td  >Aune</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=666827&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F428022087%2Fsegments%2F10298020772' data-trigger='focus'  title='Top 5 forsøk'>00:13:12</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Dag</td>
                            <td  >Hylin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3308283&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F536576217%2Fsegments%2F12931240143' data-trigger='focus'  title='Top 5 forsøk'>00:13:23</a> (8) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Timm</td>
                            <td  >Wold</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=151401&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F121176266%2Fsegments%2F2702856002' data-trigger='focus'  title='Top 5 forsøk'>00:13:30</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Elisabeth</td>
                            <td  >Longva Berger</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=982647&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F151969013%2Fsegments%2F3499796580' data-trigger='focus'  title='Top 5 forsøk'>00:13:30</a> (16) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Stein</td>
                            <td  >Solvik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13632955&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F532740341%2Fsegments%2F12822184475' data-trigger='focus'  title='Top 5 forsøk'>00:13:30</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Kine</td>
                            <td  >Gulliksen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1114378&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F768716037%2Fsegments%2F18817900543' data-trigger='focus'  title='Top 5 forsøk'>00:13:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mikael</td>
                            <td  >Dellemyr</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6886958&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F289794915%2Fsegments%2F6804532664' data-trigger='focus'  title='Top 5 forsøk'>00:13:29</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Petter</td>
                            <td  >Skedsmo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2462628&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F566245409%2Fsegments%2F13724960221' data-trigger='focus'  title='Top 5 forsøk'>00:13:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas H.</td>
                            <td  >Engen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=62577&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F11627898%2Fsegments%2F201412465' data-trigger='focus'  title='Top 5 forsøk'>00:10:20</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik S.</td>
                            <td  >Persheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6790503&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F413097282%2Fsegments%2F9924265278' data-trigger='focus'  title='Top 5 forsøk'>00:13:28</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Espen</td>
                            <td  >HÃ¸glund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=381220&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F178650435%2Fsegments%2F4177775492' data-trigger='focus'  title='Top 5 forsøk'>00:13:24</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >Persson</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2922890&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F792115196%2Fsegments%2F19350905458' data-trigger='focus'  title='Top 5 forsøk'>00:13:24</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tor Olav</td>
                            <td  >Runde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16015546&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F705356536%2Fsegments%2F17301821111' data-trigger='focus'  title='Top 5 forsøk'>00:13:23</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Simen</td>
                            <td  >Rustad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=13269325&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F696953390%2Fsegments%2F17087162866' data-trigger='focus'  title='Top 5 forsøk'>00:13:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Tallaksen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4641006&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F170686881%2Fsegments%2F3976608043' data-trigger='focus'  title='Top 5 forsøk'>00:13:23</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mr.</td>
                            <td  >Bang</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1739669&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F780468180%2Fsegments%2F19092845096' data-trigger='focus'  title='Top 5 forsøk'>00:13:22</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astri</td>
                            <td  >NordlÃ¸kken</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1845136&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581272267%2Fsegments%2F14129817447' data-trigger='focus'  title='Top 5 forsøk'>00:13:22</a> (13) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marit</td>
                            <td  >Vala</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2919058&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F771701374%2Fsegments%2F18883532022' data-trigger='focus'  title='Top 5 forsøk'>00:10:28</a> (17) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Maren</td>
                            <td  >Mohagen Hansen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7036968&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608216598%2Fsegments%2F14834989931' data-trigger='focus'  title='Top 5 forsøk'>00:13:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Bjarte</td>
                            <td  >BjÃ¸rgen Olsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14330&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F95607835%2Fsegments%2F2028305191' data-trigger='focus'  title='Top 5 forsøk'>00:13:21</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >ThorbjÃ¸rn</td>
                            <td  >Herbrandsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6316769&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F608208160%2Fsegments%2F14834822485' data-trigger='focus'  title='Top 5 forsøk'>00:13:20</a> (31) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Astri Irene </td>
                            <td  >Fotland</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1035943&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F699543636%2Fsegments%2F17154961156' data-trigger='focus'  title='Top 5 forsøk'>00:13:20</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rolf</td>
                            <td  >Hustvedt</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8701851&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F703932748%2Fsegments%2F17265331216' data-trigger='focus'  title='Top 5 forsøk'>00:13:16</a> (10) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Melby</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11681963&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F707309698%2Fsegments%2F17349691625' data-trigger='focus'  title='Top 5 forsøk'>00:10:29</a> (31) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Thomas</td>
                            <td  >Fjeldberg</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=346955&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F68672204%2Fsegments%2F1326382319' data-trigger='focus'  title='Top 5 forsøk'>00:13:13</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BjÃ¸rn</td>
                            <td  >Engen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1662279&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F89273274%2Fsegments%2F1860861615' data-trigger='focus'  title='Top 5 forsøk'>00:13:31</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christian</td>
                            <td  >Johander</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12370075&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F446233508%2Fsegments%2F10728626253' data-trigger='focus'  title='Top 5 forsøk'>00:13:35</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ketil</td>
                            <td  >Ervik</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2393702&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F578814459%2Fsegments%2F14067274651' data-trigger='focus'  title='Top 5 forsøk'>00:13:59</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Vegard</td>
                            <td  >Akersveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=203016&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F146260749%2Fsegments%2F3349781226' data-trigger='focus'  title='Top 5 forsøk'>00:10:04</a> (20) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Linn</td>
                            <td  >K</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15141522&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F610203921%2Fsegments%2F14881931937' data-trigger='focus'  title='Top 5 forsøk'>00:13:58</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Einar</td>
                            <td  >EftestÃ¸l</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=570583&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435740145%2Fsegments%2F10477427780' data-trigger='focus'  title='Top 5 forsøk'>00:09:49</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Rocco</td>
                            <td  >Della Serra</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=726310&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F234970492%2Fsegments%2F5539009485' data-trigger='focus'  title='Top 5 forsøk'>00:13:56</a> (7) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Erik</td>
                            <td  >A</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=768217&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F400493187%2Fsegments%2F9594873841' data-trigger='focus'  title='Top 5 forsøk'>00:13:55</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >BjÃ¸rn Ole</td>
                            <td  >Myklebust</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10063242&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581315303%2Fsegments%2F14130744859' data-trigger='focus'  title='Top 5 forsøk'>00:13:53</a> (24) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Axel</td>
                            <td  >Pettersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1757912&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F435710012%2Fsegments%2F10476695849' data-trigger='focus'  title='Top 5 forsøk'>00:09:58</a> (4) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Markus</td>
                            <td  >Andersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4391942&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F657568596%2Fsegments%2F16092325243' data-trigger='focus'  title='Top 5 forsøk'>00:10:03</a> (9) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Cecilie Lillehagen</td>
                            <td  >Welo</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9458046&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F590922419%2Fsegments%2F14381860664' data-trigger='focus'  title='Top 5 forsøk'>00:13:50</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Carl-Christian</td>
                            <td  >Grimstad</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=16978749&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F727779410%2Fsegments%2F17855796202' data-trigger='focus'  title='Top 5 forsøk'>00:13:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Snorre</td>
                            <td  >HÃ¥konsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3150489&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F87948603%2Fsegments%2F1824144246' data-trigger='focus'  title='Top 5 forsøk'>00:13:50</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Finn</td>
                            <td  >Bovim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=12639894&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F581842534%2Fsegments%2F14145104969' data-trigger='focus'  title='Top 5 forsøk'>00:13:49</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Alf Ã…ge </td>
                            <td  >LÃ¸nne</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=186102&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F16295467%2Fsegments%2F301128153' data-trigger='focus'  title='Top 5 forsøk'>00:13:47</a> (2) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Asgeir</td>
                            <td  >Hjorthaug</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11647396&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F618075067%2Fsegments%2F15083908040' data-trigger='focus'  title='Top 5 forsøk'>00:10:12</a> (29) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Christine</td>
                            <td  >Welo</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=6905336&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F727779625%2Fsegments%2F17855800480' data-trigger='focus'  title='Top 5 forsøk'>00:13:45</a> (6) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marius Bakken</td>
                            <td  >Berg</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15095575&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F722764724%2Fsegments%2F17731269059' data-trigger='focus'  title='Top 5 forsøk'>00:13:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Mads</td>
                            <td  >Gulbrandsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2940291&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F370575915%2Fsegments%2F8853492632' data-trigger='focus'  title='Top 5 forsøk'>00:13:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Lars</td>
                            <td  >Fremstad</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=11561345&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F580393793%2Fsegments%2F14106261794' data-trigger='focus'  title='Top 5 forsøk'>00:13:45</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Olav Johannes</td>
                            <td  >Deelstra</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4353351&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F400420220%2Fsegments%2F9592856827' data-trigger='focus'  title='Top 5 forsøk'>00:13:44</a> (3) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Marita E.</td>
                            <td  >Valvik</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5995967&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F599601117%2Fsegments%2F14610661787' data-trigger='focus'  title='Top 5 forsøk'>00:13:43</a> (20) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Anders Brage</td>
                            <td  >Mikkelsen </td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=10596168&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F694626660%2Fsegments%2F17031050510' data-trigger='focus'  title='Top 5 forsøk'>00:13:41</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Tore Henning</td>
                            <td  >Helmersen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=7784469&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F662151885%2Fsegments%2F16213381499' data-trigger='focus'  title='Top 5 forsøk'>00:13:41</a> (46) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Ola</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2479693&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F92233862%2Fsegments%2F1938103685' data-trigger='focus'  title='Top 5 forsøk'>00:13:40</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Haakon</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3346445&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F94692994%2Fsegments%2F2004283490' data-trigger='focus'  title='Top 5 forsøk'>00:10:07</a> (21) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >Geir</td>
                            <td  >KvÃ¦rk</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1008221&sid=1598642&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F21287996%2Fsegments%2F380816063' data-trigger='focus'  title='Top 5 forsøk'>00:13:36</a> (1) </td><td  class='desktop'>-</td><td  class='desktop'>-</td><td >-</td>
                        </tr><tr>
                            <td  >-</td>
                            <td  >jostein</td>
                            <td  >kusslid</td>
                            <td  >M</td><td  class='desktop'>-</td><td  class='desktop'>-</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4368592&sid=6931204&sd=1970-07-01T00:00:00+01:00&ed=2038-01-01T00:00:00+01:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F702259475%2Fsegments%2F17225508391' data-trigger='focus'  title='Top 5 forsøk'>00:30:21</a> (1) </td><td >-</td>
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

