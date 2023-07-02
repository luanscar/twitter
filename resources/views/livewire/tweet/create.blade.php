<div class="w-full px-3">
    <div class="flex align-top">
        <label>
            <textarea wire:model="body" placeholder="What's happening?" @click="editing = true"
                class="w-full mt-1 text-xl font-medium text-gray-800 placeholder-gray-500 bg-transparent border-none resize-none focus:outline-none focus:ring-0"
                rows="2" cols="50"></textarea>
        </label>
        @error('body') <span>{{ $message }}</span> @enderror
    </div>

    <x-primary-button wire:click="tweet"> Tweet🐥 </x-primary-button>
</div>
</div>
</div>
