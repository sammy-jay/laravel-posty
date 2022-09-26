@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 md:w-5/12 bg-white p-6 rounded-lg mt-16">
            <h1 class="font-semibold text-lg mb-6">Register</h1>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('name')
                            border-red-300
                        @enderror"
                        value="{{ old('name') }}" />

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('username')
                            border-red-300
                        @enderror"
                        value="{{ old('username') }}" />

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('email')
                            border-red-300
                        @enderror"
                        value="{{ old('email') }}" />

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('password')
                            border-red-300
                        @enderror"
                        value="" />

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Password again"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400" value="" />
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
