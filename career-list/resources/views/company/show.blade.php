<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            個別表示
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">

        @if(session('message'))
            <div class="text-red-600 font-bold mt-2">
                {{session('message')}}
            </div>
        @endif

        <div class="bg-white w-full">
            <div class="mt-4 p-4">
                <div class="flex space-x-10 items-center">
                    <h1 class="text-lg font-semibold">
                        {{ $company->company_name }}
                    </h1>
                    <h2 class="border p-2 bg-gray-100">
                        {{ $company->company_url }}
                    </h2>
                </div>
                <div class="text-right flex justify-end">
                    <a href="{{route('company.edit', $company)}}">
                        <x-primary-button>
                            編集
                        </x-primary-button>
                    </a>

                    <form method="post" action="{{route('company.destroy', $company)}}" class="flex-2">
                        @csrf
                        @method('delete')
                        <x-primary-button class="bg-red-700 ml-2">
                            削除
                        </x-primary-button>
                    </form>
                </div>
    
                <hr class="mt-4 w-full">
                
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
    
                <div class="mt-4 whitespace-pre-line">
                    <p class="border p-2 bg-gray-100">
                        {{ $company->notes }}
                    </p>
                </div>
    
                <div class="mt-4 text-sm font-semibold flex flex-row-reverse">
                    <p> {{$company->created_at}} </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>