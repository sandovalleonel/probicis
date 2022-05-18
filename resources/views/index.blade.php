@extends('layouts.plantillaPadre')

@section('css')
    <link href="{{ asset('css/carrusel.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('js')
    <script src="{{ asset('js/carrusel.js') }}"></script>
@endsection

@section('root')

    @include('complementos.carrusel')
    
<div class="new_arrivals">
	<div class="container">
		<h3><span>Nuevo Prductos </span>Promoción</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class=" ">

            <div style="display: block" >
                <div class="col-md-4 new-gd-left">
                    <img src="images/scott.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                    </div>
                </div>
                <div class="col-md-4 new-gd-middle">
                    <div class="new-levis">
                        <div class="mid-img">
                            <img src="images/logo1.png" alt=" " />
                        </div>
                        <div class="mid-text">
                            <h4>Descuento del 40% <span> Por esta semana</span></h4>
        
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                <div class="col-md-4 new-gd-left">
                    <img src="images/scott.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                    </div>
                </div>
            </div>
			
		</div>
   
	</div>
</div>
<div class="new_arrivals">
	<div class="container">
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class=" ">

            <div style="display: block" >
                <div class="col-md-4 new-gd-left">
                    <img src="images/scott.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                    </div>
                </div>
                <div class="col-md-4 new-gd-middle">
                    <div class="new-levis">
                        <div class="mid-img">
                            <img src="images/logo1.png" alt=" " />
                        </div>
                        <div class="mid-text">
                            <h4>Descuento del 40% <span> Por esta semana</span></h4>
        
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                <div class="col-md-4 new-gd-left">
                    <img src="images/scott.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                    </div>
                </div>
            </div>
 
		</div>
   
	</div>
</div>
<!-- //content -->


@include('complementos.card2')

@endsection