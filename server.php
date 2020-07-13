<?php include_once('htmldom.php')?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Lalala</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lalala</title>
        <style>
            html *{
                font-size: 1.5em !important;
            }
        </style>
    </head>
    <body>
        <a href="./homepage.php">sadasdasdasdasd </a>

       
        <form>
            <input type="text" id = "text">
            <button class="btn" type="submit" style="border: 5px solid black">Search</button>
        </form>
        
        <div class="img" id="img"></div>
        <img class="img2"></img>
        <ul id = "list">
        </ul>
            
        
        
    </body>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4FqZXrwjZo0LcYtHcsB3iFJxx_9SPVKE&libraries=places"></script>

    <script>
            $(document).ready(function(){
                $(".btn").click(function(e){
                    e.preventDefault();
                    var Akey="AIzaSyD4FqZXrwjZo0LcYtHcsB3iFJxx_9SPVKE";
                    
                    var query = $('#text').val();
                    var urlmap=  "https://maps.googleapis.com/maps/api/place/textsearch/json?query=" + query + "&key=" + Akey;
                    // var temp = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.0193347,105.7910315&radius=3000&&keyword="+query+"&key=" +Akey;
                    $.get(urlmap, function(data,status){
                        console.log("Data",data);
                        console.log(status);   

                        if(data.status=="ZERO_RESULTS"){
                            alert("Type again, u idiot!" + query + Akey);
                        }
                        
                        else{
                            // document.getElementById("show").innerHTML="Data: " + JSON.stringify(data);
                            var href=data.results[0].photos[0].photo_reference;
                            var base="https://maps.googleapis.com/maps/api/place/photo?maxheight=2268&photoreference=";
                            var src= base+ href +'&key='+ Akey;
                            // $(".img2").attr   ("src", src);
                            // document.getElementById("img").innerHTML=src;
                            //https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=Museum%20of%20Contemporary%20Art%20Australia&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=YOUR_API_KEY
                            
                            var ID=data.results[0].place_id;
                            var urlrv="https://maps.googleapis.com/maps/api/place/details/json?place_id=" +ID+"&key=" + Akey;
                            $.get(urlrv, function(data1,status1){
                                var temp = data1.result.reviews;
                                $.each(temp, function(index, value){
                                    $("#list").append("<li> Author: "+value.author_name+"<br>Rating: "+value.rating+"<br>Content: "+value.text+"</li><br>");
                                    // document.getElementById("show").innerHTML= JSON.stringify(value) +"<br>";                             
                                    console.log(data1,status1);            
                                });
                            });
                        };
                    });

                });
            });
        </script> 
</html>
