<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>

            *{
                padding:0;
                margin:0;
                box-sizing:border-box;
            }


            body {
                font-family: 'Nunito', sans-serif;
                background-color:lightgrey;
            }

            header{
                margin-top:2em;
                text-align:center;
            }

            ul{
                margin-top:2em;
                display:flex;
                list-style:none;
                gap:2em;
                justify-content:center;
            }

            a{
                text-decoration:none;
                color:black;
                font-size:1.3em;
            }
            a:hover{
                text-decoration:underline;
            }

        </style>
    </head>
    <body>
        <header>
        <h1>HELLO WORLD!</h1>

            <nav>
                <ul>
                    <li><a href="/introduzione">INTRODUZIONE</a></li>
                    <li><a href="/primocatalogo">PRIMO CATALOGO</a></li>
                    <li><a href="/secondocatalogo">SECONDO CATALOGO</a></li>
                    <li><a href="/terzocatalogo">TERZO CATALOGO</a></li>
                    <li><a href="/contattaci">CONTATTACI</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>
