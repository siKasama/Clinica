@extends('layouts.app', ['activePage' => 'doctors.index', 'title' => 'Clinica x', 'navName' => 'Médicos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Doctors</h4>
                            <p class="card-category">Listagem</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CRM</th>                                    
                                    <th>Especialidade</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                {{ csrf_field() }}
                                @foreach($doctors as $doct)
                                    <tr>
                                        <td>{{ $doct->id }}</td>
                                        <td>{{ $doct->name }}</td>
                                        <td>{{ $doct->crm }}</td>
                                        <td>{{ $doct->especialidade }}</td>
                                        <td>
                                        <a href="{{ route('doctors.show', $doct->id) }}" class="text-green-600 hover:text-blue-900 mb-2 mr-2" title="Exibir médico">Ver</a>
                                            <a href="{{ route('doctors.edit', $doct->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" title="Editar médico">Editar</a>
                                            <form class="inline-block" action="{{ route('doctors.destroy', $doct->id) }}" method="POST" onsubmit="return confirm('Deseja mesmo excluir este médico?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2 cursor-pointer" value="Excluir" title="Excluir">
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
                    <button class="btn-md"><a class="nav-link" href="{{ route('doctors.create') }}">Incluir</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection


