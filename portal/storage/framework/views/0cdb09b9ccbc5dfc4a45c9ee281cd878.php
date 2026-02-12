

<?php
    $routes = subModuleRoute($child);
?>


<li class="<?php echo e(spn_active_link($routes, "mm-active")); ?> main">
    <a href="javascript:void(0)" class="has-arrow" aria-expanded="false">
        <div class="nav_icon_small">
            <span class="<?php echo e($child->icon); ?>"></span>
        </div>
        <div class="nav_title">
             <span> <?php echo e(!empty($child->lang_name) ? __($child->lang_name):$child->name); ?> </span>
        </div>
    </a>
    <ul class="mm-collapse">  
        <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $third): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                  
            <?php if(userPermission($third->route)): ?>
                <li class="sub">
                    <a href="<?php echo e(validRouteUrl($third->route)); ?>" class="<?php echo e(spn_active_link($third->route)); ?>">   
                        <?php echo e(!empty($third->lang_name) ? __($third->lang_name):$third->name); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li><?php /**PATH /home/gsistiww/public_html/portal/resources/views/backEnd/menu/student_sub_menu.blade.php ENDPATH**/ ?>