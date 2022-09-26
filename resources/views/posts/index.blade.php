@extends('layouts.app')

@section('content')
    <div class="flex justify-center flex-col mx-auto w-8/12">
        <div class=" bg-white p-6 rounded-lg mt-10 mb-4">
            <h1 class="font-semibold text-xl">Posts</h1>
        </div>
        <div class="bg-white p-6 rounded-lg">
            <h1 class="font-semibold text-lg mb-4">Create A New Post</h1>
            <form action="{{ route('posts') }}" method="post">
            @csrf
             <div class="mb-4">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" id="title" placeholder="Post title here"
                        class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('title')
                            border-red-300
                        @enderror"
                        value="{{ old('title') }}" />

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea type="body" name="body" id="body" rows="4" placeholder="Post body here"
                    class="bg-gray-100 border-2 w-full px-3 py-2 rounded-lg outline-gray-400 @error('body')
                            border-red-300
                        @enderror"
                    value="{{ old('body') }}"></textarea>

                @error('body')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Create
                    Post</button>
            </div>
        </form>
        </div>

        

    </div>
@endsection
