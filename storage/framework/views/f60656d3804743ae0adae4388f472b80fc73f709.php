<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('extra-css'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-styles'); ?>
    <!-- start here -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mt-3">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Edit HiTOEFL Userlist</span>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="<?php echo e(route('dashboard.userlist.postUpdate', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="mb-3">
                            <label for="topic" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo e($data->username); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo e($data->email); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="teacher" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="<?php echo e($data->password); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Is Admin ?</label>
                            <input type="text" class="form-control" name="is_admin" value="<?php echo e($data->is_admin); ?>">
                        </div>
                        <br>
                        <a href="<?php echo e(route('dashboard.userlist.getIndex')); ?>" class="btn btn-danger">back</a>
                        <input type="hidden" name="hidden_id" value="<?php echo e($data->id); ?>" />
                        <button type="submit" class="btn btn-success mx-2">Save</button>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/userlist/edit.blade.php ENDPATH**/ ?>