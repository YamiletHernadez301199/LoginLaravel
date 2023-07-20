<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">
                <h1 class="my-4 text-center">Login Usuario</h1>
                <form action="{{ route('logear') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="card mb-3 card border-dark mb-3 rounded" style="max-width: 540px; background-color:#F7F8F8" >
                        <div class="row g-0">
                          <div class="col-md-4 my-4">
                            <img src="https://sionweb.azurewebsites.net/Proyecto/images/login.png" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title text-center">Bienvenido</h3>
                               <label for="">Usuario</label>
                                <input type="text" class="form-control border-dark" name="name">
                                <label for="">Password</label>
                                <input type="password" class="form-control border-dark" name="password">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary mt-3">Ingresar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>