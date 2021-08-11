<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
</head>
<body>
<div class="main">
    welcome to V2web solutions
</div>
<div class="main">
    welcome to OmTech Solutions
</div>
</body>
<script type="text/javascript">
    var x = document.getElementsByClassName('main')[1].innerHTML ;
    console.log(x);
</script>
</html>