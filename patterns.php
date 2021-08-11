<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patterns</title>
</head>
<body>

<script type="text/javascript">
    var rows = prompt("Enter your number");
    print_pattern(rows);

    function print_pattern(rows){
        //alert(rows);
        for(var i=1;i<=rows;i++){
            for(var j=1;j<=i;j++){
                document.write('*');
            }
            document.write('<br>');
        }   
        //alert(rows);
        for(var i=rows;i>=1;i--){
            for(var j=i;j>=1;j--){
                document.write('*');
            }
            document.write('<br>');
        }   
    }
    
</script>
</body>
</html>