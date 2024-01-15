@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="text-center">
            <h1>Seja Bem vindo ao meu ERP!</h1>

        </div>
        <div class="col-md-6 ">
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Lista de produtos</h5>
                        
                        <p class="card-text">Listagem de todos produtos que foram adicionados recentemente na sua loja </p>
                        <a href="/listaprodutos" class="/listaprodutos">Lista de produtos</a>
                    
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Adicione seus produtos aqui para você ter um controle do seu Estoque</p>
                        <a href="/produto/novo" class="card-link">Adicionar Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Noticias do mercado</h5>
                        <p class="card-text">Fique por dentro das noticias do mercado.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Quero colaborar com o desenvolvimento do sistema</h5>
                        <p class="card-text">Deixe aqui uma sugestão doque pode ser mudado no sistema. </p>
                        <a href="#" class="card-link">Acessar Formulario</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
