@extends('layouts.app', ['activePage' => 'premios', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Premiação', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group{{ $errors->has('regiao') ? ' has-danger' : '' }}">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i>{{ __('Região') }}
                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    @include('alerts.feedback', ['field' => 'regiao'])
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-group-label" for="input-periodo">
                                        <i class="w3-xlarge fa fa-hourglass-o"></i>{{ __('Periodo') }}
                                    </label>
                                    <input type="text" name="periodo" id="input-periodo" class="form-control date" placeholder="mm/aaaa" autofocus>
                                </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <br>
                            <button type="submit" class="btn btn-info btn-fill btn-wd">{{ __('Pesquisar') }}
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="map"></div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endpush
