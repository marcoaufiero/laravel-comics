<div class="bg-black">
   
    <div class="container">
        <span class="series-label">CURRENT SERIES</span>
        <div class="comics-box">
            @foreach ($comics as $elem)
                
                    <div class="card">
                        <a href="/">
                            <div class="img-box">
                                <img src="{{$elem['thumb']}}" alt="">
                            </div>
                            <h5>{{strtoupper($elem['series'])}}</h5>
                        </a>
                        
                    </div>   
                           
            @endforeach
        </div>
    </div>
    <div class="load-more">
        <span class="load-more-btn">LOAD MORE</span>
    </div>
</div>