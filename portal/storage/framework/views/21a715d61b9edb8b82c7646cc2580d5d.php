
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('student.student_group'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
<section class="sms-breadcrumb mb-20 up_breadcrumb">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1><?php echo app('translator')->get('student.student_group'); ?></h1>
            <div class="bc-pages">
                <a href="<?php echo e(url('admin-dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                <a href="#"><?php echo app('translator')->get('student.student_information'); ?></a>
                <a href="#"><?php echo app('translator')->get('student.student_group'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <?php if(isset($student_group)): ?>
            <?php if(userPermission('student_group_store')): ?>
            <div class="row">
                <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                    <a href="<?php echo e(route('student_group')); ?>" class="primary-btn small fix-gr-bg">
                        <span class="ti-plus pr-2"></span>
                        <?php echo app('translator')->get('common.add'); ?>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="row">
            <?php if(userPermission('student_group_store') || isset($student_group)): ?>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(isset($student_group)): ?>
                        <?php echo e(html()->form('POST', route('student_group_update'))->attributes([
                            'class' => 'form-horizontal',
                            'files' => true,
                            'enctype' => 'multipart/form-data',
                        ])->open()); ?>

                        <?php else: ?>
                        <?php if(userPermission('student_group_store')): ?>
                        <?php echo e(html()->form('POST', route('student_group_store'))->attributes([
                            'class' => 'form-horizontal',
                            'files' => true,
                            'enctype' => 'multipart/form-data',
                        ])->open()); ?>

                        <?php endif; ?>
                        <?php endif; ?>
                        <div class="white-box">
                            <div class="main-title">
                                <h3 class="mb-15"><?php if(isset($student_group)): ?>
                                    <?php echo app('translator')->get('student.edit_student_group'); ?>
                                    <?php else: ?>
                                    <?php echo app('translator')->get('student.add_student_group'); ?>
                                    <?php endif; ?>
    
                                </h3>
                            </div>
                            <div class="add-visitor">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="primary_input">
                                            <label class="primary_input_label" for=""><?php echo app('translator')->get('student.group'); ?> <span
                                                    class="text-danger"> *</span></label>
                                            <input
                                                class="primary_input_field form-control<?php echo e($errors->has('group') ? ' is-invalid' : ''); ?>"
                                                type="text" name="group" autocomplete="off"
                                                value="<?php echo e(isset($student_group)? $student_group->group: old('group')); ?>">
                                            <input type="hidden" name="id"
                                                value="<?php echo e(isset($student_group)? $student_group->id: ''); ?>">

                                            <?php if($errors->has('group')): ?>
                                            <span class="text-danger">
                                                <?php echo e($errors->first('group')); ?>

                                            </span>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                $tooltip = "";
                                if(userPermission('student_group_store')){
                                $tooltip = "";
                                }else{
                                $tooltip = "You have no permission to add";
                                }
                                ?>
                                <div class="row mt-40">
                                    <div class="col-lg-12 text-center">
                                        <button class="primary-btn fix-gr-bg submit" data-toggle="tooltip"
                                            title="<?php echo e($tooltip); ?>">
                                            <span class="ti-check"></span>
                                            <?php if(isset($sectionId)): ?>
                                                <?php echo app('translator')->get('student.update_group'); ?>
                                            <?php else: ?>
                                                <?php echo app('translator')->get('student.save_group'); ?>
                                            <?php endif; ?>

                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php echo e(html()->form()->close()); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="<?php if(userPermission('student_group_store') || isset($student_group)): ?> col-lg-9 <?php else: ?> col-lg-12 <?php endif; ?>">
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-4 no-gutters">
                            <div class="main-title">
                                <h3 class="mb-15"><?php echo app('translator')->get('student.student_group_list'); ?></h3>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (isset($component)) { $__componentOriginal163c8ba6efb795223894d5ffef5034f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal163c8ba6efb795223894d5ffef5034f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <table id="table_id" class="table Crm_table_active3" cellspacing="0" width="100%">
    
                                    <thead>
    
                                        <tr>
                                            <th><?php echo app('translator')->get('student.group'); ?></th>
                                            <th><?php echo app('translator')->get('student.students'); ?></th>
                                            <th><?php echo app('translator')->get('common.actions'); ?></th>
                                        </tr>
                                    </thead>
    
    
    
                                    <tbody>
                                        <?php $__currentLoopData = $student_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($student_group->group); ?></td>
                                            <td class="pl-4"><?php echo e(@$student_group->students_count); ?></td>
                                            <td>
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
                                                    <?php if(userPermission('student_group_edit')): ?>
                                                    <a class="dropdown-item"
                                                        href="<?php echo e(route('student_group_edit', [$student_group->id])); ?>"><?php echo e(__('common.edit')); ?></a>
                                                    <?php endif; ?>
                                                    <?php if(userPermission('student_group_delete')): ?>
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#deleteStudentGroupModal<?php echo e($student_group->id); ?>"
                                                        href="#"><?php echo e(__('common.delete')); ?></a>
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
                                            </td>
                                        </tr>
                                        <div class="modal fade admin-query"
                                            id="deleteStudentGroupModal<?php echo e($student_group->id); ?>">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><?php echo app('translator')->get('student.delete_group'); ?></h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
    
                                                    <div class="modal-body">
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <h4><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?></h4>
                                                            </div>
    
                                                            <div class="mt-40 d-flex justify-content-between">
                                                                <button type="button" class="primary-btn tr-bg"
                                                                    data-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
                                                                <a
                                                                    href="<?php echo e(route('student_group_delete', [$student_group->id])); ?>"><button
                                                                        class="primary-btn fix-gr-bg"
                                                                        type="submit"><?php echo app('translator')->get('common.delete'); ?></button></a>
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $attributes = $__attributesOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $component = $__componentOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__componentOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/studentInformation/student_group.blade.php ENDPATH**/ ?>