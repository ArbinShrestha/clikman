@extends('layouts.app')
@section('title','Clikman Home')
@section('content')
    <section class="c-banner ">
        @foreach($homeSetting as $homeSettings)
        <div class="placeholder" data-src="{{asset('uploads/featured/'.$homeSettings->Featured_Image)}}">
            <img class="blur" src="{{asset('/assets/dist/images/bg-extra-small.jpg')}}"/>
            <div style="padding-bottom: 66.6%;"></div>
            <noscript>
                <img src="{{asset('uploads/featured/'.$homeSettings->Featured_Image)}}"  />
            </noscript>
        </div>
        @endforeach
        <div class="lines hidden w-4/12 mx-auto z-20 absolute inset-0 border-l border-r opacity-25"></div>

        <div class="blocks top-96 lg:top-0  left-0 right-0 bottom-0 flex flex-col lg:flex-row absolute  z-10">
            <div class="block flex  flex-1">

                <div id="video-viewport">
                    <video autoplay controls loop muted>
                        <source src="https://jimmychin.com/wp-content/uploads/2016/09/jc.com_.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="block-text flex w-full justify-center items-center lg:items-end text-5xl lg:text-6xl xl:text-7xl text-white text-center font-fjalla uppercase">
                    <a href="#">Film</a>
                </div>
            </div>
            <div class="block flex justify-center relative border border-gray-700 flex-1">
                <div class="block-text flex w-full justify-center  items-center  lg:items-end  text-5xl lg:text-6xl xl:text-7xl text-white text-center  font-fjalla uppercase">
                    <a href="#">About</a>
                </div>
            </div>
            <div class="block flex relative flex-1">
                <div class="block-image">
                    <img src="{{asset('/assets/dist/images/bg-frame.jpg')}}" alt="frame"/>
                </div>
                <div class="block-text flex w-full justify-center  items-center lg:items-end  text-5xl lg:text-6xl xl:text-7xl text-white text-center font-fjalla uppercase">
                    <a href="#">Frames</a>
                </div>
            </div>
        </div>
    </section>
@endsection
