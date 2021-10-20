<div class="{{ $backgroundColor ?? 'bg-purple-600' }} text-white pt-32">
    <div class="container mx-auto">
        <div class="flex flex-col ">
            <div class="flex justify-between items-end mb-8">
                <h3 class="font-bold text-3xl md:text-5xl xl:text-6xl leading-none">{{ $projectName ?? '' }}</h3>
                <div>
                    {{ $link ?? '' }}
                </div>
            </div>
            <p class="text-xl">{{ $shortDescription ?? '' }}</p>

        </div>

        <div class="portfolio-main-image rounded-default h-168 overflow-hidden mb-4">
            <img src="{{ $image1 }}" />
        </div>
    </div>
</div>

<div class="container mx-auto py-32">
    <div class="grid grid-cols-2 gap-4 mb-12">
        <div class="rounded-default h-96 overflow-hidden">
            <img src="{{ $image2 }}" />
        </div>
        <div class="rounded-default h-96 overflow-hidden">
            <img src="{{ $image3 }}" />
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <p class="leading-loose">{{ $description ?? '' }}</p>

        <div>
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
