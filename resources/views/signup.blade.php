<!DOCTYPE html>
<html {{ App::currentlocale() == 'ar' ? 'dir= rtl lang=ar' : 'dir=ltr lang=en' }}>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (App::currentlocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@700&family=Noto+Naskh+Arabic&display=swap"
            rel="stylesheet">
        <style>
            body {
                'font-family': 'Noto Naskh Arabic'
            }

            h1 {
                'font-family': 'Noto Kufi Arabic';
                'font-weight': 700
            }
        </style>
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @endif
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">{{ __('Welcome to our application') }}</h1>
                <p class="col-lg-10 fs-4">{{__('Sign up now and enjoy our services')}}</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">{{__('Email Address')}}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">{{__("Password")}}</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> {{__('Remember Me')}}
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">{{__('Sign up')}}</button>
                    <hr class="my-4">
                    <small class="text-muted">{{__('By clicking Sign up, you agree to the terms of use.')}}</small>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
