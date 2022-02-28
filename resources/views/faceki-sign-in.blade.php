<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <link rel="shortcut icon" href="{{ asset('public/image/favicon.png') }}" />
      <meta name="og:type" content="website" />
      <meta name="twitter:card" content="photo" />
      <link rel="stylesheet" type="text/css" href="{{ asset('public/css/faceki-sign-in.css') }}" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <meta http-equiv="X-UA-Compatible" content="chrome=1">
      <script src="{{ asset('public/js/picojs/camvas.js') }}"></script>
      <script src="{{ asset('public/js/picojs/pico.js') }}"></script>
      <script src="{{ asset('public/js/picojs/lploc.js') }}"></script>
      <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>-->

    <style>
      @import url("https://fonts.googleapis.com/css?family=Roboto:300,400|Lato:400");
      .anima-component-wrapper a,
      .anima-screen a {
        text-decoration: none;
        display: contents;
      }

      .anima-full-width-a {
        width: 100%;
      }

      .anima-full-height-a {
        height: 100%;
      }

      .anima-screen textarea:focus,
      .anima-screen input:focus {
        outline: none;
      }

      .anima-screen *,
      .anima-component-wrapper * {
        box-sizing: border-box;
      }

      .anima-screen div {
        -webkit-text-size-adjust: none;
      }

      .anima-container-center-vertical,
      .anima-container-center-horizontal {
        pointer-events: none;
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
      }

      .anima-container-center-vertical {
        align-items: center;
        height: 100%;
      }

      .anima-container-center-horizontal {
        justify-content: center;
        width: 100%;
      }

      .anima-container-center-vertical > *,
      .anima-container-center-horizontal > * {
        pointer-events: auto;
        flex-shrink: 0;
      }

      .anima-component-wrapper,
      .anima-screen {
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-all;
        word-break: break-word;
      }

      .anima-auto-animated div {
        opacity: 0;
        position: absolute;
        --anima-z-index: -1;
      }

      .anima-auto-animated .anima-container-center-vertical,
      .anima-auto-animated .anima-container-center-horizontal {
        opacity: 1;
      }

      .anima-overlay {
        position: absolute;
        opacity: 0;
        display: none;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
      }

      .anima-animate-appear {
        opacity: 0;
        display: block;
        animation: anima-reveal 0.3s ease-in-out 1 normal forwards;
      }

      .anima-animate-disappear {
        opacity: 1;
        display: block;
        animation: anima-reveal 0.3s ease-in-out 1 reverse forwards;
      }

      .anima-animate-nodelay {
        animation-delay: 0s;
      }

      @keyframes anima-reveal {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .align-self-flex-start {
        align-self: flex-start;
      }
      .align-self-flex-end {
        align-self: flex-end;
      }
      .align-self-flex-center {
        align-self: center;
      }
      .anima-valign-text-middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .anima-valign-text-bottom {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      .anima- input:focus {
        outline: none;
      }
      .anima-component-wrapper,
      .anima-component-wrapper * {
        pointer-events: none;
      }

      .anima-component-wrapper a *,
      .anima-component-wrapper a,
      .anima-component-wrapper input,
      .anima-component-wrapper video,
      .anima-component-wrapper iframe,
      .anima-listeners-active,
      .anima-listeners-active * {
        pointer-events: auto;
      }

      .anima-hidden,
      .anima-hidden * {
        visibility: hidden;
        pointer-events: none;
      }

      .anima-smart-layers-pointers,
      .anima-smart-layers-pointers * {
        pointer-events: auto;
        visibility: visible;
      }

      .anima-component-wrapper.anima-not-ready,
      .anima-component-wrapper.anima-not-ready * {
        visibility: hidden !important;
      }

      .anima-listeners-active-click,
      .anima-listeners-active-click * {
        cursor: pointer;
      }
    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">
    <style type="text/css">
     .facescane_my video{
       -webkit-transform: scaleX(-1);
       transform: scaleX(-1);
     }
    </style>
  </head>
  <body style="margin: 0; background: rgba(255, 255, 255, 1)">
  <input type="hidden" id="token" value="" />
  <input type="hidden" id="type" value="login" />
  <input type="hidden" id="anPageName" name="page" value="faceki-sign-in" />
    

    <section class="faceki-section" id="selfiepage" style="display:block !important;">
      <div class="camera-holder">
        <div class="faceki-card faceki-card-light mx-auto position-relative mx-auto">
          <div class="camera-content-top">
            <h2 id="noFace" class="faceki-card__title mb-0">Take a Selfie</h2>
            <h3 class="faceki-card__title mb-0 d-none d-md-block">Fit your face in the middle</h3>
        </div>
        

        <div id="desktop-selfie" class="d-none d-md-block">
         <img src="{{ asset('public/assets/img/shape/selfie-desktop.png') }}" alt="">
        </div>
  
       <div id="mobile-selfie">
        <img class="slfie-screen d-md-none" src="{{ asset('public/assets/img/shape/selfie.png') }}" alt="">
       </div>
  
        <button class="camera-btn selfie-btn" id="capture" onclick="callApi('front')">
          <svg xmlns="http://www.w3.org/2000/svg" width="70" height="71" viewBox="0 0 70 71">
              <g id="Group_276" data-name="Group 276" transform="translate(1.032 1.4)">
                <g id="Group_126" data-name="Group 126" transform="translate(0)">
                  <ellipse id="Oval_2" data-name="Oval 2" cx="34" cy="34.5" rx="34" ry="34.5" transform="translate(-0.032 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                  <circle id="Oval_2-2" data-name="Oval 2" cx="26" cy="26" r="26" transform="translate(7.968 8.6)" fill="#fff"/>
                </g>
                <g id="Group_129" data-name="Group 129" transform="translate(22.77 22.428)">
                  <g id="Group_128" data-name="Group 128">
                    <path id="Path_134" data-name="Path 134" d="M703.9,322.184l.947-1.891a4.743,4.743,0,0,1,.4-.617,2.143,2.143,0,0,1,.724-.65.987.987,0,0,1,.438-.107h6.528a.988.988,0,0,1,.44.107,2.145,2.145,0,0,1,.724.65,4.862,4.862,0,0,1,.412.632l.937,1.876h1.84a3.808,3.808,0,0,1,3.808,3.808v9.792a3.808,3.808,0,0,1-3.808,3.808H702.062a3.808,3.808,0,0,1-3.808-3.808v-9.792a3.808,3.808,0,0,1,3.808-3.808Zm-1.3,5.44a1.088,1.088,0,1,0-1.088-1.088,1.088,1.088,0,0,0,1.088,1.088Zm7.072,7.616a4.9,4.9,0,1,0-4.9-4.9,4.9,4.9,0,0,0,4.9,4.9Z" transform="translate(-698.254 -318.92)" fill="#464c5f"/>
                    <path id="Path_135" data-name="Path 135" d="M709.062,333.536a3.808,3.808,0,1,0-3.808-3.808,3.808,3.808,0,0,0,3.808,3.808Z" transform="translate(-697.638 -318.304)" fill="#464c5f" fill-rule="evenodd"/>
                  </g>
                </g>
              </g>
            </svg>
      </button>
    <div class="selfie-content-bottom">
      <h3 class="faceki-card__title mb-0 d-md-none">Fit your face in the middle</h3>
      <h4 id="message-1"></h4>
    </div>
      <div class="facescane_my">
          <img class="pattern d-md-none" src="{{ asset('public/assets/img/shape/pattern.png') }}" alt="">
          <video autoplay="" class="video-selfie" id="video2" muted="" playsinline=""></video>
      </div>

      </div>
   
     <canvas id="canvas2" style="display: none;"></canvas>
    </section> 

    <div class="camera camera_loader" id="loader" style="display: none;">
            <img class="loader" src="{{ asset('public/image/loader.gif') }}" >
            <div class="roboto-normal-santas-gray-18px" style="margin-top: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLEASE WAIT</div>
            <h4 id="message-1"></h4>
    </div>
    
  <style>
    @media (max-width: 767px){
      .camera_loader{
         margin-left: 25% !important;margin-top: 10% !important;
      }
    }
    @media (min-width: 1000px){
      .camera_loader{
         margin-left: 42% !important;margin-top: 10% !important;
      }
    }
  </style>

  </body>
</html>
<script src="{{ asset('public/js/webcam.js') }}"></script>
