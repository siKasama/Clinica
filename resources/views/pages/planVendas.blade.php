@extends('layouts.app', ['activePage' => 'planVendas', 'title' => 'Portal Gerencial - T.I.', 'navName' => 'Planej. x Vendas', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pl-lg-8">
                        <div class="form-group{{ $errors->has('produto') ? ' has-danger' : '' }}">
                            <label class="form-group-label" for="input-produto">
                                <i class="w3-xlarge fa fa-clone"></i>{{ __('Produto') }}
                            </label>
                            <input type="text" name="produto" id="input-produto" class="form-control{{ $errors->has('produto') ? ' has-danger' : '' }}" placeholder="{{ __('Referência do Produto ou descrição') }}" autofocus>

                            @include('alerts.feedback', ['field' => 'produto'])
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-group-label" for="select-tipo">
                                        <i class="w3-xlarge fa fa-filter"></i>{{ __('Tipo') }}
                                    </label>

                                    <select name="tipo" class="form-control">

                                    </select>
                                    @include('alerts.feedback', ['field' => 'tipo'])

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <br>
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">{{ __('Pesquisar') }}
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
