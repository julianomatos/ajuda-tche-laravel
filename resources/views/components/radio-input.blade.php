@props(['id' => "$name-$value", 'name', 'label', 'value'])

<div class="flex items-center">
    <input
        {{ $attributes->merge([
        'type' => 'radio',
        'id' => $id,
        'name' => $name,
        'class' => "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600",
        'value' => $value
    ]) }}>

    <label for="{{ $id }}" class="ms-2 font-medium text-gray-900 dark:text-gray-300">
        {{ $label }}
    </label>
</div>
