<x-layout>
    <div class="bg-white p-6 mx-auto max-w-md rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-blue-500">{{$job['name']}}</h2>
        <p class="text-gray-700 text-sm my-2">Email: <span class="font-bold text-purple-500">{{$job['email']}}</span></p>
        <p class="text-gray-700 text-sm my-2">Message: <span class="font-bold text-green-500">{{$job['message']}}</span></p>
    </div>
    <x-slot:title>
        Job {{$job['name']}}
    </x-slot:title>
</x-layout>
