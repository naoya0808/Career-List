<x-app-layout>

    <div class="max-w-7xl mx-auto px-6 pt-10">
        <form method="post" action="{{ route('company.store')}}">
        @csrf
            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="company_name" class="font-semibold mt-4 mb-2">企業名</label>
                    <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                    <input type="text" name="company_name" class="w-auto py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="company_name" value="{{old('company_name')}}">
                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="company_url" class="font-semibold mt-4 mb-2">URL</label>
                    <x-input-error :messages="$errors->get('company_url')" class="mt-2" />
                    <input type="text" name="company_url" class="w-auto py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="company_url" value="{{old('company_url')}}">
                </div>
            </div>




            <div class="mt-4">
                <div class="w-full flex sm:flex-row flex-col sm:space-x-4">
                    
                        <div class="flex flex-col sm:w-1/4">
                            <label for="application_status" class="font-semibold mb-2">応募状況</label>
                            <x-input-error :messages="$errors->get('application_status')" class="mt-2" />
                            <input type="text" name="application_status" class="py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="application_status" value="{{old('application_status')}}">
                        </div>
                
                        <div class="flex flex-col sm:w-1/4">
                            <label for="industry" class="font-semibold mt-2 sm:mt-0 mb-2">業界</label>
                            <x-input-error :messages="$errors->get('industry')" class="mt-2" />
                            <input type="text" name="industry" class="py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="industry" value="{{old('industry')}}">
                        </div>
                        
                        <div class="flex flex-col sm:w-1/4">
                            <label for="location" class="font-semibold mt-2 sm:mt-0 mb-2">勤務地</label>
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                            <input type="text" name="location" class="py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="location" value="{{old('location')}}">
                        </div>

                    

                    
                        <div class="rating flex justify-center w-1/4 mt-6 ml-20 sm:ml-0">
                            <input type="radio" name="rating" id="star1" value="1" class="hidden" onclick="updateStars(1)">
                            <label for="star1" class="cursor-pointer text-light_navy text-5xl">★</label>
                        
                            <input type="radio" name="rating" id="star2" value="2" class="hidden" onclick="updateStars(2)">
                            <label for="star2" class="cursor-pointer text-light_navy text-5xl">★</label>
                        
                            <input type="radio" name="rating" id="star3" value="3" class="hidden" onclick="updateStars(3)">
                            <label for="star3" class="cursor-pointer text-light_navy text-5xl">★</label>
                        
                            <input type="radio" name="rating" id="star4" value="4" class="hidden" onclick="updateStars(4)">
                            <label for="star4" class="cursor-pointer text-light_navy text-5xl">★</label>
                        
                            <input type="radio" name="rating" id="star5" value="5" class="hidden" onclick="updateStars(5)">
                            <label for="star5" class="cursor-pointer text-light_navy text-5xl">★</label>
                        </div>
                        <script>
                            function updateStars(rating) {
                                const stars = document.querySelectorAll('.rating label');
                                stars.forEach((star, index) => {
                                    if (index < rating) {
                                        star.classList.add('selected');
                                    } else {
                                        star.classList.remove('selected');
                                    }
                                });
                            }
    
                            window.onload = function() {
                                updateStars(1);
                            };
                        </script>
                    
                </div>
            </div>




            <div class="mt-4">
                <div class="w-full flex flex-col">
                    <label for="notes" class="font-semibold mt-4 mb-2">備考欄</label>
                    <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                    <textarea name="notes" class="w-auto py-2 rounded-xl border-2 border-turquoise bg-light_navy focus:ring-2 focus:ring-red-500 focus:outline-none focus:border-transparent" id="notes" cols="30" rows="5">{{old('notes')}}</textarea>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <x-primary-button class="bg-turquoise hover:bg-dark_turquoise mb-10 sm:mb-0">
                    <i class="fa-solid fa-paper-plane"></i>
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
