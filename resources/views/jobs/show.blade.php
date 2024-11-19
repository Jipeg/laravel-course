<x-layout>
    <div class="bg-white p-6 mx-auto max-w-md rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-blue-500">{{$job['name']}}</h2>
        <p class="text-gray-700 text-sm my-2">Salary: <span class="font-bold text-purple-500">$ {{$job['salary']}}</span></p>
        <p class="text-gray-700 text-sm my-2">skills: <span class="font-bold text-green-500">{{$job['skills']}}</span></p>
    </div>
    <x-slot:title>
        Job {{$job['name']}}
    </x-slot:title>
    <x-slot:heading>
        Job {{$job['name']}}
    </x-slot:heading>
</x-layout>
