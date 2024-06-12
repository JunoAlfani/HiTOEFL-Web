<?php $__env->startSection('title', 'Course Payment'); ?>


<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->
    <link href="<?php echo e(asset('global/css')); ?>/payment.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section>
        <div class="container py-5">

            <!-- FOR DEMO PURPOSE -->
            <header class="text-center mb-5 text-white">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <h1>HiTOEFL Package</h1>
                    </div>
                </div>
            </header>
            <!-- END -->



            <div class="row text-center align-items-end">
                <!-- Pricing Table-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h2 text-uppercase font-weight-bold mb-4">English Short Course</h1>
                        <h2 class="h1 font-weight-bold">IDR399.000<span class="text-small font-weight-normal ml-2">/ month</span>
                        </h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Experience online learning with our teachers at HiTOEFL
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Certificate Digital
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> e-book learning materials.
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="fa fa-times mr-2"></i>
                                <del>HiTOEFL Exercise </del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="fa fa-times mr-2"></i>
                                <del>Public Speaking Training</del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="fa fa-times mr-2"></i>
                                <del>Preparing for TOEFL IBT, IELTS and scholarship programs.</del>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Buy Now</a>
                    </div>
                </div>
                <!-- END -->


                <!-- Pricing Table-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h2 text-uppercase font-weight-bold mb-4">English on Demand</h1>
                        <h2 class="h1 font-weight-bold">IDR550.000<span class="text-small font-weight-normal ml-2">/ month</span>
                        </h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Full-featured learning management system.
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Certificate Digital
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> e-book learning materials.
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> HiTOEFL Exercise
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="fa fa-times mr-2"></i>
                                <del>Public Speaking Training</del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="fa fa-times mr-2"></i>
                                <del>Preparing for TOEFL IBT, IELTS and scholarship programs.</del>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Buy Now</a>
                    </div>
                </div>
                <!-- END -->


                <!-- Pricing Table-->
                <div class="col-lg-4">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h2 text-uppercase font-weight-bold mb-4">English Skills Building</h1>
                        <h2 class="h1 font-weight-bold">IDR755.000<span class="text-small font-weight-normal ml-2">/ month</span>
                        </h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Full-featured learning management system.
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Certificate Digital
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> e-book learning materials.
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> HiTOEFL Exercise
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Public Speaking Training
                            </li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Preparing for TOEFL IBT, IELTS and scholarship programs.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Buy Now</a>
                    </div>
                </div>
                <!-- END -->

            </div>
        </div>
    </section>







    <!-- Container End -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-content'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-js'); ?>
    <!-- start here -->
    <script href="<?php echo e(asset('global/js')); ?>/payment.js" rel="stylesheet"></script>
    <script href="<?php echo e(asset('global/js')); ?>/boostrap.payment.js" rel="stylesheet"></script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/coursepayment/index.blade.php ENDPATH**/ ?>