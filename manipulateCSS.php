<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Manipulation</title>
    <style type="text/css">
    #mainDiv{
        font-size: 20px;
        color: blue;
    }
    </style>
</head>
<body>
    <div id="mainDiv" onmouseenter="modify()" onmouseleave="back()">
        Jay Patel
    </div>
<script type="text/javascript">
    function modify(){
        document.getElementById('mainDiv').style.fontSize='50px';
        document.getElementById('mainDiv').style.color="red";
        //document.getElementById('mainDiv').style.transform='translateX(100px)';
    }
    function back(){
        document.getElementById('mainDiv').style.fontSize='20px';
        document.getElementById('mainDiv').style.color='blue';
        document.getElementById('mainDiv').style.transition='2s';
        //document.getElementById('mainDiv').style.transform='translateX(0px)';
    }
    
</script>
</body>
</html>