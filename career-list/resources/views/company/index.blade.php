<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            企業一覧
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @foreach ($companies as $company)
            <div class="mt-4 p-8 bg-white w-full">
                <h1 class="p-4 text-lg font-semibold">
                    {{ $company->company_name }}
                </h1>
                <hr class="w-full">
                <div class="flex space-x-4 mt-4">
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
                        {{ $company->created_at }} / {{$post->user->name??'実装前のユーザーさん'}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>