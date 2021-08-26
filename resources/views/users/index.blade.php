@extends('layouts.app', ['activePage' => 'users.index', 'title' => 'Clinica x', 'navName' => 'Users', 'activeButton' => 'laravel'])

@section('content')
<meta name = "csrf-token" content = "{{csrf_token ()}}">
<div class="content">
    <div class="container-fluid">
       <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <div class="block mb-8">
                        <a href="{{ route('users.index') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Novo</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="flex flex-col">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col"> Nome </th>
                                        <th scope="col"> E-mail </th>
                                        <th scope="col"> Criado em </th>
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">  </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                  
                                    @foreach ($users as $user)

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->id }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->name }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->email }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->created_at  }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('users.show', $user->id) }}" class="text-green-600 hover:text-blue-900 mb-2 mr-2" title="Exibir usuário">Ver</a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" title="Editar usuário">Editar</a>
                                                <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Deseja mesmo excluir este usuário?');">
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

@endsection
