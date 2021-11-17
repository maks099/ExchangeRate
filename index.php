<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <?php include ('pageparts/header.php');?>
        <div class="main">
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/dollars.jpg);">
              </div>
              <div class="overlay">
                <button type="button" id="dollar" class="currencyButton" onclick="a1_onclick('dollar')">&#36; dollar
                </button>

              </div> 
            </div>
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/euros.jpg);">
              </div>
              <div class="overlay">
              <button type="button" id="euro" class="currencyButton" onclick="a1_onclick('euro')">&#8364;uro
                </button>

              </div> 
            </div>
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/zlotyy.jpg);">
              </div>
              <div class="overlay">
              <button type="button" id="zloty" class="currencyButton" onclick="a1_onclick('zloty')">zł
                </button>
              </div> 
            </div>
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/pounds.jpg);">
              </div>
              <div class="overlay">
              <button type="button" id="pound" class="currencyButton" onclick="a1_onclick('pound')">&#163; (Pound)
                </button>
              </div> 
            </div>
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/ruble.jpg);">
              </div>
              <div class="overlay">
              <button type="button" id="ruble" class="currencyButton" onclick="a1_onclick('ruble')">&#8381;uble
                </button>
              </div> 
            </div>
            <div class="mainCurrencyDiv">
              <div class="currencyBlock" style="background-image: url(img/chf.jpg);">
              </div>
              <div class="overlay">
              <button type="button" id="frank" class="currencyButton" onclick="a1_onclick('frank')">&#8355;rank
                </button>
              </div> 
            </div>
</div>
          <?php include ('pageparts/footer.php');?>

       
    </body>
    
<script language="javascript" type="text/javascript">
        function a1_onclick(id) {
            //alert(a1);
            document.getElementById(id).style.backgroundColor = "#000000";
            window.location = 'currencyPage.php?p='+id;
           
            
        }
    </script>
   
</html>
