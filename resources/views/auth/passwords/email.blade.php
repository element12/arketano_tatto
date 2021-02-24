<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Arkeronte Tatto</title>
    <!-- Styles -->
    <link href="{{ asset('css/login_style.css') }}" rel="stylesheet">

    <body>


        <section class="Form my-4 mx-5">
            <div class="container box">
                <div class="row ">
                    <div class="col-lg-5 px-0">
                        <img src="{{ asset('img/login_img.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="text1 font-weight-bold py-3">Akeronte Tattoo Studio </h1>
                        <h4 class="text1"> Recuperar contraseña</h4>
                       
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input id="email" type="email" placeholder="Email" name="email"  class="form-control my-4 p-2 @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn1 mt-3 mb-4">Enviar correo de cambio de contraseña</button>
                               
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                            <a href=" {{ route('login') }} ">Ingresar</a>
                            @endif
                            <p>¿No tienes una cuenta?<a href="{{ route('register') }}"> Registrarse aca</a></p>
                        </form>
                    </div>
                </div>
            </div>


        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js " integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js " integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js " integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG " crossorigin="anonymous "></script>
    </body>

</html>