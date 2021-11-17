<?php
session_start();



function getSaveButton($ku){ ?>
<style>
    input#img-button{
        background: #ccc url('img/save.png') no-repeat top left;
        padding-left:40px;
        height: 50px;
        width: 150px;
        box-shadow:inset 0px 1px 0px 0px #ffffff;
        background-color:transparent;
        border-radius:4px;
        border:2px solid #000000;
        display:inline-block;
        cursor:pointer;
        font-family:Arial;
        font-size:25px;
        font-weight:bold;
    }

    input#img-button:hover{
        background-color:rgb(43, 176, 179);
    }

</style>
 <form action="pageparts/createPDF.php" id="phpCode">
 <input  type="submit" name="submit" value="Save" id="img-button">  
</form> <!-- This is the form-->
<script>
        function runPhp() { 
        
         var php = document.getElementById("phpCode")
         
        php.submit() //submit the form 
        }
    </script>

<?php } ?>