@extends('layouts.app')
@section('section')
                <!--  SECTION DIV  -->
            <div style="height: 500px" class="section">
                <hr>
                    <h3>>>>Hindi PlayList<<<</h3>
                <hr>

             
          
                    

              
                <!--  CATEGORY DIV  -->
                <div class="category">


                    @for ($i = 1; $i <= 4; $i++)
                        
                    

                    <div class="folder">
                        
                        <div><img src="{{ asset('/public/icon.jpg') }}" height= "18px" alt=""></div>
                        <div style="margin-left: 5px;"><a href="{{url('/hindi/playlist/item/'.$i)}}">Playlist {{$i}}</a></div>
                        
                    </div>

                   
                    @endfor
                   
                   

                </div>
            </div>
            
@stop