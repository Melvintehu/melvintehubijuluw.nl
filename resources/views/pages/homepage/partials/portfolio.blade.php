
@component('components.portfolio.item', [
    'image1' => '/img/portfolio/certscanner/certscanner-1.png',
    'image2' => '/img/portfolio/certscanner/certscanner-2.png',
    'image3' => '/img/portfolio/certscanner/certscanner-3.png',
    'backgroundColor' => 'bg-cert-purple',
    'techniques' => [
        'Laravel 7, Laravel Nova, PHPUnit',
        'Vue 2, Vuex, Renderless components, Mixins',
        'TailwindCss',
    ],
])
    @slot('projectName') certscanner.com @endslot
    @slot('shortDescription') Offshore certification made easy @endslot
    @slot('link')
        <a target="_blank" href="https://certscanner.com" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >take me there</a>
    @endslot

    @slot('description')
        For Marine Coordinate Services B.V. Me and my colleague  had to build a platform where maritime employees manage their certificates and book offshore training courses.
        <br><br>
        Converting the unique designs (made by <a class="text-cert-purple font-bold" target="_blank" href="https://marckuiper.com" >Marc Kuiper</a>) and creating an interactive UI was my main task on this project.
    @endslot
@endcomponent


@component('components.portfolio.item', [
    'image1' => '/img/portfolio/enpron/enpron-1.png',
    'image2' => '/img/portfolio/enpron/enpron-2.png',
    'image3' => '/img/portfolio/enpron/enpron-3.png',
    'backgroundColor' => 'bg-enpron-purple',
    'techniques' => [
        'Adobe Xd',
    ],
])
    @slot('projectName') ENPRON @endslot
    @slot('shortDescription') B2B energie saving. @endslot
    @slot('link')
        <a target="_blank" href="/files/enpron.pdf" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >take me there</a>
    @endslot


    @slot('description')
        Enpron is a company that focusses on energy savings for B2B companies. This design was created for Enpron as an impression, for what they could expect from me as a designer.
        <br><br>
        Unfortunately, we were forced to cancel the project due to our busy schedule and so the project never saw daylight.
    @endslot
@endcomponent


@component('components.portfolio.item', [
    'image1' => '/img/portfolio/ftd/ftd-1.png',
    'image2' => '/img/portfolio/ftd/ftd-2.png',
    'image3' => '/img/portfolio/ftd/ftd-3.png',
    'backgroundColor' => 'bg-ftd-orange',
    'techniques' => [
        'Laravel 6, Laravel Nova, PHPUnit',
        'Mollie API-integration',
        'TailwindCss',
    ],
])
    @slot('projectName') Fietstegendiabetes.nl @endslot
    @slot('shortDescription') A charity that funds medical breaktroughs for diabetics. @endslot
    @slot('link')
        <a target="_blank" href="https://fietstegendiabetes.nl" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >take me there</a>
    @endslot


    @slot('description')
        Fietstegendiabetes.nl is a charity that tries to raise money for medical
        breaktroughs for Diabetes type 1. this year we managed to raise almost
        €40.000.
        <br><br>
        This design wouldn't have worked with the help of <a class="text-ftd-orange font-bold" target="_blank" href="https://www.linkedin.com/in/myrtheengeltjes/" >Myrthe Engeltjes</a> who has
        created all the illustrations you see in the mockups.
    @endslot
@endcomponent
