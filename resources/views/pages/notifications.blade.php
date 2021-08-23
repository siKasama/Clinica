@extends('layouts.app', ['activePage' => 'notifications', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Título', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pl-lg-8">
                                <div class="form-group{{ $errors->has('regiao') ? ' has-danger' : '' }}">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i>{{ __('Região') }}
                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    @include('alerts.feedback', ['field' => 'regiao'])
                                </div>
                                <div class="form-group{{ $errors->has('rsocial') ? ' has-danger' : '' }}">
                                    <label class="form-group-label" for="input-rsocial">
                                        <i class="w3-xlarge fa fa-institution"></i>{{ __('Razão Social') }}
                                    </label>
                                    <input type="text" name="rsocial" id="input-rsocial" class="form-control{{ $errors->has('rsocial') ? ' has-danger' : '' }}" placeholder="{{ __('Razão Social ou inicio da Razão Social') }}" autofocus>

                                    @include('alerts.feedback', ['field' => 'rsocial'])
                                </div>
                                <div class="form-group">
                                    <label class="form-group-label" for="input-represent">
                                        <i class="w3-xlarge fa fa-user-circle-o"></i>{{ __('Representante') }}
                                    </label>
                                    <input type="text" name="represent" id="input-represent" class="form-control"  placeholder="{{ __('Nome ou parte do nome do Representante') }}">
                                </div>
                            </div>
                            <div class="text-center">
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
@endsection
