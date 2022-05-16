<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="<?php echo e(url('/img/me1.jpg')); ?>"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="<?php echo e(url('/img/me2.jpg')); ?>"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="<?php echo e(url('/img/me_hero.jpg')); ?>"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.about-dots','data' => []]); ?>
<?php $component->withName('about-dots'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
               <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                   "Everything is achievable with hard work"
               </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
              About Me
            </h2>
            <p class="text-base dark:text-gray-400 mb-8">
              I'm Michael C. Ayo Graduated with a BS in Information Technology at TIP. <br/>I'm a more observant and curious person during my Student Days.<br/>Why It? is because you can choose many paths like a programmer, network specialist, database or system admin, and graphic designer all of these you may have gained fundamental knowledge.<br/>In my Last Project as a Graduate Student I have Responsibilities for the Scope and Objective of our website system, the Main Idea, and the body of how the system flow. Thank you!
            </p>
            
            <h1 class="font-bold dark:text-gray-200 mb-5">
            For More Info:
            </h1>
            
            <?php if (isset($component)) { $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ButtonLink::class, ['href' => 'https://myjobstreet.jobstreet.com.ph/resume/skills.php?x=18jct0v3v9oemcgfk38ikm17d6','variant' => 'primary','target' => '_blank']); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'rounded-lg']); ?>
              Go to My JobStreet
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794)): ?>
<?php $component = $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794; ?>
<?php unset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794); ?>
<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End --><?php /**PATH C:\Users\MICHAEL-PC\react\Laravel\new_portfolio\resources\views/components/home/about.blade.php ENDPATH**/ ?>