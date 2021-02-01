<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coming Soon - Adaptive Digital Source</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body class="coming-soon-banner">
	<div id="app">
		<div class="container-fluid p-0">
			<div class="container text-white">
				<div class="row">
					<div class="col-md-6 mx-auto mt-5 pt-5">
						@if ($errors->any())
			                <div class="alert alert-danger mb-1">
			                    @foreach ($errors->all() as $error)
			                        <label class="control-label mb-0">{{ $error }}</label><br/>
			                    @endforeach
			                </div>
			            @elseif (session()->has('message') && session()->get('message') != "")
			                <div class="alert alert-{{ session()->get('status') }} mb-1">
			                    <label class="control-label mb-0">{{ session()->get('message') }}</label>
			                </div>
			            @endif
						<h1 class="text-center">Adaptive Digital Source</h1>
						<p class="mb-4 mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis dui aliquam, facilisis tortor nec, lobortis ipsum. Mauris velit turpis, egestas ac mauris vel, sodales faucibus sapien. In eleifend odio vitae risus posuere, et egestas sem cursus. Etiam porttitor vel eros eu vehicula. Proin eu tincidunt ante. Maecenas scelerisque est a sollicitudin elementum.
						</p>
						<form class="form" method="post" action="{{ route('store-coming-soon-page') }}">
							<div class="form-group">
								<label class="control-label">Full Name</label>
								<input type="text" name="fullname" class="form-control" autocomplete="off" />
							</div>
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="text" name="email" class="form-control" autocomplete="off" />
							</div>
							<div class="form-group">
								<div class="form-check">
							  		<input class="form-check-input" type="checkbox" value="1" name="status" id="check-agreement">
								  	<label class="form-check-label" for="check-agreement">Agreement</label>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-md btn-primary w-100">Submit <span class="fa fa-send"></span></button>
								<input type="hidden" name="_token" value="{{ csrf_token() }}" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>