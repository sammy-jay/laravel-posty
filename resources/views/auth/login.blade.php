@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 md:w-5/12 bg-white p-6 rounded-lg mt-16">
            <h1 class="font-semibold text-lg mb-6">Login</h1>

            @if(session('status'))
                 <div class="text-white my-2 px-4 py-2 rounded-lg font-medium w-full bg-red-500 my-2 text-base">{{ session('status') }}</div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
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
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2"/>
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
