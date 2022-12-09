
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <!-- Title -->
    <title>Login</title>

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('assets admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets admin/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets admin/plugins/pace/pace.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('assets admin/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets admin/css/custom.css') }}" rel="stylesheet">

    {{-- icon title --}}
    <link rel="shortcut icon" href="{{ asset('/images/zyro-image.png') }}" type="image/x-icon">

</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="#">profit_counter</a>
            </div>
            <p class="auth-description">Silahkan login menggunakan akun anda.</p>

            <div class="auth-credentials m-b-xxl">
                <form action="">
                    <div class="form-floating">
                        <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" required placeholder="Masukan Email">
                        <label for="signInEmail" class="form-label">Email</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" required placeholder="Masukan Password">
                        <label for="signInPassword" class="form-label">Password</label>
                    </div>
                    <div class="form-group mt-5 text-center">
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('assets admin/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets admin/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets admin/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets admin/js/main.min.js') }}"></script>
    <script src="{{ asset('assets admin/js/custom.js') }}"></script>
</body>
</html>
