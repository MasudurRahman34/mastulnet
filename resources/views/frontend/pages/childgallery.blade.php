@extends('frontend.layouts.master')

@section('content')
<div class="our_courses bg_grey">
	<div class="container">
		<div class="row dis_table">
			@foreach ($courseitems as $courseitem)
			<div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
				<div class="our_course_item border_rad_5">
					<a href="{!! route('singlecourse.show', $courseitem->slug) !!}">
						<img src="{{ asset('images/courseimage/'.$courseitem->imagefile) }}" alt="course">
					</a>
					<div class="caption">

						<h3 class="bold font_s_20">{{$courseitem->course_name}}</h3>
						<p>{{$courseitem->title}}</p>
						<p>{{$courseitem->description}}</p>
						<a href="{{ route('singlecourse.show', $courseitem->slug) }}"><i class="icofont-rounded-right"></i> waitng 204 days</a>
					</div>
				</div>

			</div>
			@endforeach
			<div align="center"> {{ $courseitems->links() }}</div>
		</div>
	</div>
</div>
<div class="sponsor_work ">
	<div class="container">
		<h1 class="lgt text-center">Sponsor Contribution</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width_599">
				<a href="#">
					<div class="howsponsor border_rad_5">
						<img src="images/how child sponsorship work wagon.jpg" alt="img">
						<div class="article_details bg_white">
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="child_development bg_grey">
	<div class="container">
		<h1 class="lgt text-center">WE Also Provide Child Devolopment Program</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;">
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/Health-and-Hygine-of-Child-MASTUL-Foundation-1-300x200.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">Hygiene Practice & Training</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;">
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/M-r-Rana-Photography-508-300x200.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">Medicle Checkups</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;" >
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/Muntaha-is-drawing-1-300x200.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">Child Development Program</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;">
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/M-r-Rana-Photography-1171-300x200.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">Nutritions Food</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;">
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/education Assistance.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">education Assistance</h3>
						</div>
					</div>
				</a>
			</div> 
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599" style="padding-top:25px;">
				<a href="#">
					<div class="child_development_article border_rad_5">
						<img src="images/safe_drinking_Water.jpg" alt="img">
						<div class="child_development_article_details bg_white">
							<h3 class="font_s_20">Safe Drinking Water</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="sponsor_notification">
	<div class="container bg_grey">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="sponsor_child_details_img">
					<img src="images/M-r-Rana-Photography-1470-300x275.jpg">
				</div>

				<div class="sponsor_child_details bg_grey">
					<h1>What Will You Get By Sponring a Child </h1>
					<div class="sponsor_child_details_list"> 
						<ul class="list-group">
							<li  class="list-group-item">Childs full details</li>
							<li class="list-group-item">Childs full details</li>
							<li class="list-group-item">Childs full details</li>
							<li class="list-group-item">Childs full details</li>
							<li class="list-group-item">Childs full details</li>
							<li class="list-group-item">Childs full details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sponsor_work ">
	<div class="container">
		<h1 class="lgt text-center">FAQ About Child Sponsor</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width_599">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What is our child sponsorship program?
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								This program provides quality education sponsorship for underprivileged children from poorest family and they are studying from play to 5 in different schools. These children are good at the study but struggling for the educational support which is very needed to continue their study. Some of them want to be a doctor, engineer and other wants to do something for society. They are growing with the chain of poverty as their parents are working as a daily laborer, hawker, small vendors and rickshaw/van puller.

								This program will allow these children to study well and to be self-reliant to earn for their family in future and achieve their goals or dream.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What is the mission of this program ?
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								Our mission of child sponsorship and development program is to support a child until he/she become self-reliant, skilled and efficient to stand on his/her own under the umbrella of personal, organizational or government support. It means supporting financially for education, health, and economic security. With this program, an individual can contribute to the development of community people in addition to helping a child.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									How can I get started by Choosing Child
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								You can read a child simply visiting our website (www.mastulfoundation.org/sposnor-a-child ). As there are many child profiles updated in our website with child’s information, photo, says and story. You can also search for a child by age, class and birth date. We ensure you that our every child is in need as most of them lives in the same community.

								If you don’t have any choose or you are unable to choose any specific child we request you to contact with our sponsorship dept. (+8801730 48 22 79). We will meet you and show the profile of child we preferred for you.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What a sponsor will Recieve?
								</button>
							</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							<div class="card-body">
								A copy of signing the paper for Child Sponsorship.
								Childs details
								Thank you card from Child
								Quarterly you will get an envelope along with the below-described documents.

								Child’s letter / Drawing.
								Greetings card.
								Wish card/hand printing
								Program’s monthly report / Newsletter
								You will be receiving the first envelope of this program within 2/3 weeks after beginning your sponsorship.

								If you don’t have any choose or you are unable to choose any specific child we request you to contact with our sponsorship dept. (+8801730 48 22 79). We will meet you and show the profile of child we preferred for you.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How your Money Will be spent?
								</button>
							</h2>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
							<div class="card-body">
								Dear Sir/Madam, when you are sponsoring through MASTUL Foundation, you are lending a hand of humanity for underprivileged children.

Your monthly contribution BDT 1000 or USD 13 is enabling them to continue their education and other basic needs.

As the sponsor, you care able to see how this money is being used in details. That will be spent for school dress, shoes, books, tuition fees, school supplies, educational equipment’s nutritious foods program, child development, cultural training and hygiene program. 
							</div>
						</div>
					</div>
					<div class="card">

						<div class="card-header" id="headingSix">
							
							<h2 class="mb-0" style=" ">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How to get Involved With Child Sponsorship?
								</button>
							</h2>
							
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
							<div class="card-body">
								Our direct cost to sponsor a child is BDT 1000 or USD 13, who lives with their family. Each of them has a dream to study, but the chain of poverty does not give the opportunity to study them. Their family does not have the necessary support to send their children to school. We ask you to contribute to our CSP program with an amount of BDT 1000 or USD 13 monthly.

MASTUL Foundation also requires a non-refundable USD 39 (BDT 3,000) Transition Deposit at the beginning of each new sponsorship.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection