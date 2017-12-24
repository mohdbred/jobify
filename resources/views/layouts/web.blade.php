<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Jobify') }}</title>
        <meta content="Jobify is a powerful, responsive, and high-performance job board for a job platform." name="description">
        <meta content="Jobify - Job Search Place" property="og:title">
        <meta content="Jobify is a powerful, responsive, and high-performance job board with awesome features for a job listing website." property="og:description">
        <meta content="summary" name="twitter:card">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Jobify" name="generator">
        <!--style-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jobify-template.css') }}" rel="stylesheet">
        <script src="{{ asset('js/webfont.js') }}" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({
    google: {
        families: ["Montserrat:400,700", "Poppins:300,regular,500,600,700", "Playfair Display:regular,italic,700,700italic,900,900italic:latin-ext,latin"]
    }
});</script>
        <script src="{{ asset('js/modernizr.js') }}" type="text/javascript"></script>

        <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('img/favicon-phone.png') }}" rel="apple-touch-icon">


    </head>
    <body>
        <div id="app">

            <div class="navigation w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
                <a class="brand-logo w-nav-brand" href="jobify-template_webflow_default.html">
                    <img sizes="124px" src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo.png" srcset="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo-p-500x187.png 500w, http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo.png 593w" width="124">
                </a>
                <div class="social-wrapper w-hidden-medium w-hidden-small w-hidden-tiny">
                    <!--                    <a class="social-icon w-inline-block" href="jobify-template_webflow_default.html#"></a>
                                        <a class="social-icon twitter w-inline-block" href="jobify-template_webflow_default.html#"></a>
                                        <a class="pin social-icon w-inline-block" href="jobify-template_webflow_default.html#"></a>-->
                    @if (Auth::guest())
                    <a class="w-inline-block" href="{{ route('login') }}">Login</a>
                    <a class="w-inline-block" href="{{ route('register') }}">Register</a>
                    @else

                    <a class="w-inline-block" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>

                    @endif

                </div>
                <div class="w-container">
                    <nav class="nav-menu w-nav-menu" role="navigation">
                        <a class="mobile navigation-link w-inline-block" data-ix="show-line-menu-on-hover" href="jobify-template_webflow_default.html">
                            <div>Home</div>
                            <div class="line-menu on-mobile" data-ix="menu-line-initial-appearance"></div>
                        </a>
                        <a class="mobile navigation-link w-inline-block" data-ix="show-line-menu-on-hover" href="find-a-job.htm">
                            <div>Find a Job</div>
                            <div class="line-menu on-mobile" data-ix="menu-line-initial-appearance"></div>
                        </a>
                        <a class="mobile navigation-link w-inline-block" data-ix="show-line-menu-on-hover" href="journal.htm">
                            <div>Journal</div>
                            <div class="line-menu on-mobile" data-ix="menu-line-initial-appearance"></div>
                        </a>
                        <a class="mobile navigation-link w-inline-block" data-ix="show-line-menu-on-hover" href="pricing.htm">
                            <div>F.A.Q Page</div>
                            <div class="line-menu on-mobile" data-ix="menu-line-initial-appearance"></div>
                        </a>
                        <a class="mobile navigation-link w-inline-block" data-ix="show-contact-wrapper-on-click" href="jobify-template_webflow_default.html#">
                            <div>Contact</div>
                            <div class="line-menu on-mobile" data-ix="menu-line-initial-appearance"></div>
                        </a>
                    </nav>
                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>

        <div class="footer">
            <div class="w-container">
                <div class="align-center">
                    <a class="w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#">
                        <img sizes="173px" src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo.png" srcset="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo-p-500x187.png 500w, http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a4a01b94765a191e41434d_logo.png 593w" width="173">
                    </a>
                    <div class="space"></div>
                    <div>
                        <a class="social-icon w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#"></a>
                        <a class="social-icon twitter w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#"></a>
                        <a class="pin social-icon w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#"></a>
                        <a class="rss social-icon w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#"></a>
                        <a class="linkin social-icon w-inline-block" href="http://jobify-template.webflow.io/jobify-template_webflow_default.html#"></a>
                    </div>
                    <div class="space"></div>
                    <p class="copyright">© <?php echo date('Y') ?> Jobify by Mohd Belal &nbsp;
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-wrapper" data-ix="hide-popup-on-initial">
            <div class="popup">
                <div class="popup-content">
                    <div class="top-popup">
                        <h2 class="apply-title">Stay In Touch</h2>
                        <div class="remove-apply" data-ix="close-contact-popup-on-click"></div>
                    </div>
                    <div class="bottom-popup contact">
                        <div class="w-form">
                            <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
                                <input class="text-field w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" type="text">
                                <input class="text-field w-input" data-name="Email 2" id="email-2" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
                                <input class="text-field w-input" data-name="Subject" id="Subject" maxlength="256" name="Subject" placeholder="Subject" type="text">
                                <textarea class="area text-field w-input" data-name="Text Area" id="Text-Area" maxlength="5000" name="Text-Area" placeholder="Type your message" required="required"></textarea>
                                <input class="button w-button" data-wait="Please wait..." type="submit" value="Send Message">
                            </form>
                            <div class="success-message w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="error-message w-form-fail">
                                <div>Oops! Something went wrong while submitting the form</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
