@extends('app')

@section('title')
Faculty Create
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Create Faculty</h2>

        <form action="{{ route('faculties.store') }}" method="POST">
            @csrf

            <!-- Thai Faculty Name -->
            <div class="mb-4">
                <label for="faculty_th" class="block text-sm font-medium text-gray-700">Faculty TH</label>
                <input type="text" name="faculty_th" id="faculty_th"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('faculty_th')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- English Faculty Name -->
            <div class="mb-4">
                <label for="faculty_en" class="block text-sm font-medium text-gray-700">Faculty EN</label>
                <input type="text" name="faculty_en" id="faculty_en"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('faculty_en')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit"
                    class="bg-pink-400 hover:bg-pink-500  text-white 
                    font-semibold py-2 px-4 rounded-md 
                    focus:outline-none focus:ring-2 
                    focus:ring-pink-500 focus:ring-opacity-50">Save</button>
            </div>
        </form>
    </div>
@endsection
