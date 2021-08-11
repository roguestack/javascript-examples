<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
  
</head>
<body>
    <div class="container">
        <h1 id="mainDiv"></h1>
        <button onclick="stop()">Stop</button>
    </div>
<script type="text/javascript">
    var a=0;
    var timerOn=setInterval(start,1000);
    
    function start(){
        document.getElementById('mainDiv').innerText=a;
        a++;
    }
    function stop(){
        clearInterval(timerOn);
    }
    
</script>
</body>
</html>