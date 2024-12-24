@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">Create a new task</a>
    </nav>
    @forelse ($tasks as $task)
        <div>
            <a
            href="{{ route('tasks.show', ['task' => $task->id]) }}"
            @class(['line-through' => $task->completed])>
            {{ $task->title }}

            </a>
        </div>
        @empty
            <p>No tasks yet</p>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">{{ $tasks->links() }}</nav>
    @endif
@endsection
