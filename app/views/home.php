<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Example</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-success {
      background-color: #FF6B01; 
    }
    .custom-warning {
      background-color: #FF6B01; 
    }
    .custom-info {
      background-color: #FF6B01; 
    }

  </style>
</head>
<body>

<div class="container-fluid mt-0">
  <div class="row">
    <div class="col custom-success"></div>
    <div class="col-6 custom-warning">
      <div class="input-group mb-3 mt-5">
        <input type="text" class="form-control" placeholder="Something clever..">
        <button class="btn btn-primary" type="button">OK</button>
        <button class="btn btn-danger" type="button">Cancel</button>
      </div>
    </div>
    <div class="col custom-success"></div>
  </div>
</div>

<div class="container-fluid mt-0">
  <div class="row">
    <div class="col custom-success"></div>
    <div class="col-6 custom-warning">
      <div class="input-group mb-3 mt-1">
        <ul class="nav nav-pills">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Eletrônicos usados</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Eletrônicos com defeito</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Eletrônicos vintage</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Todos</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col custom-success"></div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
