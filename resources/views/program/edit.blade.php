@extends('app')

@section('title')
    Program Edit
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Edit Program</h2>

        <form action="{{ route('programs.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')
           
            <!-- Thai program Name -->
            <div class="mb-4">
                <label for="program_th" class="block text-sm font-medium text-gray-700">Program Thai</label>
                <input type="text" name="program_th" id="program_th"
                value="{{ $program->program_th }}"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('program_th')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- English program Name -->
            <div class="mb-4">
                <label for="program_en" class="block text-sm font-medium text-gray-700">Program English</label>
                <input value="{{ $program->program_en }}" type="text" name="program_en" id="program_en"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('program_en')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Grad Year -->
            <div class="mb-4">
                <label for="grad_year" class="block text-sm font-medium text-gray-700">Grad</label>
                <input value="{{ $program->grad_year }}" type="number" name="grad_year" id="grad_year"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('grad_year')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Thai Faculty Name -->
            <div class="mb-4">
                <label for="faculty_th" class="block text-sm font-medium text-gray-700">Faculty Thai</label>

                    @foreach ($faculties as $item)
                    <div class="flex gap-2">
                    <input type="radio" name="prg_fac_id" value="{{ $item->id }}" {{ ($item->id == $program->prg_fac_id) ? 'checked' : '' }} />
                    <label
                        class="block text-sm font-medium text-gray-700">{{ $item->faculty_th . ' ' . $item->faculty_en }}</label>
                    </div>
                       
                  
                    @endforeach
                @error('prg_fac_id')
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