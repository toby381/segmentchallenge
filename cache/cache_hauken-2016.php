

<!DOCTYPE html>
<html lang="nb">
    <head>
        <meta property="og:title" content="Hauken 2016 - SegmentChallenge" />
        <meta property="fb:app_id" content="1559419401032598" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://segmentchallenge.lopsloggen.no/challenge/hauken-2016" />
        <meta property="og:image" content="http://segmentchallenge.lopsloggen.no/segmentchallenge.png" />
        <meta property="og:description" content="Årlig testløp fra Mariholtet til kula på Haukåsen" />
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

   
        
        <title>Hauken 2016 - SegmentChallenge - SegmentChallenge</title>
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
<script>document.body.style.backgroundImage = 'url(/images/hauken2016.jpg)';</script>
    <!-- ****************************************************** -->
    <!-- ********************  INFOBOKSER ********************** -->
    <!-- ****************************************************** -->
<header>
    <div style="margin-top: 150px;margin-bottom: 50px;">
    <h1 style="float:left;">Hauken 2016</h1>
    <div  style="margin: 10 0 0 20px;float:left;" class="fb-share-button" data-href="http://segmentchallenge.lopsloggen.no/challenge/hauken-2016" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsegmentchallenge.lopsloggen.no%2Fchallenge%2Fhauken-2016&amp;src=sdkpreparse">Del</a></div>

    <div style="font-size:16px;margin-top:-50px;margin-bottom:50px; clear:both;">
        <span class="tag tag-info">Totallengde: 2279 meter</span>
        <span class="tag tag-info">Høydemeter: 160 meter</span>
        
    </div>
    </div>

    
