 

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title"><?php echo e(__('Agendamento')); ?></h4>
                            <p class="card-category"><?php echo e(__('Last Campaign Performance')); ?></p>
                        </div>
                        <div class="card-body ">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                 
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            

            demo.showNotification();

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'dashboard', 'title' => 'Clinica x', 'navName' => 'Dashboard', 'activeButton' => 'laravel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Clinica_x\resources\views/dashboard.blade.php ENDPATH**/ ?>