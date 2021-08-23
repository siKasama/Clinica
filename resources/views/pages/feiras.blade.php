@extends('layouts.app', ['activePage' => 'feiras', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Feira', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="row justify-content-md-start">
                            <div class="col-md-8">
                                <div class="form-group{{ $errors->has('regiao') ? ' has-danger' : '' }}">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i>{{ __('Região') }}
                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    @include('alerts.feedback', ['field' => 'regiao'])
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
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
@endsection
