<a {{ $attributes->merge(['class' => "bg-$color-600 rounded-sm text-white p-2 hover:bg-$color-200 hover:text-$color-600 "])}} href="{{$href}}">
    {{$slot}}
</a>