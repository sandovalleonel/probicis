@extends('layouts.plantillaPadre')
@section('root')
    @include('complementos.banner',['seccion'=>'bicicletas'])
    <!-- product-nav -->
    <br>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                @include('complementos.menuHorizontal')
            </div>
            <div class="col-md-9 ">
                
   

<div class="container-fluid">
    
    <div class="sap_tabs">
        <div id="productos" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">

                <li class="resp-tab-item"  ><span>Todas las categorias</span></li> 

            </ul>				  	 
            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-n">

                 @include('complementos.cardProducto')
                 @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                </div>
            </div>	
        </div>
    </div>
</div>





    

<div class="product-easy">
	<div class="container-fluid">

		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Ultimos modelos</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>En oferta</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Especiales</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">

					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
						

					</div>

					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
						
                        
					</div>	

                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">

						

                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')
                        @include('complementos.cardProducto')

   
					</div>



				</div>	
			</div>
		</div>
	</div>
</div>


</div>
</div>
</div>
<!-- //product-nav -->




@endsection

@section('js')
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
                    $(document).ready(function () {
                        $('#productos').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                    
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
    
</script>
@endsection