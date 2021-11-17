<?php 
error_reporting(E_ERROR | E_PARSE);
include '../functions.php';
include '../Exchanger.php';


function getMiddlePart($currency){?>
    <style>
        
        .currencyTitle{
            font-size: 64pt;
            color: white;
        }
        h1{
            font-size: 46pt;
        }

        .shape{
            text-align:center;
            background-color:rgba(3,78,136,0.7);
            width:200px;
            height:60px;
            line-height:60px;
            color:white;
            margin:20px auto;
            position:relative;
        }

        .shape:before{
            content:"";
            width:0px;
            height:0px;  
            border-top:60px solid rgba(3,78,136,0.7);
            border-left:60px solid transparent;
            position:absolute;
            right:100%;
            top:0px;
        }

        #info{
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            font-size: 22px;
            letter-spacing: 0px;
            word-spacing: 0px;
            color: #000000;
            font-weight: normal;
            text-decoration: none;
            font-style: normal;
            font-variant: normal;
            text-transform: none;
        }

    </style>
        <div style="width: 40%; float:left; text-align: center;">
            <h1><?php echo getCurrencySign($currency->name)?> </h1>
            <div class="shape">
                <h2 ><?php echo "Buing: ". $currency->buying;?><h2>
            </div>
            <div class="shape">
                <h2><?php echo "Selling: ". $currency->selling;?><h2>
            </div>
        </div>
        <div style="width: 40%; float:right; margin-right: 15%; margin-top: 2%;">
          <p id="info"><?php 
            $name = $currency->name;
            if($name == "Zloty"){
                $name = 'Polish_złoty';
            } else if($name == "Pound"){
                $name = 'Pound_sterling'; //Swiss_franc
            } else if($name == "Frank"){
                $name = 'Swiss_franc'; 
            }


          $url = file_get_contents('https://en.wikipedia.org/api/rest_v1/page/summary/'.$name);
          $obj = json_decode($url);
          echo $obj->extract;

          ?></p>
        </div>
<?php
}
?>