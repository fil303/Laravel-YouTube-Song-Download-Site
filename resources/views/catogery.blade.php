@extends('layouts.app')
@section('section')
                <!--  SECTION DIV  -->
            <div style="height: 500px" class="section">
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