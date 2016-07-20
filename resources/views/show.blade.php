@extends('layouts.app')

@section('content')
<div class="container">

    
    @if (count($hotels) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Hotel Lists
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Hotels</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($hotels as $hotel)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            
                            <div><a href='{{ url("/comment/$hotel->id") }}'>&larr; {{ $hotel->name }}</a></div>
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
