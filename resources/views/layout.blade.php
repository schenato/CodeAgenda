<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Code Agenda | Schenato</title>

        <!-- Bootstrap -->
        <link href="{{ url('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-header">
                    <h1>
                        Code.Schenato <br/>
                        <small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
                        <span class="pull-right">
                            <form class="form-inline" action="{{ route('agenda.busca') }}" method="post">
                                <div class="input-group">
                                    <input type="text" name="busca" id="busca" class="form-control" placeholder="Pesquisar Contato...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>
                        </span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @foreach($letras as $letra)
                        <a href="{{ route('agenda.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{ $letra }}</a>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 btn-row">
                    <a href="{{ route('pessoa.create') }}" class="btn btn-primary">Novo Contato</a>
                </div>
            </div>
            <div class="row">
                @yield('content')
            </div>
        </div>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ url('js/scripts.js') }}"></script>
    </body>
</html>