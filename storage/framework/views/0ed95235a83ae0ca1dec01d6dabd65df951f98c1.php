<?php $__env->startSection('content'); ?>
    <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s" uk-grid>
        <div class=""></div>
        <div class="uk-margin-medium uk-padding-small">
            <div class="uk-text-center">
                <h3 class="text-white"><?php echo e(__('Registration')); ?></h3>
            </div>
            <form class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-2@s">
                        <label for="firstname"  class="uk-form-label text-white"><?php echo e(__('First Name')); ?></label>
                        <input class="uk-input" type="text"  aria-label="50">
                    </div>
                    <div class="uk-width-1-2@s">
                        <label for="lastname"  class="uk-form-label text-white"><?php echo e(__('Last Name')); ?></label>
                        <input class="uk-input" type="text" aria-label="50">
                    </div>
                    <div class="uk-width-1-1">
                    <label for="company"  class="uk-form-label text-white"><?php echo e(__('Company Name')); ?></label>
                    <input id="company" type="text" class="uk-input <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="company" value="<?php echo e(old('company')); ?>">
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
                    <div class="uk-width-1-1">
                        <label for="email"  class="uk-form-label text-white"><?php echo e(__('Email')); ?></label>
                        <input id="email" type="email" class="uk-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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
                    <div class="uk-width-1-1">
                        <label for="password"  class="uk-form-label text-white"><?php echo e(__('Password')); ?></label>
                        <input id="password" type="password" class="uk-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
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
                    <div class="uk-width-1-1 uk-margin-medium-bottom">
                        <label for="password-confirm"  class="uk-form-label text-white"><?php echo e(__('Confirm Password')); ?></label>
                        <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="uk-flex-row">
                        <div class="uk-margin-small-bottom">
                            <button type="submit" class="uk-button bg-navi-blue">
                                <?php echo e(__('Registration')); ?>

                            </button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="uk-text-right">
            <?php if(Route::has('login')): ?>
                <div class="uk-padding-small">
                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline"><span uk-icon="icon: home"></span></span></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>