<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('save0189')}}" method="post">
  {{csrf_field()}}
  <label for="nama">First name:</label><br>
  <input type="text" id="nama" name="nama" value="John"><br>
  <label for="harga">Last name:</label><br>
  <input type="text" id="harga" name="harga" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
