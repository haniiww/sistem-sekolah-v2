<span @class([
    'inline-flex items-center justify-center px-3 py-1 text-xs font-medium whitespace-nowrap',
    'bg-green-100 text-green-700' => $color === 'green',
    'bg-red-100 text-red-700' => $color === 'red',
])>
    {{ $label }}
</span>