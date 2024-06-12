<?php $__env->startSection('title', 'Create'); ?>

<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if($errors->any()): ?>

        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

    <?php endif; ?>

    <!-- Container Start -->

    <div class="container mt-3">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Add HiTOEFL Teachers</span>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="<?php echo e(route('dashboard.teachers.postStore')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Topic:</strong>
                                <input type="text" name="topic" class="form-control" placeholder="Topic">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Teacher:</strong>
                                <input type="text" name="teacher" class="form-control" placeholder="Teacher">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Category:</strong>
                                <input type="text" name="category" class="form-control" placeholder="Category">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="img" class="form-control" placeholder="Image">
                            </div>
                        </div>
                        <br>
                        <a href="<?php echo e(route('dashboard.teachers.getIndex')); ?>" class="btn btn-danger">back</a>
                        <button type="submit" class="btn btn-success mx-2 ">Save</button>
                    </form>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/teachers/create.blade.php ENDPATH**/ ?>