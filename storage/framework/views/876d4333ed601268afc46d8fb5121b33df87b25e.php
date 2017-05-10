<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="header"><b>Welcome  <?php echo e(Auth::user()->name); ?>!</b></div>
        </div>
    </div>
    <nav class="navbar navbar-default">
	    <ul class="nav nav-tabs">
			<li><a href="#">Humanities</a></li>
			<li><a href="#">Social Sciences</a></li>
			<li><a href="#">MST</a></li>
			<li><a href="#">DPSM</a></li>
		</ul>
	</nav>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>