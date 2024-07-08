@extends('app')

@section('title')
    Student Create
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Create Student</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <!-- sid -->
            <div class="mb-4">
                <label for="sid" class="block text-sm font-medium text-gray-700">Student ID</label>
                <input type="number" name="sid" id="sid"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('sid')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>
            <!-- Thai student Name -->
            <div class="mb-4">
                <label for="fname" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="fname" id="fname"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('fname')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- English program Name -->
            <div class="mb-4">
                <label for="lname" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="lname" id="lname"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('lname')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- radio -->
            <div class="mb-4">
                <label for="" class="block text-sm font-medium text-gray-700">Program</label>

                @foreach ($programs as $item)
                    <div class="flex gap-2">
                        <input type="radio" name="std_prg_id" value="{{ $item->id }}" />
                        <label
                            class="block text-sm font-medium text-gray-700">{{ $item->program_th . ' ' . $item->program_en }}</label>
                    </div>
                @endforeach

                @error('std_prg_id')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit"
                    class="bg-pink-400 hover:bg-pink-500
                         text-white font-semibold
                         py-2 px-4 rounded-md 
                         focus:outline-none 
                         focus:ring-2 focus:ring-pink-500 
                         focus:ring-opacity-50">Save
                </button>
            </div>
        </form>
    </div>
@endsection
