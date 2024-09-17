   <!--gallary-->
               <!-- breaking -->
               <div class="container con-height transform" id="tranformation">
                <br><br>
                <div class="display text-center animate-zoom-in">Transformation</div>
                <hr>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <marquee class="news-scroll" behavior="scroll" direction="left" >
                            @foreach($transformations as $transformation)
                                @if($transformation->image)
                                    <img class="offers" src="{{ asset('storage/' . $transformation->image) }}" alt="Transformation Image">
                                @endif
                            @endforeach 
                        </marquee>
                    </div>
                </div>
            </div>
            <!-- end breaking -->
         <!--endgallary-->