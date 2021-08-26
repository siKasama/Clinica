<div class="sidebar" data-color="blue" data-image="{{ asset('img/sidebar-4.jpg') }}">

    <div class="sidebar-wrapper">
        <div class="logo">
            <img src="{{ asset('img/tablet_information.png') }}" alt="profile image" >
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nc-icon nc-app"></i>
                    <p>{{ __("Home") }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index', 'index') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __("Usuário") }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('doctors.index', 'index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __("Médicos") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'Pacientes') active @endif">
                <a class="nav-link" href="{{ route('pacientes.index', 'index') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>{{ __("Pacientes") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'Agenda') active @endif">
                <a class="nav-link" href="{{ route('diaries.index', 'index') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Agenda") }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
