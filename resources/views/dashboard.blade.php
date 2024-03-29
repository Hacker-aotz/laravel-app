<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div>
    <div>
        <button type="button" class="btn btn-primary btn-outline-primary">
            <a href="{{route('student.index')}}"><i><strong>View Student Table</strong></i></a>
        </button>
    </div><br/>
    <div>
        <button type="button" class="btn btn-primary btn-outline-primary">
            <a href="{{route('student.create')}}"><i><strong>Create a Table</strong></i></a>
        </button>
    </div>
    {{-- <div>
        <button type="button" class="btn btn-primary btn-outline-primary">
            <a href="{{route('students.teacher-course')}}"><i><strong>Create a Table</strong></i></a>
        </button>
    </div> --}}
    {{-- <button><a href="{{route('student.create')}}">Create a Table</a></button> --}}
{{-- </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
