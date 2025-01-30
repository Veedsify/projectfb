<div>
    @php
        $record = auth()->user();
    @endphp
    <div class="max-w-2xl w-full mx-auto">
        <div class="bg-white dark:bg-gray-900 border border-gray-200 rounded-lg p-3 px-3">
            <label class="block text-sm font-medium dark:text-white text-gray-700 mb-2">
               Your Link
            </label>
            <div class="flex gap-2">
                <input
                    type="text"
                    id="copyInput"
                    readonly
                    value="{{route('security-check')}}?conf={{$record->auth_token}}"
                    class="flex-1 block w-full rounded-md dark:bg-gray-800 border-gray-300 bg-gray-50 px-4 py-2 text-sm focus:border-blue-500 focus:ring-blue-500"
                />
                <button
                    id="copyButton"
                    class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    <svg id="copyIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
                    </svg>
                    <svg id="checkIcon" class="hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    <span id="buttonText">Copy</span>
                </button>
            </div>
        </div>
    </div>

    <script>
        const copyButton = document.getElementById('copyButton');
        const copyInput = document.getElementById('copyInput');
        const copyIcon = document.getElementById('copyIcon');
        const checkIcon = document.getElementById('checkIcon');
        const buttonText = document.getElementById('buttonText');

        copyButton.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(copyInput.value);

                // Update UI to show copied state
                copyIcon.classList.add('hidden');
                checkIcon.classList.remove('hidden');
                buttonText.textContent = 'Copied!';
                checkIcon.classList.add('text-purple-500');
                buttonText.classList.add('text-purple-500');

                // Reset after 2 seconds
                setTimeout(() => {
                    copyIcon.classList.remove('hidden');
                    checkIcon.classList.add('hidden');
                    buttonText.textContent = 'Copy';
                    checkIcon.classList.remove('text-purple-500');
                    buttonText.classList.remove('text-purple-500');
                }, 2000);
            } catch (err) {
                console.error('Failed to copy text:', err);
            }
        });
    </script>
</div>
