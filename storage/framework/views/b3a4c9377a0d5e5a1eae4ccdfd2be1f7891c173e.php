<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					
					<span class="pull-left"><?php echo e($about->created_at->diffForHumans()); ?></span>
				</div>
				<div class="panel-body">
					<?php echo e($about->content); ?>

				</div>
				<div class="panel-footer clearfix" style="background-color: #fff;">
					
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>