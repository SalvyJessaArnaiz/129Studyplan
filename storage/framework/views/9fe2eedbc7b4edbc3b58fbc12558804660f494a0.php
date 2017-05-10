<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body panel-default">
				<div class="panel-heading">
					<h1>Add More</h1>
				</div>
				<div class="panel-body">
					<form class="form-group" action="/abouts" method="POST">
						<?php echo e(csrf_field()); ?>

						<input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>" />
						<textarea name="content" class="form-control"></textarea>
						<input type="submit" class="btn btn-success pull-right" value="Update" />
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>