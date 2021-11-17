<style>
    .header {
  display: flex;
  justify-content: space-between;
  height: 100px;
  width: 100%;
  text-align: center;
  background: #141f1d;
  color: white;
  vertical-align: middle;
}

#title{
  font-style: italic;
  font-size: 30px;
  font-family: Arial, Helvetica, sans-serif;
}


#lineLeft{
  height:50%;
  width:40%;
  border-bottom:2px solid rgb(212, 212, 212);
  -webkit-animation: increase 3s;
  -moz-animation:    increase 3s; 
  -o-animation:      increase 3s; 
  animation:         increase 3s; 
  animation-fill-mode: forwards;
}

@keyframes increase {
    100% {
      width:25%;
    }
}

#lineRight{
  height:50%;
  width: 100%;
  text-align: right;
  float:right;
  border-bottom:1px solid rgb(212, 212, 212);
  -webkit-animation: increase 3s;
  -moz-animation:    increase 3s; 
  -o-animation:      increase 3s; 
  animation:         increase 3s; 
  animation-fill-mode: forwards;
}

@keyframes increase {
    100% {
        width: 5%;
    }
}
</style>
<div class="header">
    <div id="lineLeft"></div>
    <h4 id="title">   Exchange rate   </h4>
    <div id="lineLeft"></div>
</div>