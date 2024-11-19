<x-layout>
    <h1 class="text-2xl font-bold">Your Contacts:</h1>
    @foreach ($contacts as $contact)
        <div class="bg-white shadow-md rounded px-8 pt-3 pb-4 mb-2">
            <a href="/contacts/{{ $contact->id }}">
                <h3 class="text-2xl font-bold mb-4">{{ $contact->name }}</h3>
                <p class="text-gray-700 text-sm mb-2">
                    <span class="font-bold">Phone: {{ $contact->phone }}</span>
                </p>
            </a>
        </div>
    @endforeach

    <x-slot:title>
        All Contacts
    </x-slot:title>
</x-layout>
