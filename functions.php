<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Script Functions</title>
</head>
<body>
    <div id="rest">
        <input type="text" id="name">
        <button onclick='greet()' id="greetPerson">Greet</button>
        <div class="greet">

        </div>
    </div>
</body>
<script type="text/javascript">

function greet(){
    var name=document.getElementById('name').value;
    var prefix="Hello " + name;
    document.getElementsByClassName('greet')[0].innerHTML=prefix;
}

</script>
</html>