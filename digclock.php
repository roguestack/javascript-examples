<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
</head>
<body onload="showTime()">
    <div class="container" style="text-align: center;color:blue;font-family:Cambria;">
        <h1>Digital Clock</h1>
        <h1 id="clock"></h1>
    </div>
<script type="text/javascript">
    function showTime(){

        var d=new Date();
        var h=d.getHours();
        var m=d.getMinutes();
        var s=d.getSeconds();
        var session ="AM";
        
        var h= h<10 ? "0"+h : h;
        var m= m<10 ? "0"+m : m;
        var s= s<10 ? "0"+s : s;
        
        if(h < 12){
            session="AM";
        }else{
            session="PM";
        }

        var time = h + ":" + m + ":" + s+ " " + session;
        document.getElementById('clock').innerHTML= time;
        setTimeout(showTime,1000);
    }
    
</script>
</body>
</html>