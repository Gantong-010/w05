@extends('app')

@section('title')
    Vaccine record Create
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Create Vaccine record</h2>

        <form action="{{ route('vaccine_records.store') }}" method="POST">
            @csrf

            <!-- radio -->
            <div class="mb-4">
                <label for="faculty_th" class="block text-sm font-medium text-gray-700">Student</label>
                <select class="border" name="std_id" id="">
                    <option selected disabled>-- Select --</option>
                    @foreach ($students as $item)
                        <option value="{{ $item->id }}">{{ $item->fname . ' ' . $item->lname }}</option>
                    @endforeach
                </select>


                @error('prg_fac_id')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>


            <!-- radio -->
            <div class="mb-4">
                <label for="" class="block text-sm font-medium text-gray-700">Vaccine</label>

                @foreach ($vaccines as $item)
                    <div class="flex gap-2">
                        <input type="radio" name="vac_id" value="{{ $item->id }}" />
                        <label class="block text-sm font-medium text-gray-700">{{ $item->vaccine }}</label>
                    </div>
                @endforeach

                @error('vac_id')
                    {{-- ถ้าผิดจะแสดงเป็นสีชมพู --}}
                    <div class="mt-1 mb-1 font-bold text-pink-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- English program Name -->
            <div class="mb-4">
                <label for="vaccined_date" class="block text-sm font-medium text-gray-700">Vaccined date</label>
                <input type="date" name="vaccined_date" id="vaccined_date"
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('vaccined_date')
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
