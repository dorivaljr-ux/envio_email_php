<?php

require_once 'mail.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['assunto']) && !empty($_POST['assunto']) && isset($_POST['mensagem']) && !empty($_POST['mensagem'])){
            $assunto = $_POST['nome']." - ".$_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            if(send($assunto, $mensagem)){
                echo "Seu email foi enviado com sucesso para o endereço 'thomasmullernunes@gmail.com'.";
            }
            else{
                echo "ERROR";
            }
            }else{
            echo "Verifique se você preencheu todos os campos.";
            }
