<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class=" lg:w-5/12 px-4">
          <div class="hero-content">
            <h1
              class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
             >
              My Name is Michael <br/>
              I am <span class="rounded-md text-red-600">Web Developer</span>.
            </h1>
            <p class="text-base mb-8 max-w-[520px] ">
              
                To obtain a position that will challenge me as an individual and will enable me to use my strong Organizational Skills, Educational Background and ability to work well with the people. <br/><br/>

                To find myself doing my passion for business and in the business industry where I'm dying to be in.
            </p>
            <ul class="flex flex-wrap items-center">
              <li>
                <?php if (isset($component)) { $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ButtonLink::class, ['href' => '#portfolio','variant' => 'primary']); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'rounded-lg']); ?>
                  My Projects
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794)): ?>
<?php $component = $__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794; ?>
<?php unset($__componentOriginalbb0329fb69c9d7b0def433d126d4babcbbf6a794); ?>
<?php endif; ?>
              </li>
            </ul>
            <div class="clients pt-16">
              <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                Follow me on social media
                <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
              </h6>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.social-icons','data' => []]); ?>
<?php $component->withName('social-icons'); ?>
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
        <div class="hidden lg:block lg:w-1/12 px-4"></div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="lg:text-right lg:ml-auto">
            <div class="relative inline-block z-10 pt-11 lg:pt-0">
              <img
                src="<?php echo e(url('/img/me_hero.jpg')); ?>"
                alt="hero"
                class="max-w-full lg:ml-auto"
              />
              <span class="absolute -left-8 -bottom-8 z-[-1]">
                <svg
                  width="93"
                  height="93"
                  viewBox="0 0 93 93"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Hero Section End -->

  <!-- ====== Hero Section 2 Start -->
  <?php /**PATH C:\Users\MICHAEL-PC\react\Laravel\new_portfolio\resources\views/components/home/hero.blade.php ENDPATH**/ ?>