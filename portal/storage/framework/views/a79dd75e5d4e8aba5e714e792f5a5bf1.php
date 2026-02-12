
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('communicate.email_template'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php $__env->startPush('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/backEnd/vendors/editor/summernote-bs4.css')); ?>">
        <style>
            .custom_nav li a.active {
                background-color: #fbfbfb;
            }

            .input-right-icon button i {
                position: relative;
                top: 0px !important;
            }

            .dropdown-toggle::after {
                display: none !important;
            }

            .custom_nav .nav-item {
                word-wrap: break-word;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <section class="sms-breadcrumb mb-20 up_breadcrumb">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('communicate.email_template'); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(url('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('communicate.communicate'); ?></a>
                    <a href="#"><?php echo app('translator')->get('communicate.email_template'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="white-box">
                        <div class="add-visitor">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav custom_nav flex-column" id="myTab" role="tablist">
                                        <?php $__currentLoopData = $emailTempletes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $emailTemplete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!$emailTemplete->module || moduleStatusCheck($emailTemplete->module) == true): ?>
                                                <li class="nav-item">
                                                    <a class="nav-link <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                        id="<?php echo e($emailTemplete->purpose); ?>-tab" data-toggle="tab"
                                                        href="#<?php echo e($emailTemplete->purpose); ?>" role="tab"
                                                        aria-controls="<?php echo e($emailTemplete->purpose); ?>"
                                                        aria-selected="<?php echo e($key == 0 ? 'true' : 'false'); ?>">
                                                        <?php echo app('translator')->get('communicate.' . $emailTemplete->purpose); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="tab-content" id="myTabContent">
                                    <?php $__currentLoopData = $emailTempletes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $emailTemplete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!$emailTemplete->module || moduleStatusCheck($emailTemplete->module) == true): ?>
                                            <div class="tab-pane fade  <?php echo e($key == 0 ? 'active show' : ''); ?>"
                                                id="<?php echo e($emailTemplete->purpose); ?>" role="tabpanel">
                                                <?php echo e(html()->form('POST', route('templatesettings.email-template-update'))->class('form-horizontal')->open()); ?>

                                                <div class="row">
                                                    <div class="col-lg-10 mb-20">
                                                        <label> <strong><?php echo app('translator')->get('communicate.variables'); ?> :</strong> </label>
                                                        <span class="text-primary">
                                                            <?php echo e($emailTemplete->variable); ?>

                                                        </span>
                                                    </div>
                                                    <div class="col-lg-2 mb-20">
                                                        <div class="primary_input">
                                                            <input type="checkbox"
                                                                id="email_enable<?php echo e($emailTemplete->id); ?>"
                                                                class="common-checkbox exam-checkbox" name="status"
                                                                value="1"
                                                                <?php echo e(isset($emailTemplete) ? ($emailTemplete->status == 1 ? 'checked' : '') : ''); ?>>
                                                            <label
                                                                for="email_enable<?php echo e($emailTemplete->id); ?>"><?php echo app('translator')->get('communicate.enable'); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="primary_input_label" for=""><?php echo app('translator')->get('common.subject'); ?>
                                                            <span class="text-danger"> *</span></label>
                                                        <input type="hidden" name="id"
                                                            value="<?php echo e($emailTemplete->id); ?>">
                                                        <input type="hidden" name="purpose"
                                                            value="<?php echo e($emailTemplete->purpose); ?>">
                                                        <?php if($emailTemplete->subject): ?>
                                                            <div class="primary_input">
                                                                <input
                                                                    class="primary_input_field form-control<?php echo e($errors->has('subject') ? ' is-invalid' : ''); ?>"
                                                                    type="text" name="subject"
                                                                    value="<?php echo e(isset($emailTemplete) ? $emailTemplete->subject : old($emailTemplete->subject)); ?>">


                                                                <?php if($errors->has('subject')): ?>
                                                                    <span class="text-danger">
                                                                        <?php echo e($errors->first('subject')); ?>

                                                                    </span>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="primary_input mt-20">
                                                            <label class="primary_input_label"
                                                                for=""><?php echo app('translator')->get('communicate.body'); ?></label>
                                                            <textarea class="primary_input_field summer_note form-control<?php echo e($errors->has('body') ? ' is-invalid' : ''); ?>"
                                                                cols="0" rows="4" name="body" maxlength="500">
                                                                    <?php echo e(isset($emailTemplete) ? $emailTemplete->body : old($emailTemplete->body)); ?>

                                                                </textarea>

                                                            <?php if($errors->has('body')): ?>
                                                                <span
                                                                    class="error text-danger"><?php echo e($errors->first('body')); ?></strong></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-40">
                                                    <div class="col-lg-12 text-center">
                                                        <button class="primary-btn fix-gr-bg" title="<?php echo app('translator')->get('common.update'); ?>">
                                                            <span class="ti-check"></span>
                                                            <?php echo app('translator')->get('common.update'); ?>
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php echo e(html()->form()->close()); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('public/backEnd/')); ?>/vendors/editor/summernote-bs4.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backEnd.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/gsistiww/public_html/portal/Modules/TemplateSettings/Resources/views/emailTemplate.blade.php ENDPATH**/ ?>