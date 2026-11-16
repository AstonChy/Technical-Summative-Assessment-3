@extends('layouts.app')

@section('title', 'Welcome | Tasks for Today')

@section('content')
<section class="hero">
    <div>
        <p class="eyebrow">{{ today()->format('l, F j, Y') }}</p>
        <h1>Tasks for today, organized in one place.</h1>
        <p class="lead">Stay focused on the work scheduled for today. This page displays only tasks whose date matches today.</p>
        <div class="button-row"><a class="button primary" href="{{ route('tasks.index') }}">View all tasks</a><a class="button secondary" href="{{ route('profile') }}">View profile</a></div>
    </div>
    <div class="hero-card"><div class="hero-icon">✓</div><p class="eyebrow">Today</p><h2>{{ $tasks->count() }} {{ $tasks->count() === 1 ? 'task' : 'tasks' }}</h2><p>Your daily task list is loaded from the database using Eloquent.</p></div>
</section>
<section class="table-panel"><div class="table-meta"><h2>Today's tasks</h2><span class="count-pill">{{ $tasks->count() }} records</span></div><div class="task-list">
@forelse ($tasks as $task)
<div class="task-row"><div><span class="task-title">{{ $task->title }}</span><span class="task-status {{ str_replace(' ', '-', $task->status) }}">{{ ucfirst($task->status) }}</span></div><span class="muted">{{ $task->task_date->format('M j, Y') }}</span></div>
@empty
<div class="empty-state">There are no tasks scheduled for today.</div>
@endforelse
</div></section>
@endsection
