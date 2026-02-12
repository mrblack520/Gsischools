
    <?php $__env->startSection('title'); ?> 
        <?php echo app('translator')->get('wallet::wallet.wallet_pending_request'); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo $__env->make('wallet::_walletRequest',['status'=>'pending'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/Modules/Wallet/Resources/views/walletPending.blade.php ENDPATH**/ ?>