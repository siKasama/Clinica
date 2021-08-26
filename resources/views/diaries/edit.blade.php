@extends('layouts.app', ['activePage' => 'diaries.edit', 'title' => 'Clinica x', 'navName' => 'Alterar Agendamento', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Editar (Agenda)')</span>
                        <a href="{{ url('diaries') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="block mb-8">
                            <a href="{{ route('diaries.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Agendamentos</a>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="post" action="{{ route('diaries.update', $diary->id) }}">
                                @csrf
                                @method('put')
                                <div class="shadow overflow-hidden sm:rounded-md">

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="id" class="block font-medium text-sm text-gray-700">Número</label>
                                        <input type="text" name="id" id="id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ $diary->id }}" readonly />
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="paciente_name" class="block font-medium text-sm text-gray-700">Paciente</label>
                                        <input type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ $diary->paciente->name }}" readonly />
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="doctor_name" class="block font-medium text-sm text-gray-700">Doctor</label>
                                        <input type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ $diary->doctor->name }}" readonly />
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="date" class="block font-medium text-sm text-gray-700">Agendado para</label>
                                        <input type="datetime-local" name="date" id="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                            value={{ old('date', $diary->dateToHtml ) }} />
                                        @error('date')
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
                            <a href="{{ route('diaries.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Listar Agendamentos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
@endsection
