@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			
				<form method = "post" action = "">
					{{ csrf_field() }}
			
					naslov:
						<input type = "text" name = "title" /><br/><br/>
					sadržaj:
						<textarea name = "content"></textarea><br/><br/>
			
					<input type = "submit" value = "Spremi" />
		
				</form>
		</div>
    </div>
</div>

@endsection