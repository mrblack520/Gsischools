
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('lesson::lesson.add_lesson'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <link rel="stylesheet" href="<?php echo e(url('Modules/Lesson/Resources/assets/css/jquery-ui.css')); ?>">
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(url('Modules/Lesson/Resources/assets/js/app.js')); ?>"></script>
    <script type="text/javascript" href="<?php echo e(url('Modules/Lesson/Resources/assets/js/developer.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<section class="sms-breadcrumb mb-20">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1><?php echo app('translator')->get('lesson::lesson.add_lesson'); ?></h1>
            <div class="bc-pages">
                <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                <a href="#"><?php echo app('translator')->get('lesson::lesson.lesson'); ?></a>

            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <?php if(isset($lesson)): ?>
            <?php if(userPermission('lesson.create-store')): ?>
                <div class="row">
                    <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                        <a href="<?php echo e(route('exam')); ?>" class="primary-btn small fix-gr-bg">
                            <span class="ti-plus pr-2"></span>
                            <?php echo app('translator')->get('common.add'); ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($lesson)): ?>
            <?php echo e(html()->form('PUT', route('exam-update', $lesson->id))->attribute('class', 'form-horizontal')->attribute('enctype', 'multipart/form-data')->attribute('files', true)->open()); ?>

        <?php else: ?>
            <?php if(userPermission('lesson.create-store')): ?>
                <?php echo e(html()->form('POST', route('lesson.storelesson'))->attribute('class', 'form-horizontal')->open()); ?>

            <?php endif; ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class="main-title">
                                <h3 class="mb-15">
                                    <?php if(isset($data)): ?>
                                        <?php echo app('translator')->get('lesson::lesson.edit_lesson'); ?>
                                    <?php else: ?>
                                        <?php echo app('translator')->get('lesson::lesson.add_lesson'); ?>
                                    <?php endif; ?>
                                </h3>
                            </div>
                            <div class="add-visitor">
                                <?php if(moduleStatusCheck('University')): ?>
                                    <?php if ($__env->exists(
                                        'university::common.session_faculty_depart_academic_semester_level',
                                        [
                                            'row' => 1,
                                            'div' => 'col-lg-12',
                                            'mt' => 'mt-0',
                                            'required' => ['USN', 'UD', 'US', 'USL', 'USUB'],
                                            'hide' => ['UA'],
                                        ]
                                    )) echo $__env->make(
                                        'university::common.session_faculty_depart_academic_semester_level',
                                        [
                                            'row' => 1,
                                            'div' => 'col-lg-12',
                                            'mt' => 'mt-0',
                                            'required' => ['USN', 'UD', 'US', 'USL', 'USUB'],
                                            'hide' => ['UA'],
                                        ]
                                    , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    <input type="hidden" name="un_academic_id" id="select_academic"
                                        value="<?php echo e(getAcademicId()); ?>">
                                <?php else: ?>
                                    <div class="row mt-15">
                                        <?php echo $__env->make('backEnd.common.search_criteria', [
                                            'div' => shiftEnable() ? 'col-lg-12' : 'col-lg-12',
                                            'mt' => 'mt-15',
                                            'required' => ['class', 'section', 'subject'],
                                            'visiable' => ['shift', 'class', 'section', 'subject'],
                                            'subject' => true,
                                            'class_name' => 'class',
                                            'section_name' => 'section',
                                            'subject_name' => 'subject',
                                            'selected' => [
                                                'shift_id' => @$shift_id,
                                                'class_id' => @$class_id,
                                                'section_id' => @$section_id,
                                                'subject_id' => @$subject_id,
                                            ],
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    </div>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box mt-10">
                            <div class="row mb-3 align-items-center">
                                <div class="col-xl-9 col-lg-8 col-md-10 col-9">
                                    <div class="main-title my-0 md:mt-auto">
                                        <h5 class="mb-0"><?php echo app('translator')->get('lesson::lesson.add_lesson_name'); ?></h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-2 col-3 text-right">
                                    <button type="button" class="primary-btn icon-only fix-gr-bg"
                                        onclick="addRowLesson();" id="addRowBtn">
                                        <span class="ti-plus"></span></button>
                                </div>
                            </div>
                            <table class="" id="productTable">
                                <thead>
                                    <tr>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="row1" class="mt-40">
                                        <td class="">
                                            <input type="hidden" name="url" id="url"
                                                value="<?php echo e(URL::to('/')); ?>">
                                            <div class="primary_input">

                                                <input
                                                    class="primary_input_field form-control<?php echo e($errors->has('topic') ? ' is-invalid' : ''); ?>"
                                                    type="text" id="lesson"
                                                    placeholder="<?php echo e(__('common.title')); ?>" name="lesson[]"
                                                    autocomplete="off"
                                                    value="<?php echo e(isset($editData) ? $editData->exam_title : ''); ?>">

                                            </div>
                                        </td>

                                        <td>
                                            <button class="primary-btn icon-only fix-gr-bg ml-2" type="button">
                                                <span class="ti-trash"></span>
                                            </button>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php
                    $tooltip = '';
                    if (userPermission('lesson.create-store')) {
                        $tooltip = '';
                    } elseif (userPermission('lesson-edit') && isset($data)) {
                        $tooltip = '';
                    } else {
                        $tooltip = 'You have no permission to add';
                    }
                ?>
                <div class="row mt-15">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class="row mt-40">
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn fix-gr-bg" data-toggle="tooltip"
                                        title="<?php echo e(@$tooltip); ?>">
                                        <span class="ti-check"></span>
                                        <?php if(isset($data)): ?>
                                            <?php echo app('translator')->get('lesson::lesson.update_lesson'); ?>
                                        <?php else: ?>
                                            <?php echo app('translator')->get('lesson::lesson.save_lesson'); ?>
                                        <?php endif; ?>


                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo e(html()->form()->close()); ?>


            <div class="col-lg-8 col-xl-9">
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-4 no-gutters">
                            <div class="main-title">
                                <h3 class="mb-15"><?php echo app('translator')->get('lesson::lesson.lesson_list'); ?></h3>
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
                                <table id="table_id" class="table data-table" cellspacing="0" width="100%">
                                    <thead>

                                        <tr>
                                            <th><?php echo app('translator')->get('common.sl'); ?></th>
                                            <?php if(moduleStatusCheck('University')): ?>
                                                <th><?php echo app('translator')->get('university::un.session'); ?></th>
                                                <th><?php echo app('translator')->get('university::un.faculty'); ?></th>
                                                <th><?php echo app('translator')->get('university::un.department'); ?></th>
                                                <th><?php echo app('translator')->get('university::un.academic'); ?></th>
                                                <th><?php echo app('translator')->get('university::un.semester'); ?></th>
                                                <th><?php echo app('translator')->get('university::un.semester_label'); ?></th>
                                            <?php else: ?>
                                                <th><?php echo app('translator')->get('common.class'); ?></th>
                                                <th><?php echo app('translator')->get('common.section'); ?></th>
                                                <?php if(shiftEnable()): ?>
                                                    <th><?php echo app('translator')->get('common.shift'); ?></th>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <th><?php echo app('translator')->get('lesson::lesson.subject'); ?></th>
                                            <th><?php echo app('translator')->get('lesson::lesson.lesson'); ?></th>
                                            <th><?php echo app('translator')->get('common.action'); ?></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <?php if(moduleStatusCheck('University')): ?>
                                                    <td> <?php echo e($lesson->unSession->name); ?></td>
                                                    <td> <?php echo e($lesson->unFaculty->name); ?></td>
                                                    <td> <?php echo e($lesson->unDepartment->name); ?></td>
                                                    <td> <?php echo e($lesson->unAcademic->name); ?></td>
                                                    <td> <?php echo e($lesson->unSemester->name); ?></td>
                                                    <td> <?php echo e($lesson->unSemesterLabel->name); ?></td>
                                                    <td> <?php echo e($lesson->unSubject->subject_name); ?></td>
                                                <?php else: ?>
                                                    <td><?php echo e($lesson->class != '' ? $lesson->class->class_name : ''); ?>

                                                    </td>
                                                    <td><?php echo e($lesson->section != '' ? $lesson->section->section_name : ''); ?>

                                                    </td>
                                                    <?php if(shiftEnable()): ?>
                                                    <td><?php echo e($lesson->shift != '' ? $lesson->shift->name : ''); ?>

                                                    </td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            
                                                <td><?php echo e($lesson->subject != '' ? $lesson->subject->subject_name : ''); ?>

                                                </td>
                                                <td>

                                                    <?php
                                                        $lesson_title = Modules\Lesson\Entities\SmLesson::lessonName(
                                                            $lesson->class_id,
                                                            $lesson->section_id,
                                                            $lesson->subject_id,
                                                        );
                                                    ?>
                                                    <?php echo e($lesson_title->pluck('lesson_title')->implode(', ')); ?>

                                                    
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
                                                        <?php if(userPermission('lesson-edit')): ?>
                                                            <?php if(moduleStatusCheck('University')): ?>
                                                                <?php if($lesson->class_id == null): ?>
                                                                    <a class="dropdown-item"
                                                                        href="<?php echo e(route('un-lesson-edit', [$lesson->un_session_id, $lesson->un_faculty_id ?? 0, $lesson->un_department_id, $lesson->un_academic_id, $lesson->un_semester_id, $lesson->un_semester_label_id, $lesson->un_subject_id ?? 0])); ?>"><?php echo app('translator')->get('common.edit'); ?></a>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php if($lesson->class_id != null): ?>
                                                                    <a class="dropdown-item"
                                                                        href="<?php echo e(route('lesson-edit', [
                                                                            $lesson->class_id,
                                                                            $lesson->section_id,
                                                                            $lesson->subject_id,
                                                                            shiftEnable() ? $lesson->shift_id : null
                                                                        ])); ?>">
                                                                        <?php echo app('translator')->get('common.edit'); ?>
                                                                    </a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if(userPermission('lesson-delete')): ?>
                                                            <a class="dropdown-item" data-toggle="modal"
                                                                data-target="#deleteExamModal<?php echo e($lesson->id); ?>"
                                                                href="#"><?php echo app('translator')->get('common.delete'); ?></a>
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
                                                id="deleteExamModal<?php echo e($lesson->id); ?>">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?php echo app('translator')->get('lesson::lesson.delete_lesson'); ?></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">
                                                                &times;
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <h4><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?></h4>
                                                            </div>

                                                            <div class="mt-40 d-flex justify-content-between">
                                                                <button type="button" class="primary-btn tr-bg"
                                                                    data-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
                                                                <?php echo e(html()->form('DELETE', route('lesson-delete', $lesson->id))->attribute('enctype', 'multipart/form-data')->open()); ?>

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
<?php $__env->startPush('script'); ?>
<script>
    function deleteLesson(id) {
        var modal = $('#deleteLessonModal');
        modal.find('input[name=id]').val(id)
        modal.modal('show');
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/Modules/Lesson/Resources/views/lesson/add_new_lesson.blade.php ENDPATH**/ ?>