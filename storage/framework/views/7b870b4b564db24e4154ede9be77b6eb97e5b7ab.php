<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group<?php echo e($errors->has('regiao') ? ' has-danger' : ''); ?>">
                                    <label class="form-group-label" for="select-regiao">
                                        <i class="w3-xlarge fa fa-map-marker"></i><?php echo e(__('Região')); ?>

                                    </label>

                                    <select name="regiao" class="form-control">

                                    </select>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'regiao'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-group-label" for="input-periodo">
                                        <i class="w3-xlarge fa fa-hourglass-o"></i><?php echo e(__('Periodo')); ?>

                                    </label>
                                    <input type="text" name="periodo" id="input-periodo" class="form-control date" placeholder="mm/aaaa" autofocus>
                                </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <br>
                            <button type="submit" class="btn btn-info btn-fill btn-wd"><?php echo e(__('Pesquisar')); ?>

                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="map"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'maps', 'title' => 'Portal Gerencial - Plasutil [T.I.]', 'navName' => 'Premiação', 'activeButton' => 'laravel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gerencia-sr\resources\views/pages/maps.blade.php ENDPATH**/ ?>