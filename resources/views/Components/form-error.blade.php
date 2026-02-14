@props(['name'])

@error($name) {{-- [طريقة 1] --}}
    <p class="text-red-500 italic font-semibold mt-1">{{ $message }}</p>
@enderror


{{-- <div class="mt-10"> [طريقة 2]
        @if($errors->any()) 
          <ul>
            @foreach ($errors->all() as $error)
              <li class="text-red-500 italic">{{ $error }}</li>
            @endforeach
          </ul>
        @endif
      </div> --}}