<div class="">

    <p class="text-2xl leading-none font-bold mb-6">
        {{ $title }}
    </p>


    <div class="flex ">
        @if(!isset($icon))
            <span class="mr-8 text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
        @else
            {{ $icon  }}
        @endif
        <p class="text-gray-600 text-sm leading-loose">
            {{ $positiveTraits }}
        </p>
    </div>

    @if(!empty($traitsToImprove))
        <div class="flex mt-4">
            <span class="mr-8 text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
            </span>
            <p class="text-gray-600 text-sm leading-loose">
                {{ $traitsToImprove ?? '' }}
            </p>
        </div>
    @endif
</div>
