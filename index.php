<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Ejemplo de consumir APIs en Tripper</title>
</head>
<body>
 
<div>
 <h2>Consumir APIs en Tripper</h2>
 <ul id="products" />
 </div>
 <div>
 <h2>Busqueda de Posts</h2>
 <form name="form1" id="form1" action="https://jsonplaceholder.typicode.com/posts/">
 Post id a mostrar:
 <input type="text" id="id" name="id" size="3" placeholder="10" />
 


 <input type="button" name="mostrar" id="mostrar" value="Mostrar Post"/>

 </form>
 <p id="data" />
 </div>
 
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.min.js"></script>
<script src="assets/js/apicalls.js"></script>
 
</body>
</html>