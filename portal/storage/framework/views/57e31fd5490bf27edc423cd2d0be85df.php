<?php if (isset($component)) { $__componentOriginal5828d9175fa53510a68ffc290f67c972 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5828d9175fa53510a68ffc290f67c972 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.drop-down','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('drop-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if((isset($role) && $role == 'admin') || $role == 'lms'): ?>
        <?php if(userPermission('fees.fees-view-payment')): ?>
            <a class="dropdown-item" onclick="viewPaymentDetailModal(<?php echo e($row->id); ?>)"><?php echo app('translator')->get('inventory.view_payment'); ?></a>
        <?php endif; ?>
        <?php if($balance == 0): ?>
            <?php if(userPermission('fees.fees-invoice-view')): ?>
                <a class="dropdown-item"
                    href="<?php echo e(route('fees.fees-invoice-view', ['id' => $row->id, 'state' => 'view'])); ?>"><?php echo app('translator')->get('common.view'); ?></a>
            <?php endif; ?>
        <?php else: ?>
            <?php if($paid_amount > 0): ?>
                <?php if(userPermission('fees.fees-invoice-view')): ?>
                    <a class="dropdown-item"
                        href="<?php echo e(route('fees.fees-invoice-view', ['id' => $row->id, 'state' => 'view'])); ?>"><?php echo app('translator')->get('common.view'); ?></a>
                <?php endif; ?>
                <?php if(userPermission('fees.add-fees-payment')): ?>
                    <a class="dropdown-item"
                        href="<?php echo e(route('fees.add-fees-payment', $row->id)); ?>"><?php echo app('translator')->get('inventory.add_payment'); ?></a>
                <?php endif; ?>
            <?php else: ?>
                <?php if(userPermission('fees.fees-invoice-view')): ?>
                    <a class="dropdown-item"
                        href="<?php echo e(route('fees.fees-invoice-view', ['id' => $row->id, 'state' => 'view'])); ?>"><?php echo app('translator')->get('common.view'); ?></a>
                <?php endif; ?>
                <?php if(userPermission('fees.add-fees-payment')): ?>
                    <a class="dropdown-item"
                        href="<?php echo e(route('fees.add-fees-payment', $row->id)); ?>"><?php echo app('translator')->get('inventory.add_payment'); ?></a>
                <?php endif; ?>

                <?php if(userPermission('fees.fees-invoice-edit')): ?>
                    <a class="dropdown-item"
                        href="<?php echo e(route('fees.fees-invoice-edit', $row->id)); ?>"><?php echo app('translator')->get('common.edit'); ?></a>
                <?php endif; ?>

                <?php if(userPermission('fees.fees-invoice-delete')): ?>
                    <a class="dropdown-item" onclick="feesInvoiceDelete(<?php echo e($row->id); ?>)" data-toggle="modal"
                        data-target="#deleteFeesPayment<?php echo e($row->id); ?>"
                        href="#"><?php echo app('translator')->get('common.delete'); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($amount == 0 && $balance == 0 && $paid_amount == 0): ?>
            <?php if(userPermission('fees.fees-invoice-delete')): ?>
                <a class="dropdown-item" onclick="feesInvoiceDelete(<?php echo e($row->id); ?>)" data-toggle="modal"
                    data-target="#deleteFeesPayment<?php echo e($row->id); ?>"
                    href="#"><?php echo app('translator')->get('common.delete'); ?></a>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5828d9175fa53510a68ffc290f67c972)): ?>
<?php $attributes = $__attributesOriginal5828d9175fa53510a68ffc290f67c972; ?>
<?php unset($__attributesOriginal5828d9175fa53510a68ffc290f67c972); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5828d9175fa53510a68ffc290f67c972)): ?>
<?php $component = $__componentOriginal5828d9175fa53510a68ffc290f67c972; ?>
<?php unset($__componentOriginal5828d9175fa53510a68ffc290f67c972); ?>
<?php endif; ?>
<?php /**PATH /home/gsistiww/public_html/portal/Modules/Fees/Resources/views/__allFeesListAction.blade.php ENDPATH**/ ?>