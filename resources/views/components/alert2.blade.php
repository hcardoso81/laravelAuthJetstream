<div {{ $attributes->merge(['class' => "border-t border-b px-4 py-3 $class", 'role' => 'alert']) }}>
    <p class="font-bold">{{ $title }}</p>
    {{ $slot }}
</div>
