@extends('layouts.app', ['activePage' => 'diaries.create', 'title' => 'Clinica x', 'navName' => 'Adicionar Agendamento', 'activeButton' => 'laravel'])


@section('content')
<div class="container">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Agenda')</span>
                        <a href="{{ url('diary') }}" class="btn-info btn-sm">
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
                            <form method="post" action="{{ route('diaries.store') }}">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">

                                    <div class="px-5 py-4 bg-white sm:p-2">
                                        <label for="paciente_id" class="block font-medium text-sm text-gray-700">Paciente: </label>
                                        <select name="paciente_id" id="paciente_id" class="block rounded-md shadow-sm mt-1 block w-full">
                                            @foreach($pacientes as $paciente)
                                                <option value="{{ $paciente->id }}"{{ $paciente->id  == old('paciente_id', '') ? ' selected' : '' }}>{{ $paciente->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('paciente_id')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-5 py-4 bg-white sm:p-2">
                                        <label for="doctor_id" class="block font-medium text-sm text-gray-700">Médico: </label>
                                        <select name="doctor_id" id="doctor_id" class="block rounded-md shadow-sm mt-1 block w-full">
                                            @foreach($doctors as $doctor)
                                                <option value="{{ $doctor->id }}"{{ $doctor->id  == old('paciente_id', '') ? ' selected' : '' }}>{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('doctor_id')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-5 py-4 bg-white sm:p-2">
                                        <label for="date" class="block font-medium text-sm text-gray-700">Agendar para: </label>
                                        <input type="datetime-local" name="date" id="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value={{ old('date', \Carbon\Carbon::now()->addHours(1)->format('Y-m-d\TH:i')) }} />
                                        @error('date')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-5 py-4 bg-white sm:p-2">
                                        <label for="observations" class="block font-medium text-sm text-gray-700">Observações: </label>
                                        <textarea name="observations" id="observations" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                             rows="8"     value="{{ old('observations', '') }}"></textarea>
                                        @error('observations')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                            Cadastrar
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
