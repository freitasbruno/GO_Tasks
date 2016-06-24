{!! Form::open(array('url' => 'new_group')) !!}
	{!! csrf_field() !!}	
	<div class="input-group input-group-lg">
      <input type="text" name="name" class="form-control" placeholder="New Group...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
        	<span class="glyphicon glyphicon-plus small" aria-hidden="true"></span>
        </button>
      </span>
    </div>
{!! Form::close() !!}