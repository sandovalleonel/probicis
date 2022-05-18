@extends('layouts.plantillaPadre')

@section('root')


    <!-- banner -->
    @include('complementos.banner',['seccion'=>'Videos'])
<!-- //banner -->


    <div class="container">
        <div class="row" >
        @foreach ($videos as $video)

                    <div class="col-md-8 col-xs-12 " style="margin: auto; width: 50%; ">
                        <br><br>
                        <label>{{$video->titulo}}</label>
                        <br>
            
                        <iframe style="display: inline-block" width="100%" height="250px" src="https://www.youtube.com/embed/{{$video->url}}"  allowfullscreen></iframe>
                        <p style="display: inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae reiciendis laboriosam explicabo tenetur molestias ea dignissimos quaerat. Odit asperiores modi provident amet doloremque repellat voluptatibus facilis nemo, tenetur odio facere.</p>
                    </div>


        
        @endforeach
        </div>
        
    </div>   
    <div>{!!$videos->links() !!}</div> 

@endsection