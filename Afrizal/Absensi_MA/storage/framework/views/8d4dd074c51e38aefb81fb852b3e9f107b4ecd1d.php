<?php $__env->startComponent($view, $params); ?>
    <?php $__env->slot($slotOrSection); ?>
        <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html'];; ?>

    <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginale7c6616875b34e3f53343f67cca22d88de00f61f)): ?>
<?php $component = $__componentOriginale7c6616875b34e3f53343f67cca22d88de00f61f; ?>
<?php unset($__componentOriginale7c6616875b34e3f53343f67cca22d88de00f61f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\Absen.in-ProjectWebS4\Afrizal\Absensi_MA\vendor\livewire\livewire\src/Macros/livewire-view-component.blade.php ENDPATH**/ ?>