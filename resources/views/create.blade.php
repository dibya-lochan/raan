@extends('layouts.app')

@section('content')
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Create a Hotel</h3>
        </div>

        <form class="form-horizontal" action="{{ url('/admin/hotels/create_hotel') }}" method="post">
            {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name" value="">

                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                    <input name="description" type="text" placeholder="description" value="">

                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Create</button>

            </div>
        </form>
    </div>
    

</div> <!-- /container -->
@endsection
