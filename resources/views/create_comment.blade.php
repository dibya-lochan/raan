@extends('layouts.app')

@section('content')
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Create comment for hotel '{{$hotel->name}}'</h3>
        </div>

        <form class="form-horizontal" action='{{ url("/post_hotel_comments") }}' method="post">
            {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label">Comments</label>
                <div class="controls">
                    <input name="comment" type="text"  placeholder="Name" value="">
                    <input name="hotelid" type="hidden"  placeholder="Name" value="{{$hotel->id}}">
                </div>
            </div>
            

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Create</button>

            </div>
        </form>
    </div>
    

</div> <!-- /container -->
@endsection
