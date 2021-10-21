<div class="{{ $backgroundColor ?? 'bg-purple-600' }} text-white pt-16 md:pt-32">
    <div class="container mx-auto px-0 md:px-4">
        <div class="flex flex-col mb-16 lg:mb-0">
            <div class="flex flex-col md:flex-row sm:justify-between items-center sm:items-start md:items-end mb-8">
                <div class="order-2 md:order-1 flex items-end">
                    <h3 class=" font-bold text-xl sm:text-3xl md:text-5xl xl:text-6xl leading-none mr-4">{{ $projectName ?? '' }}</h3>
                    <a target="_blank" href="{{ $href }}" class="flex items-center sm:hidden">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
                    </a>
                </div>
                <div class="order-1 md:order-2 mb-4 md:mb-0 hidden sm:inline-flex">
                    {{ $link ?? '' }}
                </div>
            </div>
            <p class="text-lg sm:text-xl text-center sm:text-left">{{ $shortDescription ?? '' }}</p>

        </div>

        <a href="#open-{{ $projectName }}-1" class="portfolio-main-image block rounded-default lg:h-168 overflow-hidden mb-4">
            <img loading=lazy src="{{ $image1 }}" />
        </a>

        <div id="open-{{ $projectName }}-1" class="flex items-center justify-center lightbox bg-opacity-black-70 w-full h-full fixed top-0 left-0 right-0 bottom-0 z-50">
            <div class="md:h-full p-0 sm:p-8 md:p-20">
                <div class="flex items-center justify-center rounded-default md:h-full w-full relative overflow-hidden shadow-md">
                    <div class="p-8 absolute top-0 left-0">
                        <a href="#close" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >close</a>
                    </div>
                    <img  class="object-cover h-full" src="{{ $image1 }}" />
                </div>
            </div>
        </div>

        <div id="open-{{ $projectName }}-2" class="flex items-center justify-center lightbox bg-opacity-black-70 w-full h-full fixed top-0 left-0 right-0 bottom-0 z-50">
            <div class="md:h-full p-0 sm:p-8 md:p-20 ">
                <div class="flex items-center justify-center rounded-default h-full w-full relative overflow-hidden shadow-md">
                    <div class="p-8 absolute top-0 left-0">
                        <a href="#close" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >close</a>
                    </div>
                    <img  class="object-cover h-full" src="{{ $image2 }}" />
                </div>
            </div>
        </div>
        <div id="open-{{ $projectName }}-3" class="flex items-center justify-center lightbox bg-opacity-black-70 w-full h-full fixed top-0 left-0 right-0 bottom-0 z-50">
            <div class="md:h-full p-0 sm:p-8 md:p-20">
                <div class="flex items-center justify-center rounded-default h-full w-full relative overflow-hidden shadow-md">
                    <div class="p-8 absolute top-0 left-0">
                        <a href="#close" class=" inline-flex items-center justify-center border-white text-white border-2 rounded-default px-6 py-3" >close</a>
                    </div>
                    <img  class="object-cover h-full" src="{{ $image3 }}" />
                </div>
            </div>
        </div>


    </div>
</div>

<div class="container mx-auto pt-4 pb-16 md:pb-32 lg:py-32 px-0 md:px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-4 md:gap-4 mb-12">
        <a href="#open-{{ $projectName }}-2" class="rounded-default block h-96 overflow-hidden">
            <img loading=lazy class="object-cover h-full w-full" src="{{ $image2 }}" />
        </a>
        <a href="#open-{{ $projectName }}-3" class="rounded-default block h-96 overflow-hidden">
            <img loading=lazy class="object-cover h-full w-full" src="{{ $image3 }}" />
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-4 md:px-0">
        <p class="leading-loose mb-4 md:mb-0">{{ $description ?? '' }}</p>

        <div class="">
            <p class="text-black font-bold text-xl mb-6"> Techniques</p>
            <div class="flex flex-col">
                @foreach($techniques as $technique)
                    <div class="flex items-center mb-1">
                        <span class="block bg-black w-2 h-2 mr-4 rounded-full"></span>
                        <p class="text-sm">{{ $technique }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
