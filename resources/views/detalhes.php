<html>
    <head>
    <title><?= $p->nome ?></title>
    </head>
    <body>
        <h2><?= $p->nome?></h2>
        <ul>
            <li>
                <b>Valor:<?= $p->preco?> </b>
            </li>
            <li>
                <b>Descrição:<?=$p->descricao?></b>
            </li>
        </ul>
    </body>
</html>