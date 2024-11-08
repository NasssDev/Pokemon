@props(['type' => 'text', 'name', 'label' => '', 'value' => '', 'placeholder' => '', 'required' => false])

<div class="mb-6">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
            {{ $label }} @if($required) <span class="text-red-600">*</span> @endif
        </label>
    @endif

    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ old($name, $value) }}"
           placeholder="{{ $placeholder }}"
           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-900 focus:outline-none focus:border-emerald-500 focus:ring-emerald-500 @error($name) border-red-500 @enderror"
            {{ $required ? 'required' : '' }}>

    @error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>