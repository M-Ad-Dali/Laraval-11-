@props{{-- [[$attributes] يحمع كل الخصائص ويحكهم بنتغير واحد يسمى] --}}(['active' => false]) {{-- [عرف الاكتف كخاصية اعطاها الخاصية قيمة] --}}

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current= "{{ $active ? 'page': 'false' }}"
  {{ $attributes }} {{-- [تفعيل الخصائص عرض الخصائص في المتصفح في الفحص] --}}
  >{{ $slot }}
</a>



{{-- [التكليف اغير نوع عنصر الى بوتون ولما بعد ما اضغط عليه][تكليف 5] --}}
{{-- <a {{ $attributes }}>{{ $slot }}</a> --}}
{{-- @props(['active' => false, 'type' => 'a'])
@if ($type === 'a')
<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
  aria-current= "{{ $active ? 'page': 'false' }}"
  {{ $attributes }} 
  >{{ $slot }}
</a>
@else
<button class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
  aria-current= "{{ $active ? 'page': 'false' }}"
  {{ $attributes }} 
  >{{ $slot }}
</button>
@endif
--}}