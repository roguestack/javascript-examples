<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animations</title>
    <style>
        .yellow{
            height: 400px;
            width: 400px;
            background-color: yellow;
        }
        .red{
            height: 50px;
            width: 50px;
            background-color: red;
        }
    </style>
</head>
<body>
    <button onclick="animateMe()">Click me</button>
    <div class="yellow" id="ybox">
        <div id="rbox" class="red">
        </div>
    </div>
<script type="text/javascript">
    function animateMe(){
        var rbox=document.getElementById('rbox');
        rbox.style.transform='translate(350px,350px)';
        rbox.style.transition='1.5s';
    }
    
</script>
</body>
</html>