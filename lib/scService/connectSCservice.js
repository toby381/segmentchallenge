define([
    // The dojo/dom module is required by this module, so it goes
    // in this list of dependencies.
    'dojo/dom',
    'dojo/_base/xhr',
    'dojo/dom-construct',
    'dojo/dom-attr',
    "dojo/_base/fx",
    'dojo/query',
    "dojo/NodeList-traverse"
    
], function (dom, xhr, domConstruct,domAttr,fx,query) {
    var myApp = dom.byId("myApp");
    var templateNode = dom.byId("card-template");
    var template = domAttr.get(templateNode, 'innerHTML');
    myApp.innerHTML = '';
    domConstruct.place('<img class="center-image" src="png/loading.gif">',myApp);
    // This returned object becomes the defined value of this module
    return {

        loadData: function () {
            
            xhr.get({
                url:"http://segmentchallenge.lopsloggen.no/admin/challengeservice.php", handleAs:"json",
                load: function(data){
                    myApp.innerHTML = '';
                    for(var i=0; i<data.length-1; i++){
                        var test = domConstruct.place(template.replace("{{c_name}}",data[i].name).
                                                    replace("{{c_date}}",data[i].dates).
                                                    replace("{{c_image}}",data[i].image).
                                                    replace("{{c_path}}",data[i].path).
                                                    replace("{{c_path}}",data[i].path).
                                                    replace("{{a_id}}",data[i].area_id).
                                                    replace("{{a_id}}",data[i].area_id).
                                                    replace("{{a_id}}",data[i].area_id).
                                                    replace("{{color}}",data[i].color).
                                                    replace("{{active}}",data[i].active).
                                                    replace("{{c_description}}",data[i].description).
                                                    replace("{{a_name}}",data[i].area_name),myApp);
                       
                        var last = query("#myApp").last();
                        //fx.fadeIn({ node: last }).play();
                        
                        
                      
                        
                    }
                     //console.log(last);
                    fx.fadeIn({ node: myApp }).play();
                    
                }
            });
        }
    };
});


                    