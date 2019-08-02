<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function guardarNumeros(){

 var items = [];
 boxvalue = document.getElementById('box').value;
 items.push(boxvalue);  
 console.log(items);

}
</script>
</head>
<body>

<form onsubmit="guardarNumeros()">
 <p>Please insert the items</p>
 <input type="text" id="box">
 <input type="submit" value="Submit">
</form>

</body>
</html>