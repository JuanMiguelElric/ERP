<html>
    <body>
        <h1>Listagem de Produtos</h1>
        <table>
            <?php foreach($produtos as $p):?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->descricao?></td>
                <td><?= $p->preco?></td>
                <td><?=$p->tamanho?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>