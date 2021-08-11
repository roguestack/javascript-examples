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
        <button onclick="winheight()">available height</button>
        <button onclick="winwidth()">available width</button>
        <button onclick="wincolordepth()">color depth</button>
    </div>
<script type="text/javascript">
    
    function winheight(){
        alert(screen.height);
    }
    function winwidth(){
        alert(screen.availWidth);
    }
    function wincolordepth(){
        alert(screen.colorDepth);
    }

    
    
</script>
</body>
</html>