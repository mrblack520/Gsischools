
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('academics.assign_class_teacher'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .primary-btn.fix-gr-bg.submit {
            font-size: 11px;
            padding: 0 16px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('academics.assign_class_teacher'); ?> </h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('academics.academics'); ?></a>
                    <a href="#"><?php echo app('translator')->get('academics.assign_class_teacher'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <?php if(isset($assign_class_teacher)): ?>
                <?php if(userPermission('assign-class-teacher-store')): ?>
                    <div class="row">
                        <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                            <a href="<?php echo e(route('assign-class-teacher')); ?>" class="primary-btn small fix-gr-bg">
                                <span class="ti-plus pr-2"></span>
                                <?php echo app('translator')->get('academics.assign'); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(isset($assign_class_teacher)): ?>
                                <?php echo e(html()->form('PUT', route('assign-class-teacher-update', @$assign_class_teacher->id))->attribute('class', 'form-horizontal')->open()); ?>

                            <?php else: ?>
                                <?php if(userPermission('assign-class-teacher-store')): ?>
                                    <?php echo e(html()->form('POST', route('assign-class-teacher-store'))->attribute('class', 'form-horizontal')->open()); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="white-box">
                                <div class="main-title">
                                    <h3 class="mb-15">
                                        <?php if(isset($assign_class_teacher)): ?>
                                            <?php echo app('translator')->get('academics.edit_assign_class_teacher'); ?>
                                        <?php else: ?>
                                            <?php echo app('translator')->get('academics.assign_class_teacher'); ?>
                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="add-visitor">
                                    <?php
                                        if (isset($assign_class_teacher)){
                                            $shift_id = $assign_class_teacher->shift_id;
                                            $class_id = $assign_class_teacher->class_id;
                                            $section_id = $assign_class_teacher->section_id;
                                        }
                                    ?>
                                    <div class="row">
                                        <?php echo $__env->make('backEnd.shift.shift_class_section_include', [
                                            'div' => shiftEnable() ? 'col-lg-12' : 'col-lg-12',
                                            'mt' => 'mt-15',
                                            'visiable' => ['shift','class', 'section'],
                                            'required' => ['class', 'section'],
                                            'title' => ['class', 'section','shift'],
                                            'class_name' => 'class',
                                            'section_name' => 'section',
                                            'selected' => [
                                                'shift_id' => @$shift_id,
                                                'class_id' => @$class_id,
                                                'section_id' => @$section_id,
                                            ],
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    </div>

                                    <input type="hidden" name="id"
                                        value="<?php echo e(isset($assign_class_teacher) ? $assign_class_teacher->id : ''); ?>">

                                    <div class="row mt-15">
                                        <div class="col-lg-12">
                                            <label class="primary_input_label" for=""><?php echo app('translator')->get('academics.teacher'); ?> <span
                                                    class="text-danger"> *</span></label>
                                            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($assign_class_teacher)): ?>
                                                    <div class="">
                                                        <input type="radio" id="tecaher<?php echo e(@$teacher->id); ?>"
                                                            class="common-checkbox" name="teacher"
                                                            value="<?php echo e(@$teacher->id); ?>"
                                                            <?php echo e(in_array($teacher->id, $teacherId) ? 'checked' : ''); ?>>
                                                        <label
                                                            for="tecaher<?php echo e(@$teacher->id); ?>"><?php echo e(@$teacher->full_name); ?></label>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="">
                                                        <input type="radio" id="tecaher<?php echo e(@$teacher->id); ?>"
                                                            class="common-checkbox" name="teacher"
                                                            value="<?php echo e(@$teacher->id); ?>">
                                                        <label
                                                            for="tecaher<?php echo e(@$teacher->id); ?>"><?php echo e(@$teacher->full_name); ?></label>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($errors->has('teacher')): ?>
                                                <span class="text-danger" role="alert">
                                                    <?php echo e(@$errors->first('teacher')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                        $tooltip = '';
                                        if (userPermission('assign-class-teacher-store')) {
                                            $tooltip = '';
                                        } else {
                                            $tooltip = 'You have no permission to add';
                                        }
                                    ?>
                                    <div class="row mt-40">
                                        <div class="col-lg-12 text-center">
                                            <button class="primary-btn fix-gr-bg submit" data-toggle="tooltip"
                                                title="<?php echo e(@$tooltip); ?>">
                                                <span class="ti-check"></span>
                                                <?php if(isset($assign_class_teacher)): ?>
                                                    <?php echo app('translator')->get('academics.update_class_teacher'); ?>
                                                <?php else: ?>
                                                    <?php echo app('translator')->get('academics.save_class_teacher'); ?>
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

                <div class="col-lg-8 col-xl-9">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-4 no-gutters">
                                <div class="main-title">
                                    <h3 class="mb-15"><?php echo app('translator')->get('academics.class_teacher_list'); ?></h3>
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
                                                <th><?php echo app('translator')->get('common.class'); ?></th>
                                                <th><?php echo app('translator')->get('common.section'); ?></th>
                                                <?php if(shiftEnable()): ?>
                                                    <th><?php echo app('translator')->get('common.shift'); ?></th>
                                                <?php endif; ?>
                                                <th><?php echo app('translator')->get('common.teacher'); ?></th>
                                                <th><?php echo app('translator')->get('common.action'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $assign_class_teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign_class_teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td valign="top">
                                                        <?php echo e(@$assign_class_teacher->class != '' ? @$assign_class_teacher->class->class_name : ''); ?>

                                                    </td>
                                                    <td valign="top">
                                                        <?php echo e(@$assign_class_teacher->section != '' ? @$assign_class_teacher->section->section_name : ''); ?>

                                                    </td>
                                                    <?php if(shiftEnable()): ?>
                                                        <td valign="top">
                                                            <?php echo e(@$assign_class_teacher->shift != ""? @$assign_class_teacher->shift->name:""); ?>

                                                        </td>
                                                    <?php endif; ?>
                                                    <td valign="top">

                                                        <?php
                                                            @$classTeachers = @$assign_class_teacher->classTeachers;
                                                        ?>
                                                        <?php if($classTeachers != ''): ?>
                                                            <?php $__currentLoopData = $classTeachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classTeacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                    @$teacher = @$classTeacher->teacher;
                                                                ?>
                                                                <?php echo e(@$teacher->full_name); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </td>

                                                    <td valign="top">

                                                        <?php
                                                            $routeList = [
                                                                userPermission('assign-class-teacher-edit')
                                                                    ? '<a class="dropdown-item" href="' .
                                                                        route('assign-class-teacher-edit', [
                                                                            $assign_class_teacher->id,
                                                                        ]) .
                                                                        '">' .
                                                                        __('common.edit') .
                                                                        '</a>'
                                                                    : null,
                                                                userPermission('assign-class-teacher-delete')
                                                                    ? '<a class="dropdown-item" data-toggle="modal" data-target="#deleteClassModal' .
                                                                        $assign_class_teacher->id .
                                                                        '"  href="#">' .
                                                                        __('common.delete') .
                                                                        '</a>'
                                                                    : null,
                                                            ];
                                                        ?>
                                                        <?php if (isset($component)) { $__componentOriginald3bcd21a578153e7a2b59c7c2f053be9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3bcd21a578153e7a2b59c7c2f053be9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.drop-down-action-component','data' => ['routeList' => $routeList]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('drop-down-action-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['routeList' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($routeList)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3bcd21a578153e7a2b59c7c2f053be9)): ?>
<?php $attributes = $__attributesOriginald3bcd21a578153e7a2b59c7c2f053be9; ?>
<?php unset($__attributesOriginald3bcd21a578153e7a2b59c7c2f053be9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3bcd21a578153e7a2b59c7c2f053be9)): ?>
<?php $component = $__componentOriginald3bcd21a578153e7a2b59c7c2f053be9; ?>
<?php unset($__componentOriginald3bcd21a578153e7a2b59c7c2f053be9); ?>
<?php endif; ?>
                                                    </td>
                                                </tr>
                                                <div class="modal fade admin-query"
                                                    id="deleteClassModal<?php echo e(@$assign_class_teacher->id); ?>">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><?php echo app('translator')->get('academics.delete_assign_teacher'); ?></h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <h4><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?></h4>
                                                                </div>

                                                                <div class="mt-40 d-flex justify-content-between">
                                                                    <button type="button" class="primary-btn tr-bg"
                                                                        data-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
                                                                    <?php echo e(html()->form('DELETE', route('assign-class-teacher-delete', @$assign_class_teacher->id))->attribute('enctype', 'multipart/form-data')->open()); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/academics/assign_class_teacher.blade.php ENDPATH**/ ?>