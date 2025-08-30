<x-layout>
        <x-page-heading class="text-center mb-6">results</x-page-heading>
            <div class="max-w-4xl mx-auto">
            @foreach ($jobs as $job)
            <x-job-card-wide :$job/>    
            @endforeach
            </div>
</x-layout>