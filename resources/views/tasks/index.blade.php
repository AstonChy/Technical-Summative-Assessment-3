@extends('layouts.app')

@section('title', 'Task List | Tasks for Today')

@section('content')
<section class="page-heading compact"><p class="eyebrow">Task management</p><h1>Complete task list</h1><p class="lead">Every seeded task, retrieved through the <code>Task</code> Eloquent model and ordered by date.</p></section>
<section class="table-panel"><div class="table-meta"><h2>All tasks</h2><span class="count-pill">{{ $tasks->count() }} records</span></div><div class="table-wrap"><table><thead><tr><th>ID</th><th>Task</th><th>Status</th><th>Task date</th></tr></thead><tbody>
@foreach ($tasks as $task)
<tr><td class="muted">{{ $task->id }}</td><td class="strong">{{ $task->title }}</td><td><span class="task-status {{ str_replace(' ', '-', $task->status) }}">{{ ucfirst($task->status) }}</span></td><td>{{ $task->task_date->format('F j, Y') }}</td></tr>
@endforeach
</tbody></table></div></section>
@endsection
