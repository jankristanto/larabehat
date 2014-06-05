
	<h1>Sign the Guest Book!</h1>
	@if(Session::has('flash_message'))
		<div>
			<p>{{Session::get('flash_message')}}</p>
		</div>
	@endif
	{{Form::open(array('url' => 'guests'))}}
	<div>
		{{Form::label('name','Your Name:')}}
		{{Form::text('name')}}	
	</div>
	<div>
		{{Form::label('message','Your Message:')}}
		{{Form::text('message')}}	
	</div>
	<div>{{Form::submit('Submit')}}</div>

	{{Form::close()}}