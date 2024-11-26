<x-app>
    <x-slot:title>
        Jobs
    </x-slot:title>

   Jobs

    <x-slot:list>
        <ul class="px-3 mt-4 list-disc">
            @foreach($jobs as $job)
                <a href="/jobs/{{$job['id']}}" class="text-lg font-medium text-blue-500 dark:text-blue-400 duration-300 hover:text-white">
                    <li class="">{{$job['title']}}: Pays {{$job['salary']}} per year.</li>
                </a>
            @endforeach
        </ul>
    </x-slot:list>
</x-app>
