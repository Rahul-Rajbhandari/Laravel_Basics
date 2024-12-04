<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<form action="" method="POST">
  @csrf

  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value ="{{$contact->name}}" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="tel" name="mobile" value ="{{$contact->mobile}}" placeholder="Mobile Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>