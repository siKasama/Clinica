<div class="sidebar" data-color="blue" data-image="{{ asset('img/potes.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <img src="{{ asset('img/logoplas.png') }}" alt="profile image" >
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Visão Geral") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-square-pin"></i>
                    <p>{{ __("Regional") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __("Representantes") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>{{ __("Clientes") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-layers-3"></i>
                    <p>{{ __("Analise Anual") }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>
                        {{ __('Diário') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav" style="margin-left:10%;">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-grid-45"></i>
                                <p>{{ __("Entrada Pedido") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-money-coins"></i>
                                <p>{{ __("Faturamento") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-scissors"></i>
                                <p>{{ __("Cancelamento") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-refresh-02"></i>
                                <p>{{ __("Devoluções") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-visita') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-app"></i>
                                <p>{{ __("Produtos") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-visita') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>{{ __("Visita") }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item @if($activePage == 'Planej. x Vendas') active @endif">
                <a class="nav-link" href="{{route('page.index', 'planVendas')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Planej. x Vendas") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'Rel.Despesas') active @endif">
                <a class="nav-link" href="{{route('page.index', 'rdespesas')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Rel.Despesas") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'Feira') active @endif">
                <a class="nav-link" href="{{route('page.index', 'feiras')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __("Feira") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'Premiação') active @endif">
                <a class="nav-link" href="{{route('page.index', 'premios')}}">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>{{ __("Premiação") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                    <i class="nc-icon nc-credit-card"></i>
                    <p>{{ __("Título") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