</header> 
    <p style=" clear:both;font-size:26px;"><span class="tag tag-warning">
        22. oktober 2016 - 30. oktober 2016        </span>

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
                    CR: Steffen S. Paulsen: 00:09:25 | Du: <i>ikke logget inn</i>                   </p>
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
                 
                    
   
    <script>var xhr = $.ajax({url: '/cache/hauken-2016.json',success: function(response) {var d = new Date( xhr.getResponseHeader('Last-Modified') );var datetext=d.getHours()+':'+d.getMinutes();$('#tid').html('Sist oppdatert: ' + datetext);}});</script>        <table id="effort" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">Fornavn</th>
                     <th rowspan="2">Etternavn</th>
                    <th rowspan="2">Kjønn</th>
                    <th colspan="1">Segmenter <small>(antall forsøk i parentes)</small></th>
                    <th rowspan="2">Total</th>
                </tr>
                <tr>
                                       <th style="font-size:10px;font-weight:lighter;">Hauken (Mariholtet Sportsstue - Haukåsen)</th>
                                        
                </tr>  
            </thead>
            <tbody>
            <tr>
                            <td  >1</td>
                            <td  >Leif-Andre</td>
                            <td  >Trøhaugen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=917869&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759115319%2Fsegments%2F18592579004' data-trigger='focus'  title='Top 5 forsøk'>00:10:01</a> (1) </td><td >00:10:01</td>
                        </tr><tr>
                            <td  >2</td>
                            <td  >Jon</td>
                            <td  >Ilseng</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=3210318&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759421875%2Fsegments%2F18600448998' data-trigger='focus'  title='Top 5 forsøk'>00:10:17</a> (1) </td><td >00:10:17</td>
                        </tr><tr>
                            <td  >3</td>
                            <td  >Ole Kristian</td>
                            <td  >Sørland</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=193361&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759437218%2Fsegments%2F18600789393' data-trigger='focus'  title='Top 5 forsøk'>00:10:20</a> (3) </td><td >00:10:20</td>
                        </tr><tr>
                            <td  >4</td>
                            <td  >Torbjørn</td>
                            <td  >Høvde</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2211926&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759448437%2Fsegments%2F18601018239' data-trigger='focus'  title='Top 5 forsøk'>00:10:25</a> (1) </td><td >00:10:25</td>
                        </tr><tr>
                            <td  >5</td>
                            <td  >Mads</td>
                            <td  >Blomfeldt</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=535974&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759435397%2Fsegments%2F18600745997' data-trigger='focus'  title='Top 5 forsøk'>00:10:38</a> (1) </td><td >00:10:38</td>
                        </tr><tr>
                            <td  >6</td>
                            <td  >Martin</td>
                            <td  >Hansen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=14615007&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759448038%2Fsegments%2F18601009194' data-trigger='focus'  title='Top 5 forsøk'>00:10:45</a> (1) </td><td >00:10:45</td>
                        </tr><tr>
                            <td  >7</td>
                            <td  >Arne</td>
                            <td  >Brørs</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=155564&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759330105%2Fsegments%2F18598387073' data-trigger='focus'  title='Top 5 forsøk'>00:10:51</a> (1) </td><td >00:10:51</td>
                        </tr><tr>
                            <td  >8</td>
                            <td  >Hermann</td>
                            <td  >Bruun</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=129486&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759474966%2Fsegments%2F18601608137' data-trigger='focus'  title='Top 5 forsøk'>00:11:01</a> (2) </td><td >00:11:01</td>
                        </tr><tr>
                            <td  >9</td>
                            <td  >Helge</td>
                            <td  >Solheim</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574106&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759475353%2Fsegments%2F18601616204' data-trigger='focus'  title='Top 5 forsøk'>00:11:43</a> (1) </td><td >00:11:43</td>
                        </tr><tr>
                            <td  >10</td>
                            <td  >Vegar</td>
                            <td  >Angelo</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2199625&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759425859%2Fsegments%2F18600530978' data-trigger='focus'  title='Top 5 forsøk'>00:11:55</a> (1) </td><td >00:11:55</td>
                        </tr><tr>
                            <td  >11</td>
                            <td  >Jacob</td>
                            <td  >Jacobsen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=389620&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759394427%2Fsegments%2F18599841288' data-trigger='focus'  title='Top 5 forsøk'>00:12:09</a> (1) </td><td >00:12:09</td>
                        </tr><tr>
                            <td  >12</td>
                            <td  >Sondre</td>
                            <td  >Sveen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=9931424&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F752220174%2Fsegments%2F18428977338' data-trigger='focus'  title='Top 5 forsøk'>00:12:47</a> (1) </td><td >00:12:47</td>
                        </tr><tr>
                            <td  >13</td>
                            <td  >Rasmus</td>
                            <td  >Evrin</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=1547517&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759533042%2Fsegments%2F18602814327' data-trigger='focus'  title='Top 5 forsøk'>00:12:57</a> (2) </td><td >00:12:57</td>
                        </tr><tr>
                            <td  >14</td>
                            <td  >Peter</td>
                            <td  >Laskowski</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2336194&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759419843%2Fsegments%2F18600404018' data-trigger='focus'  title='Top 5 forsøk'>00:13:16</a> (2) </td><td >00:13:16</td>
                        </tr><tr>
                            <td  >15</td>
                            <td  >Peer Morten</td>
                            <td  >Løchting</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=574121&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759428787%2Fsegments%2F18600596996' data-trigger='focus'  title='Top 5 forsøk'>00:13:34</a> (1) </td><td >00:13:34</td>
                        </tr><tr>
                            <td  >16</td>
                            <td  >hanne</td>
                            <td  >blomfeldt</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2161116&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759360895%2Fsegments%2F18599096537' data-trigger='focus'  title='Top 5 forsøk'>00:13:57</a> (1) </td><td >00:13:57</td>
                        </tr><tr>
                            <td  >17</td>
                            <td  >Atle</td>
                            <td  >Nikolaisen</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=573784&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759409964%2Fsegments%2F18600186850' data-trigger='focus'  title='Top 5 forsøk'>00:13:58</a> (1) </td><td >00:13:58</td>
                        </tr><tr>
                            <td  >18</td>
                            <td  >Christophe</td>
                            <td  >Pons</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=8722283&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759331511%2Fsegments%2F18598419658' data-trigger='focus'  title='Top 5 forsøk'>00:14:07</a> (1) </td><td >00:14:07</td>
                        </tr><tr>
                            <td  >19</td>
                            <td  >Sigrid</td>
                            <td  >Oftebro</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=2625489&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F753604918%2Fsegments%2F18465747240' data-trigger='focus'  title='Top 5 forsøk'>00:15:31</a> (1) </td><td >00:15:31</td>
                        </tr><tr>
                            <td  >20</td>
                            <td  >Jane</td>
                            <td  >Nilsen</td>
                            <td  >F</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=4587110&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F755307566%2Fsegments%2F18504271292' data-trigger='focus'  title='Top 5 forsøk'>00:16:34</a> (1) </td><td >00:16:34</td>
                        </tr><tr>
                            <td  >21</td>
                            <td  >Kristoffer</td>
                            <td  >Nylund</td>
                            <td  >M</td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=5013973&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759115079%2Fsegments%2F18592570841' data-trigger='focus'  title='Top 5 forsøk'>00:18:53</a> (1) </td><td >00:18:53</td>
                        </tr><tr>
                            <td  >22</td>
                            <td  >Kolbjørn</td>
                            <td  >Vogt</td>
                            <td  ></td><td  class='desktop'><a href='#'  data-html='true' data-poload='/pop.php?aid=15823847&sid=1282927&sd=2016-10-22T00:00:00+02:00&ed=2016-10-30T00:00:00+02:00&bt=https%3A%2F%2Fwww.strava.com%2Factivities%2F759354502%2Fsegments%2F18598954952' data-trigger='focus'  title='Top 5 forsøk'>00:26:09</a> (1) </td><td >00:26:09</td>
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

