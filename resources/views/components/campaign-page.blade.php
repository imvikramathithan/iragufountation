<link rel="stylesheet" href="{{asset('assets/css/csr.css')}}">
<div class="container campmain">
        <div class="campaign">
            <img src="{{asset('assets/img/Iragu_Foundation.webp')}}"alt="logo" class="campimg1">
            <img src="{{asset('assets/img/logo_text.jpg')}}"alt="logo" class="campimg2">
            <img src="{{asset('assets/img/arflogo.webp')}}"alt="logo" class="campimg3">
        </div><hr>
        <h1 class="display camptexthead text-center animate-zoom-in">Join Hands with Us</h1>
        <div class="camp">
            <a href="https://www.instagram.com/iragu_foundation?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fa-brands fa-square-instagram"></i>
                <p class="camtext lightfont">arf_acadamy</p>
            </a><br><br>
        </div>
        <div class="camp-container camp-bottom">
                    <div class="camp-column animate-slide-left" onclick="expandColumn(this)">
                        <h2>Uplift the society</h2>
                        <p class="lightfont">
                        Join us in our activity to develop our society through education!
                        Iragu is excited to announce a Free Education Camp aimed at providing
                        good educational learning opportunities to privileged students.
                        Handwriting is the key to education, and we believe that everyone
                        deserves access to quality learning resources regardless of their
                        socioeconomic. Attending our camp enriches the underprivileged through
                        your hearty contribution to the uplift of our society.
                        </p>
                    </div>
                    <div class="camp-column animate-slide-up" onclick="expandColumn(this)">
                        <h2>Through Social media</h2>
                        <p class="lightfont">
                        Social media is an immortal platform to build a helpi   ng hand community
                        for any social activity and widespread attention to develop helping
                        communities. To raise awareness in society about student education and
                        other activities. Through our social media subscribing , we raise
                        funds to develop the student’s education by conducting free camps in
                        rural villages and government schools, The subscribing funds are used
                        for many social activities for the student’s education.
                        </p>
                    </div>
                    <div class="camp-column animate-slide-right" onclick="expandColumn(this)">
                        <h2>Gift to loved ones</h2>
                        <p class="lightfont">
                        In the name of ARF Academy, Iragu Foundation conducts various
                        socio-activities in villages, including rural camps for handwriting
                        and communicative English. For many special occasions, the gift is the
                        precious memories of your loved ones. Gifting through helping is most
                        memorable to you and your beneficiary. In social media like Instagram
                        and YouTube ARF serve many handwriting video especially your sweet
                        names. Make a special occasion into precious memories.
                        </p>
                    </div>
        </div>

        <div class="row">
            <h1 class="display camptexthead text-center animate-zoom-in">Free Camps</h1>
            <br>
            <div class="col-md-6">
                <div id="carouselExampleDark" class="carousel slide">
                        <div class="carousel-indicators camp-indicators">
                            @foreach($imagePaths as $index => $imagePath)
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner camp-slide">
                            @foreach($imagePaths as $index => $imagePath)
                                <div class="carousel-item  {{ $index == 0 ? 'active' : '' }} camp-slide-img" data-bs-interval="{{ ($index % 3 + 1) * 2000 }}">
                                    <img src="{{ $imagePath }}" class="d-block w-100 campSlide-img" alt="Slide {{ $index + 1 }}">
                                    {{-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Slide {{ $index + 1 }} label</h5>
                                        <p>Some representative placeholder content for slide {{ $index + 1 }}.</p>
                                    </div> --}}
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev camp-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next camp-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="camp-donate">
                    <img src="{{asset('assets/img/arflogo.webp')}}" alt="arflogo" class="camp-logo" width="100px" >
                    <div class="camp-donate-icon" id="btndonate-camp">
                        <img src="{{asset('assets/img/icons/donate.png')}}" alt="" width="90px">
                        <h4><b>Donate</b></h4>
                    </div>
                    <div class="camp-donate-qr">
                        <img src="{{asset('assets/img/qr.png')}}" alt="" width="100px">
                    </div>
                </div>
                <div class="camp-place">
                    {{-- <h1>Place</h1>
                    <p>About the Event</p> --}}
                </div>
        </div>
        </div><br><br><br>

</div>
<script src="{{asset('assets/js/csr.js')}}"></script>
