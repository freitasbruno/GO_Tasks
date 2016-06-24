<div class="input-group input-group-lg" id="{{ $item->id }}">
	
	@if($item->task[0]->complete)
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit" onclick='window.location.href = "{{URL::to('toggle_task/' . $item->task[0]->id)}}"'>
				<span class="glyphicon glyphicon-plus small" aria-hidden="true"></span>
			</button>
		</span>
		<input type="text" name="name" class="form-control strikethrough" value="{{ $item->name }}" disabled>
	@else
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit" onclick='window.location.href = "{{URL::to('toggle_task/' . $item->task[0]->id)}}"'>
				<span class="glyphicon glyphicon-ok small" aria-hidden="true"></span>
			</button>
		</span>
		<input type="text" name="name" class="form-control" value="{{ $item->name }}">
		
	@endif
	<span class="input-group-btn">
		<button class="btn btn-default" type="submit" onclick='window.location.href = "{{URL::to('delete_task/' . $item->id)}}"'>
			<span class="glyphicon glyphicon-trash small" aria-hidden="true"></span>
		</button>
	</span>
</div>