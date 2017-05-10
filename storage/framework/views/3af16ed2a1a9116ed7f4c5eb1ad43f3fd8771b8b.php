<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="header"><b>Welcome  <?php echo e(Auth::user()->name); ?>!</b></div>
        </div>
    </div>
    <form action="#">
    	<button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">Humanities</button>
    </form>

    <form action="#">
    	<button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">SSP</button>
    </form>

    <form action="#">
    	<button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">MST</button>
    </form>

    <form action="#">
    	<button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">DPSM</button>
    </form>
	  
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>