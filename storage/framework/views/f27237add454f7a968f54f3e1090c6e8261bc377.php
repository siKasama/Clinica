<div class="sidebar" data-color="blue" data-image="<?php echo e(asset('img/potes.jpg')); ?>">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <img src="<?php echo e(asset('img/logoplas.png')); ?>" alt="profile image" >
        </div>
        <ul class="nav">
            <li class="nav-item <?php if($activePage == 'dashboard'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p><?php echo e(__("Visão Geral")); ?></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="nc-icon nc-square-pin"></i>
                    <p><?php echo e(__("Regional")); ?></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="nc-icon nc-badge"></i>
                    <p><?php echo e(__("Representantes")); ?></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="nc-icon nc-circle-09"></i>
                    <p><?php echo e(__("Clientes")); ?></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="nc-icon nc-layers-3"></i>
                    <p><?php echo e(__("Analise Anual")); ?></p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" <?php if($activeButton =='laravel'): ?> aria-expanded="true" <?php endif; ?>>
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>
                        <?php echo e(__('Diário')); ?>

                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse <?php if($activeButton =='laravel'): ?> show <?php endif; ?>" id="laravelExamples">
                    <ul class="nav" style="margin-left:10%;">
                        <li class="nav-item <?php if($activePage == 'user'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
                                <i class="nc-icon nc-grid-45"></i>
                                <p><?php echo e(__("Entrada Pedido")); ?></p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($activePage == 'user-management'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                                <i class="nc-icon nc-money-coins"></i>
                                <p><?php echo e(__("Faturamento")); ?></p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($activePage == 'user-management'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                                <i class="nc-icon nc-scissors"></i>
                                <p><?php echo e(__("Cancelamento")); ?></p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($activePage == 'user-management'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                                <i class="nc-icon nc-refresh-02"></i>
                                <p><?php echo e(__("Devoluções")); ?></p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($activePage == 'user-visita'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                                <i class="nc-icon nc-app"></i>
                                <p><?php echo e(__("Produtos")); ?></p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($activePage == 'user-visita'): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                                <i class="nc-icon nc-pin-3"></i>
                                <p><?php echo e(__("Visita")); ?></p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item <?php if($activePage == 'Planej. x Vendas'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('page.index', 'planVendas')); ?>">
                    <i class="nc-icon nc-notes"></i>
                    <p><?php echo e(__("Planej. x Vendas")); ?></p>
                </a>
            </li>
            <li class="nav-item <?php if($activePage == 'Rel.Despesas'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('page.index', 'rdespesas')); ?>">
                    <i class="nc-icon nc-paper-2"></i>
                    <p><?php echo e(__("Rel.Despesas")); ?></p>
                </a>
            </li>
            <li class="nav-item <?php if($activePage == 'Feira'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('page.index', 'feiras')); ?>">
                    <i class="nc-icon nc-atom"></i>
                    <p><?php echo e(__("Feira")); ?></p>
                </a>
            </li>
            <li class="nav-item <?php if($activePage == 'Premiação'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('page.index', 'premios')); ?>">
                    <i class="nc-icon nc-spaceship"></i>
                    <p><?php echo e(__("Premiação")); ?></p>
                </a>
            </li>
            <li class="nav-item <?php if($activePage == 'notifications'): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('page.index', 'notifications')); ?>">
                    <i class="nc-icon nc-credit-card"></i>
                    <p><?php echo e(__("Título")); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\laragon\www\gerencia-sr\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>