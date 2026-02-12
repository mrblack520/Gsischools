<?php echo e(html()->form('POST', route('add-new-class-routine-store'))->attributes([
        'class' => 'form-horizontal',
        'files' => true,
        'enctype' => 'multipart/form-data',
        'name' => 'myForm',
        'onsubmit' => 'return validateAddNewroutine()',
    ])->open()); ?>

<input type="hidden" name="day" value="<?php echo e($day_id); ?>">
<input type="hidden" name="class_id" value="<?php echo e($class_id); ?>">
<input type="hidden" name="section_id" value="<?php echo e($section_id); ?>">
<input type="hidden" name="shift_id" value="<?php echo e($shift_id); ?>">
<div>
    <div class="table-responsive tableheight">
        <table class="table" id="classRoutineTable">

            <thead>
                <tr>
                    <th><?php echo app('translator')->get('common.subject'); ?></th>
                    <th><?php echo app('translator')->get('common.teacher'); ?></th>
                    <th><?php echo app('translator')->get('academics.start_time'); ?></th>
                    <th><?php echo app('translator')->get('academics.end_time'); ?></th>
                    <th class="text-center"><?php echo app('translator')->get('academics.is_break'); ?></th>
                    <th><?php echo app('translator')->get('academics.other_day'); ?></th>
                    <th><?php echo app('translator')->get('academics.class_room'); ?></th>
                    <th><?php echo app('translator')->get('common.action'); ?></th>
                </tr>
            </thead>
            <tbody>
                <input type="hidden" id="row_count" value="<?php echo e($class_routines->count() + 1); ?>">
                <?php $__currentLoopData = $class_routines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if ($__env->exists('backEnd.academics.classRoutine.row', ['row' => $loop->index])) echo $__env->make('backEnd.academics.classRoutine.row', ['row' => $loop->index], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>

</div>
<div class="col-lg-12 mt-20 text-center">
    <button class="primary-btn fix-gr-bg" type="submit" id="classRoutineSubmitButton">
        <span class="ti-check"></span>
        <?php echo app('translator')->get('common.save'); ?>
    </button>
</div>
<?php echo e(html()->form()->close()); ?>

<?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/academics/classRoutine/form.blade.php ENDPATH**/ ?>