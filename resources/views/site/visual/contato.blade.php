@extends('site.layouts.principal')

@section('titulo', 'Loja')

@section('acao', 'Contato')

@section('conteudo-principal')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Insira seu e-mail" required="required">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need">Qual o objetivo do contato? *</label>
                <select id="form_need" name="need" class="form-control" required="required">
                    <option value=""></option>
                    <option value="elogio">Elogios</option>
                    <option value="elogio">Elogios</option>
                    <option value="elogio">Elogios</option>
                    <option value="elogio">Você disse que quer elogiar denovo?</option>
                    <option value="elogio">Pode Elogiar rs ❤</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Mensagem *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Digite sua mensagem aqui *" rows="4" required="required"></textarea>
            </div>
        </div>


        <div class="col-md-12">
          <div id="botao">
            <input type="submit" class="btn btn-success btn-send" value="Enviar Elogios">
          </div>
        </div>

    </div>

@endsection
