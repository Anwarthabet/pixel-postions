
<x-layout>
    <dev class="space-y-10">
        <section class="text-center pt-6">
    <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
<x-forms.form action="/search" class="mt-6">
    <x-forms.input  name="q" :label="false" type="text" placeholder="Search for jobs, companies, or keywords"  class="w-full md:w-1/2">
    </x-forms.input>
</x-forms.form>
</section>

    <section class="mt-16 space-y-6 ">
        <x-section-header>
            Featured Jobs
        </x-section-header>
     <div class="grid grid-cols-3 gap-6">
    @foreach ($jobs as $job)
        <x-job-card :job="$job" />
    @endforeach
</div>
    </section>
    <section>
        <x-section-header>
            Tags
              <div class="flex flex-wrap gap-2 mt-4 content-center justify-center ">
                @foreach ($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
                </div>
        </x-section-header>
    </section>
    <section>
            Recent Jobs
            @foreach ($jobs as $job)
            <x-job-card-wide :$job/>    
            @endforeach
    </section>
</div>
</x-layout>
