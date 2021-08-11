<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Listner</title>
</head>
<body>
<div class="mainEvent">
    <div id="counter">Main</div>
    <button id="btnclick">Add Event Listner</button>
    <button id="btnremove" onclick='stop()'>Remove Event Listner</button>
</div>    
</body>
<script type="text/javascript">
    var i=0;
    document.getElementById('btnclick').addEventListener('click',timerOn);
    
    function timerOn(){
        document.getElementById('counter').innerText = i;
        i++;
    } 
    
    // document.getElementById('btnclick').addEventListener('click',function(){
    //     document.getElementById('counter').innerText = i;
    //     i++;
    // });
    
    document.getElementById('btnclick').addEventListener('mouseenter',colorchange);
    document.getElementById('btnclick').addEventListener('mouseleave',colorback);

    function colorchange(){
        document.getElementById('counter').style.background="green";
    }
    function colorback(){
        document.getElementById('counter').style.background="white";
    }

    function stop(){
        document.getElementById('btnclick').removeEventListener('click',timerOn);
    }

</script>
</html>