<x-layout>
    <dev class="space-y-10">
        <section class="text-center pt-6">
    <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

    <form action="" class="mt-6">
        <input 
            type="text" 
            placeholder="Web Developer..." 
            class="rounded-xl bg-black/10 border border-white/10 px-5 py-4 w-full max-w-xl mx-auto block text-gray-800 placeholder-gray-500"
        >
    </form>
</section>

    <section class="mt-16">
        <x-section-header>
            Featured Jobs
        </x-section-header>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">  
      <x-job-card />
      <x-job-card />
      <x-job-card />
</div>
    </section>
    <section>
        <x-section-header>
            Tags
              <div class="flex flex-wrap gap-2 mt-4">
                    <x-tages>Laravel</x-tages>
                    <x-tages>Backend</x-tages>
                    <x-tages>API</x-tages>
                    <x-tages>Vue</x-tages>
                    <x-tages>React</x-tages>
                    <x-tages>JavaScript</x-tages>
                    <x-tages>CSS</x-tages>
                    <x-tages>HTML</x-tages> 
                </div>
        </x-section-header>
    </section>
    <section>
            Recent Jobs
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
    </section>
    </dev>
</x-layout>
