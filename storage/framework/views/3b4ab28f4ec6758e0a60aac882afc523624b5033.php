<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pl-lg-8">
                                <div class="form-group<?php echo e($errors->has('regiao') ? ' has-danger' : ''); ?>">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i><?php echo e(__('Região')); ?>

                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'regiao'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('rsocial') ? ' has-danger' : ''); ?>">
                                    <label class="form-group-label" for="input-rsocial">
                                        <i class="w3-xlarge fa fa-institution"></i><?php echo e(__('Razão Social')); ?>

                                    </label>
                                    <input type="text" name="rsocial" id="input-rsocial" class="form-control<?php echo e($errors->has('rsocial') ? ' has-danger' : ''); ?>" placeholder="<?php echo e(__('Razão Social ou inicio da Razão Social')); ?>" autofocus>

                                    <?php echo $__env->make('alerts.feedback', ['field' => 'rsocial'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-group-label" for="input-represent">
                                        <i class="w3-xlarge fa fa-user-circle-o"></i><?php echo e(__('Representante')); ?>

                                    </label>
                                    <input type="text" name="represent" id="input-represent" class="form-control"  placeholder="<?php echo e(__('Nome ou parte do nome do Representante')); ?>">
                                </div>
                            </div>
                            <div class="text-center">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'notifications', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Título', 'activeButton' => 'laravel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gerencia-sr\resources\views/pages/notifications.blade.php ENDPATH**/ ?>