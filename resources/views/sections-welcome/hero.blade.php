<section class="w-full bg-white">
    <div class="mx-auto flex min-h-screen max-w-7xl items-center px-6 py-12 lg:py-20">
        <div class="grid w-full items-center gap-12 lg:grid-cols-2 lg:gap-16">

            <!-- LEFT -->
            <div class="order-2 lg:order-1">
                <!-- Logo -->
                <div class="mb-2 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto sm:h-14" />
                </div>

                <!-- Title -->
                <h1 class="text-4xl font-extrabold leading-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Jaya <br>
                    Karya <br>
                    Konstruksi
                </h1>

                <!-- Description -->
                <p class="mt-5 max-w-md text-sm leading-7 text-slate-500 sm:text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam.
                </p>

                <!-- Buttons -->
                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="#"
                        class="rounded-full bg-orange-500 px-8 py-3 text-sm font-semibold text-white transition hover:bg-orange-600">
                        Register Now
                    </a>

                    <a href="#"
                        class="rounded-full border border-slate-300 px-8 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="relative order-1 lg:order-2">
                <div class="relative aspect-[4/3] w-full">
                    <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="h-full w-full object-cover" />
                </div>
            </div>

        </div>
    </div>
</section>
