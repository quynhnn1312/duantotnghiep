<?php $__env->startSection('content'); ?>
    <div class="authentication-form mx-auto">
        <div class="logo-centered">
            <a href="../index.html"><img src="<?php echo e(asset('../admins/src/img/brand.svg')); ?>" alt=""></a>
        </div>
        <h3>Forgot Password</h3>
        <p>We will send you a link to reset password.</p>
        <form id="reset-form" onsubmit="sendRequest(); return false;">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required="">
                <i class="ik ik-mail"></i>
            </div>
            <div class="form-group">
                <select name="role" id="role" class="form-control form-control-lg">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="sign-btn text-center">
                <button onclick="sendRequest()" type="button" class="btn btn-theme">Reset Password</button>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col text-right">
                <a href="<?php echo e(route('login')); ?>">Redirect Login <i class="ik ik-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        function sendRequest() {
            $.ajax({
                url: "<?php echo e(route('reset-password')); ?>",
                method: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    'email': $('#email').val(),
                    'role': $('#role').val(),
                },
                success: function (data) {
                    $('#reset-form').trigger("reset");
                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>