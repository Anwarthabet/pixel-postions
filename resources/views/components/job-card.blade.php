@props(['job'])

<div class="flex flex-col bg-black/5 p-6 rounded-xl hover:bg-black/10 hover:shadow-lg transition duration-300 text-gray-700">
    <div class="flex justify-between items-center mb-4">
        <div class="self-start text-sm">
            {{ $job->Employer->name }}

        </div>
    </div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            {{ $job->title }}
        </h3>
        <p class="text-sm mt-4">
            {{ $job->salary }}
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</div>
