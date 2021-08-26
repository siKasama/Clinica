@extends('layouts.app', ['activePage' => 'diaries.index', 'title' => 'Clinica x', 'navName' => 'Agenda', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Agenda</h4>

                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Paciente</th>
                                                    <th>Médico</th>
                                                    <th>Agendado</th>
                                                    <th>Criado</th>
                                                    <th>Obs</th>
                                                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50">  </th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($diaries as $diary)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $diary->id }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $diary->paciente->name }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $diary->doctor->name }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $diary->dateBr  }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $diary->created_at  }}
                                                        </td>

                                                        <td class="px-6 py-4 text-sm text-gray-900">
                                                            {{ Str::limit($diary->observations, 50)  }}
                                                        </td>

                                                        <td class="px-6 py-4 text-sm font-medium">
                                                            <a href="{{ route('diaries.show', $diary->id) }}" class="text hover:text-blue-900 mb-2 mr-2" title="Exibir usuário">Ver</a>
                                                            <a href="{{ route('diaries.edit', $diary->id) }}" class="text hover:text-indigo-900 mb-2 mr-2" title="Editar usuário">Editar</a>
                                                            <form class="inline-block" action="{{ route('diaries.destroy', $diary->id) }}" method="POST" onsubmit="return confirm('Deseja mesmo excluir este usuário?');">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2 cursor-pointer" value="Excluir" title="Excluir usuário">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
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
