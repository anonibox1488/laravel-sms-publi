
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>SMS Jose Torrealba</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</head>
<body class="text-center">
    <div class="container">
        <div class="row">
            <div class="center-block" style="margin:auto; height: 530px; display: flex; align-items: center; justify-content: center;">
                <div class="col-12">
                    <div class="card border-primary mb-3" style="max-width: 18rem; border-radius: 25px;">
                        <div class="card-header" style="border-top-right-radius:25px; border-top-left-radius: 25px">
                            Envio SMS de prueba
                        </div>
                        <div class="card-body text-primary">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                            @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @endif
                            <form action="/enviar" method="POST">
                                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="tlf">Nro Telefonico</label>
                                    <input type="text" id="tlf" class="form-control" required readonly value="584143259878">    
                                </div>

                                <div class="form-group">
                                    <label for="mensaje">Mensaje</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3" maxlength="150" required autofocus></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                            <br>
                            <p class="card-text">El Nro Telefonico es el unico que funciona para la prueba</p>
                        </div>
                    </div>        
                </div>
            </div>    
        </div>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy;Jose Torrealba 2019</p>
</body>
</html>
