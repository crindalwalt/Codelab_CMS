<div>
{{--    <input type="text" name="visitor" class="w-full my-3 border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input" wire:model="stdsearch">--}}

{{--        @error('visitor')--}}
{{--        <div class="text-red-500 p-2">{{ $message }}</div>--}}
{{--        @enderror--}}

        <ul>
            <label for="stdSelect" class="py-4 text-white">Select visitor</label>
            <div class="flex justify-start w-full">
                <div class="mb-3 xl:w-96">
                            <select class="form-select form-select-lg mb-3
                  appearance-none
                  block
                  w-full
                  px-4
                  py-2
                  text-xl
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding bg-no-repeat
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>

            @foreach($users as $user)


                        <option value="{{$user->id}}">{{$user->name}}</option>


            @endforeach
            </select>
        </ul>
</div>
