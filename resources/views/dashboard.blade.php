 @extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Clinica x', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">{{ __('Agendamento') }}</h4>
                            <p class="card-category">{{ __('') }}</p>
                        </div>
                        <div class="card-body ">
                        </div>
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
