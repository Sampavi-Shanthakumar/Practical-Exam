@extends('layouts.app')

@section('content')

<div class="container">
<div class="event"> 

    <div class="header_one">
            <div class="svgelement">
                <svg  width="400" height="100">
                    <g>
                        <rect x="0" y="0"  rx="10" ry="10" class="rect_one"/>
                        <rect x="20" y="20" rx="10" ry="10" class="rect_two"/>
                        <text  x="20" y="50" class="svgText">POPULAR GROUPS</text>
                    </g>
                </svg>
                     <span class="subText">UPCOMING EVENTS</span>
            </div>
    </div>

           
           
   
    <div class="tab1cards">
	<div class="cardView">
		<div class="imgBox">
			<img src="{{ URL::to('/assets/img/first_image.jpg') }}">
		</div>
		<div class="details">
			<div class="textContent">
				<h4>LKR 2000</h4>
				
			</div>
			<ul>
				<h4>Beach Cleanup With Friends Organized by Habitat Friends</h4>
			</ul>
			<ul>
				<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 3th August
			</ul>
			<ul>
				<i class="fa fa-clock"></i>&nbsp 4pm-6pm
			</ul>
			<ul>
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp 12 Seats
			</ul>
			<button>Let's Go</button>
		</div>

		
	</div>
	<div class="cardView">
		<div class="imgBox">
			<img src="{{ URL::to('/assets/img/second_image.jpg') }}">
		</div>
		<div class="details">
			<div class="textContent">
				<h4>Free</h4>
				
			</div>
			<ul>
				<h4>Beach Cleanup With Friends Organized by Habitat Friends</h4>
			</ul>
			<ul>
				<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 3th August
			</ul>
			<ul>
				<i class="fa fa-clock"></i>&nbsp 4pm-6pm
			</ul>
			<ul>
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp 12 Seats
			</ul>
			<button>Let's Go</button>
		</div>

		
	</div>
	<div class="cardView">
		<div class="imgBox">
			<img src="{{ URL::to('/assets/img/first_image.jpg') }}">
		</div>
		<div class="details">
			<div class="textContent">
				<h4>LKR 2000</h4>
				
			</div>
			<ul>
				<h4>Beach Cleanup With Friends Organized by Habitat Friends</h4>
			</ul>
			<ul>
				<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 3th August
			</ul>
			<ul>
				<i class="fa fa-clock"></i>&nbsp 4pm-6pm
			</ul>
			<ul>
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp 12 Seats
			</ul>
			<button>Let's Go</button>
		</div>

		
	</div>
	<div class="cardView">
		<div class="imgBox">
			<img src="{{ URL::to('/assets/img/second_image.jpg') }}">
		</div>
		<div class="details">
			<div class="textContent">
				<h4>Free</h4>
				
			</div>
			<ul>
				<h4>Beach Cleanup With Friends Organized by Habitat Friends</h4>
			</ul>
			<ul>
				<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 3th August
			</ul>
			<ul>
				<i class="fa fa-clock"></i>&nbsp 4pm-6pm
			</ul>
			<ul>
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp 12 Seats
			</ul>
			<button>Let's Go</button>
		</div>

		

    </div>      
          
    </div>
</div>
@endsection
