<div id="my-skills" class=" relative z-0">
    <div class="bg-opacity-white-95 py-12 lg:py-24 xl:py-32 relative z-10">

        <div class="container  ">
            <h2 class="text-5xl font-bold mb-12">My skills</h2>
            <p class="text-gray-600 text-2xl mb-20 w-full lg:w-2/3 xl:w-1/3">
                A brief summary of the knowledge I gained over the years.
            </p>

            <div class="flex flex-col sm:flex-row">
                {{-- Web development --}}
                <div class="w-full lg:w-2/3">
                    <h3 class="text-purple-600 text-2xl leading-none font-bold mb-12">Web development</h3>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                        @component('components.skill')
                            @slot('title') PHP @endslot
                            @slot('date') 2013 @endslot
                            @slot('subSkills') Laravel, PHPUnit, API-integrations @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') Javascript @endslot
                            @slot('date') 2013 @endslot
                            @slot('subSkills') Jquery, Vue, Mocha, Chai, Typescript @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') Design @endslot
                            @slot('date') 2013 @endslot
                            @slot('subSkills') Adobe Illustrator (2013-2017), Adobe Xd (2017) @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') Databases @endslot
                            @slot('date') 2013 @endslot
                            @slot('subSkills') MySQL, Algolia @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') HTML, CSS @endslot
                            @slot('date') 2013 @endslot
                            @slot('subSkills') HTML5, CSS3, Sass, TailwindCss, blade @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') GIT @endslot
                            @slot('date') 2016 @endslot
                            @slot('subSkills') Github @endslot
                        @endcomponent
                    </div>
                </div>

                {{-- Game development --}}
                <div class="w-full lg:w-1/3">
                    <h3 class="text-purple-600 text-2xl leading-none font-bold mb-12">Game development</h3>

                    <div class="grid grid-cols-1">
                        @component('components.skill')
                            @slot('title') Blender @endslot
                            @slot('date') 2019 @endslot
                            @slot('subSkills') Modeling basic 3d objects @endslot
                        @endcomponent

                        @component('components.skill')
                            @slot('title') Unity3d @endslot
                            @slot('date') 2019 @endslot
                            @slot('subSkills') C# programming, basic game programming @endslot
                        @endcomponent

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute top-0 left-0 h-full w-full">
        <img class="w-full h-full object-cover" src="/img/code-gray.png"/>
    </div>

</div>

