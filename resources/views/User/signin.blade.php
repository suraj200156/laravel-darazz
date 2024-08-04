<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            margin: 1.5rem;
            border-radius: 1rem;
            max-width: 900px;
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: row;
            }
        }

        .left-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
            flex: 1;
        }

        .left-side h1 {
            margin-bottom: 0.75rem;
            font-size: 2.25rem;
            font-weight: bold;
        }

        .left-side .subtitle {
            margin-bottom: 1rem;
            color: #9ca3af;
        }

        .input-group {
            padding: 0.5rem 0;
            width: 100%;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .input-group input {
            width: 95%;
            height: 40px;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 1rem;
            color: #6b7280;
            padding-left: 10px;
        }

        .button {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            box-sizing: border-box;
            border: 1px solid #d1d5db;
        }

        .sign-up {
            margin-top: 0.9rem;
            background-color: #14867f;
            color: #ffffff;
        }

        .sign-up:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .sign-up-google {
            border: 1px solid #d1d5db;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .sign-up-google:hover {
            background-color: #14867f;
            color: #ffffff;
        }

        .sign-up-google img {
            width: 1rem;
            height: 1rem;
        }

        .signup {
            text-align: center;
            color: #9ca3af;
            font-size: 1rem;
        }

        .signup .highlight {
            color: #14867f;
        }

        .right-side {
            position: relative;
            display: none;
            flex: 1;
        }

        @media (min-width: 768px) {
            .right-side {
                display: block;
            }
        }

        .right-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="right-side">
            <img src="{{ asset('images/others/apple.png') }}" alt="img" />
        </div>
        <div class="left-side">

            <form action="{{ route('user.login') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <span class="subtitle">Join us by creating an account</span>
                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email" />
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" />
                </div>
                <button class="button sign-up">Sign in</button>
                <button class="button sign-up-google">
                    <img src="{{ asset('images/icons/search copy.png') }}" alt="img" />
                    Sign in with Google
                </button>
                <div class="signup">
                    Don't have an account?
                    <a href="{{ route('user.create') }}"><span class="highlight">Sign in</span></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>