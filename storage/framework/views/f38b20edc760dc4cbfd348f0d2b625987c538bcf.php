<?php $__env->startSection('title', 'Course'); ?>

<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Our Courses</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="<?php echo e(route('site.home.getIndex')); ?>">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Classes</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Course</span>
                </p>
                <h1 class="mb-4">Courses for You</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="<?php echo e(asset('global')); ?>/img//img1.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English Short Course</h4>
                            <p class="card-text">Here you can find activities to practise your listening skills. Listening
                                will help you to improve your understanding of the language and your pronunciation...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR399.999 / Month</div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="<?php echo e(asset('global')); ?>/img/img2.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English on Demand</h4>
                            <p class="card-text">Practice your English writing by learning how to arrange clear grammar
                                explanations and learn new vocabularies...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR550.000 / Month</div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="<?php echo e(asset('global')); ?>/img/img3.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English Skills Building</h4>
                            <p class="card-text">Here you can find activities to practise your speaking skills. speaking
                                will help you to improve your understanding of the language and your pronunciation...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR755.000 / Month</div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->








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

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/site/course/index.blade.php ENDPATH**/ ?>