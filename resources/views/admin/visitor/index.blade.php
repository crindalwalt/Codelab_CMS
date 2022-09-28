
{{-- @php--}}
{{--      extract($data);--}}
{{-- @endphp--}}
@php use App\Enum\UserRoles; @endphp

@extends('layouts.admin')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Visitors Information
            </h2>
            {{-- <!-- CTA -->
            <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                href="https://github.com/estevanmaito/windmill-dashboard">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span>Star this project on GitHub</span>
                </div>
                <span>View more &RightArrow;</span>
            </a> --}}
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div

                        class="p-3 mr-4 ml-2 mt-2 mb-2 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">

                        <x-dashboard.svg-icon>
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </x-dashboard.svg-icon>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total Visitor
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $visitors->count() }}

                        </p>
                    </div>
                </div>
                <!-- Card -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div

                        class="p-3 mr-4 ml-2 mt-2 mb-2 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">

                        <x-dashboard.svg-icon>
                            <path fill-rule="evenodd"
                                  d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                  clip-rule="evenodd"></path>
                        </x-dashboard.svg-icon>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Account balance
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            $ 46,760.89
                        </p>
                    </div>
                </div>
                <!-- Card -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div
                        class="p-3 mr-4 ml-2 mt-2 mb-2 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <x-dashboard.svg-icon>
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                            </path>
                        </x-dashboard.svg-icon>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            New sales
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            376
                        </p>
                    </div>
                </div>
                <!-- Card -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div
                        class="p-3 mr-4 ml-2 mt-2 mb-2 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                        <x-dashboard.svg-icon>
                            <path fill-rule="evenodd"
                                  d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                  clip-rule="evenodd"></path>
                        </x-dashboard.svg-icon>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Pending contacts
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            35
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Add New Visitor
                </h4>


                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <form action="{{ route('visitor.store') }}" method="POST">
                        @csrf

                        <div class="flex align-center justify-start flex-wrap">
                            <!-- Full Name -->
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Full Name
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="Johny Depp" name="name" />
                                @error('name')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Phone no.
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="03123456789" name="phone" />
                                @error('phone')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Father Name
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="..." name="father_name" />
                                @error('father_name')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Father Phone
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="03111111111" name="father_phone" />
                                @error('father_phone')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Age
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="03111111111" name="age" />
                                @error('age')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Marital Status
                                </span>
                                <select name="marital_status"
                                    class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">

                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="bacholar">Bachelor</option>
                                    <option value="divorcee">Divorcee</option>
                                </select>
                                @error('marital_status')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>

                            {{-- Second row maybe --}}
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Interest
                                </span>
                                <select name="interest"
                                    class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">

                                    <option value="WebDesign">Website Design</option>
                                    <option value="WebDevelopment">Website Development</option>
                                    <option value="AndroidDevelopment">Android Development</option>
                                    <option value="GraphicDesign">Graphic Design</option>
                                </select>
                                @error('interest')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                                    <x-visitor.input-label class="" for="cnic" :value="__('Cnic')">

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    CNIC
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="xxxxx-xxxxxxx-x" type="number" name="cnic" />
                                @error('cnic')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Gender
                                </span>
                                <select name="gender"
                                    class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">


                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="rather_not_to_say">Nai Btana</option>

                                </select>
                                @error('gender')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror


                            </label>
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Address
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="xxxxx-xxxxxxx-x" name="address" />
                                @error('address')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            {{-- <label class="block text-sm mr-4 ml-2 mt-2 mb-2"> --}}
                            {{-- <span class="text-gray-700 dark:text-gray-400"> --}}
                            {{-- Education --}}
                            {{-- </span> --}}
                            {{-- <select name="education" --}}
                            {{-- class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"> --}}

                            {{-- <option value="">Matric</option> --}}
                            {{-- <option value="">Intermediate</option> --}}
                            {{-- <option value="">Graduate</option> --}}
                            {{-- <option value="">Not Studing</option> --}}
                            {{-- </select> --}}


                            {{-- </label> --}}
                            <!-- Email input -->
                            <label class="block  text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Email Address
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-blue form-input"
                                    placeholder="Jane Doe" type="email" name="email" />
                                @error('email')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <!-- Institute input -->
                            <label class="block text-sm mr-4 ml-2 mt-2 mb-2">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Institute
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-blue form-input"
                                    placeholder="IUB..." type="text" name="institude" />
                                @error('institude')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror

                            </label>
                            <!-- City Name -->
                            <label class="block text-sm mr-4 ml-2 mt-2 ">
                                <span class="text-gray-700 dark:text-gray-400">
                                    City
                                </span>
                                <input
                                    class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input"
                                    placeholder="Bahawalpur" name="city" />
                                @error('city')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror



                                        <x-visitor.text-input
                                            class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                            placeholder="Enter your father's phone" name="father_phone" type="text"
                                            id="father_phone" :value="old('father_phone')" required autofocus/>
                                    </x-visitor.input-label>
                                    <br>

                                    <!-- Phone No. -->
                                    <x-visitor.input-label class="" for="phone" :value="__('Phone')">


                            <label class="block text-sm mr-4 ml-2 mt-2 ">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Education
                                </span>
                                <select name="education"
                                    class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">

                                    <option value="Matric">Matric</option>
                                    <option value="FSc">FSc</option>
                                    <option value="Bacholar">Bacholar</option>
                                    <option value="Graduate">Graduate</option>
                                </select>
                                @error('education')
                                    <div class="text-red-600 p-2">{{ $message }}</div>
                                @enderror


                                        <select name="education" id="education"
                                                class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                            <option value="">Select Education</option>
                                            <option value="matric">Matriculation</option>
                                            <option value="inter">Intermediate</option>
                                            <option value="graduate">Graduation</option>
                                            <option value="masters">Masters</option>

                                        </select>
                                    </x-visitor.input-label>
                                    <br>
                                    <!-- Institute -->
                                    <x-visitor.input-label class="mt-4" for="institute" :value="__('Institute')">

                                        <x-visitor.text-input
                                            class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                            placeholder="Enter your institute" name="institute" type="text"
                                            id="institute"
                                            :value="old('institute')" required autofocus/>
                                    </x-visitor.input-label>
                                    <br>
                                    <!-- Marital Status -->
                                    <x-visitor.input-label for="marital_status" :value="__('Marital Status')">

                                        <select name="marital_status" id="marital_status"
                                                class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                            <option value="">Select Marital Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                    </x-visitor.input-label>
                                    <br>
                                    <!-- Role -->
                                    <x-visitor.input-label for="role" :value="__('Role')">

                                        <select name="role" id="role"
                                                class=" block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-red form-input">
                                            <option value="">Select Role</option>
                                            <option value="{{UserRoles::ADMIN->value}}">Admin</option>
                                            <option value="{{UserRoles::VISITOR->value}}">Visitor</option>
                                            <option value="{{UserRoles::STAFF->value}}">Student</option>
                                            <option value="{{UserRoles::STUDENT->value}}">Staff</option>
                                        </select>
                                    </x-visitor.input-label>
                                </div>
                                <!-- Email input -->
                                <x-visitor.input-label class="mt-4" for="email" :value="__('Email')">

                                    <x-visitor.text-input
                                        class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                        placeholder="Enter your email address" type="email" name="email" id="email"
                                        :value="old('email')" required autofocus/>

                                </x-visitor.input-label>

                                <div class="align-center mt-4">
                                    <!-- City Name -->
                                    <x-visitor.input-label class="" for="city" :value="__('City')">

                                        <x-visitor.text-input
                                            class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                            placeholder="Enter your city" name="city" id="city" :value="old('city')"
                                            required autofocus/>

                                    </x-visitor.input-label>
                                    <x-visitor.input-label class="" for="password" :value="__('Password')">

                                        <x-visitor.text-input
                                            class="border-blue-600dark:bg-gray-700 focus:border-blue-400 focus:shadow-outline-red form-input"
                                            placeholder="Enter your password" name="password" type="password" id="password" :value="old('password')"
                                            required autofocus/>

                                    </x-visitor.input-label>

                                </div>
                                <div class="py-4">
                                    <button type="submit"
                                            class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        Add User
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                View all Visitor
            </h4>
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>

                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Father's Name</th>
                                <th class="px-4 py-3">Father's Phone No.</th>
                                <th class="px-4 py-3">CNIC</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Phone No.</th>
                                <th class="px-4 py-3">Gender</th>
                                <th class="px-4 py-3">Interest</th>
                                <th class="px-4 py-3">Education</th>
                                <th class="px-4 py-3">Institute</th>
                                <th class="px-4 py-3">Age</th>
                                <th class="px-4 py-3">Marital Status</th>
                                {{-- <th class="px-4 py-3">Role</th> --}}
                                <th class="px-4 py-3">Actions</th>


                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            @foreach ($visitors as $visitor)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true">
                                                </div>
                                            </div>
                                            <div>

                                                <p class="font-semibold">{{ $visitor->name }}</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    @if ($visitor->role == 3)
                                                        Visitor
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->father_name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->father_phone }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->cnic }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->email }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->phone }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->gender }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->interest }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->education }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->institude }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->age }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $visitor->marital_status }}
                                    </td>



                                    <td class="px-4 py-3 text-sm">
                                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                            href="forms.html">
                                            <span class="ml-4 text-purple-600">Update</span>
                                        </a>
                                        <br>
                                        <br>

                                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                            href="forms.html">
                                            <span class="mr-4 text-red-700"><a
                                                    href="/dashboard/visitor/destroy/{{ $visitor->id }}">Delete</a></span>
                                        </a>
                                        {{--                                        <form action="{{ route('visitor.destroy',$visitor->id) }}" method="POST"> --}}
                                        {{--                                            @method('Delete') --}}
                                        {{--                                            @csrf --}}
                                        {{--                                            <button type="submit" class="btn">Delete Text</button> --}}
                                        {{--                                        </form> --}}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3">
                        Showing 21-30 of 100
                    </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center">
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Previous">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        1
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        2
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        3
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        4
                                    </button>
                                </li>
                                <li>
                                    <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        8
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                        9
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Next">
                                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                            <path
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>


        </div>
    </main>
@endsection
