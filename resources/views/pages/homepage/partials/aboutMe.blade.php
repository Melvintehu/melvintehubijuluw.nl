<div id="about-me" class="container py-16 md:py-32 ">
    <h2 class="text-5xl font-bold mb-12">About me</h2>
    <p class="text-gray-600 text-base mb-20 w-full lg:w-2/3 leading-loose">
        I am Melvin Tehubijuluw and I am {{ date_diff(date_create($bdate = '12-02-1992'), date_create('now'))->y }} years old.
        I could tell you all kinds of stuff here, but let's
        <a class="text-purple-600 font-bold" target="_blank" href="https://www.linkedin.com/in/melvin-t-1b8427107/"> meet.</a>
        A cup of coffee or a cold beer would sure be nice, to get to know each other. To give you a small impression, here's a summary about me.
    </p>

    <div class="flex">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 mb-12">

            @component('components.trait')
                @slot('title') Goals for life @endslot
                @slot('positiveTraits') Living a responsible and purposeful life @endslot
                @slot('traitsToImprove') Sometimes too fixated on personal goals @endslot
            @endcomponent

            @component('components.trait')
                @slot('title') Personality @endslot
                @slot('positiveTraits') Studious, curious, enterprising, Innovative  @endslot
                @slot('traitsToImprove') Stubborn, overthinker @endslot
            @endcomponent

            @component('components.trait')
                @slot('title') Short term goals @endslot
                @slot('positiveTraits') Develop a game, learn more about artificial intelligence @endslot
            @endcomponent

            @component('components.trait')
                @slot('title') Hobbies @endslot
                @slot('positiveTraits')
                    Soccer, running, <a class="text-purple-600 font-bold" target="_blank" href="https://www.khanacademy.org/profile/Melvintehu/">math</a>,
                    watching movies, music, games and meet with friends
                @endslot
            @endcomponent

            @component('components.trait')
                @slot('title') Things making me unhappy @endslot
                @slot('positiveTraits')
                    Only fixing bugs, "just do your job, we do the thinking",
                    no appriciation for the work done,
                    planning impossible deadlines.
                @endslot
            @endcomponent

        </div>

    </div>

</div>
