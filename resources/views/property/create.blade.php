@extends('property.master')

@section('content')
     
    <div class="container my-10 mb-10">

        <h1>Criação de novo :: Usuário</h1>

            <form action="<?= url('/usuarios/store/{id}'); ?>" method="POST" autocomplete="off">

                <?= csrf_field(); ?>
                
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome" class="form-control">
                    </div>

                </div>
                
                <div class="row">
                
                    <div class="form-group col-md-7">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu E-mail" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-5">
                        <label for="dt_nascimento">Data de Nascimento</label>
                        <input type="text" id="dt_nascimento" name="dt_nascimento" placeholder="" class="form-control">
                    </div>

                </div>
                
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="cep">CEP</label>
                        <input type="number" id="cep" name="cep" value="" placeholder="Digite seu CEP" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="rua">Rua</label>
                        <input type="text" id="rua" name="rua" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="numero">Número</label>
                        <input type="number" id="numero" name="numero" placeholder="Digite o Número da sua residencia" class="form-control">
                    </div>
                
                </div>

                <div class="row">

                    <div class="from-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" class="form-control">
                    </div>

                </div>

                <div class="campos">
                    <div id="campos_telefones">
                        <div class="form-group">
                            <label for="telefones">Telefone principal:</label>
                            <input type="tel" class="form-control tel telefones_mask1" id="telefone" name="telefone" placeholder="Digite um número de telefone">
                        </div>
                    </div>
                    <div class="botao_adicionar_campo">
                        <button class="btn btn-primary btn-sm" id="botao_add_other">Adicionar outro telefone</button>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

            </form>
    </div>

@endsection
