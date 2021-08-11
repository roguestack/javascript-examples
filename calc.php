<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc in Java Script</title>
</head>
<body>
    <input type="number" id="arg1">
    <input type="number" id="arg2">
    <br>
    <br>
    <button onclick='add()' id="add">+</button>
    <button onclick='sub()' id="sub">-</button>
    <button onclick='divide()' id="divide">/</button>
    <button onclick='multi()' id="multi">X</button>
    <button onclick='mod()' id="mod">%</button>
    <br>
    <div class="ans" style="color:red;font-size:25px;">
        <input type="text" id="res">
    </div>
</body>
<script type="text/javascript">

function add(){
    var num1=document.getElementById('arg1').value;
    var num2=document.getElementById('arg2').value;
    var z=parseInt(num1)+ parseInt(num2);
    document.getElementById('res').value=z;
}
function sub(){
    var num1=document.getElementById('arg1').value;
    var num2=document.getElementById('arg2').value;
    var z=parseInt(num1)- parseInt(num2);
    document.getElementById('res').value=z;
}
function divide(){
    var num1=document.getElementById('arg1').value;
    var num2=document.getElementById('arg2').value;
    var z=parseInt(num1) / parseInt(num2);
    document.getElementById('res').value=z;
}
function multi(){
    var num1=document.getElementById('arg1').value;
    var num2=document.getElementById('arg2').value;
    var z=parseInt(num1) * parseInt(num2);
    document.getElementById('res').value=z;
}
function mod(){
    var num1=document.getElementById('arg1').value;
    var num2=document.getElementById('arg2').value;
    var z=parseInt(num1) % parseInt(num2);
    document.getElementById('res').value=z;
}
</script>
</html>