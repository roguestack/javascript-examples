<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt</title>
</head>
<body>
    Name: <i id="result"></i>
    <br>
    <br>
    <button onclick="show()">Show Me Yourself</button>    
</body>
<script type="text/javascript">
    function show(){
        var result=prompt('Enter your Name','');
        document.getElementById('result').innerHTML=result;
    }
    
</script>
</html>