@props(['active' => 'false'])

<a {{$attributes}} class="
@if($active)
border-blue-500
@endif
text-gray-800 transition-colors duration-300 transform dark:text-gray-200 border-b-2 hover:border-blue-500 mx-1.5 sm:mx-6">{{$slot}}</a>

