<a
  href="<?php echo e($href); ?>"
  target="<?php echo e($target); ?>"
  <?php echo e($attributes->class([
      'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
      'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
      'hover:bg-red-700 hover:border-white-700 hover:text-red' => $variant === 'outline-red',
      'bg-red-700 border-red-700 text-white hover:bg-red-800 ' => $variant === 'red',
      'bg-gray-900 border-gray-700 text-white hover:bg-gray-800 ' => $variant === 'dark',
      'bg-primary border-white-700 text-white hover:bg-opacity-80 hover:text-red' => $variant === 'primary',
    ])); ?>

>
  <?php echo e($slot); ?>

</a><?php /**PATH C:\Users\MICHAEL-PC\react\Laravel\new_portfolio\resources\views/components/button-link.blade.php ENDPATH**/ ?>