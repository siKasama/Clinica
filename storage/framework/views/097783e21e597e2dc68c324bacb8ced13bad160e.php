<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pl-lg-8">
                        <div class="form-group<?php echo e($errors->has('produto') ? ' has-danger' : ''); ?>">
                            <label class="form-group-label" for="input-produto">
                                <i class="w3-xlarge fa fa-clone"></i><?php echo e(__('Produto')); ?>

                            </label>
                            <input type="text" name="produto" id="input-produto" class="form-control<?php echo e($errors->has('produto') ? ' has-danger' : ''); ?>" placeholder="<?php echo e(__('Referência do Produto ou descrição')); ?>" autofocus>

                            <?php echo $__env->make('alerts.feedback', ['field' => 'produto'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-group-label" for="select-tipo">
                                        <i class="w3-xlarge fa fa-filter"></i><?php echo e(__('Tipo')); ?>

                                    </label>

                                    <select name="tipo" class="form-control">

                                    </select>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'tipo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <br>
                                    <button type="submit" class="btn btn-info btn-fill btn-wd"><?php echo e(__('Pesquisar')); ?>

                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'planVendas', 'title' => 'Portal Gerencial - T.I.', 'navName' => 'Planej. x Vendas', 'activeButton' => 'laravel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gerencia-sr\resources\views/pages/planVendas.blade.php ENDPATH**/ ?>