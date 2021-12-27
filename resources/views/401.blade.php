<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401</title>
  <link rel="icon" href="{{ url('public/dist') }}/img/admin.ico">
    <style>
        *{margin:0px auto;padding:0px;text-align:center;}
body{background-color:#000;}
.cont_principal{position:absolute;width:100%;height:100%;overflow:hidden;}
.cont_error{position:absolute;width:100%;height:300px;top:50%;margin-top:-150px;}
.cont_error > h1{font-family:'Lato', sans-serif;font-weight:400;font-size:150px;color:#fff;position:relative;left:-100%;transition:all 0.5s;}
.cont_error > p{font-family:'Lato', sans-serif;font-weight:300;font-size:24px;letter-spacing:5px;color:#9294AE;position:relative;left:100%;transition:all 0.5s;transition-delay:0.5s;-webkit-transition:all 0.5s;-webkit-transition-delay:0.5s;}
.cont_aura_1{position:absolute;width:300px;height:120%;top:25px;right:-340px;background-color:#8A65DF;box-shadow:0px 0px 60px 20px rgba(137,100,222,0.5);-webkit-transition:all 0.5s;transition:all 0.5s;}
.cont_aura_2{position:absolute;width:100%;height:300px;right:-10%;bottom:-301px;background-color:#8B65E4;box-shadow:0px 0px 60px 10px rgba(131, 95, 214, 0.5),0px 0px 20px 0px rgba(0,0,0,0.1);z-index:5;transition:all 0.5s;-webkit-transition:all 0.5s;}
.cont_error_active > .cont_error > h1{left:0%;}
.cont_error_active > .cont_error > p{left:0%;}
.cont_error_active > .cont_aura_2{animation-name:animation_error_2;animation-duration:4s;animation-timing-function:linear;animation-iteration-count:infinite;animation-direction:alternate;transform:rotate(-20deg);}
.cont_error_active > .cont_aura_1{transform:rotate(20deg);right:-170px;animation-name:animation_error_1;animation-duration:4s;animation-timing-function:linear;animation-iteration-count:infinite;animation-direction:alternate;}
@-webkit-keyframes animation_error_1{from{-webkit-transform:rotate(20deg);transform:rotate(20deg);}
 to{-webkit-transform:rotate(25deg);transform:rotate(25deg);}
}
@-o-keyframes animation_error_1{from{-webkit-transform:rotate(20deg);transform:rotate(20deg);}
 to{-webkit-transform:rotate(25deg);transform:rotate(25deg);}
}
@-moz-keyframes animation_error_1{from{-webkit-transform:rotate(20deg);transform:rotate(20deg);}
 to{-webkit-transform:rotate(25deg);transform:rotate(25deg);}
}
@keyframes animation_error_1{from{-webkit-transform:rotate(20deg);transform:rotate(20deg);}
 to{-webkit-transform:rotate(25deg);transform:rotate(25deg);}
}
@-webkit-keyframes animation_error_2{from{-webkit-transform:rotate(-15deg);transform:rotate(-15deg);}
 to{-webkit-transform:rotate(-20deg);transform:rotate(-20deg);}
}
@-o-keyframes animation_error_2{from{-webkit-transform:rotate(-15deg);transform:rotate(-15deg);}
 to{-webkit-transform:rotate(-20deg);transform:rotate(-20deg);}
}
}
@-moz-keyframes animation_error_2{from{-webkit-transform:rotate(-15deg);transform:rotate(-15deg);}
 to{-webkit-transform:rotate(-20deg);transform:rotate(-20deg);}
}
@keyframes animation_error_2{from{-webkit-transform:rotate(-15deg);transform:rotate(-15deg);}
 to{-webkit-transform:rotate(-20deg);transform:rotate(-20deg);}
}
.snowflake{color:#fff;font-size:1em;font-family:Arial;text-shadow:0 0 1px #000;}
@-webkit-keyframes snowflakes-fall{0%{top:-10%}
100%{top:100%}
}
@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0px);transform:translateX(0px)}
50%{-webkit-transform:translateX(80px);transform:translateX(80px)}
100%{-webkit-transform:translateX(0px);transform:translateX(0px)}
}
@keyframes snowflakes-fall{0%{top:-10%}
100%{top:100%}
}
@keyframes snowflakes-shake{0%{transform:translateX(0px)}
50%{transform:translateX(80px)}
100%{transform:translateX(0px)}
}
.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}
.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}
.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}
.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}
.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}
.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}
.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}
.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}
.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}
.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}
.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}
.demo{font-family:'Raleway', sans-serif;color:#fff;display:block;margin:0 auto;padding:15px 0;text-align:center;}
.demo a{font-family:'Raleway', sans-serif;color:#000;}


    </style>
</head>
<body>

<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
</div> 
<div class="cont_principal">
<div class="cont_error">
<h1>401</h1>  
  <p>Bạn không có quyền truy cập.</p>
  </div>
<div class="cont_aura_1"></div>
<div class="cont_aura_2"></div>
</div>
<script>
    window.onload = function(){
document.querySelector('.cont_principal').className= "cont_principal cont_error_active";  
  
}
</script>
</body>
</html>

