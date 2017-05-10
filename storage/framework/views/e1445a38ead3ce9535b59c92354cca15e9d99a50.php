<?php $__env->startSection('content'); ?>
	<div class="row">
		<div id="aboutme" class="col-md-8 col-md-offset-3">
			<div  class="panel-body panel-default">
				<img class="about-img" src="/img-uploads/like.jpg">
				<h1><?php echo e($user->name); ?><i>(<?php echo e($user->username); ?>)</i></h1>
				<h4><?php echo e($user->email); ?></h4>
				<h4><?php echo e($user->bdate->format('l j F Y')); ?> (<?php echo e($user->bdate->age); ?> years old)</h4>
				<h4>A fourth year B.S. in Computer Science student at the University of the Philippines-Visayas</h4>
				<h4>From Bugasong Antique</h4>
				<h4>"Stressed af"</h4>
				<h4><strong>Hobbies:</strong><h4>
					<ul style="list-style-type:none">
						<li>Listening to Music</li>
						<li>Drawing</li>
						<li>Reading Books</li>
						<li>Watching Anime</li>
						<li>Playing the Guitar</li>
						<li>Playing Video Games</li>
					</ul>
				<li><a href="/abouts/create">Add More Info</a></li>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>