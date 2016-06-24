  <div class="btn-group btn-block groupBtn" id="{{ $group->id }}" role="group">
  	
	{!! Form::open(array('url' => 'edit_group', 'class' => 'editGroup')) !!}
		{!! csrf_field() !!}
		{!! Form::hidden('id', $group->id) !!}	
		<div class="input-group input-group-lg">
	      <input type="text" name="name" value="{{ $group->name }}" class="form-control">
	      <span class="input-group-btn">
	        <button class="btn btn-default btn-primary" type="submit">
	        	<span class="glyphicon glyphicon-ok small" aria-hidden="true"></span>
	        </button>
	      </span>
	    </div>
	{!! Form::close() !!}
  	
  	<a href="{{ URL::to('profile/' . $group->id) }}" class="btn btn-lg groupText">{{ $group->name }}</a>
  	<a href="{{ URL::to('delete_group/' . $group->id) }}" class="btn btn-lg groupBtnAddon pull-right">
  		<span class="glyphicon glyphicon-trash small" aria-hidden="true"></span>
  	</a>
  	<a class="btn btn-lg groupBtnAddon pull-right" onClick="editGroup('{{ $group->id }}')">
  		<span class="glyphicon glyphicon-pencil small" aria-hidden="true"></span>
  	</a>
</div>

		
