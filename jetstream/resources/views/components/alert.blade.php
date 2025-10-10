@props(['type'=>'primary'])
@php
    switch ($type) {
      case 'primary':
        $class_a = "bg-blue-700";
        $class_b = "border-blue-400 bg-blue-100 text-blue-700";
        break;
      case 'warning':
        $class_a = "bg-amber-500";
        $class_b = "border-amber-400 bg-amber-100 text-amber-700";
        break;
      default:
        $class_a = "bg-blue-700";
        $class_b = "border-blue-400 bg-blue-100 text-blue-700";
        break;
    }
@endphp


<div {{ $attributes->merge(['class'=>'underline']) }} role="alert">
  <div class="{{ $class_a }} text-white font-bold rounded-t px-4 py-2">
    {{ $title }}
  </div>
  <div class="{{ $class_b }} border border-t-0 rounded-b px-4 py-3">
    <p>{{ $slot }}</p>
  </div>
</div>