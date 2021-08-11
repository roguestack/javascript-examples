<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>
    Enter Number:
    <input type="text" name="" onkeypress="checkVal(this)">
    <br>    
    <div id="err"></div>

<script type="text/javascript">
        function checkVal(digit){
            document.getElementById('err').style.color='red';
            //document.getElementById('err').innerText= digit.value;
            if(isNaN(digit.value)){
                document.getElementById('err').innerText= 'Enter Numbers only';
            }else{
                document.getElementById('err').innerText= '';
                if(digit.value.length >=10){
                    document.getElementById('err').innerText= `Number's can't be more than 10`;
                }
            }
        }
</script>

</body>

</html>