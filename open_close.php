<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Manipulation</title>
 </head>
<body>
    <button onclick="openGoogle()">Open Google.com</button>
    <button onclick="closeGoogle()">Close Google.com</button>
<script type="text/javascript">
        var web;
        function openGoogle(){
            web = window.open('https://www.google.com');
        }
        function closeGoogle(){
            web.close();
        }
</script>
</body>
</html>