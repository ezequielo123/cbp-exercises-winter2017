<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Transformation</title>
    <style>
        #wrapper {
            position: relative;
            height: 800px;
            background: lightblue;
        }

        #wrapper2 {
            position: relative;
            height: 800px;
            background: lightgreen;
        }

        #wrapper3 {
            position: relative;
            height: 800px;
            background: red;
        }

        #box{
            padding: 1em;
            width: 200px;
            opacity: 0.7;
        }

        #box2 {
            background-color: darkblue;
            transform: translate(-10%, -10%) rotateZ(130deg);
            
        }

        #box { 
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: 0 0;
            transform: translate(-50%, -50%); /*is the same as  -- transform: translateX(-50%); */
        }

        .button {
            font-size: 20px;
            padding-left: 65px;
            text-decoration: none;
        }
     </style>   
</head>
<body>
        
    <div id="wrapper">    
        <div id="box">
            <img src="https://i.stack.imgur.com/obv1J.png" width="200">
            <a href="#wrapper2" class="button">About Us</a>
        </div>
        
    </div>   
    <div id="wrapper2">    
        <div id="box">
            <img src="https://i.stack.imgur.com/obv1J.png" width="200">
            <a href="#wrapper3" class="button">Work</a>
        </div>
        
    </div>  
    <div id="wrapper3">    
        <div id="box">
            <img src="https://i.stack.imgur.com/obv1J.png" width="200">
            <a href="#wrapper" class="button">To the top</a>
        </div>
        
    </div>  

    <script>
            $('a').click(function(){
                $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
                }, 500);
                return false;
            });
    </script>

</body>
</html>

