<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="row justify-content-md-start">
                            <div class="col-md-8">
                                <div class="form-group<?php echo e($errors->has('regiao') ? ' has-danger' : ''); ?>">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i><?php echo e(__('Região')); ?>

                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'regiao'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'feiras', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Feira', 'activeButton' => 'laravel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gerencia-sr\resources\views/pages/feiras.blade.php ENDPATH**/ ?>