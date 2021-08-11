<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caps Lock</title>
</head>
<body>
    <div class="container" style="padding: 20px;border:1px solid black;width:200px;">
        <input type="text" name='' id='name' placeholder="name">
        <br>
        <input type="password" id='pwd' placeholder="password">
        <div id="capcheck" style="color:red;"></div>
        <br>
        <div class="" style="display: flex;padding:10px;">
            <div class="">
                <button id='login'>Login</button>
            </div>
            <div class="">
                <button onclick="showTogglePassword(this)" id='showpwd'>Show Password</button>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    window.addEventListener('keyup',event=>{
        var checkCap = event.getModifierState('CapsLock');
        
        if(checkCap){
            document.getElementById('capcheck').innerText ="WARNING : Caps Lock is ON";
        }else{
            document.getElementById('capcheck').innerText ="";
        }
    });
    
    
    var pwdBox=document.getElementById('pwd');
    
    function showTogglePassword(inpt){
        var typ=pwdBox.getAttribute('type');
        if(typ == 'password'){
            pwdBox.setAttribute('type','text');
            inpt.innerText="Hide Password";
        }else{
            pwdBox.setAttribute('type','password');
            inpt.innerText="Show Password";
        }
    }

</script>
</html>