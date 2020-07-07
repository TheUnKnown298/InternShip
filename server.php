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
        <p>ádsad</p>
        <a href="./homepage.php">sadasdasdasdasd </a>
        <script>
            $(document).ready(function(){
                $(".btn").click(function(){
                    $.get("https://maps.googleapis.com/maps/api/place/textsearch/json?query=CIC+tower&key=AIzaSyD4FqZXrwjZo0LcYtHcsB3iFJxx_9SPVKE", function(data,status){
                    console.log("Data",data.results[0]);

                    document.getElementById("show").innerHTML="Data: " + JSON.stringify(data);

                    $href=data.results[0].photos[0].photo_reference;

                    console.log(status);

                    $base="https://maps.googleapis.com/maps/api/place/photo?maxheight=2268&photoreference=";

                    $Akey="AIzaSyD4FqZXrwjZo0LcYtHcsB3iFJxx_9SPVKE";

                    $src=$base+$href +'&key='+ $Akey;

                    $(".img2").append("<img src="+$src+"></img>");

                    document.getElementById("img").innerHTML=$src;
                    });
                });
            });
        </script> 
       
    
        <button class="btn">aaa</button>
        <div class="img" id="img"></div>
        <div class="img2"></div>
        <div id="show"></div>
        
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4FqZXrwjZo0LcYtHcsB3iFJxx_9SPVKE&libraries=places"></script>
    </body>
</html>
