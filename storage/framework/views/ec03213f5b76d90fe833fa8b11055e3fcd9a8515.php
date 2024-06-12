<?php $__env->startSection('title', 'Bookclass'); ?>

<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Teachers Details</b></div>
                <div class="col col-md-6">
                    <a href="<?php echo e(route('dashboard.teachers.getIndex')); ?>" class="btn btn-primary btn-md float-end">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-0 mx-2">
                <label class="col-sm-2 col-label-form"><b>Topic</b></label>
                <div class="col-sm-10">
                    <?php echo e($data->topic); ?>

                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Teacher Name</b></label>
                    <div class="col-sm-10">
                        <?php echo e($teacher->teacher); ?>

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Email</b></label>
                    <div class="col-sm-10">
                        <?php echo e($teacher->email); ?>

                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Category</b></label>
                    <div class="col-sm-10">
                        <?php echo e($teacher->category); ?>

                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Teachers Image</b></label>
                    <div class="col-sm-10">
                        <img src="<?php echo e(asset('global/img/' . $teacher->img)); ?>" width="150" class="img-thumbnail" />
                    </div>
                </div>
            </div>
        </div>





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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/teachers/show.blade.php ENDPATH**/ ?>