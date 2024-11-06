<x-app-layout>

    <div class="max-w-4xl mx-auto px-6 pt-10">

        @if(session('message'))
            <div class="text-red-600 font-bold mt-2">
                {{session('message')}}
            </div>
        @endif

        <div class="bg-light_navy w-full border-2 border-turquoise mt-4 rounded-xl">
            <div class="py-4 px-10">

                <div class="flex items-center justify-between">
                    <div class="flex space-x-10 items-center">
                        <h1 class="text-lg font-semibold">
                            {{ $company->company_name }}
                        </h1>
                        <h2 class="p-2">
                            <a href="{{ $company->company_url }}" target="_blank" rel="noopener noreferrer" class="text-turquoise underline">
                                {{ $company->company_url }}
                            </a>
                        </h2>
                    </div>
                    <div class="text-right flex justify-end">
                        <a href="{{route('company.edit', $company)}}">
                            <x-primary-button class="bg-turquoise hover:bg-dark_turquoise">
                                <i class="fa-solid fa-pen"></i>
                            </x-primary-button>
                        </a>
    
                        <form id="delete-form" method="post" action="{{route('company.destroy', $company)}}" class="flex-2">
                            @csrf
                            @method('delete')
                            <button type="button" onclick="confirmDeletion()" id="delete-button" class="inline-flex items-center px-6 py-3 bg-red-500 border border-transparent rounded-full uppercase tracking-widest hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150 ml-2">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                        <script>
                            document.getElementById('delete-button').addEventListener('click', function () {
                                if (confirm("本当に削除してよろしいですか？")) {
                                    document.getElementById('delete-form').submit();
                                } else {
                                    this.blur();
                                }
                            });
                        </script>


                    </div>
                </div>

                <hr class="mt-4 border border-turquoise border-t mx-[-2.5rem] w-[calc(100%+5rem)]">
                
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
                    <div class="rating flex justify-center">
                        @for ($i = 1; $i <= $company->rating; $i++)
                            <label class="cursor-pointer  text-3xl selected">★</label>
                        @endfor
                    </div> 
                </div>
    
                <div class="mt-4 p-2 flex items-start space-x-2">
                    <p>
                        <i class="fa-solid fa-square fa-xs text-turquoise"></i>
                    </p>
                    
                    <p>
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