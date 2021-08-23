@extends('layouts/app', ['activePage' => 'welcome', 'title' => 'Portal Gerencial'])

@section('content')
    <div class="full-page section-image" data-image="{{asset('img/Fachada.jpg')}}">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <h2 class="text-white text-center">{{ __('Plasútil - Utilidades Domésticas') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush
