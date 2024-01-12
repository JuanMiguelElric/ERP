<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="ERP">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <style>
            /* Conteúdo do custom.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        nav.navbar.navbar-default {
            background-color: #337ab7;
            border-color: #2e6da4;
            margin-top: 10px;
        }

        nav.navbar.navbar-default a {
            color: white;
        }

        li p.navbar-text, a.navbar-brand {
            color: white!important;
            font-weight: bolder;
        }

        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #4CAF50;
        }

        .topicos {
            float: left;
        }

        .topicos a {
            display: block;
            padding: 8px;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            form {
                max-width: 100%;
            }
        }


        </style>
    </head>
    <body>
        <div>
            <nav class="nav">
                <div class="topicos"> <a href="">Home</a></div>
                <div class="topicos"> <a href="">News</a></div>
                <div class="topicos"> <a href="/listaprodutos">Listagem de produtos</a></div>
                <div class="topicos"> <a href="/produto/novo">Novo Produto</a></div>
                
            </nav>
        </div>
        <div>
            @yield('conteudo');

        </div>
    </body>
</html>