@extends('property.master')

@section('content')

<div class="container my-5">

<h1>Usuário Single</h1>

<?php
        if(!empty ($property)){
                    
                foreach ($property as $prop) {
                ?>
                    
                    <div class="jumbotron">

                    <h2>Nome do Usuário: <?= $prop->nome; ?></h2>

                    <p>Sobrenome do Usuário: <?= $prop->sobrenome; ?></p>

                    <p>E-mail: <?= $prop->email; ?></p>

                    <p>Data de Nascimento: <?= $prop->dt_nascimento; ?></p>

                    <p>CEP: <?= $prop->cep; ?></p>

                    <p>Rua: <?= $prop->rua; ?></p>

                    <p>Número da Residência: <?= $prop->numero; ?></p>
                    
                    <p>Bairro: <?= $prop->bairro; ?></p>

                    <p>Cidade: <?= $prop->cidade; ?></p>

                    <p>Estado: <?= $prop->estado; ?></p>

                    <p>Telefones: <?= $prop->telefone; ?></p>
                    
                </div>
                <?php
            }
        }
?>
</div>

@endsection