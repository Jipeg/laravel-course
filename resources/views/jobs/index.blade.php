<x-layout>
    <h1 class="text-2xl font-bold">Your Contacts:</h1>
    @foreach ($jobs as $job)
        <div class="bg-white shadow-md rounded px-8 pt-3 pb-4 mb-2">
            <a href="/jobs/{{ $job->id }}">
                <h3 class="text-2xl font-bold mb-4">{{ $job->name }}</h3>
                <p class="text-gray-700 text-sm mb-2">
                    <span class="font-bold">
                    $ {{ $job->salary }}
                    </span>
                    per year
                </p>
            </a>
        </div>
    @endforeach

    <x-slot:title>
        All Jobs
    </x-slot:title>
    <x-slot:heading>
        All Jobs
    </x-slot:heading>
</x-layout>
