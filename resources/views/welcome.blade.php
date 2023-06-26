<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
    </head>
    <body>

        <style>
            :root{
                    --mainColor: #15202b;
                    --secondaryColor: #192734;
                    --borderColor: #164D56;
                    --mainText: #fff;
                    --secondaryText: #eeeeee;
                    --themedot-border: #fff;
                    --previewBg: rgba(25, 39, 52, 0.8);
                    --previewShadow: #111921;
                    --buttonColor: #17a2b8;
                    --mouseColor: #fff;
                }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                height: 100vh;
                background: var(--mainColor);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .login{
                width: 360px;
                height: min-content;
                background: var(--mainText);
                padding: 24px;
                border-radius: 12px;
                border: 1px solid var(--borderColor);
            }

            .login h1{
                margin-bottom: 20px;
                font-size: 36px;
            }

            .login form{
                font-size: 24px;
            }

            .login form .form-group{
                margin-bottom: 12px;
            }

            .login form input[type="submit"]{
                font-size: 30px;
                margin-top: 15px;
            }
        </style>

        <!-- <div class="d-flex gap-2 justify-content-center pt-5 pb-4">
            <button class="btn btn-primary rounded-circle p-2 lh-1" type="button">
                <svg class="bi" width="16" height="16"><use xlink:href="#x-lg"/></svg>
                <span class="visually-hidden">Dismiss</span>
            </button>
            <button class="btn btn-outline-primary rounded-circle p-2 lh-1" type="button">
                <svg class="bi" width="16" height="16"><use xlink:href="#x-lg"/></svg>
                <span class="visually-hidden">Dismiss</span>
            </button>
        </div> -->

        <div class="login">
            <h1 class="text-center">Welcome</h1>
            <form class="needs-validation">
                <div class="form-group was-validated">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" id="email" required>
                    <div class="invalid-feedback">Please Enter your email</div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">Please Enter your password</div>
                </div>
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="check-box">
                    <label class="form-check-label" for="checkbox">Remember me</label>
                </div>
                <input class="btn btn-success w-100" type="submit" value="LOGIN">
            </form>
        </div>

    </body>
</html>
