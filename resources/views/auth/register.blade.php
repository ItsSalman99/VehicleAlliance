<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap');

        * {
            box-sizing: border-box;
        }

        :root {
            --red: hsl(0, 100%, 74%);
            --green: hsl(154, 59%, 51%);
            --blue: hsl(248, 32%, 49%);
            --grey: hsl(246, 25%, 77%);
            --dark: hsl(249, 10%, 26%);
            --bodyCopy: 16px;
            --regular: 400;
            --bold: 700;
            --radius: 10px;
        }

        html,
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: var(--red);
            min-height: 100vh;
            padding: 0;
            margin: 0;
            color: var(--dark);
        }

        body {
            background-image: url('https://raw.githubusercontent.com/hejkeikei/intro-component-with-signup-form/main/images/bg-intro-desktop.png');
            font-size: var(--bodyCopy);
        }

        main {
            display: flex;
            /* width: 100%; */
            max-width: 110ch;
            min-height: 95vh;
            margin: 0 auto;
            gap: 2rem;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        header,
        form>p:first-of-type,
        input[type=submit] {
            color: white;
        }

        form,
        header {
            flex-basis: 0;
            flex-grow: 1;
        }

        h1 {
            font-size: clamp(1.5rem, 5vw, 3rem);
        }

        a {
            font-weight: bold;
            color: var(--red);
            text-decoration: none;
        }

        form>p:first-of-type {
            background-color: var(--blue);
            border-radius: var(--radius);
            padding: 1rem;
            text-align: center;
        }

        form div,
        form>p:first-of-type {
            box-shadow: 0px 7px 0px rgba(0, 0, 0, 0.2);
        }

        input {
            display: block;
            width: 100%;
            margin: 1rem 0 .5rem 0;
            padding: 1rem;
            border: solid 1px var(--grey);
            border-radius: calc(var(--radius)/2);
            font-weight: var(--bold);
            outline: none;
        }

        input[type=submit] {
            background-color: var(--green);
            text-transform: uppercase;
            letter-spacing: .8px;
            cursor: pointer;
            font-size: medium;
            box-shadow: inset 0px -4px rgba(0, 0, 0, 0.1);
            transition: all .2s ease-in-out;
        }

        input[type=submit]:hover {
            box-shadow: inset 0px -6px rgba(0, 0, 0, 0.1);
        }

        .attribution,
        #formPad p:last-of-type,
        .errMsg {
            font-size: x-small;
            text-align: center;
        }

        .errMsg {
            text-align: right;
            color: var(--red);
            font-size: x-small;
            font-style: italic;
            font-weight: 500;
            margin: 0 0 1rem 0;
        }

        .attribution a {
            color: var(--blue);
        }

        #formPad {
            background-color: white;
            border-radius: var(--radius);
            padding: 2.5rem;
        }

        @media screen and (max-width:660px) {
            body {
                background-image: url('https://raw.githubusercontent.com/hejkeikei/intro-component-with-signup-form/main/images/bg-intro-desktop.png');
            }

            main {
                flex-direction: column;
            }

            header {
                text-align: center;
            }
        }
    </style>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> --}}


</head>

<body>
    <main>
        <header>
            <h1>Become a seller</h1>
            <p>
                Create a free account to become a seller and sell online!
            </p>
        </header>
        <form action="{{ route('register') }}" method="post">
            <p><b>Become a seller</b></p>
            <div id="formPad">
                @csrf
                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="" style="background-color: red; color: '#fff'; border-radius: 10px; padding: 10px;">
                        <div style="color: #fff;">
                            Whoops! Something went wrong.
                        </div>

                        <ul style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li style="color: #fff;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="text" name="name" id="name" placeholder="Full Name" required />
                <p class="errMsg"></p>
                <input type="email" name="email" id="email" placeholder="Email Address"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                <p class="errMsg"></p>
                <input type="text" name="phone" id="phone" placeholder="Contact #" required />
                <p class="errMsg"></p>
                <input type="password" name="password" id="password" placeholder="Password" required />
                <p class="errMsg"></p>
                <input type="password" name="password_confirmation" id="password" placeholder="Password" required />
                <p class="errMsg"></p>
                <input type="submit" value="Register" id="submit" />
                <p>
                    By clicking the button, you are agreeing to our
                    <a href="#">Terms and Services</a>
                </p>
            </div>
        </form>
    </main>

    <footer>

    </footer>
    <script src="script.js"></script>
</body>

</html>
