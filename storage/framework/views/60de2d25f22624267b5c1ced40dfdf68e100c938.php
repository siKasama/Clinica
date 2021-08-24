<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/tablet_information.png')); ?>">
        <link rel="icon" type="image/png" href="<?php echo e(asset('img/responsive3.ico')); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo e($title); ?></title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="<?php echo e(asset('light-bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0')); ?> " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="<?php echo e(asset('light-bootstrap/css/demo.css')); ?>" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper <?php if(!auth()->check() || request()->route()->getName() == ""): ?> wrapper-full-page <?php endif; ?>">

            <?php if(auth()->check() && request()->route()->getName() != ""): ?>
                <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php endif; ?>

            <div class="<?php if(auth()->check() && request()->route()->getName() != ""): ?> main-panel <?php endif; ?>">
                <?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('layouts.footer.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>



    </body>
        <!--   Core JS Files   -->
    <script src="<?php echo e(asset('light-bootstrap/js/core/jquery.3.2.1.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('light-bootstrap/js/core/popper.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('light-bootstrap/js/core/bootstrap.min.js')); ?>" type="text/javascript"></script>

    <script src="<?php echo e(asset('light-bootstrap/js/plugins/jquery.sharrre.js')); ?>"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo e(asset('light-bootstrap/js/plugins/bootstrap-switch.js')); ?>"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="<?php echo e(asset('light-bootstrap/js/plugins/chartist.min.js')); ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('light-bootstrap/js/plugins/bootstrap-notify.js')); ?>"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="<?php echo e(asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0')); ?>" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('light-bootstrap/js/demo.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <script>
      $(document).ready(function () {

      });
    </script>
</html>
<?php /**PATH C:\laragon\www\Clinica_x\resources\views/layouts/app.blade.php ENDPATH**/ ?>