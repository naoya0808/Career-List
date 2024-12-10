<x-app-layout>

    <div class="fixed top-20 right-5">
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

                    <div class="flex sm:flex-row flex-col">
                        <div class="flex sm:space-x-10 space-x-5 mt-4">
                            <div class="p-2 font-semibold flex items-center space-x-2">
                                <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                                <div>{{ $company->application_status }}</div>
                            </div>
                            <div class="p-2 font-semibold flex items-center space-x-2">
                                <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                                <div>{{ $company->industry }}</div>
                            </div>
                            <div class="p-2 font-semibold flex items-center space-x-2">
                                <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                                <div>{{ $company->location }}</div>
                            </div>
                        </div>

                        <div class="sm:mt-5 sm:ml-10 ml-2">
                            <div class="rating">
                                @for ($i = 1; $i <= $company->rating; $i++)
                                    <label class="cursor-pointer text-2xl selected">★</label>
                                @endfor
                            </div>
                        </div>  
                    </div>

                    <div class="pt-4 pl-2 sm:p-4 text-sm font-semibold sm:text-right">
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