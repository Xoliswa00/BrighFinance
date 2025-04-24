@extends('layouts.Guest')

@section('content')
    
    <section data-bs-version="5.1" class="header2 cid-tFjzdWY4mW mbr-fullscreen mbr-parallax-background" id="header2-2">

            

            
         <div class="mbr-overlay" style="opacity: 0; background-color: rgb(255, 255, 255);"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Bring Brightness to your Finances</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">In a world filled with financial challenges and uncertainties, managing personal finances can often feel overwhelming. 
                            <br>
                            Many individuals struggle to keep track of their income, expenses, and long-term financial goals.</p>
                        <p class="mbr-text mbr-fonts-style display-7">Take charge of your finances and embark on a journey towards financial success.
                        <br>Start your financial adventure today and experience the power of having a dedicated companion that empowers you on your path to financial freedom.
                        <br>
                            <br></p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4"  href="{{ route('register') }}">{{ __('Sign Up Today!') }}</a></div>
                    </div>
                </div>
            </div>
    </section>
@endsection
