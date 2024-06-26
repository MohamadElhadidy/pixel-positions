<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 borer-white/10 px-5 py-4 w-full max-w-xl focus:outline-none">
            </form>
        </section>
        <section class="mt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featured_jobs as $job)
                    <x-job-card :$job/>
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 ">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>

        </section>
    </div>
</x-layout>