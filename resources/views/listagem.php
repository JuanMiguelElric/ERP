<html>
    <head>
        <style>
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
        </style>
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <title>MyControl</title>
        <table >
            <?php foreach($produtos as $p):?>
            <tr>
                <td><?= $p->nome ?> </td> <td><a href="/produto/mostra">visualizar</a></td>
                <td><?= $p->descricao?></td>
                <td><?= $p->preco?></td>
                <td><?=$p->tamanho?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>