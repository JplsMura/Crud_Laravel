jQuery(document).ready(function(){

    function limpa_formulario_ceo() {
        //Limpa os valores do formulário de cep
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

});

jQuery(document).ready(function() {
    
    jQuery("#dt_nascimento").mask("99/99/9999")

    jQuery("#telefones")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

});


jQuery(document).ready(function(){

    //É um contador de elementos gerados, para que não gere conflito com campos removidos e novos
    var qtd_elementos_gerados = jQuery('.tel').length;

    //Função que adiciona máscara no campo novo gerado
    function add_mask(qtd){
        jQuery(".telefones_mask"+qtd)
        .mask("(99) 9999-99999")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-9999");  
            } else {  
                element.mask("(99) 9999-99999");
            }  
        });
    }

    //Adiciona na tela uma nova div com o campo do novo telefone
    jQuery('#botao_add_other').click(function(){

        //Quando cria um novo campo, adiciona +1 no contador geral
        qtd_elementos_gerados = qtd_elementos_gerados + 1;

        //id da div para remoção futura
        var id_div = "'campo_"+qtd_elementos_gerados+"'";
        //Elemento com input de telefone e com botão de excluir
        var elemento = '<div class="input-group mb-3" id='+id_div+'><input type="text" class="form-control tel telefones_mask'+qtd_elementos_gerados+'" placeholder="Digite o número de telefone" aria-label="Digite o número de telefone" aria-describedby="button-addon'+qtd_elementos_gerados+'"><div class="input-group-append"><button class="btn btn-outline-danger" type="button" id="button-addon'+qtd_elementos_gerados+'" onclick="remover_telefone('+id_div+')">Remover telefone</button></div></div>';

        //Adicionando elemento na div
        jQuery('#campos_telefones').append(elemento);

        //Criando a máscara do novo input
        add_mask(qtd_elementos_gerados);

        //Desabilitando o botão adicionar telefone se ele já tem 6 campos
        disabled_btn();

    });

    //Função para desabilitar o botão
    function disabled_btn(){

        //Conta quantos elementos de telefone já existem
        var items = jQuery('.tel').length;
        
        if(items == 6){
            jQuery("#botao_add_other").prop("disabled",true);
        }
    }

    //Cria a máscara do primeiro input que é padrão
    add_mask(1);
    //Desabilita se já houver 6 campos de telefone
    disabled_btn();

});

//Remove o telefone da tela e permite cadastrar mais um telefone
function remover_telefone(id){
    jQuery('#'+id).remove();
    //Quando remove, atualiza a lista com a quantidade de inputs para desbloquear o botão
    jQuery("#botao_add_other").prop("disabled",false);
}
