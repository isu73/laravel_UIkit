<?php $__env->startSection('content'); ?>
<div class="uk-width-small-1-2 uk-container-center">
    <div class="uk-float-right">
        <?php if(Route::has('login')): ?>
            <div class="uk-padding-small">
                <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline"><span uk-icon="icon: home"></span></span></a>
            </div>
        <?php endif; ?>
    </div>
    <div class="uk-flex-row">
        <div class="uk-position-center">
            <div class="uk-card uk-width-large@s uk-padding-small border-navi-blue border-1">
                <div class="uk-card-header uk-text-center"><span uk-icon="icon: bolt; ratio: 2"></span>LOGO</div>
                <div class="uk-card-body uk-padding-medium">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="uk-grid-row-large">
                            <label for="email" class="uk-width-small"><?php echo e(__('Email Address')); ?></label>
                            <div class="uk-margin-small-bottom">
                                <input id="email" type="email" class="uk-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <label for="password" class="uk-width-small"><?php echo e(__('Password')); ?></label>
                            <div class="uk-margin-small-bottom">
                                <input id="password" type="password" class="uk-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <div class="uk-margin-medium-bottom">
                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                    <label class="uk-width-small uk-form-label text-white"><input class="uk-checkbox uk-background-secondary" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <div class="uk-margin-small-bottom">
                                <button type="submit" class="uk-button bg-navi-blue">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <p>
                                        <a class="uk-link-muted uk-text-small" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>