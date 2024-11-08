<button type="{{$type}}" {{ $attributes->merge(['class' => "rounded-lg text-white p-2 "])}} >
    {{$slot}}
</button>