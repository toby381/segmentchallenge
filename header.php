
<?php include "stravalogon.php"; ?><!DOCTYPE html>
<html lang="nb">
    <head>
        <meta property="og:title" content="<?php echo $page_name; ?>" />
        <meta property="fb:app_id" content="1559419401032598" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $page_path; ?>" />
        <meta property="og:image" content="<?php echo $page_image; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
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
        
		<script src="<?php echo $root_url ?>lib/Baertur-master/assets/lib/L.TileLayer.Kartverket/dist/L.TileLayer.Kartverket.min.js"></script>
		<script src="<?php echo $root_url ?>lib/Baertur-master/assets/lib/leaflet-gpx/gpx.js"></script>
       
         <!--CUSTOM-->
        <script src="<?php echo $root_url ?>lib/js/custom.js"></script>
        <link rel="stylesheet" href="<?php echo $root_url ?>/css/custom.css" />

   
        
        <title><?php echo $page_name .  " - SegmentChallenge"; ?></title>
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
    <?php if($currentUser->admin_role != 1) { ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-38163228-9', 'auto');
          ga('send', 'pageview');
            
            

        </script>
    
    <?php } ?>

<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">

    <!-- Brand -->
    <a class="navbar-brand" href="<?php echo $root_url ?>">
        <img src="<?php echo $root_url ?>png/segmentchallenge.png" style="width:50px;display:inline;"/> 
        SegmentChallenge
    </a>

    <!-- Links -->
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a  class="nav-link"  href="<?php echo $root_url ?>">Oversikt</a> 
        </li>
    </ul>
    <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item">
            <?php if( $currentUser->isAdmin() ) {?> 
                        <a class="nav-link" href="/admin/admin.php">Adminside </a>
            <?php  }?>

        </li>
        <?php  if( !$currentUser->isStravaUser() ){?>
        <?php } else {?>
        <li class="nav-item">
            <a  class="nav-link"  href="/index.php?logout=true">Logg ut</a> 
        </li>
        <?php } ?>
        <li class="nav-item">
        <?php  if( !$currentUser->isStravaUser() ){?>
                        <a href="<?php echo $loginURL ?>"><img src="<?php echo $root_url ?>png/LogInWithStrava.png" /></a>
                <?php } else {?>
                        <a target="_blank" href="https://www.strava.com/athletes/<?php echo $currentUser->id ?>">
                        <img style="height:40px;" src="<?php echo $currentUser->profile ?>" /></a>
                <?php } ?>
        </li>
    </ul>
</nav>
<div  class="container-fluid">