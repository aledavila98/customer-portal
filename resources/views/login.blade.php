<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="{{route('authenticate')}}">
        @csrf
        <div class="container-fluid">
            <div class="col-8 form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="user">User:</label>
                    </div>
                    <div class="col-6">
                        <input id="user" class="input" name="email" placeholder="Enter your e-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="password">Password:</label>
                    </div>
                    <div class="col-6">
                        <input id="password" name="password" type="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="d-flex justify-content-center row">
                    <button class="btn btn-primary btn-sm">Login</button>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
