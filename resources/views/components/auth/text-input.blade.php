<div class="relative ">
    @if ($name == 'password')
    <input :type="((show === true) ? 'text' : 'password')" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $id }}"
    class="w-full h-16 px-5 text-lg border rounded-2xl bg-teritary @error($name) border-red-600 @enderror" />
        <input type="checkbox" id="show" class="hidden" @change="show =! show">
        <label for="show" class="absolute text-gray-500 cursor-pointer top-4 right-4 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" view-box="0 0 32 32">
                <use :href="'#fluent--eye' + ((show === true) ? '-off-' : '-') + '20-filled'" />
            </svg>
        </label>
        @else
        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $id }}"
        class="w-full h-16 px-5 text-lg border rounded-2xl bg-teritary @error($name) border-red-600 @enderror" />
    @endif
    <x-auth.error-message name="{{ $name }}" />
</div>
