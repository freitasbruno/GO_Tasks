{!! Form::open(array('url' => 'new_task')) !!}
	{!! csrf_field() !!}
	<div class="input-group">
      <input type="text" class="form-control" name="name" placeholder="New Task">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus"></span></button>
      </span>
    </div><!-- /input-group -->
    <!--
	{!! Form::text('name', '', array('placeholder'=>'NEW GROUP', 'style'=>'float:left; width:80%; height:40px')) !!}
	{!! Form::submit('&#43;', array('style'=>'width:20%; height:40px')) !!}
	-->
{!! Form::close() !!}