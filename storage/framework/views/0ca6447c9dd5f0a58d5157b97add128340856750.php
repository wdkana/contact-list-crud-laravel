<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-lg-12">
      <h3>WEB KONTAK TEMAN</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="<?php echo e(route('kontak.create')); ?>">Create New Post</a>
      </div>
    </div>
  </div>
  <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
      <p><?php echo e($message); ?></p>
    </div>
  <?php endif; ?>

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th width="300px">Actions</th>
    </tr>

    <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($post->nama); ?></td>
        <td><?php echo e($post->alamat); ?></td>
        <td><?php echo e($post->nohp); ?></td>
        <td>
          <a class="btn btn-xs btn-info" href="<?php echo e(route('kontak.show', $post->id)); ?>">Show</a>
          <a class="btn btn-xs btn-primary" href="<?php echo e(route('kontak.edit', $post->id)); ?>">Edit</a>

          <?php echo Form::open(['method' => 'DELETE', 'route'=>['kontak.destroy', $post->id], 'style'=> 'display:inline']); ?>

          <?php echo Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']); ?>

          <?php echo Form::close(); ?>

        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo $kontak->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('kontak.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>