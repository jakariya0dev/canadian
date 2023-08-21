<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canadim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Canadim</a>
         
            </div>
          </div>
        </nav>
        <br><br>
        <div class="row">
            <div class="card m-auto h-auto" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="my-3 text-center card-title">Admin Login</h5>
                    <form action="{{ route('user.login') }}">
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="user-email" type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Admin Password</label>
                            <input name="user-password" type="password" class="form-control" id="password">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
        <br><br>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>