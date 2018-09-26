<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Post </h3> <a class="btn btn-xs btn-primary" href="<?php echo e(route('kontak.index')); ?>">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nama : </strong>
        <?php echo e($kontak->Nama); ?>

      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Alamat : </strong>
        <?php echo e($kontak->alamat); ?>

      </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
          <strong>No HP : </strong>
          <?php echo e($kontak->nohp); ?>

        </div>
      </div>
  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kontak.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>