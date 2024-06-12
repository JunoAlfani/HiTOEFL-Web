<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link rel="icon" href="<?php echo e(asset('global')); ?>/img/titlelogo.svg" type="image/icon type" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="<?php echo e(asset('global')); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('global')); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('global')); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('global')); ?>/css/style.css" rel="stylesheet" />

    <title>HiTOEFL | <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>

    <?php echo $__env->make('site.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('site.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('global')); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo e(asset('global')); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('global')); ?>/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo e(asset('global')); ?>/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo e(asset('global')); ?>/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo e(asset('global')); ?>/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('global')); ?>/js/main.js"></script>

    <script>
        feather.replace()
    </script>

</body>

</html>
<?php /**PATH C:\dev\laratod\hitoefl\resources\views/site/layouts/main.blade.php ENDPATH**/ ?>