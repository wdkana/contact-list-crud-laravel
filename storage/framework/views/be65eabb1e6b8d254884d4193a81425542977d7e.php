<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Add New Kontak</h3>
      </div>
    </div>
  </div>

  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <strong>Whooops!! </strong> There were some problems with your input.<br>
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php echo Form::open(['route' => 'kontak.store', 'method' => 'POST']); ?>

    <?php echo $__env->make('kontak.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('kontak.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>