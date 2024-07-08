@extends('app')

@section('title')
    Vaccine Edit
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Edit Vaccine </h2>

        <form action="{{ route('vaccines.update', $vaccine->id) }}" method="POST">
            @csrf
            @method('Put')

            <!-- Thai Faculty Name -->
            <div class="mb-4">
                <label for="vaccine" class="block text-sm font-medium text-gray-700">Vaccine</label>
                <input value="{{ $vaccine->vaccine}}" type="text" name="vaccine" id="vaccine"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('vaccine')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>
            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit"
                    class="bg-pink-400 hover:bg-pink-500 text-white 
                    font-semibold py-2 px-4 rounded-md focus:outline-none 
                    focus:ring-2 focus:ring-pink-500 focus:ring-opacity-50">Save</button>
            </div>
        </form>
    </div>
@endsection
