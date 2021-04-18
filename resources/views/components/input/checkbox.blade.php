<div class="flex items-center">
    <input
            wire:model.{{ $requestType }}="{{ $model }}"
            id="{{ $model }}"
            type="checkbox"
            @if($isRequired) required @endif
            @if($isAutofocus) autofocus @endif
            @if($isReadonly) readonly @endif
            @if($isDisabled) disabled @endif
            class="form-checkbox w-4 h-4 text-lightblue-600 transition rounded-sm duration-150 ease-in-out focus:ring-blue-300 cursor-pointer @error($model) ring-rose-400 @enderror"/>

    @if($showLabel)
        <label for="{{ $model }}" class="block ml-2 text-sm text-bluegray-500 leading-5 cursor-pointer">
            {{ $labelText }}
        </label>
    @endif
</div>
