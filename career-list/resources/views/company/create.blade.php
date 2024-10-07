<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form>
            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="companyname" class="font-semibold mt-4">企業名</label>
                    <input type="text" name="companyname" class="w-auto py-2 border border-gray-300 rounded-md" id="companyname">
                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="companyurl" class="font-semibold mt-4">URL</label>
                    <input type="text" name="companyurl" class="w-auto py-2 border border-gray-300 rounded-md" id="companyurl">
                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-row space-x-4">
                    <div class="flex flex-col w-1/4">
                        <label for="applicationstatus" class="font-semibold">応募状況</label>
                        <input type="text" name="applicationstatus" class="py-2 border border-gray-300 rounded-md" id="applicationstatus">
                    </div>
            
                    <div class="flex flex-col w-1/4">
                        <label for="industry" class="font-semibold">業界</label>
                        <input type="text" name="industry" class="py-2 border border-gray-300 rounded-md" id="industry">
                    </div>
                    
                    <div class="flex flex-col w-1/4">
                        <label for="location" class="font-semibold">勤務地</label>
                        <input type="text" name="location" class="py-2 border border-gray-300 rounded-md" id="location">
                    </div>


                    <div class="rating flex justify-center w-1/4 mt-5 ">
                        <input type="radio" name="rating" id="star1" value="1" class="hidden" onclick="updateStars(1)">
                        <label for="star1" class="cursor-pointer text-gray-300 text-5xl">★</label>
                    
                        <input type="radio" name="rating" id="star2" value="2" class="hidden" onclick="updateStars(2)">
                        <label for="star2" class="cursor-pointer text-gray-300 text-5xl">★</label>
                    
                        <input type="radio" name="rating" id="star3" value="3" class="hidden" onclick="updateStars(3)">
                        <label for="star3" class="cursor-pointer text-gray-300 text-5xl">★</label>
                    
                        <input type="radio" name="rating" id="star4" value="4" class="hidden" onclick="updateStars(4)">
                        <label for="star4" class="cursor-pointer text-gray-300 text-5xl">★</label>
                    
                        <input type="radio" name="rating" id="star5" value="5" class="hidden" onclick="updateStars(5)">
                        <label for="star5" class="cursor-pointer text-gray-300 text-5xl">★</label>
                    </div>
                   

                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="notes" class="font-semibold mt-4">備考欄</label>
                    <textarea name="notes" class="w-auto py-2 border border-gray-300 rounded-md" id="notes" cols="30" rows="5"></textarea>
                </div>
            </div>

            <x-primary-button class="mt-8">
                投稿する
            </x-primary-button>
        </form>
    </div>
    <script src="{{ asset('build/assets/rating.js') }}"></script>
</x-app-layout>
