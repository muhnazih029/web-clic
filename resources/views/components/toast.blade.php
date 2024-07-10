@error($name)
    <x-option.toast variant="danger" message="{{ $message }}" />
@enderror
@if (session($name))
    @if ($name != 'error')
        <x-option.toast variant="{{ $name }}" message="{{ session($name) }}" />
    @endif
@endif
