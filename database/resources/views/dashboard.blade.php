 @extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Clinica x', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">{{ __('Agendamento') }}</h4>
                            <p class="card-category">{{ __('') }}</p>
                        </div>
                        <div class="card-body ">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body ">
                            <p class="card-category">{{ __('Agenda:')  }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <p class="card-category">{{ __('Pacientes:')}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <p class="card-category">{{ __('Médicos:')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {


            demo.showNotification();

        });
    </script>
@endpush
