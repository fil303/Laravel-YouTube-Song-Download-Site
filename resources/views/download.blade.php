@extends('layouts.app')
@section('section')

		<div style="height: 700px" class="section">

		<div class="details">
					<hr>
					<h3>>>>>>> Download <<<<<<</h3>
					<hr>
				<div class="img"><iframe src="{{'//www.youtube.com/embed/'.$a->v}}" height="180px" width="50%" style="margin-left: 25% "></iframe></div>
				<!--  ditails_items DIV  -->
				<div class="ditails_items">
				<div style="width:130px;text-align:center">Title :</div><div> </div> <div style="margin-left: 15px;text-align:center"><strong>{{ $a->t }}</strong></div>
				</div>

				
			</div>
			<br><br><br><br><br><br><br><br>
			<div class="download">
				<div class="download_btn">
					<a href="#">Download Audio</a>
				</div>

				<br>

				<div class="download_btn">
					<a href="#">Download Video</a>
				</div>
			</div>
			<br><br>


		</div>


@stop

