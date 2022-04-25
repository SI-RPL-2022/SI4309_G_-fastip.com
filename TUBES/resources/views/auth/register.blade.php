<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--    Custom-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Register</title>
</head>
<body>

<div class="container">
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block mt-3">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="my-5 bg-red100">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 p-5">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12 p-3">
                        <img src="{{ asset('assets/files/logo-pmi.png') }}" alt="PMI Logo" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h6 class="text-light">
                            REGISTRASI
                        </h6>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
