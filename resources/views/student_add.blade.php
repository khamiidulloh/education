<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h1>Student add</h1>
<form action="{{route('add_student') }}" method="POST" class="row g-3" enctype="multipart/formdata">
  @csrf
  <div class="col-md-6">
    <label for="file1" class="form-label">Avatar</label>
    <input type="file" class="form-control" name="avatar" id="file1" >
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Ismingiz</label>
    <input type="text" class="form-control"name="fullname" id="inputEmail4"  >
  </div>
  <div class="col-md-6">
    <lpabel for="inputEmail3" class="form-label">Yosh</label>
    <input type="number" class="form-control" name="age" id="inputEmail3">
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-primary">Enter</button>
  </div>
</form>
</div>
  </div>
    </body>
</html>