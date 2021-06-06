<?php

class Arvore {

    public function inserir($node, $valor) {

        //verifica se a árvore já foi criada
        if ($node != NULL) {

            //Verifica se o valor a ser inserido é maior que o nodo corrente da árovre, se sim vai para subarvore esquerda
            if ($valor < $node->valor_raiz) {
                
                //Se tiver elemento no nodo esquerdo continua a busca
                if ($node->esquerda != NULL) {
                    $this->inserir($node->esquerda, $valor);
                } else {
                    //Se nodo esquerdo vazio insere o novo nodo aqui
                    echo "Inserindo " . $valor . " a esquerda de " . $node->valor_raiz . "<br>";
                    $node->esquerda = new No($valor);
                }
                //Verifica se o valor a ser inserido é menor que o nodo corrente da árvore, se sim vai para subarvore direita
            } else if ($valor > $node->valor) {
                //Se tiver elemento no nodo direito continua a busca
                if ($node->direita != NULL) {
                    $this->inserir($node->direita, $valor);
                } else {
                    //Se nodo direito vazio insere o novo nodo aqui
                    echo "Inserindo " . $valor . " a direita de " . $node->valor_raiz . "<br>";
                    $node->direita = new No($valor);
                }
            }
        }
    }

}