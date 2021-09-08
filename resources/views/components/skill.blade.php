<div class="flex flex-col mb-12">
    <p class="text-2xl leading-none font-bold mb-6">
        {{ $title }}
        <span class="text-base">(since {{$date}})</span>
    </p>
    <p class="text-gray-600 text-sm leading-none">
        {{ $subSkills ?? 'no sub skills' }}
    </p>
</div>
