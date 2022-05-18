@extends('layouts.plantillaPadre')

@section('root')
    <!-- banner -->
@include('complementos.banner',['seccion'=>'Nosotros'])
<!-- //banner -->


    <div class="container">
        <div class="row">
            <div style="padding-top: 10px; display: block; height: 400px; " class=" border">
                <div class="col-md-6 align-self-center">
                    <img src="https://www.openenglish.com/wp-content/uploads/2015/12/img-trabaja-01.jpg" alt="-" />
                </div>
                <div class="col-md-6 align-self-center" >
                    <label>Mision</label>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, dolor quo? Aut ipsam illum, cupiditate cum quod quasi, sapiente minima qui dolore nulla at soluta suscipit asperiores odio quisquam impedit?</p>
                </div>

            </div>
   
            <hr>
            <div style="padding-top: 10px; display: block; height: 400px; " class="">
                <div class="col-md-6">
                    <label>Vision</label>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, dolor quo? Aut ipsam illum, cupiditate cum quod quasi, sapiente minima qui dolore nulla at soluta suscipit asperiores odio quisquam impedit?</p>
                </div>
                <div class="col-md-6">
                    <img src="https://www.openenglish.com/wp-content/uploads/2015/12/img-trabaja-01.jpg" alt="-" />
                </div>

            </div>

 
            
        </div>
    </div>

@endsection