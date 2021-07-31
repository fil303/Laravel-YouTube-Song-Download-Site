@extends('layouts.app')
@section('section')
                <!--  SECTION DIV  -->
            <div class="section">
                <hr>
                    <h3>>>>>>>Updata Song List<<<<<<</h3>
                <hr>

                <!--  LETEST DIV  -->
            <div class="letest"></div> 


                @foreach ($data as $a)
                    <div class="items">
                        <div><img src="{{ $a->them }}" height= "45px" width="60px"></div><div style="margin-left: 1% "><a href="{{ url('/update/song/item/'.$a->id) }}">{{ $a->t }}</a></div>
                    </div> 
                @endforeach

                {{ $data->links() }}

                 
               
                    
  
                   
                    

                <hr>
                    <h3>>>>>>>>Categorys<<<<<<<</h3>
                <hr>
                <!--  CATEGORY DIV  -->
                <div class="category">

                    <div class="folder">
                        
                        <div><img src="{{ asset('/public/icon.jpg') }}" height= "18px" alt=""></div>
                        <div style="margin-left: 5px;"><a href="{{ route('hindi') }}">Hindi Song</a></div>
                        
                    </div>

                    <div class="folder">
                        
                        <div><img src="{{ asset('/public/icon.jpg') }}" height= "18px" alt=""></div>
                        <div style="margin-left: 5px;"><a href="{{ route('bangla') }}">Bangla Song</a></div>
                        
                    </div>

                    <div class="folder">
                        
                        <div><img src="{{ asset('/public/icon.jpg') }}" height= "18px" alt=""></div>
                        <div style="margin-left: 5px;"><a href="{{ route('english') }}">English Song</a></div>
                        
                    </div>
                   

                </div>
            </div>
            
@stop