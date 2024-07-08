@extends('app')

@section('title')
Faculty Show
@endsection

@section('content')
    <div class="max-w-2xl mx-auto mt-6 shadow-md p-6 bg-white rounded-lg">
        <a href="{{ url('/faculties') }}"
    class="mt-2 inline-block bg-pink-400 hover:bg-pink-500 text-white font-semibold py-2 px-4 rounded-md">back</a>
        <h2 class="text-xl font-semibold mb-4 mt-4">Show Faculty</h2>
            {{ $faculty->faculty_th }}
            {{ $faculty->faculty_en }}
    </div>
@endsection
