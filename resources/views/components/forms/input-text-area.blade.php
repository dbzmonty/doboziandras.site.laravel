<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}">
            {{ $label }}
        </label>
    @endif
    <textarea
        class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}"
        name="{{ $name }}"
        {{ $attributes }}
    >
        {{ old($name, $value) }}
    </textarea>
    @if ($errors->has($name))                            
        <p class="invalid-feedback">
            {{ $errors->first($name) }}
        </p>
    @endif
</div>