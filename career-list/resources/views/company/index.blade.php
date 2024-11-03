<x-app-layout>

    <div class="fixed top-20 right-20">
        <a href="{{ route('company.create') }}">
            <x-primary-button class="bg-turquoise hover:bg-dark_turquoise">
                <i class="fa-solid fa-plus"></i>
            </x-primary-button>
        </a>
    </div>

    <div class="max-w-4xl mx-auto px-6 pt-4">

        @if(session('message'))
            <div class="text-red-600 font-bold mt-2">
                {{session('message')}}
            </div>
        @endif

        @foreach ($companies as $company)
            <a href="{{route('company.show', $company)}}">
                <div class="mt-4 p-4 bg-light_navy w-full border-2 border-turquoise rounded-xl">
                    <h1 class="mb-4 ml-4 text-lg font-semibold">
                        {{ $company->company_name }}
                    </h1>
                    <hr class="w-[calc(100%+2rem)] -mx-4 border border-turquoise">
                    <div class="flex space-x-10 mt-4">
                        <p class="p-2 font-semibold">
                            <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                            {{ $company->application_status }}
                        </p>
                        <p class="p-2 font-semibold">
                            <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                            {{ $company->industry }}
                        </p>
                        <p class="p-2 font-semibold">
                            <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                            {{ $company->location }}
                        </p>
                        <div class="rating flex justify-center mt-1">
                            @for ($i = 1; $i <= $company->rating; $i++)
                                <label class="cursor-pointer  text-3xl selected">★</label>
                            @endfor
                        </div>                    
                    </div>
                    <div class="p-4 text-sm font-semibold text-right">
                        <p>
                            {{ $company->created_at }} / {{ $company->user->name }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach

        <div class="mt-4 pb-4">
            {{ $companies->links() }}
        </div>
    </div>
</x-app-layout>