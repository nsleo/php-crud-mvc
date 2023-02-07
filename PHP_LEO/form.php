<script src="script/script.js"></script>
<div class="container">
    <form id="userForm" action="?controller=ContatosController&<?php echo isset($contato->id) ? "method=atualizar&id={$contato->id}" : "method=salvar"; ?>" method="post" oninput="checkFields()">
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Contatos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nome:</label>
                <input required type="text" class="form-control col-sm-8" name="nome" id="nome" value="<?php
                echo isset($contato->nome) ? $contato->nome : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Telefone:</label>
                <input required type="number" class="form-control col-sm-8" name="telefone" id="telefone" value="<?php
                echo isset($contato->telefone) ? $contato->telefone : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Email:</label>
                <input required type="text" class="form-control col-sm-8" name="email" id="email" value="<?php
                echo isset($contato->email) ? $contato->email : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">CPF:</label>
                <input required type="text" class="form-control col-sm-8" name="cpf" id="cpf" maxlength="11" value="<?php
                echo isset($contato->cpf) ? $contato->cpf : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($contato->id) ? $contato->id : null; ?>" />
                <button class="btn btn-success" id="save" type="submit" disabled>Salvar</button>
                <!-- <button id="clear" onclick="clearFields()">clear</button> -->
                <button class="btn btn-secondary" id="clear" type="button" onclick="clearFields()">Limpar</button>
                <a class="btn btn-danger" href="?controller=ContatosController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>
<style>
    span {
        /* font-weight: bold; */
    }
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

</style>