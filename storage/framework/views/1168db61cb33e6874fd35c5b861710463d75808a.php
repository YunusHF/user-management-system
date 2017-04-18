<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($x->nama_lengkap); ?>

                        <?php echo e($x->jenis_kelamin); ?>

                        <?php echo e($x->tempat_lahir); ?>

                        <?php echo e($x->tanggal_lahir); ?>

                        <?php echo e($x->alamat); ?>

                        <?php echo e($x->agama); ?>

                        <?php echo e($x->status_perkawinan); ?>

                        <?php echo e($x->pekerjaan); ?>

                        <?php echo e($x->avatar); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>