<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Nama : </strong>
      <?php echo Form::text('nama', null, ['placeholder'=>'Nama','class'=>'form-control']); ?>

    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Alamat : </strong>
      <?php echo Form::textarea('alamat', null, ['placeholder'=>'alamat','class'=>'form-control','style'=>'height:150px']); ?>

    </div>
  </div>
  <div class="col-xs-12">
      <div class="form-group">
        <strong>Nomor HP : </strong>
        <?php echo Form::text('nohp', null, ['placeholder'=>'nomor handphone','class'=>'form-control']); ?>

      </div>
    </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="<?php echo e(route('kontak.index')); ?>">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>