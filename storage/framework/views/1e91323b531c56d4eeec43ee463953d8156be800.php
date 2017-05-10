<?php $__env->startSection('content'); ?>
	<div class="row">
		

		<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span><?php echo e($post->user->name); ?></span>
						<span class="pull-right"><?php echo e($post->created_at->diffForHumans()); ?></span>
					</div>
					<div class="panel-body panel-default">
						<?php echo e($post->content); ?>

					</div>
					<div class="panel-footer clearfix">
						<a href="#" class="pull-right">Hear, hear!</a>
					</div>
				</div>
			</div>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
			No results found
		<?php endif; ?>
		<div class="col-md-6 col-md-offset-3">
				<?php echo e($posts->links()); ?>

			</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>