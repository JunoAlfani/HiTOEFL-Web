<?php $__env->startSection('title', 'Userlist'); ?>


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
                <span class="card-label fw-bold fs-3 mb-1">HiTOEFL Userlist</span>
                <br>
                <a href="<?php echo e(route('dashboard.userlist.getCreate')); ?>" class="btn btn-primary mb-3 float-start mt-4">+ Add New</a>

            </h3>
        </div>

        <div class="class mb-3 ">
            <div class="card-header border-1">
                <div class="class-body">
                    <table class="table">
                        <thead>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Is_Admin</th>
                            <th>Action</th>
                        </thead>
                        <tbody>


                            <?php $__currentLoopData = $userlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href=""
                                                    class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($no->username); ?></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($no->email); ?></td>
                                    <td><?php echo e($no->password); ?></td>
                                    <td><?php echo e($no->is_admin); ?></td>
                                    <td>
                                    <form action="" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('dashboard.userlist.getEdit', $no->id)); ?>" class="btn btn-success btn-sm"><span data-feather="edit" class="mb-1" ></span>Edit</a>
                                        <a href="<?php echo e(route('dashboard.userlist.getDestroy', $no->id)); ?>" class="btn btn-danger btn-sm"><span data-feather="trash" class="mb-1" ></span>Hapus</a>
                                    </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/userlist/index.blade.php ENDPATH**/ ?>