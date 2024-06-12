<?php $__env->startSection('title', 'Management Course'); ?>


<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="row">

        <header class="site-header">
            <div class="">
                <a href="<?php echo e(route('site.home.getIndex')); ?>">
                    <img src="<?php echo e(asset('global')); ?>/img/logohitoefl.svg" style="width: 300px" class="rounded mx-auto d-block mt-5" alt="">
                </a>
            </div>
        </header>

        <div id="main-content" class="twelve columns mt-5">

            <h1 class="text-center" >Our website is almost ready.</h1>

            <p class="text-center mt-5"> Everything, what we create from design, code or adversiting it's building a solid brand. thanks for support us !
            </p>


        </div>


    </main>









    <!-- Container End -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-content'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-js'); ?>
    <!-- start here -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/managementcourse/index.blade.php ENDPATH**/ ?>