@extends('layouts.app', ['activePage' => 'doctors.show', 'title' => 'Clinica x', 'navName' => 'Médicos', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Doctors</h4>
                        </div>
                        <div class="card-body">
                            <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                                <div class="block mb-8">
                                    <a href="{{ route('doctors.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Médicos</a>
                                </div>
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="table table-hover table-striped">
                                                    <tr>
                                                        <th scope="col">
                                                            ID
                                                        </th>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                            {{ $doctors->id }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">
                                                            Nome
                                                        </th>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                            {{ $doctors->name }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">
                                                            Especialidade
                                                        </th>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                            {{ $doctors->specialty }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">
                                                            CRM
                                                        </th>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                            {{ $doctors->crm }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">
                                                            Cadastrado em
                                                        </th>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                            {{ $doctors->created_at }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block mt-8">
                                    <a href="{{ route('doctors.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Médicos</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
