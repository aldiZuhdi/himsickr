<button {{ $attributes->merge(['class' => 'btn rounded-pill shadow-sm']) }}>
    {{ $slot }}
</button>