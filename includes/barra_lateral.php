<?php

    class BarraLateral
    {
        public function exibirTodos(): array
        {
            $barra_lateral = [
                ['titulo' => 'Pegar emprestado', 'link' => '06_pegar_emprestado.php'],
                ['titulo' => 'Cadastro de novos itens', 'link' => '08_new_items.php'],
                ['titulo' => 'Devolver', 'link' => '09_meus_itens_emprestados.php'],
                ['titulo' => 'Fale Conosco', 'link' => '#'],
                ['titulo' => 'Sair', 'link' => 'logout.php'],
            ];
            return $barra_lateral;
        }
    }
$item = new BarraLateral();
$barra_lateral = $item->exibirTodos()

?>

