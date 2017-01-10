
<script>document.body.style.backgroundColor = '#eee';</script>
<script>

    $(document).ready(function() {
        $('.nav-tabs .nav-item a').click(function(event){
            id = $(this).data('area');
            if(id==0) {
                $('.challenge').show();
            } else {
                $('.challenge').hide();
                $('.area_'+id).show();
            }
           


        });
    });


</script>
<script type="text/template" id="card-template">

<div style="overflow:hidden;" class="card area_{{a_id}} challenge">
    <a href="challenge/{{c_path}}">
        <img class="card-img-top" src="<?php echo $root_url ?>images/{{c_image}}"  width="100%" />
    </a>


    <div class="card-block">
         <h4 class="card-title">
            <a href="challenge/{{c_path}}">{{c_name}}</a> - <span style="font-size:13px; color:{{color}}">{{active}}</span>
        </h4>
         <p style="font-size:10px;margin:0;"><br>{{c_description}}</p>
    </div>


    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="float:left; width:50%;">{{a_name}}</li> 
        <li style="font-size:10px;float:left; width:50%; height:50px;" class="list-group-item">{{c_date}}</li>  
    </ul>


</div>
<p class="area_{{a_id}} challenge"></p> <p class="area_{{a_id}} challenge"></p>

</script>
<script>
    // Instead of using data-dojo-config, we're creating a dojoConfig
    // object *before* we load dojo.js; they're functionally identical,
    // it's just easier to read this approach with a larger configuration.
    var dojoConfig = {
        async: true,
        // This code registers the correct location of the "demo"
        // package so we can load Dojo from the CDN whilst still
        // being able to load local modules
        packages: [{
            name: "scService",
            location: location.pathname.replace(/\/[^/]*$/, '') + '/lib/scService'
        }]
    };
</script>
<!-- load Dojo -->
<script src="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojo/dojo.js"></script>

<script>
    require([
        "dojo/request", 
        "dojo/topic",
        'scService/connectSCservice',
        'dojo/domReady!'
    ], function (request,topic,connectSCservice) {
       
        topic.subscribe("challengeSCservice/topic", function(){
            console.log("received:", arguments);
            connectSCservice.generateCards();
            require([
                "dojo/mouse", 
                "dojo/on", 
                "dojo/dom",
                "dojo/dom-style",
                "dojo/_base/fx",
                "dojo/query",
                "dojo/NodeList-dom"
            ], function(mouse, on, dom, domStyle,fx, query) {

                var n = query("#myApp div");
                //console.log(n);
                n.forEach(function(n, i){
                   domStyle.set(n, "opacity", 0);
                    fx.fadeIn({ node: n }).play();
                    
                    // rollover animasjon
                    on(n, mouse.enter, function(evt){
                        var img = query("img", n);
                       //console.log(img.length);
                        if(img.length>0) {
                           var nw = domStyle.get(n, "width");
                            fx.animateProperty({
                               node:img[0],
                               properties: {
                                 width: nw+10,
                                 marginLeft:-5,
                                 marginTop:-5,
                                   opacity:0.7
                               }
                             }).play();
                        }
                        

                    });
                    // rollout animasjon
                    on(n, mouse.leave, function(evt){
                        var img = query("img", n);
                        console.log(img.length);
                        if(img.length>0) {
                            var nw = domStyle.get(n, "width");
                            fx.animateProperty({
                               node:img[0],
                               properties: {
                                  width: nw,
                                marginLeft:0,
                                 marginTop:0,
                                    opacity:1
                               }
                             }).play();
                        }
                    });
                });

            }); 
        });
        
        connectSCservice.loadData();
        
    });
    
                 

</script>


<div style="margin-top:150px;"></div>
<p class="card-text"><i>Har du lyst til å lage en egen utfordring? Send en PM på <a target="_blank" href="https://www.facebook.com/Segmentchallenge/">Facebook-siden</a></i></p>


<ul style="margin-bottom:5px;" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a id="tab0" class="nav-link active" href="#profile" role="tab" data-toggle="tab" data-area="0">Alle</a>
    </li>  
<?php
    
  
            $sql = "SELECT * FROM areas";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // output list of each row
                
                while($row = $result->fetch_assoc()) { 
                    
                   ?>
                    <li class="nav-item">
                        <a id="tab<?php echo $row["id"];?>" class="nav-link" href="#profile" role="tab" data-toggle="tab" data-area="<?php echo $row["id"];?>"><?php echo $row["name"]; ?></a>
                    </li>
                <?php 
                    
                }
            }
    
            ?>

</ul>
<div class="row">
    <div class="col-sm-12">
        <div id="myApp" class="card-columns" style="min-height:200px;" >
        </div>
    </div>
</div> 
<div style="margin-bottom:150px;"></div>