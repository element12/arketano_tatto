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
                    <div class="col-lg-5 px-1">
                        <img src="./img/login_img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-2">
                       
                        <h4 class="text1 "> Registrarse</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input id="email" type="email" placeholder="Correo" name="email"  class="form-control my-4 p-2 @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="col-lg-7">
                                <input id="name" type="text"  placeholder="Nombre"class="form-control my-4 p-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input id="password" type="password" placeholder="Password"  name="contraseña" class="form-control my-3 p-2 @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input id="password-confirm" type="password" placeholder="Confirmar contraseña"  name="password-confirm" class="form-control my-3 p-2 @error('password') is-invalid @enderror">
                            </div>
 
                
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn1 mt-3 mb-4">Ingresar</button>
                               
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                            <a href=" {{ route('password.request') }} ">¿Olvido su contraseña?</a>
                            @endif
                            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}"> Ingresar</a></p>
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