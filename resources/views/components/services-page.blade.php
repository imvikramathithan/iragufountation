<div class="container service-page">
        <div class="display text-center">Services</div>
        <hr>
            <div class="row">
                <div class="col">
                        <div class="service-card">
                            <div class="service-head">
                                <img src="{{asset('assets/img/arflogo.webp')}}" class="image-fluid service-image" alt="">
                                <ul class="service-list">
                                    <li><a href="{{route('services.student.handwriting')}}/{{url('#cursiwiz')}}">Cursiwiz</a></li>
                                    <li><a href="{{route('services.student.handwriting')}}/{{url('#uyirmei')}}">உயிர்மெய்</a></li>
                                    <li><a href="{{route('services.student.handwriting')}}/{{url('#calligraphy')}}">Calligraphy</a></li>
                                </ul>
                            </div>
                            <div class="service-body ">
                                <h3><b>Handwriting</b></h3>
                            </div>
                        </div>    
                </div>
                <div class="col">
                        <div class="service-card">
                            <div class="service-head">
                                <img src="{{asset('assets/img/FocusEng.webp')}}" class="image-fluid service-image" alt="" style="background-color: #ffffff">
                                <ul class="service-list">
                                    <li><a href="{{route('services.student')}}/{{url('#focuseng')}}">FocusEng</a></li>
                                </ul>
                            </div>
                            <div class="service-body">
                                <h3><b>English</b></h3>
                            </div>
                        </div>    
                </div>
                <div class="col">
                        <div class="service-card">
                            <div class="service-head">
                                <img src="{{asset('assets/img/liledison.webp')}}" class="image-fluid service-image" alt="">
                                <ul class="service-list">
                                   <li><a href="{{route('services.student')}}/{{url('#wings')}}">Wings (aeronautical)</a></li>                                                       
                                   <li><a href="{{route('services.student')}}">lit Edison (Coming soon..)</a></li>
                                </ul>
                            </div>
                            <div class="service-body">
                                <h3><b>Science</b></h3>
                            </div>
                        </div>    
                </div>
            </div>
        </div>
    </div>        