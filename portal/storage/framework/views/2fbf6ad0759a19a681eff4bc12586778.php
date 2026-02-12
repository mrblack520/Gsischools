<div class="row">
    <input type="hidden" id="classToSectionRoute" value="<?php echo e(route('fees.ajax-get-all-section')); ?>">
    <input type="hidden" id="sectionToStudentRoute" value="<?php echo e(route('fees.ajax-section-all-student')); ?>">
    <input type="hidden" id="classToStudentRoute" value="<?php echo e(route('fees.ajax-get-all-student')); ?>">
    <div class="col-lg-3 mt-30-md">
        <label class="primary_input_label" for="">
            <?php echo e(__('common.date_range')); ?>

                <span class="text-danger"></span>
        </label>
        <input class="primary_input_field primary_input_field form-control" type="text" name="date_range" value="">
    </div>

    
    <?php echo $__env->make('backEnd.common.search_criteria', [
        'mt' => 'mt-30-md',
        'div' => 'col-lg-3',
        'required' => ['class', 'section'],
        'visiable' => ['shift', 'class', 'section', 'student'],
        'selected' => [
            'shift_id' => @$shift,
            'section_id' => @$section,
            'class_id' => @$class,
            'student_id' => @$student
        ],
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    

    <div class="col-lg-12 mt-20 text-right">
        <button type="submit" class="primary-btn small fix-gr-bg">
            <span class="ti-search pr-2"></span>
            <?php echo app('translator')->get('common.search'); ?>
        </button>
    </div>
</div><?php /**PATH /home/gsistiww/public_html/portal/Modules/Fees/Resources/views/report/_searchForm.blade.php ENDPATH**/ ?>