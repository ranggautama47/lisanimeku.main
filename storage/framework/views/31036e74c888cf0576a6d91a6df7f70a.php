<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ListAnimeKu <?php echo $__env->yieldContent('title-web'); ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('../assets/style.css')); ?>">
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal5d42871905721c7d0d2fea2025b19c81 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d42871905721c7d0d2fea2025b19c81 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d42871905721c7d0d2fea2025b19c81)): ?>
<?php $attributes = $__attributesOriginal5d42871905721c7d0d2fea2025b19c81; ?>
<?php unset($__attributesOriginal5d42871905721c7d0d2fea2025b19c81); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d42871905721c7d0d2fea2025b19c81)): ?>
<?php $component = $__componentOriginal5d42871905721c7d0d2fea2025b19c81; ?>
<?php unset($__componentOriginal5d42871905721c7d0d2fea2025b19c81); ?>
<?php endif; ?>

    <main>
        <?php if(Route::is('home')): ?>
            <?php if (isset($component)) { $__componentOriginalb2688852c5489493d0123e506be9de3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2688852c5489493d0123e506be9de3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.carousel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb2688852c5489493d0123e506be9de3b)): ?>
<?php $attributes = $__attributesOriginalb2688852c5489493d0123e506be9de3b; ?>
<?php unset($__attributesOriginalb2688852c5489493d0123e506be9de3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb2688852c5489493d0123e506be9de3b)): ?>
<?php $component = $__componentOriginalb2688852c5489493d0123e506be9de3b; ?>
<?php unset($__componentOriginalb2688852c5489493d0123e506be9de3b); ?>
<?php endif; ?>
        <?php endif; ?>
        <section class="content-section">
            <h2 class="text-center mb-5"><?php echo $__env->yieldContent('title'); ?></h2>
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </section>
    </main>

    <?php if (isset($component)) { $__componentOriginalf41de754776163ab7f0d615a73f759b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf41de754776163ab7f0d615a73f759b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footers','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf41de754776163ab7f0d615a73f759b9)): ?>
<?php $attributes = $__attributesOriginalf41de754776163ab7f0d615a73f759b9; ?>
<?php unset($__attributesOriginalf41de754776163ab7f0d615a73f759b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf41de754776163ab7f0d615a73f759b9)): ?>
<?php $component = $__componentOriginalf41de754776163ab7f0d615a73f759b9; ?>
<?php unset($__componentOriginalf41de754776163ab7f0d615a73f759b9); ?>
<?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
<?php /**PATH C:\xampp\htdocs\listanimeku-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>