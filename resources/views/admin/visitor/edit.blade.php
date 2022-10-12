@php
    extract($data);
@endphp
@php use App\Enum\Education;use App\Enum\Gender;use App\Enum\Interest;use App\Enum\MaritalStatus;use App\Enum\UserRoles; @endphp
@extends('layouts.admin')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Information
            </h2>

            <div class="">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Update Information
                </h4>

                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <form action="{{route('user.update',$user)}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="align-center">
                            <!-- Full Name -->
                            <x-visitor.input-label class="mr-4" for="name" :value="__('Name')">
                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your name" name="name" type="text" id="name"
                                    value="{{ $user->name }}"
                                    required autofocus/>
                            </x-visitor.input-label>
                            <!-- CNIC -->
                            <x-visitor.input-label class="mr-4" for="cnic" :value="__('Cnic')">

                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your cnic" name="cnic" type="text" id="cnic"
                                    value="{{ $user->cnic }}"
                                    required autofocus/>
                            </x-visitor.input-label>
                            <!-- Father Name -->
                            <x-visitor.input-label class="mr-4" for="father_name" :value="__('Father Name')">

                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your father's name" name="father_name" type="text"
                                    id="father_name" value="{{ $user->father_name }}" required autofocus/>
                            </x-visitor.input-label>

                            <!-- Father Name -->
                            <x-visitor.input-label class="mr-4" for="father_phone" :value="__('Father Phone')">

                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your father's phone" name="father_phone" type="text"
                                    id="father_phone" value="{{ $user->father_phone }}" required autofocus/>
                            </x-visitor.input-label>

                            <!-- Phone No. -->
                            <x-visitor.input-label class="mr-4" for="phone" :value="__('Phone')">

                                <span class="text-gray-700 dark:text-gray-400">
                                    Phone No.
                                </span>
                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your phone no." name="phone" type="text" id="phone"
                                    value="{{ $user->phone }}" required autofocus/>
                            </x-visitor.input-label>
                            <!-- Gender -->
                            <x-visitor.input-label for="gender" :value="__('Gender')">

                                <select name="gender" id="gender"
                                        class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="">Select Gender</option>
                                    @foreach(Gender::cases() as $item)
                                        <option
                                            value="{{$item->value}}" {{($item->value == $user->gender)? 'selected' : ''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </x-visitor.input-label>
                            <!-- Interest -->
                            <x-visitor.input-label for="interest" :value="__('Interest')">

                                <select name="interest" id="interest"
                                        class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="">Select Interest</option>
                                    @foreach(Interest::cases() as $item)
                                        <option
                                            value="{{$item->value}}" {{($item->value == $user->interest)? 'selected' : ''}}>{{$item->value}}</option>
                                    @endforeach

                                </select>
                            </x-visitor.input-label>
                            <!-- Education -->
                            <x-visitor.input-label for="education" :value="__('Education')">

                                <select name="education" id="education"
                                        class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="">Select Education</option>
                                    @foreach(Education::cases() as $item)
                                        <option
                                            value="{{$item->value}}" {{($item->value == $user->education)? 'selected' : ''}}>{{$item->value}}</option>
                                    @endforeach

                                </select>
                            </x-visitor.input-label>
                            <!-- Institute -->
                            <x-visitor.input-label class="mt-4" for="institute" :value="__('Institute')">

                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your institute" name="institute" type="text"
                                    id="institute"
                                    value="{{ $user->institute }}" required autofocus/>
                            </x-visitor.input-label>
                            <!-- Marital Status -->
                            <x-visitor.input-label for="marital_status" :value="__('Marital Status')">

                                <select name="marital_status" id="marital_status"
                                        class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="">Select Marital Status</option>
                                    @foreach(MaritalStatus::cases() as $item)
                                        <option
                                            value="{{$item->value}}" {{($item->value == $user->marital_status)? 'selected' : ''}}>{{$item->value}}</option>
                                    @endforeach
                                </select>
                            </x-visitor.input-label>
                            <!-- Role -->
                            <x-visitor.input-label for="role" :value="__('Role')">

                                <select name="role" id="role"
                                        class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="">Select Role</option>
                                    @foreach(UserRoles::cases() as $item)
                                        <option value="{{$item->value}}" {{($item->value == $user->role)? 'selected' : ''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </x-visitor.input-label>
                        </div>
                        <!-- Email input -->

                        <x-visitor.input-label class="mt-4" for="email" :value="__('Email')">

                            <x-visitor.text-input
                                class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                placeholder="Enter your email address" type="email" name="email" id="email"
                                value="{{ $user->email }}" required autofocus/>

                        </x-visitor.input-label>
                        <x-visitor.input-label class="mt-4" for="password" :value="__('Password')">

                            <x-visitor.text-input
                                class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                placeholder="Enter your Password" type="password" name="password" id="password"
                                value="{{ $user->password }}" required autofocus/>

                        </x-visitor.input-label>
                        <div class="flex align-center mt-4">
                            <!-- City Name -->
                            <x-visitor.input-label class="mr-4" for="city" :value="__('City')">

                                <x-visitor.text-input
                                    class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                    placeholder="Enter your city" name="city" id="city" value="{{ $user->city }}"
                                    required autofocus/>

                            </x-visitor.input-label>

                        </div>
                        <div class="py-4">
                            <button type="submit"
                                    class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
@endsection
