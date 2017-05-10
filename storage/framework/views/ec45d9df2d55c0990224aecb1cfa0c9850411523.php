<?php $__env->startSection('content'); ?>
	<div class="row">
		

		<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span><?php echo e($post->user->name); ?></span>
						<span class="pull-right"><?php echo e($post->created_at->diffForHumans()); ?></span>
					</div>
					<div class="panel-body">
						<div>
						<?php echo e(substr($post->content, 0, 100)); ?>...
						<a href="/posts/<?php echo e($post->id); ?>">Read more</a>
					</div>

					</div>
					<div class="panel-footer clearfix" style="background-color: #fff;">
						<a href="#" class="pull-right">Like</a>
					</div>
				</div>
			</div>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
			No results found
		<?php endif; ?>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body">
				<?php echo e($posts->links()); ?>

			</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>