<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!--Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">
</head>
<body>
    <div class="container" style="margin-top: 100px; width: 600px;"></div>
    <h2 class="text-center">Please Type Your Email Address</h2>
    <h5 class="text-center">Demo App: How To Send Email With Gmail</h5><br><br>

    <!--Code to show Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Code to show Error Message -->
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif

        <!-- Form to input email address -->
        <form action="hello/send-welcome-email" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" class="form-control text-center" name="email" placeholder="Provide an email"><br>
                <button type="submit" class="btn btn-primary btn-md" style="margin-left: 0px;margin: auto;display: block;"t>SEND</button>
            </div>
        </form>
        </div>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script></strong>
</body>
</html>