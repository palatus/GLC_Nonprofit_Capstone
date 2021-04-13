@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, @if(Auth::user() != null) {{Auth::user()->name}} @else hello @endif</div>

                <div class="panel-body">
                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
					@endif

					<div class='text-center'>
						<div>You are logged in!</div>
						<div>
							<button id='continue' type="button" class="mtoph mbottomh btn btn-success">Enter</button>
						</div>
					</div>

				</div>
            </div>
        </div>
    </div>
</div>

<script>

            $(document).on('click', '#continue', function () {
            	
                window.location = '/events';
                
            });
            
</script>

@endsection
