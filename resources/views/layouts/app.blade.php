<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <x-partials.head :title="$title ?? ''"></x-partials.head>		        
       @stack('css')
       <link rel="stylesheet" href="{{asset('./custom-plugins/instascan/style.css')}}">
    </head>
    <body class="app sidebar-mini gradient-menu">
       
       <!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>		
		<!--- End Global-loader-->
        <x-jet-banner />       
        <div class="page">
            <div class="page-main">
				@livewire('layouts.aside-menu')
				<div class="app-content main-content">
                    <div class="side-app">
                        <x-partials.header></x-partials.header>
                        @if (isset($header))
                            {{ $header }}
                        @endif 
                        
                            <main style='margin-top:2rem'>
                                {{$slot}} 
                            </main>                       

                        
                    </div>
                    
				</div><!-- end app-content-->
			</div>
            <div wire:loading style='background-color:#ffffff59' class="modal show" id="myModal" aria-modal="true" style="padding-right: 5px; display: block;">
                <div class="modal-dialog modal-dialog-centered text-center justify-content-center" role="document">
                    <img src="{{asset('assets/images/brand/logo.svg')}}" alt="logo">
                    <div class="dimmer active">
                        <div class="sk-cube-grid">
                            <div class="sk-cube sk-cube1"></div>
                            <div class="sk-cube sk-cube2"></div>
                            <div class="sk-cube sk-cube3"></div>
                            <div class="sk-cube sk-cube4"></div>
                            <div class="sk-cube sk-cube5"></div>
                            <div class="sk-cube sk-cube6"></div>
                            <div class="sk-cube sk-cube7"></div>
                            <div class="sk-cube sk-cube8"></div>
                            <div class="sk-cube sk-cube9"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            
                        @livewire('layouts.footer')
                        
        </div>
		@livewire('layouts.footer-scripts');        
        @stack('modals')      	
        @livewireScripts
    </body>
</html>
