@extends('layouts.app', ['activePage' => 'pacientes.edit', 'title' => 'Clinica x', 'navName' => 'Editar Pacientes', 'activeButton' => 'laravel'])


@section('content')
<div class="container">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Editar Paciente')</span>
                        <a href="{{ url('pacientes') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="block mb-8">
                            <a href="{{ route('pacientes.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Pacientes</a>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="post" action="{{ route('pacientes.update', $paciente->id) }}">
                                @csrf
                                @method('put')
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>
                                        <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('name', $paciente->name) }}" />
                                        @error('name')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="email" class="block font-medium text-sm text-gray-700">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('email', $paciente->email) }}" />
                                        @error('email')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="fone" class="block font-medium text-sm text-gray-700">Telefone</label>
                                        <input type="text" name="fone" id="fone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('fone', $paciente->fone) }}" />
                                        @error('fone')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="rg" class="block font-medium text-sm text-gray-700">RG</label>
                                        <input type="text" name="rg" id="rg" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('rg', $paciente->rg) }}" />
                                        @error('rg')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="city" class="block font-medium text-sm text-gray-700">Cidade</label>
                                        <input type="text" name="city" id="city" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('city', $paciente->city) }}" />
                                        @error('city')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="uf" class="block font-medium text-sm text-gray-700">UF</label>
                                        <input type="text" name="uf" id="uf" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('uf', $paciente->uf) }}" />
                                        @error('uf')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                            Editar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block mb-8">
                            <a href="{{ route('pacientes.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Pacientes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
