<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #121212;">
    <div style="
        border: 1px solid #333;
        padding: 30px;
        border-radius: 6px;
        max-width: 400px;
        width: 100%;
        background-color: #1e1e1e;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        color: #ddd;
    ">
        @if ($successMessage)
            <div
                x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                x-transition
                class="text-green-400 mb-4 font-semibold"
                style="color: #90ee90; margin-bottom: 10px;">
                {{ $successMessage }}
            </div>
        @endif

        <form wire:submit.prevent="subscribe">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #ccc;">Name:</label>
                <input type="text" wire:model.live.debounce.1ms="name"
                       class="border border-gray-600 rounded px-4 py-2 w-full"
                       style="box-sizing: border-box; background-color: #2a2a2a; color: #eee; border: 1px solid #444;">
                @error('name')
                    <div style="color: #ff6b6b; font-size: 0.9em; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #ccc;">Email:</label>
                <input type="email" wire:model.live.debounce.1ms="email"
                       class="border border-gray-600 rounded px-4 py-2 w-full"
                       style="box-sizing: border-box; background-color: #2a2a2a; color: #eee; border: 1px solid #444;">
                @error('email')
                    <div style="color: #ff6b6b; font-size: 0.9em; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                    style="
                        background-color: #388811ff;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    ">
                Subscribe
            </button>
        </form>
    </div>
</div>
