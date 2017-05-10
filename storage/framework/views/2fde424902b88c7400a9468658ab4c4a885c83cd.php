<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span>Posted by <?php echo e($post->user->name); ?></span>
					<span class="pull-right"><?php echo e($post->created_at->diffForHumans()); ?></span>
				</div>
				<div class="panel-body">
					<?php echo e($post->content); ?>

				</div>
				<div class="panel-footer clearfix" style="background-color: #fff;">
					<a href="#" class="pull-right">Like</a>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>