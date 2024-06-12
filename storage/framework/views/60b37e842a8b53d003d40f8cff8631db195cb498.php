<?php $__env->startSection('title', 'Teachers'); ?>


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
                <span class="card-label fw-bold fs-3 mb-1">HiTOEFL Teachers</span>
                <br>
                <a href="<?php echo e(route('dashboard.teachers.getCreate')); ?>" class="btn btn-primary mb-3 float-start mt-4">+ Add New</a>

            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <table class="table">
                        <thead>
                            <th>Teachers</th>
                            <th>Topic</th>
                            <th>Category</th>
                            <th>Action</th>
                        </thead>
                        <tbody>


                            <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-4">
                                                <img src="<?php echo e(asset('global/img/' . $no->img)); ?>" width="50px"
                                                    height="60px" class="rounded-corners" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href=""
                                                    class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($no->teacher); ?></a>
                                                <span
                                                    class="text-muted fw-semibold text-muted d-block fs-7"><?php echo e($no->email); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($no->topic); ?></td>
                                    <td><?php echo e($no->category); ?></td>
                                    <td>
                                    <form action="" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('dashboard.teachers.getEdit', $no->id)); ?>" class="btn btn-success btn-sm"><span data-feather="edit" class="mb-1" ></span>Edit</a>
                                        <a href="<?php echo e(route('dashboard.teachers.getDestroy', $no->id)); ?>" class="btn btn-danger btn-sm"><span data-feather="trash" class="mb-1" ></span>Hapus</a>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\laratod\hitoefl\resources\views/dashboard/teachers/index.blade.php ENDPATH**/ ?>