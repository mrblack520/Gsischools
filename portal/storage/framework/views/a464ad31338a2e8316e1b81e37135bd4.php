<?php
    $menus = getMenus("student");    
    $paid_modules = ['Zoom','University','Gmeet','QRCodeAttendance','BBB','ParentRegistration','InAppLiveClass','AiContent','Lms','Certificate','Jitsi','WhatsappSupport','InfixBiometrics'];
?>
<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<span class="menu_seperator" id="seperator_<?php echo e(\Illuminate\Support\str::lower($menu->name)); ?>"  data-section="<?php echo e($menu->route); ?>"><?php echo e(__($menu->lang_name)); ?></span>
    <?php if($menu->childs->count() > 0): ?>      
        <?php $__currentLoopData = $menu->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($child->childs->count() > 0): ?>
                <?php if(userPermission($child->route)): ?>
                    <?php if(!empty($child->module) && in_array($child->module, $paid_modules)): ?>
                        <?php if(moduleStatusCheck($child->module)): ?>
                            <?php if ($__env->exists('backEnd.menu.student_sub_menu',['menu' => $menu,'child' => $child])) echo $__env->make('backEnd.menu.student_sub_menu',['menu' => $menu,'child' => $child], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
                        <?php endif; ?>
                    <?php else: ?>    
                        <?php if ($__env->exists('backEnd.menu.student_sub_menu',['menu' => $menu,'child' => $child])) echo $__env->make('backEnd.menu.student_sub_menu',['menu' => $menu,'child' => $child], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
                    <?php endif; ?>
                <?php endif; ?>
            <?php else: ?>  
                <?php if(userPermission($child->route)): ?>  
                    <li class="<?php echo e(spn_active_link([$child->route], "mm-active")); ?> <?php echo e($child->route); ?> main">
                        <a href="<?php echo e(validRouteUrl($child->route)); ?>">
                            <div class="nav_icon_small">
                                <span class="<?php echo e($child->icon); ?>"></span>
                            </div>
                            <div class="nav_title">
                                <span> <?php echo e(!empty($child->lang_name) ?  __($child->lang_name):$child->name); ?></span>
                            </div>
                        </a>
                    </li>
                <?php endif; ?>               
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/menu/student.blade.php ENDPATH**/ ?>