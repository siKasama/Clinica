@extends('layouts.app', ['activePage' => 'pacientes.index', 'title' => 'Clinica x', 'navName' => 'Pacientes', 'activeButton' => 'laravel'])

@section('content')
<meta name = "csrf-token" content = "{{csrf_token ()}}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Pacientes</h4>
                            <p class="card-category">Listagem</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>e-mail</th>
                                    <th>Fone</th>
                                    <th>Cidade</th>
                                    <th>UF</th>
                                    <th>RG</th>
                                    <td colspan="2" class="text-center">Ações</td>
                                </thead>
                                <tbody>
                                {{ csrf_field() }}
                                @foreach($pacientes as $paci)
                                    <tr>
                                        <td>{{ $paci->id }}</td>
                                        <td>{{ $paci->name }}</td>
                                        <td>{{ $paci->email }}</td>
                                        <td>{{ $paci->fone}}</td>
                                        <td>{{ $paci->city }}</td>
                                        <td>{{ $paci->uf }}</td>
                                        <td>{{ $paci->rg }}</td>
                                        <td  class="text-center p-0 align-middle" width="70">
                                            <a href="{{ route('pacientes.edit', $paci->id)}}" class="btn btn-primary btn-sm">@lang('Editar')</a>
                                        </td>
                                        <td  class="text-center p-0 align-middle" width="70">
                                            <form action="{{ route('pacientes.destroy', $paci->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn-md"><a class="nav-link" href="{{ route('pacientes.create') }}">Incluir</a></button>

                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection
