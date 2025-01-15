<style>
.team-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Adjust spacing between items */
    justify-content: center;
    align-items: flex-start;
}



.team-container .team-item:nth-child(odd) {
    margin-top: 20px; /* Stagger odd rows */
}

@media (max-width: 480px) {
  
    .team-container .team-item:nth-child(odd) {
        margin-top: 5px; /* Adjust spacing */
    }

    .details {
        font-size: 10px; /* Smaller font for text */
    }
}




</style>
{{--Iragu Team--}}
<div class="container team-con ">
    <h1 class="display text-center animate-zoom-in">Our Team</h1><hr>
     <div class="row  team-row">
         <div class="col-md-4">
             <img class="teamlogo" src="{{asset('assets/img/Iragu_Foundation.webp')}}" alt="">
         </div>
         <div class="col-md-8 teams-col2">
            <div class="team-container">
                @foreach($teamMembers as $teamMember)
                    <div class="team-item">
                        @if($teamMember->image)
                        <img class="shape" src="{{ asset('storage/' . $teamMember->image) }}" alt="{{ $teamMember->name }}">
                        @else
                        <img class="shape" src="{{ asset('assets/img/default_image.jpg') }}" alt="Default Image">
                        @endif
                        <div class="details">
                            <div class="name">{{ $teamMember->name }}</div>
                        </div>
                    </div>
                    @endforeach
            </div>

          </div>
     </div>
 </div>
 {{--Iragu Team--}}