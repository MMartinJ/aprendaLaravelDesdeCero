<div {{ $attributes->merge(['class'=>'underline']) }} role="alert">
  <div class="{{ $class_a }} text-white font-bold rounded-t px-4 py-2">
    {{ $title }}
  </div>
  <div class="{{ $class_b }} border border-t-0 rounded-b px-4 py-3">
    <p>{{ $slot }}</p>
  </div>
</div>