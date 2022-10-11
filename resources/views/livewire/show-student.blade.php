<div>
    <input type="text" name="visitor" class="w-full my-3 border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input" wire:model="stdsearch">

        @error('visitor')
        <div class="text-red-500 p-2">{{ $message }}</div>
        @enderror

        <ul>
            @foreach($users as $user)
                <li class="py-2 w-2/4 text-white cursor-pointer">

                        <strong>{{$user->name}}</strong>

                </li>
            @endforeach
        </ul>
</div>
