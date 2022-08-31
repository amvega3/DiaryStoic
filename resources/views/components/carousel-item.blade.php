<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - AlpineJS Slider V3</title>
    <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
    <style>
        .flickity-viewport {
            height: 600px !important;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <main class="md:h-5/6 h-4/6 bg-black text-gray-200 items-center justify-center" x-data="carouselFilter()">
        <div class="container grid grid-cols-1">
            <div class="flex pt-2 justify-center">
                <a class="p-3 text-base uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-500': active != 0 }" href="#" @click.prevent="changeActive(0)">Filósofos</a>
                <a class="p-3 text-base uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-600': active != 1 }" href="#" @click.prevent="changeActive(1)"></a>
            </div>

            <div class="row-start-2 col-start-1" x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                    <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center text-white pointer-events-none">

                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Marco Aurelio</h1>
                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Seneca</h1>
                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">EPICTETO</h1>

                    </div>


                    <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://i0.wp.com/elhombreexcelente.com/wp-content/uploads/2016/11/Marco-Aurelio.jpg?w=2340&ssl=1" loading="lazy">
                        </div>
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://pymstatic.com/18861/conversions/frases-epicuro-wide.jpg" loading="lazy">
                        </div>
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://pymstatic.com/85727/conversions/epicteto-thumb.jpg" loading="lazy">
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class="row-start-2 col-start-1" x-show="active == 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                    <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Beth</h1>
                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Lee</h1>
                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Jade</h1>
                        <h1 class="absolute md:text-5xl text-xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-12">Drew</h1>
                    </div>


                    <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                        </div>
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                        </div>
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://images.unsplash.com/photo-1462804993656-fac4ff489837?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                        </div>
                        <div class="w-3/5 px-2">
                            <img class="h-64" src="https://images.unsplash.com/photo-1480455624313-e29b44bbfde1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!-- partial -->
    <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                    var flkty = new Flickity(this.$refs.carousel, {
                        wrapAround: true
                    });
                    flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                    this.active = i;

                    this.$nextTick(() => {
                        let flkty = Flickity.data(this.$el.querySelectorAll('.carousel')[i]);
                        flkty.resize();

                        console.log(flkty);
                    });
                }
            }
        }
    </script>

</body>

</html>
