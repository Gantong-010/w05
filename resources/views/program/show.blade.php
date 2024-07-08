@extends('app')

@section('title')
   Program Show
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <a href="{{ route('programs.index') }}"
    class="mt-2 inline-block bg-pink-400 hover:bg-pink-500 text-white font-semibold py-2 px-4 rounded-md">back</a>
        <h2 class="text-xl font-semibold mb-4 mt-2">Show Program</h2>
            {{ $program->program_th }}
            {{ $program->program_en }}
            {{ $program->grad_year }}
            {{ $program->faculties->faculty_th }}
            {{ $program->faculties->faculty_en }}
    </div>
@endsection
