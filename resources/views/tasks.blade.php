<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('messages.task_new_task')
            </div>
            
            <!-- html form -->
            {{ Form::open(['url' => 'tasks', 'class' => 'form-horizontal']) }}
                <div class="form-group">
                    {{ Form::label('task', 'Task', ['class' => 'col-sm-3 control-label'] ) }}
                
                     <div class="col-sm-6">
                        {{ Form::text('name', $value = null, ['id' => 'task-name', 'class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        {{ Form::button('<i class="fa fa-plus">' . trans("messages.task_add_task") ,['type'=>'submit', 'class' => 'btn btn-default']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>

     <!-- Current Tasks -->
    @if (count($tasks)) 
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('messages.task_current_task')
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>@lang('messages.task_title')</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    {{ Form::open(['url' => 'tasks/' . $task->id ]) }}
                                        {{ method_field('DELETE') }}

                                        {{ Form::button('<i class="fa fa-trash"></i>' . trans("messages.task_delete_task"), ['type' => 'submit', 'class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
    <!-- TODO: Current Tasks -->


@endsection
