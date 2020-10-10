

<?php $__env->startSection('content'); ?>
    <div class="authentication-form mx-auto">
        <div class="logo-centered">
            <a href=""><img src="<?php echo e(asset('../admins/src/img/brand.svg')); ?>" alt=""></a>
        </div>
        <h3>Sign In to ThemeKit</h3>
        <p>Happy to see you again!</p>
        <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" required>
                <i class="ik ik-user"></i>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <i class="ik ik-lock"></i>
            </div>
            <div class="form-group">
                <select name="role" id="role" class="form-control form-control-lg">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="row">
                <div class="col text-left">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                        <span class="custom-control-label">&nbsp;Remember Me</span>
                    </label>
                </div>
                <div class="col text-right">
                    <a href="<?php echo e(route('reset-password')); ?>">Forgot Password ?</a>
                </div>
            </div>
            <div class="sign-btn text-center">
                <button class="btn btn-theme">Sign In</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('auth.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/auth/login.blade.php ENDPATH**/ ?>