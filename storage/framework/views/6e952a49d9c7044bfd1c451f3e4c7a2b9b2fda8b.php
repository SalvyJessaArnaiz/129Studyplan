<?php $__env->startSection('content'); ?>
<div class="container2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="phead" class="panel-heading">Login</div>
                <div id="pbody" class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('student_num') ? ' has-error' : ''); ?>">
                            <label for="student_num" id="blink" class="col-md-4 control-label">Student Number</label>

                            <div class="col-md-6">
                                <input id="student_num" type="text" class="form-control" name="student_num" value="<?php echo e(old('student_num')); ?>" required autofocus>

                                <?php if($errors->has('student_num')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('student_num')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" id="blink" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div id="blink" class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a id="blink" class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>