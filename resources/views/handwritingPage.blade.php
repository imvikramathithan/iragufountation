@extends('layouts.app')
@section('content')
      <x-slider/>
    <div class="container">
      <div class="sr-row">
                    <div class="sr-col-2">
                        <img class="sfshlogo"  src="{{asset('assets/img/logoletter-removebg-preview.png')}}" alt=""/>
                    </div>
                    <div class="sr-col sfsh-col">
                      <h4 class="sub-head">Why handwriting is important ?</h4>
                        <p class="lightfont  sfsh-p"> <img class="logo-point" src="{{asset('assets/img/logoletter-removebg-preview.png')}}" alt="" srcset=""> Handwriting is an simple and unique skills for both children and adults. Handwriting skills activates the brain more than typing skills because it involves more complex cognitive skills. It also contribute reading fluency its operate visual representation of letters. We can predict a success for children who have good handwriting skills has a positive impact on grades.
                        </p>
                    </div>
      </div>
    </div>  
        <div class="badge-quates">
          <div class="badge-col">
            <img src="{{asset('assets/img/badge.webp')}}" alt="" class="badge-img">
          </div>
          <div class="badge-col text-badge">" Our Result Speaks Louder Than We Do "</div>
        </div>
<div class="container">
  <div class="unique-arrow unique-tech-hide">
       <svg width="249" height="24" viewBox="0 0 249 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow upleft">
          <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807612 11.0711 0.807612 10.4853 1.3934L0.93934 10.9393ZM233 12C233 16.4183 236.582 20 241 20C245.418 20 249 16.4183 249 12C249 7.58174 245.418 4.00002 241 4.00002C236.582 4.00002 233 7.58174 233 12ZM2 13.5L241 13.5L241 10.5L2 10.5L2 13.5Z" fill="#847D7D"/>
        </svg>
        <svg width="200" height="53" viewBox="0 0 231 53" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow downleft">
              <path d="M0.93934 39.9393C0.353553 40.5251 0.353553 41.4749 0.93934 42.0607L10.4853 51.6066C11.0711 52.1924 12.0208 52.1924 12.6066 51.6066C13.1924 51.0208 13.1924 50.0711 12.6066 49.4853L4.12132 41L12.6066 32.5147C13.1924 31.9289 13.1924 30.9792 12.6066 30.3934C12.0208 29.8076 11.0711 29.8076 10.4853 30.3934L0.93934 39.9393ZM215 8C215 12.4183 218.582 16 223 16C227.418 16 231 12.4183 231 8C231 3.58172 227.418 0 223 0C218.582 0 215 3.58172 215 8ZM182.074 41V42.5H182.603L183.016 42.1677L182.074 41ZM2 42.5H182.074V39.5H2V42.5ZM183.016 42.1677L223.942 9.16769L222.058 6.83231L181.133 39.8323L183.016 42.1677Z" fill="#847D7D"/>
          </svg>
          <svg width="225" height="93" viewBox="0 0 225 93" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow upright">
              <path d="M0 85C0 89.4183 3.58172 93 8 93C12.4183 93 16 89.4183 16 85C16 80.5817 12.4183 77 8 77C3.58172 77 0 80.5817 0 85ZM224.061 13.0607C224.646 12.4749 224.646 11.5251 224.061 10.9393L214.515 1.3934C213.929 0.807611 212.979 0.807611 212.393 1.3934C211.808 1.97919 211.808 2.92893 212.393 3.51472L220.879 12L212.393 20.4853C211.808 21.0711 211.808 22.0208 212.393 22.6066C212.979 23.1924 213.929 23.1924 214.515 22.6066L224.061 13.0607ZM53.3644 12V10.5H52.5306L52.0904 11.2083L53.3644 12ZM9.27404 85.7917L54.6385 12.7917L52.0904 11.2083L6.72596 84.2083L9.27404 85.7917ZM53.3644 13.5H223V10.5H53.3644V13.5Z" fill="#847D7D"/>
          </svg>
          <svg width="249" height="24" viewBox="0 0 249 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow downright">
              <path d="M0 12C-3.86258e-07 16.4183 3.58172 20 8 20C12.4183 20 16 16.4183 16 12C16 7.58172 12.4183 4 8 4C3.58172 4 3.86258e-07 7.58172 0 12ZM248.061 13.0607C248.646 12.4749 248.646 11.5251 248.061 10.9394L238.515 1.39342C237.929 0.807632 236.979 0.807631 236.393 1.39342C235.808 1.97921 235.808 2.92895 236.393 3.51474L244.879 12L236.393 20.4853C235.808 21.0711 235.808 22.0208 236.393 22.6066C236.979 23.1924 237.929 23.1924 238.515 22.6066L248.061 13.0607ZM8 13.5L247 13.5L247 10.5L8 10.5L8 13.5Z" fill="#847D7D"/>
          </svg>
  </div>
  <div class="unique-tech">
      <div class="text-center display">Our unique techniques</div>
      <div class="row text-center">
        <div class="col unique-tech-hide">
          <h3>Slant</h3>
          <p class="unique-content">Right side slanting evenly</p>
            <h3>Spacing</h3>
          <p>Even gap between two letters</p>
        </div>
         <div class="col">
            <img src="{{asset('assets/img/shape-logo.webp')}}" alt="" srcset="" class="shape-img">
          </div>
        <div class="col unique-tech-hide">
          <h3>Size</h3>
          <p class="unique-content">Same size letters</p>
           <h3>Shape</h3>
          <p>Oval shape makes letters perfect</p>
        </div>
      </div>
  </div>
</div>
<x-sfs-handwriting/>
@endsection