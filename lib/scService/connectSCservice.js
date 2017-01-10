define([
    // The dojo/dom module is required by this module, so it goes
    // in this list of dependencies.
    'dojo/dom',
    'dojo/_base/xhr',
    'dojo/dom-construct',
    'dojo/dom-attr',
    "dojo/topic"
    
    
], function (dom, xhr, domConstruct,domAttr,topic) {
    var myApp = dom.byId("myApp");
    var jsonData;
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
                    jsonData = data;
                    topic.publish("challengeSCservice/topic", "loaded");
                }
            });
        },
        
        generateCards: function () {
            myApp.innerHTML = '';
            for(var i=0; i<jsonData.length-1; i++){
                var test = domConstruct.place(template.replace("{{c_name}}",jsonData[i].name).
                                            replace("{{c_date}}",jsonData[i].dates).
                                            replace("{{c_image}}",jsonData[i].image).
                                            replace("{{c_path}}",jsonData[i].path).
                                            replace("{{c_path}}",jsonData[i].path).
                                            replace("{{a_id}}",jsonData[i].area_id).
                                            replace("{{a_id}}",jsonData[i].area_id).
                                            replace("{{a_id}}",jsonData[i].area_id).
                                            replace("{{color}}",jsonData[i].color).
                                            replace("{{active}}",jsonData[i].active).
                                            replace("{{c_description}}",jsonData[i].description).
                                            replace("{{a_name}}",jsonData[i].area_name),myApp);

            }
            
           
        }
    };
});


                    