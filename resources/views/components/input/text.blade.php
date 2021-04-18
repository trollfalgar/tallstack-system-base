<div>
    @if($showLabel)
        <label for="{{ $model }}" class="block text-sm font-medium text-bluegray-500 leading-5 uppercase">
            {{ $labelText }}
        </label>
    @endif

    <div class="mt-1 rounded-sm shadow-sm">
        <input
                wire:model.{{ $requestType }}="{{ $model }}"
                id="{{ $model }}"
                name="{{ $model }}"
                type="{{ $type }}"
                @if($isRequired) required @endif
                @if($isAutofocus) autofocus @endif
                @if($isReadonly) readonly @endif
                @if($isDisabled) disabled @endif
                {{ $autocomplete }}
                class="appearance-none block w-full px-3 py-2 border border-bluegray-300 rounded-sm placeholder-bluegray-400 focus:outline-none transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error($model) border-red-300 placeholder-red-300 focus:border-red-300 focus:ring-red-500 @enderror"/>
    </div>

    @error($model)
    <p class="mt-2 text-sm text-red-600">{{ __($message) }}</p>
    @enderror
</div>