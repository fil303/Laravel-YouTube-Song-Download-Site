@extends('layouts.app')
@section('section')


		<div style="height: 600px" class="section">


          	<div class="details">
					<hr>
					<h3>>>>>>>details<<<<<<</h3>
					<hr>
				<div class="img"><img src="{{ $a->them }}" height="180px" width="50%" alt=""></div>
				<!--  ditails_items DIV  -->
				<div class="ditails_items">
				<div style="width:130px;text-align:center">Title :</div><div> </div> <div style="margin-left: 15px;text-align:center"><strong>{{ $a->t }}</strong></div>
				</div>

				
			</div>
			<br><br><br><br><br><br><br>
			<div class="download">
				<div class="download_btn">
					<a href="{{ url('/download/'.$a->cat.'/item/'.$a->id) }}">Go To Download Page</a>
				</div>
			</div>
			<br><br>
         
         </div>   
@stop






