
    <?php $__env->startSection('title'); ?> 
            <?php echo app('translator')->get('fees::feesModule.add_fees_payment'); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo $__env->make('fees::_addFeesPayment',['role'=>'admin'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/Modules/Fees/Resources/views/addFessPayment.blade.php ENDPATH**/ ?>