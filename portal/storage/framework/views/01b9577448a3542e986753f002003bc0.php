
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('admin.id_card_list'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php
        $breadCrumbs = [
            'h1' => __('admin.id_card'),
            'bcPages' => ['<a href="#">' . __('admin.admin_section') . '</a>'],
        ];
    ?>
    <?php if (isset($component)) { $__componentOriginal12c7d31250f517276041e7abf5143b08 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12c7d31250f517276041e7abf5143b08 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bread-crumb-component','data' => ['breadCrumbs' => $breadCrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bread-crumb-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['breadCrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadCrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12c7d31250f517276041e7abf5143b08)): ?>
<?php $attributes = $__attributesOriginal12c7d31250f517276041e7abf5143b08; ?>
<?php unset($__attributesOriginal12c7d31250f517276041e7abf5143b08); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12c7d31250f517276041e7abf5143b08)): ?>
<?php $component = $__componentOriginal12c7d31250f517276041e7abf5143b08; ?>
<?php unset($__componentOriginal12c7d31250f517276041e7abf5143b08); ?>
<?php endif; ?>
    <section class="admin-visitor-area up_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="offset-lg-8 col-lg-4 text-right col-md-12 mb-2">
                                <?php if(userPermission('create-id-card')): ?>
                                    <a href="<?php echo e(route('create-id-card')); ?>" class="primary-btn small fix-gr-bg">
                                        <span class="ti-plus pr-2"></span>
                                        <?php echo app('translator')->get('admin.create_id_card'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 no-gutters">
                                <div class="main-title">
                                    <h3 class="mb-15"><?php echo app('translator')->get('admin.id_card_list'); ?></h3>
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
                                    <table id="table_id" class="table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><?php echo app('translator')->get('common.sl'); ?></th>
                                                <th><?php echo app('translator')->get('admin.title'); ?></th>
                                                <th><?php echo app('translator')->get('admin.role'); ?></th>
                                                <th><?php echo app('translator')->get('common.action'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $id_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $id_card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($id_card->title); ?></td>
                                                    <td>
                                                        <?php
                                                            $role_id = $id_card->role_id == 2 ? 2 : 0;
                                                            $role_names = App\SmStudentIdCard::roleName($id_card->id);
                                                        ?>
                                                        <?php $__currentLoopData = $role_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php echo e($role_name->name); ?>

                                                            <?php echo e($loop->iteration > 1 && !$loop->last ? ',' : ''); ?>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
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
                                                             <?php if(userPermission('student-id-card-preview')): ?>
                                                                <a class="dropdown-item preview"
                                                                    href="<?php echo e(route('id-cart-preview', $id_card->id)); ?>">
                                                                    <?php echo app('translator')->get('admin.preview'); ?>
                                                                </a>
                                                            <?php endif; ?>
                                                            <?php if(userPermission('student-id-card-edit')): ?>
                                                                <a class="dropdown-item"
                                                                    href="<?php echo e(route('student-id-card-edit', ['id' => $id_card->id])); ?>"><?php echo app('translator')->get('common.edit'); ?></a>
                                                            <?php endif; ?>
                                                            <?php if(userPermission('student-id-card-delete')): ?>
                                                                <a class="dropdown-item" data-toggle="modal"
                                                                    data-target="#deleteIdCard<?php echo e($id_card->id); ?>"
                                                                    href="#">
                                                                    <?php echo app('translator')->get('common.delete'); ?>
                                                                </a>
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

                                                

                                                

                                                
                                                <div class="modal fade admin-query" id="deleteIdCard<?php echo e($id_card->id); ?>">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><?php echo app('translator')->get('common.delete_id_card'); ?></h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <h4><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?></h4>
                                                                </div>

                                                                <div class="mt-40 d-flex justify-content-between">
                                                                    <button type="button" class="primary-btn tr-bg"
                                                                        data-dismiss="modal">
                                                                        <?php echo app('translator')->get('common.cancel'); ?>
                                                                    </button>
                                                                    <?php echo e(html()->form('POST', route('student-id-card-delete'))->open()); ?>

                                                                    <input type="hidden" name="id"
                                                                        value="<?php echo e($id_card->id); ?>">
                                                                    <button class="primary-btn fix-gr-bg"
                                                                        type="submit"><?php echo app('translator')->get('common.delete'); ?></button>
                                                                    <?php echo e(html()->form()->close()); ?>

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


    <div id="appendModal">


    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.preview', function(event) {
                event.preventDefault();
                let url = $(this).attr('href');
                $.ajax({
                    url: url
                }).done(function(response) {
                    if (response.status == 1) {
                        $("#appendModal").html(response.view);
                        $("#previewIdCard").modal('show');
                    } else {
                        toastr.error(response.msg, 'Error');
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/admin/idCard/student_id_card_list.blade.php ENDPATH**/ ?>