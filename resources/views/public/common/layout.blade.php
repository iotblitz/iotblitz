<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ $meta_description ?? '' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
    <meta name="author" content="{{ $meta_author ?? 'IoTBlitz' }}">
    <title>{{ $title ?? 'IoTBlitz' }}</title>



    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/public_page') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="icon" type="image/x-icon" href="{{ asset('public/public_page') }}/assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        #cookieConsent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #7b6ad8b1;
            /* border-top: 1px solid rgb(238, 10, 10); */
            z-index: 9999;
            border-radius: 20px;
        }

        .cookiealert {
            box-shadow: none;
            padding: 1rem;
        }

        .cookiealert-text {
            margin: 0;
            color: #fff;
        }

        .accept-btn {
            border-color: #fff;
            color: #fff;
        }

        .accept-btn:hover {
            background-color: #fff;
            color: #000;
        }
    </style>

    @yield('page_style')


    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9SECG4KCQR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9SECG4KCQR');
</script>




    <!-- Google tag (gtag.js) -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-RQJ7NK776Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RQJ7NK776Z');
</script> --}}


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WQM4MGWW');</script>
    <!-- End Google Tag Manager -->


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQM4MGWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** --> --}}

    @include('public.common.topbar')







    <!-- body -->
    @yield('page_content')



    <!-- footer -->
    @include('public.common.footer')

    <div id="cookieConsent" class="alert alert-dark cookiealert" role="alert" style="display: none;">
        <div class="d-flex align-items-center justify-content-between">
            {{-- <span class="cookiealert-text">This website uses cookies to ensure you get the best experience on our
                website.</span> --}}
                <p class="cookiealert-text">We use cookies to ensure you get the best experience on our website. By using our website, you agree to our Cookies Policy. <a href="{{ route('cookies_policy') }}"><strong>Learn More</strong></a></p>
            <button type="button" class="btn btn-outline-light btn-sm accept-btn">Got it!</button>
        </div>

    </div>




    {{-- ============================================================== --}}

        {{-- <input class='chat-menu hidden' id='offchat-menu' type='checkbox'/> --}}
		<div class='sticky-button' id='sticky-button'>
			<label for='offchat-menu'>
                <img src='{{ asset('public/public_page') }}/assets/images/bot.png' alt='bot' />

			</label>
		</div>
		{{-- <div class='sticky-chat'> --}}
			<div id="chatbot" class="main-card sticky-chat">
                <button id="chatbot_toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
                </svg>
                </button>
                <div class="main-title">
                    <div>
                      <img src='{{ asset('public/public_page') }}/assets/images/bot.png' alt='bot' />
                    </div>
                    <h2 class="ai-head">
                        Jivya, your AI assistant.
                        <span>How can I help you?</span>
                    </h2>
                    {{-- <span></span>
                    <div>How can I help you?</div> --}}
                  </div>
                <div class="chat-area" id="message-box">
                </div>
                <div class="line"></div>
                <div class="input-div">
                  <input class="input-message" name="message" type="text" id="message" placeholder="Type your message ..." />
                  <button class="input-send" onclick="send()">
                    <svg style="width:24px;height:24px">
                      <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
                    </svg>
                  </button>
                </div>
              </div>
		{{-- </div> --}}


    {{-- ============================================================== --}}
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('public/public_page') }}/vendor/jquery/jquery.min.js"></script>

    <script src="{{ asset('public/public_page') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/counter.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/custom.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {!! Toastr::message() !!}
    @yield('page_script')



    <script>
        $(document).ready(function() {
            var cookieConsent = $("#cookieConsent");


            if (!getCookie("cookieAccepted")) {
                cookieConsent.css("display", "block");
            }

            $("#cookieConsent .accept-btn").on("click", function() {
                setCookie("cookieAccepted", true, 365);
                cookieConsent.css("display", "none");
                $(this).off("click"); // Remove the event listener after the button is clicked once
            });

            // Check for cookie on page load
            if (getCookie("cookieAccepted")) {
                cookieConsent.css("display", "none");
            }
        });

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }


        function redirectToHome() {
        // Assuming you want to redirect to the home page
        window.location.href = "{{ route('home') }}";
    }
    </script>
    <script>
        $(document).ready(function() {
            $('#searchText').click(function(e) {
                e.preventDefault(); // Prevent the default action of the click event

                var url = 'https://www.techavo.in/products/';  // Replace with your desired URL

                // Open URL in a new tab
                var win = window.open(url, '_blank');
                win.focus();  // Optional: Switch focus to the new tab
            });
        });
    </script>








    <script>
        var running = false;
        function send() {
        if (running == true) return;
        var msg = document.getElementById("message").value;
        if (msg == "") return;
        running = true;
        addMsg(msg);
        //DELEAY MESSAGE RESPOSE Echo
        window.setTimeout(addResponseMsg, 1000, msg);
        }
        function addMsg(msg) {
        var div = document.createElement("div");
        div.innerHTML =
            "<span style='flex-grow:1'></span><div class='chat-message-sent'>" +
            msg +
            "</div>";
        div.className = "chat-message-div";
        document.getElementById("message-box").appendChild(div);
        //SEND MESSAGE TO API
        document.getElementById("message").value = "";
        document.getElementById("message-box").scrollTop = document.getElementById(
            "message-box"
        ).scrollHeight;
        }
        function addResponseMsg(msg) {
        var div = document.createElement("div");
        div.innerHTML = "<div class='chat-message-received'>" + msg + "</div>";
        div.className = "chat-message-div";
        document.getElementById("message-box").appendChild(div);
        document.getElementById("message-box").scrollTop = document.getElementById(
            "message-box"
        ).scrollHeight;
        running = false;
        }
        document.getElementById("message").addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            send();
        }
        });
        // document.getElementById("chatbot_toggle").onclick = function () {
        //     // window.location.hash
        //     if (document.getElementById("chatbot").classList.contains("collapsed")) {
        //     document.getElementById("chatbot").classList.remove("collapsed")
        //     document.getElementById("chatbot_toggle").children[0].style.display = "none"
        //     document.getElementById("chatbot_toggle").children[1].style.display = ""
        //     setTimeout(addResponseMsg,1000,"Hi")
        //     }
        //     else {
        //     document.getElementById("chatbot").classList.add("collapsed")
        //     document.getElementById("chatbot_toggle").children[0].style.display = ""
        //     document.getElementById("chatbot_toggle").children[1].style.display = "none"
        //     }
        // }


            $("#chatbot_toggle").click(function(){
                $(".sticky-chat").css('visibility', function(i, visibility) {
                    return visibility === 'visible' ? 'hidden' : 'visible';
                });
            });



            $("#sticky-button").click(function(){
                if ($(".sticky-chat").css('visibility') === 'visible') {
                    $(".sticky-chat").css('visibility', 'hidden');
                    $(".sticky-chat").css('opacity', '0');
                } else if ($(".sticky-chat").css('visibility') === 'hidden')  {
                    $(".sticky-chat").css('visibility', 'visible');
                    $(".sticky-chat").css('opacity', '1');
                }
            });
    </script>
</body>

</html>
