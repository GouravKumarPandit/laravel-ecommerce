<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        *{
            overflow: hidden;
        }
        body{
            height: 100vh !important;
        }
        #login-page {
            background-image: url('admin_assets/images/icon/login-bg.jpg') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        img{
            mix-blend-mode: multiply;
        }
    </style>
</head>

<body class="" id="login-page">
    <div class="row">
        <div class="col-12">
            <div class="row mx-5 mt-5">
                <div class="col-md-4"></div>
                <div class="col-12 col-md-4 card my-5" style="background-color: rgb(239, 239, 239);">              
                    <main class="form-signin w-100 m-auto">
                        <form action="{{route('admin.auth')}}" method="post">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('admin_assets/images/icon/login.jpg') }}" alt="CoolAdmin" width="100px" />
                            </div>
                            <div class="mt-3 pb-3">
                                @if(session()->has('error'))
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        {{session('error')}}  
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div> 
                                @endif 	
                                <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
                                <div class="form-floating my-3">
                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                    
                                <div class="form-check text-start my-3">
                                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                                <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
                            </div>
                        </form>
                    </main>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>
