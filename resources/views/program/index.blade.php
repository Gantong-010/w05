@extends('app')

@section('title')
    Program
@endsection

@section('content')
    <div class="w-[80%] mx-auto mt-6">

        {{-- แสดงสำเร็จ --}}
        @if (session('success'))
            <div class="bg-pink-100 border border-pink-400 text-pink-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-100 border-b border-gray-200">
                @include('menu')
                <a href="{{ route('programs.create') }}"
                    class="mt-2 inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded-md">Add</a>
            </div>
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th>ID</th>
                        <th>Program TH</th>
                        <th>Program EN</th>
                        <th>Grad Year</th>
                        <th>Faculty TH</th>
                        <th>Faculty EN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->program_th }}
                            </td>
                            <td>
                                {{ $item->program_en }}
                            </td>
                            <td>
                            <div class="flex items-center justify-center h-full">
                                {{ $item->grad_year }}
                            </div>
                            </td>

                            <td>
                                {{ $item->faculties->faculty_th }}
                            </td>
                            <td>
                                {{ $item->faculties->faculty_en }}
                            </td>

                            <td>
                                <form action="{{ route('programs.destroy', $item->id) }}" method="POST">
                                    <a class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500" href="{{ route('programs.show', $item->id) }}"><i
                                            class="fa-solid fa-list"></i> Show</a>
                                    <a class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500" href="{{ route('programs.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">
                {!! $programs->links() !!}
            </div>
        </div>
    @endsection
