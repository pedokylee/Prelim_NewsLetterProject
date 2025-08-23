<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; margin-top: -50px;">
    <div style="border: 3px solid #666; padding: 50px; border-radius: 10px;">
        @if ($successMessage)
            <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            x-transition
            class="text-green-600 mb-4 font-semibold" style="color: green; margin-bottom: 10px;">
                {{ $successMessage }}
            </div>
        @endif

        <form wire:submit.prevent="subscribe">
            <div style="margin-bottom: 10px;">
                <label>Name:</label><br>
                <input type="text" wire:model.live.debounce.500ms="name"
                class="border border-black-500 rounded px-5 py-1">
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <label>Email:</label><br>
                <input type="email" wire:model.live.debounce.500ms="email"
                class="border border-black-500 rounded px-5 py-1">
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</div>
