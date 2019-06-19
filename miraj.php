<html>
    <head>
        <tittle></tittle>
        <style type="text/css">
            #formtext{
                position:absolute;
                top:364px;
                left:568px;
                color:aqua;
                animation:anim 5s infinite;
            }
            @keyframes anim{
                0%{color:red; transform:scale(1.5);}
                 25%{color:black;transform:scale(0.8);}
                 30%{color:gold;transform:scale(1.5);}
                 50%{color:green;transform:scale(0.8);}
                 75%{color:yellow;transform:scale(1.5);}
                 100%{color:blue;transform:scale(1.);}
                 125%{color:maroon;transform:scale(1.5);}
                 130%{color:white;transform:scale(0.8);}
                0%{color:mediumaquamarine;transform:scale(1.5);}
                 25%{color:cyan;transform:scale(0.8);}
                 30%{color:aquamarine;transform:scale(1.5);}
                 50%{color:crimson;transform:scale(1);}
                 75%{color:yellow;transform:scale(1.5);}
                 100%{color:blue;transform:scale(0.8);}
                 125%{color:maroon;transform:scale(1.5);}
                 130%{color:white;transform:scale(0.8);}
            }
        </style>
    </head>
   
        <body background="images/yes.jpg" style:"background-size:1366px 680px";>
            <h1 id="formtext">FROM...<?php echo $_GET['name'];?></h1>
        </body>
</html>