
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('academics.class_routine'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>Class Routine </h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('academics.class_routine'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-20">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <?php echo $__env->make('backEnd.studentPanel._class_routine_content', ['sm_weekends' => $sm_weekends, 'records' => $records, 'routineDashboard' => $routineDashboard = false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/studentPanel/class_routine.blade.php ENDPATH**/ ?>