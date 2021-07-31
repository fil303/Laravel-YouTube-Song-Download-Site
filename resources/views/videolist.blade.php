@extends('layouts.app')
@section('section')


		<div class="section">

			  @foreach ($a as $a)
                    <div class="items">
                        <div><img src="{{ $a->them }}" height= "45px" width="60px"></div><div style="margin-left: 1% "><a href="{{ url('/'.$a->cat.'/song/item/'.$a->id) }}">{{ $a->t }}</a></div>
                    </div> 
                @endforeach

		</div>


@stop