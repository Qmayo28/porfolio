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
              {{-- I am a developer with 10+ years of experience. <br/>
              I love sharing my knowledge to others, that's why I created a
              <a
                class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
                href="https://www.youtube.com/channel/UCtw9GW9F33ZF1PGHpbyotKg" target="_blank">YouTube Channel</a>. <br> --}}
                To obtain a position that will challenge me as an individual and will enable me to use my strong Organizational Skills, Educational Background and ability to work well with the people. <br/><br/>

                To find myself doing my passion for business and in the business industry where I'm dying to be in.
            </p>
            <ul class="flex flex-wrap items-center">
              <li>
                <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                  My Projects
                </x-button-link>
              </li>
            </ul>
            <div class="clients pt-16">
              <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                Follow me on social media
                <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
              </h6>
              <x-social-icons></x-social-icons>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:w-1/12 px-4"></div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="lg:text-right lg:ml-auto">
            <div class="relative inline-block z-10 pt-11 lg:pt-0">
              <img
                src="{{ url('/img/me_hero.jpg') }}"
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
  {{-- <div class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-5/12 px-4">
          <div class="hero-content">
            <h1
              class="
                text-dark
                font-bold
                text-4xl
                sm:text-[42px]
                lg:text-[40px]
                xl:text-[42px]
                leading-snug
                mb-3
              "
            >
              Kickstart <br />
              Startup Website <br />
              with TailGrids.
            </h1>
            <p class="text-base mb-8 text-body-color max-w-[480px]">
              With TailGrids, business and students thrive together. Business
              can perfectly match their staffing to changing demand throughout
              the dayed.
            </p>
            <ul class="flex flex-wrap items-center">
              <li>
                <a
                  href="javascript:void(0)"
                  class="
                    py-4
                    px-6
                    sm:px-10
                    lg:px-8
                    xl:px-10
                    inline-flex
                    items-center
                    justify-center
                    text-center text-white text-base
                    bg-primary
                    hover:bg-opacity-90
                    font-normal
                    rounded-lg
                  "
                >
                  Get Started
                </a>
              </li>
              <li>
                <a
                  href="javascript:void(0)"
                  class="
                    py-4
                    px-6
                    sm:px-10
                    lg:px-8
                    xl:px-10
                    inline-flex
                    items-center
                    justify-center
                    text-center text-base
                    font-normal
                    text-body-color
                    hover:text-primary
                  "
                >
                  <span class="mr-2">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="11" cy="11" r="11" fill="#3056D3" />
                      <rect
                        x="6.90906"
                        y="13.3636"
                        width="8.18182"
                        height="1.63636"
                        fill="white"
                      />
                      <rect
                        x="10.1818"
                        y="6"
                        width="1.63636"
                        height="4.09091"
                        fill="white"
                      />
                      <path
                        d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z"
                        fill="white"
                      />
                    </svg>
                  </span>
                  Download App
                </a>
              </li>
            </ul>
            <div class="clients pt-16">
              <h6
                class="
                  font-normal
                  text-xs
                  flex
                  items-center
                  text-body-color
                  mb-2
                "
              >
                Some Of Our Clients
                <span
                  class="w-8 h-[1px] bg-body-color inline-block ml-2"
                ></span>
              </h6>
              <div class="flex items-center">
                <div class="w-full py-3 mr-4">
                  <img src="https://cdn.tailgrids.com/1.0/assets/images/brands/ayroui.svg" alt="ayroui" />
                </div>
                <div class="w-full py-3 mr-4">
                  <img
                    src="https://cdn.tailgrids.com/1.0/assets/images/brands/graygrids.svg"
                    alt="graygrids"
                  />
                </div>
                <div class="w-full py-3 mr-4">
                  <img src="https://cdn.tailgrids.com/1.0/assets/images/brands/uideck.svg" alt="uideck" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:w-1/12 px-4"></div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="lg:text-right lg:ml-auto">
            <div class="relative inline-block z-10 pt-11 lg:pt-0">
              <img
                src="https://cdn.tailgrids.com/1.0/assets/images/hero/hero-image-01.png"
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
                  <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Hero Section End --> --}}