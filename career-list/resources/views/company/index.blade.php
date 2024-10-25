<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                企業一覧
            </h2>
        
            <div class="text-right">
                <a href="{{ route('company.create') }}">
                    <x-primary-button>
                        新規作成
                    </x-primary-button>
                </a>
            </div>
        </div>

    </x-slot>

    <div class="max-w-7xl mx-auto px-6">

        @if(session('message'))
            <div class="text-red-600 font-bold mt-2">
                {{session('message')}}
            </div>
        @endif

        @foreach ($companies as $company)
            <a href="{{route('company.show', $company)}}">
                <div class="mt-4 p-8 bg-white w-full">
                    <h1 class="p-4 text-lg font-semibold">
                        {{ $company->company_name }}
                    </h1>
                    <hr class="w-full">
                    <div class="flex space-x-10 mt-4">
                        <p class="border p-2 bg-gray-100">
                            {{ $company->application_status }}
                        </p>
                        <p class="border p-2 bg-gray-100">
                            {{ $company->industry }}
                        </p>
                        <p class="border p-2 bg-gray-100">
                            {{ $company->location }}
                        </p>
                        <div class="rating flex justify-center mt-1">
                            @for ($i = 1; $i <= $company->rating; $i++)
                                <label class="cursor-pointer  text-3xl selected">★</label>
                            @endfor
                        </div>                    
                    </div>
                    <div class="p-4 text-sm font-semibold">
                        <p>
                            {{ $company->created_at }} / {{ $company->user->name }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach

        <div class="mb-4">
            {{ $companies->links() }}
        </div>
    </div>
</x-app-layout>