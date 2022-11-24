
<nav class="navegacao_lateral">
    <ul>
        <li>Que bom te ter aqui, <?php echo $_SESSION['nome']?>!</li>
        <br><br><br>
        <li><a href="07_atualizar_dados.php?id=<?php echo $_SESSION['id'];?>">Atualizar dados</a></li>
        <?php foreach ($barra_lateral as $item) : ?>
            <li>
                <a href="<?php echo $item['link']; ?>">
                    <?php echo $item['titulo']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>