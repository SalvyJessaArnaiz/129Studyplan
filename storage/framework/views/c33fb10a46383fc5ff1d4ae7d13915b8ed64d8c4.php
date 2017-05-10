<?php $__env->startSection('content'); ?>
	<div class="row">
		

		<?php $__empty_1 = true; $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>

			<div class="col-md-6 col-md-offset-3">
						
						<div class="pull-left">
						<?php echo e(substr($about->content, 0, 100)); ?>

						
					</div>
						<span class="pull-right"><?php echo e($about->created_at->diffForHumans()); ?></span>
					</div>
					

					<div class="panel-footer clearfix" style="background-color: #fff;">
						
					</div>
				</div>
			</div>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
			No results found
		<?php endif; ?>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body">
				<?php echo e($abouts->links()); ?>

			</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>