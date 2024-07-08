@extends('app')

@section('title')
    Vaccines records
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
                <a href="{{ route('vaccine_records.create') }}"
                    class="mt-2 inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded-md">Add</a>
            </div>
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>First name</th>
                        <th>last neme</th>
                        <th>Vaccine</th>
                        <th>Vaccine Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vaccine_records as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->students->sid }}
                            </td>
                            <td>
                                {{ $item->students->fname }}
                            </td>
                            <td>
                                {{ $item->students->lname }}
                            </td>
                            <td>
                                {{ $item->vaccines->vaccine }}
                            </td>
                            <td>
                                {{ $item->vaccined_date }}
                            </td>

                            <td>
                                <form action="{{ route('vaccine_records.destroy', $item->id) }}" method="POST">
                                    <a class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500"
                                        href="{{ route('vaccine_records.show', $item->id) }}"><i
                                            class="fa-solid fa-list"></i> Show</a>
                                    <a class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500"
                                        href="{{ route('vaccine_records.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border rounded-lg px-2 bg-pink-400 hover:bg-pink-500"><i
                                            class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">
                {!! $vaccine_records->links() !!}
            </div>
        </div>
    @endsection
