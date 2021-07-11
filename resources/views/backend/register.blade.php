<!DOCTYPE html>
<html lang="en">

<head>

    @include('css.css2')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        @if (session('success'))
                                            <div class="alert alert-success"> {{ session('success') }}</div>
                                        @endif
                                        @if (session('error'))
                                            <div class="alert alert-danger"> {{ session('error') }}</div>
                                        @endif
                                         <div class="form-group">
                                            <input type="name" name="name" class="form-control form-control-user"
                                                id="exampleInputName" aria-describedby="emailHelp"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group row">
                                           <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                           </div>
                                           <div class="col-sm-6">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleConfirmPassword"
                                                placeholder="Confirm Password">
                                           </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>

                                        <div class="text-center">
                                            <a class="small" href="">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login') }}">Login</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @include('js.js2')
</body>

</html>