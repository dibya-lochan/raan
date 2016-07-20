@extends('layouts.app')

@section('content')
<div class="container">

    
    @if (count($comments) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            {{$hotel->name}}
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Comments</th>
                <th>Date</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $comment->comments }}</div>
                            
                        </td>
                        <td class="table-text">
                            <div>{{ $comment->created_at }}</div>
                            
                        </td>
                        <td>
                            <!-- TODO: Delete Button -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div> <!-- /container -->
@endsection
