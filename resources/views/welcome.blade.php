@extends("template")

@section("content")
<div class="contentwrap">
    @foreach($photos->shuffle() as $photo)  
        <div>
        <img src="{{$photo->url}}">
        <h2 class="phototitre">{{ $photo->titre }}</h2>
        <p> Tags : </p>
        @foreach($photo->tags as $tag)
            <a href="/explorer/tags/{{$tag->id}}">{{$tag->nom}}</a>
        @endforeach
        </div>
<<<<<<< HEAD
        
        <div class=albumJ>
            <h3>Photos du jour</h3>
            <div class="lscarte">
                <div href="carte">
                    
                </div>
            </div>
        </div>


        <div class=albumJ>
            <h3>Tout les albums</h3>
            <div class="lscarte">
                <div href="carte">
                    
                </div>
            </div>
        </div>
        
    </div>
</main>

=======
    @endforeach
</div>
>>>>>>> e2756e6293ccf1e2648a85eeff926ebfec3b2bc2
@endsection