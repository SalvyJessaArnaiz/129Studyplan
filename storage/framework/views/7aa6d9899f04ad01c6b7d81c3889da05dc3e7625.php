<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			<div class="panel-body panel-default text-center">
				<img class="profile-img" src="/img-uploads/profile-pic.png">
				<h1><?php echo e($user->name); ?><i>(<?php echo e($user->username); ?>)</i></h1>
				<h4><?php echo e($user->email); ?></h4>
				<h4><?php echo e($user->bdate->format('l j F Y')); ?> (<?php echo e($user->bdate->age); ?> years old)</h4>
				<input type="submit" class="btn btn-success" value="Follow">
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>