@extends('layouts.app')
@section('content')
<!-- School Setting -->
    <div class="sfm">
        <div class="sus sfm-top">
            <h1 class="display text-center sfm-color animate-zoom-in">Service for Management</h1>
            <hr> 
            <div class="container" id="settingupschool">
                <div class="sr-row ">
                    <div class="sr-col">
                        <div class="animate-slide-right">
                            <p class="qoutes">"Success doesn’t end with reaching the destination; It goes beyond.
                        What matters not merely is the journey but more on the quality of your journey."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-right   "  style="min-height: 120px;">From the conception of the idea to implementation and the successful execution of it,we provide you with an End-to-End support system throughout the course of setting up a new school. <span class="read-more animate__animated animate__fadeInUp">In case of an existing school, our team carries out details need-analysis to determine the gaps in existing school, and our team carries out detailed need analysis to determine the gaps in existing process and evaluate the system in place.  We suggest steps to help bridge these gaps; rate the existing system and introduce protocols and practies to improve overall functioning of the school to ensure capacity building in all respects. We provide the services like preparing business plans for school , Needs- Analysis and school development plan for existing school , academic audit, framing school policies and vision – mission statement , assistance in CBSE and ICSE and other services…. Check out our Brochure</span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','Setting_up_Schools.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="sr-col-2 mob-size " style="overflow: hidden">
                       <div class="animate-slide-left">
                         <p class="s-display  ">Setting up school</p>
                       </div>
                    </div>
                </div>
            </div>    
        </div> 
       <div class="cas sfm-main " id="curriculam">
        <div class="container"  >
            <div class="sr-row">
                <div class="sr-col-2  mob-size" >
                   <div class="animate-slide-right" style="overflow: hidden">
                     <p class="s-display  ">Curriculum and Support</p>
                   </div>
                </div>
                <div class="sr-col" style="overflow: hidden">
                    <div class="animate-slide-left">
                        <p class="qoutes">"Little Effort, Leap benefits, Life long Asset"</p>
                    <p class="sr-content lightfont paragraph sfm-bg-dark-left  ">
                        Our curriculum is structured, simple, practical, and playful for learners to master English. <span class="read-more animate__animated animate__fadeInUp"> These support structures not only aid in clarifying concepts but also foster a collaborative learning atmosphere where students can explore, experiment, and grow their expertise in various domains and fields. It should offer a balance between a theoretical foundation and a practical session as well as hands-on experience with real-time application. In crafting the curriculum for the schools, it is crucial to provide a structured progression starting with the fundamental concepts in basic things. The curriculum should also include modules on the enhancement of student knowledge and also induct, support, and strengthen the linguistic club. Our motto is To know, let’s listen, Let’s speak, Let’s read, and Let’s write. Especially for 1-8 is a stage for the fundamental growth to know the children who they are. “If all my possessions were taken from me with one exception, I would choose to keep the power of communication, for by it I would soon regain all the rest.”
                    </span>
                        <span class="show-more" onclick="showMore(this)">Read More</span>
                    </p>
                    <div class="s_btn">
                        <a href="{{url('assets/Management','Curriculum_and_Support.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <div class="rcm sfm-main " id="Recruitment">
            <div class="container"> 
                <div class="sr-row">
                    <div class="sr-col" style="overflow: hidden">
                        <div class="animate-slide-right">
                            <p class="qoutes">"People are not your most important asset. The right people are."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-right  ">
                            Recruitment and skills enhancement is one of the key service areas of Iragu Foundation.<span class="read-more animate__animated animate__fadeInUp"> We provide opportunities for potential employers and employees in the education sector to come together. Institutions can register with us to gain access to our select database of professional teachers and academic administrators across all levels in national and international streams of education. We provide placement for national and international board schools like CBSE, CISCE, State and IB, CIE & Edexcel in  India and Aboard. We recruit for academic and administrative roles (Directors, Principals, Administrators, Teachers). We also have experienced edu-professionals ( full-time & part-time)who can deliver international curriculums such as national and international level boards of schools. Procedurally recruitment is who can be valuable assets to educational institutions the various steps are followed to select employees' resumes, direct interviews, preliminary interviews, and sign contracts with us.
                            </span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','Recruitment.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="sr-col-2  mob-size" style="overflow: hidden">
                        <div class="animate-slide-left">
                            <p class="s-display  ">Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tad sfm-main " id="training">
            <div class="container" >
                <div class="sr-row ">
                    <div class="sr-col-2  mob-size" style="overflow: hidden">
                        <div class="animate-slide-right">
                            <p class="s-display   ">Training & Development</p>
                        </div>
                    </div>  
                    <div class="sr-col" style="overflow: hidden">
                        <div class="animate-slide-left">
                            <p class="qoutes">"What the best and wisest parent wants for his child that must the community want for all of its children."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-left   " style="min-height: 120px;"> In education, research has shown that teaching quality and school leadership are the most important factors in raising a student’s achievement.<span class="read-more animate__animated animate__fadeInUp">For teachers and school leaders to be as effective as possible, they need to continually expand their knowledge and skills to implement the best educational practices. Educators learn to help students learn at the highest levels. Our workshop is based on activity-based teaching and learning, assessment and evaluation, classroom management, collaborative learning, emotional intelligence, happy parenting, innovative pedagogy, life skills, livelihood skills, stress management, inclusive and inclusive strategies, etc… professional development is the only way educators can learn so that they can better their performance and raise student achievement. Our core areas of training and development are communication, teaching and learning, assessment and evaluation, leadership and team building, 
                            parenting and work balance.
                        </span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','Training_and_Development.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="std sfm-main " id="studio">
            <div class="container" >
                <div class="sr-row ">
                    <div class="sr-col" style="overflow: hidden"> 
                        <div class="animate-slide-right">
                            <p class="qoutes">"The field of creativity that exists within each individual is freed by moving out of ideas of wrongdoing or right doing."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-right  ">Strengthen your business with high-quality multimedia productions that will push your brand above the canopy. <span class="read-more animate__animated animate__fadeInUp">We offer an annual package to stay on the headlines frequently.  We pride ourselves in understanding and exceeding our client’s expectations, no matter the time or budget. We provide concept development, storyboard, casting, locations, camera and lighting crew, equipment, and comprehensive product management. Whether you need to launch your school, promote your brand, communicate your vision, or simply share your story, we are here to help you succeed. Our core areas of the studio are Ad films, Professional photo shoots, Graphic design, Digital marketing, Website development and maintenance, logos, Banners, Flyers, Invitations, Season greetings package designing, etc….. 
                    </span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','Studio.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="sr-col-2  mob-size" style="overflow: hidden">
                       <div class="animate-slide-left">
                         <p class="s-display ">Studio</p>
                       </div>
                    </div>  
                </div>
            </div>
        </div>
       <div class="em sfm-main " id="eventmanagement">
        <div class="container" >
            <div class="sr-row">
                <div class="sr-col-2  mob-size" style="overflow: hidden">
                    <div class="animate-slide-right">
                        <p class="s-display   ">Event Management</p>
                    </div>
                </div>  
                <div class="sr-col" style="overflow: hidden">
                    <div class="animate-slide-left">
                        <p class="qoutes">"Life is a collection of moments, and this event is  one of them."</p>
                    <p class="sr-content lightfont paragraph sfm-bg-dark-left ">

                        We help you organize events in the best way to exhibit the talents of your children and bring your school into the limelight of society. <span class="read-more animate__animated animate__fadeInUp">We have a team of professionals and leading choreographers representing the various styles of dance from Western (Hip-Hop, Salsa, Ballet, Contemporary styles, etc.) to classical (Bharatanatyam, Folk, Kathak, etc.). Planning an event with us. We handle all the logistics so you can relax and enjoy the experience. From venue selection to vendor coordination to on-site management, we take care of every detail, allowing you to focus on what matters most – creating memories with your guests. With our expert team by your side, you can rest assured that your event is in capable hands. When you choose Us, you're choosing professionalism at its peak. Our team comprises seasoned event planners who are experts on the table. We do have professional story writers to write value-based scripts for your drama and theatre artists to train them in drama& mime. Our core areas are Annual Day, Sports Day, Scholastics exhibitions, Book fair, Summer camps, Asian/India book of records, and Educational trips
                </span>
                        <span class="show-more" onclick="showMore(this)">Read More</span>
                    </p>
                    <div class="s_btn">
                        <a href="{{url('assets/Management','Event_Management.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <div class="gac sfm-main " id="guidance">
            <div class="container" >
                <div class="sr-row ">
                    <div class="sr-col" style="overflow: hidden">
                        <div class="animate-slide-right">
                            <p class="qoutes">"There are many who give advice, but few who offer guidance."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-right  "  style="min-height: 140px;">
                            At Iragu we stress guidance and counseling for educational institutions because the alarming complexity of modern society poses a variety of complicated problems leading to conflicts, frustration, unhealthy rivalry, etc.<span class="read-more animate__animated animate__fadeInUp">that result in a crisis and serious maladjustment among adolescent children. In these circumstances, it is essential to help and guide the youth to worthwhile channels through the introduction of guidance and counseling services on a universal scale in our educational institutions. The required guidance is school violence and vandalism, Lack of knowledge concerning the use of leisure time, pressure on traditional values and norms, Drug and alcohol abuse, the inability of individuals to make a realistic career, and changes in the structure of society. We focus on the areas of guidance in various domains like Educational, Vocational, Career, Social, Moral, and Health. On the other hand, we focus on the areas of counseling Crisis, Preventive, and Facilitative.
                        </span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','Guidance_and_Counselling.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="sr-col-2  mob-size" style="overflow: hidden">
                        <div class="animate-slide-left">
                            <p class="s-display   ">Guidance and Counselling</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="nlb sfm-main " id="nlbandalbe">
            <div class="container">
                <div class="sr-row ">
                    <div class="sr-col-2 " style="overflow: hidden">
                        <div class="animate-slide-right">
                            <p class="s-display    mob-size">NLP and ALBE</p>
                        </div>
                    </div>  
                    <div class="sr-col" style="overflow: hidden">
                        <div class="animate-slide-left">
                            <p class="qoutes">"NLP is an attitude and a methodology, not the trail of techniques it leaves behind."</p>
                        <p class="sr-content lightfont paragraph sfm-bg-dark-left  "> NLP- Neuro Linguistic Programming – A broad series of techniques for modeling and achieving success and excellence in every area of life.<span class="read-more animate__animated animate__fadeInUp"> It is the study of behavioral excellence. NLP has many areas of mainstream practice including psychotherapy and counseling, management, and sales training, sports performance, public and motivational speaking, business and life coaching as well as alternative and new-age thought. NLP is the study of how information is stored as it is received by the 5 senses and the imagination, and the meaning that is attached to it. By changing any of these elements, also called ‘re-framing’ we can change one’s experience of the world and more consciously shape reality in ways that are desired. This can best be recognized when dealing with fears. The object of fear and distress has been stored in a specific way in the mind and a particular meaning, rational or irrational has been attached to that experience. Using NLP techniques it is actually very simple to re-create a different experience around the object or situation allowing people to experience fearful objects and situations as though they never existed.
                        </span>
                            <span class="show-more" onclick="showMore(this)">Read More</span>
                        </p>
                        <div class="s_btn">
                            <a href="{{url('assets/Management','NLP_and_ABLE.pdf')}}" class="s-btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- School Setting -->
 <x-animate/>
 <script>
    //loader
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function () {
        loader.style.display = "none";
    });
 </script>
  <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>
@endsection