<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>		
		<x-partials.head :title="$title ?? ''"></x-partials.head>	
	</head>
	<body class="h-100vh bg-primary">
	<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="page">
			<div class="page-content">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-6">
                            <main>
                                {{$slot}}
                            </main>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{URL::asset('assets/images/system/landing/calendar.png')}}" alt="img">
						</div>
					</div>
				</div>
			</div>
		</div>
		@livewire('layouts.footer-scripts');
		
		@livewireScripts	
	</body>
</html>





