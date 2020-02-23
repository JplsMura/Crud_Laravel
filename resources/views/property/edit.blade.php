@extends('property.master')
    
@section('content')
     
    <div class="container my-5">

        <h1>Formulário de Edição :: Usuário</h1>

        <?php
            $user = $user[0];
            $user_tel = $user_tel[0];
        ?>

            <form action="<?= url('/usuarios/update', ['id' => $usuario->id]); ?>" method="POST">

                <?= csrf_field(); ?>

                <?= method_field('PUT'); ?>
                
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" value="<?= $user->nome; ?>" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome" value="<?= $user->sobrenome; ?>" class="form-control">
                    </div>

                </div>
                
                <div class="row">
                
                    <div class="form-group col-md-7">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu E-mail" value="<?= $user->email; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-5">
                        <label for="dt_nascimento">Data de Nascimento</label>
                        <input type="text" id="dt_nascimento" name="dt_nascimento" placeholder="Digite sua Data de Nascimento" value="<?= $user->dt_nascimento; ?>" class="form-control">
                    </div>

                </div>
                
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" value="" placeholder="Digite seu CEP" value="<?= $user->cep; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="rua">Rua</label>
                        <input type="text" id="rua" name="rua" value="<?= $user->rua; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="numero">Número</label>
                        <input type="text" id="numero" name="numero" placeholder="Digite o Número da sua residencia" value="<?= $user->numero; ?>" class="form-control">
                    </div>
                
                </div>

                <div class="row">

                    <div class="from-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" value="<?= $user->bairro; ?>" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" value="<?= $user->cidade; ?>" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" value="<?= $user->estado; ?>" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="telefones">Telefones</label>
                    <input type="text" id="telefones" name="telefones" placeholder="Digite o Telefone" value="<?= $user_tel->telefone; ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Editar Usuário</button>

            </form>
    </div>

@endsection
