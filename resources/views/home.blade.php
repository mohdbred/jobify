@extends('layouts.web')

@section('content')

<div class="scroll-navigation w-hidden-medium w-hidden-small w-hidden-tiny w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400" data-ix="scroll-navigation-hide-on-initial">
            <div class="w-container">
                <a class="brand-logo scroll w-nav-brand" href="jobify-template_webflow_default.html#">
                    <img sizes="100vw" src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a624fce199bb9c469518e1_logo-w.png" srcset="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a624fce199bb9c469518e1_logo-w-p-500x187.png 500w, http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a624fce199bb9c469518e1_logo-w.png 593w" width="101">
                </a>
                <nav class="nav-menu scroll-menu w-nav-menu" role="navigation">
                    <a class="navigation-link scroll-nav w-inline-block" data-ix="show-line-menu-on-hover" href="jobify-template_webflow_default.html">
                        <div>Home</div>
                        <div class="line-menu white-line" data-ix="menu-line-initial-appearance"></div>
                    </a>
                    <a class="navigation-link scroll-nav w-inline-block" data-ix="show-line-menu-on-hover" href="find-a-job.htm">
                        <div>Find a Job</div>
                        <div class="line-menu white-line" data-ix="menu-line-initial-appearance"></div>
                    </a>
                    <a class="navigation-link scroll-nav w-inline-block" data-ix="show-line-menu-on-hover" href="journal.htm">
                        <div>Journal</div>
                        <div class="line-menu white-line" data-ix="menu-line-initial-appearance"></div>
                    </a>
                    <a class="navigation-link scroll-nav w-inline-block" data-ix="show-line-menu-on-hover" href="pricing.htm">
                        <div>F.A.Q Page</div>
                        <div class="line-menu white-line" data-ix="menu-line-initial-appearance"></div>
                    </a>
                    <a class="navigation-link scroll-nav w-inline-block" data-ix="show-contact-wrapper-on-click" href="jobify-template_webflow_default.html#">
                        <div>Contact</div>
                        <div class="line-menu white-line" data-ix="menu-line-initial-appearance"></div>
                    </a>
                </nav>
                <div class="w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <div class="banner" data-ix="show-scroll-navigation-on-scroll">
            <div class="container-center w-container">
                <div class="align-center">
                    <h1 class="banner-title">Make your dream true with Jobify.</h1>
                    <h3>Build your future with us.</h3>
                    <div class="space"></div>
                    <div>
                        <div class="w-form">
                            <form class="subscribe-wrapper w-clearfix" data-name="Email Form" id="email-form" name="email-form">
                                <input class="subscribe-field w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
                                <input class="subscribe-button w-button" data-wait="Please wait..." type="submit" value="Subscribe Now">
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
        <div class="section wiht-line">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-4">
                        <div class="fun-facts-wrapper">
                            <h3 class="fun-facts-number">89,040</h3>
                            <div class="fun-facts-sub-text">Jobs Added</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="fun-facts-wrapper">
                            <h3 class="fun-facts-number">1,000</h3>
                            <div class="fun-facts-sub-text">Active Resumes</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="fun-facts-wrapper no-line">
                            <h3 class="fun-facts-number">41,110</h3>
                            <div class="fun-facts-sub-text">Positions Matched</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="w-container">
                <div class="top-title">
                    <h2>Popular Categories</h2>
                </div>
                <div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row">
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/media.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4acb3e4dd66dc54af54d7_icon-4.png">
                                    <div class="categoris-name">Media</div>
                                </a>
                            </div>
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/education-training.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4ad11e67057bb1c67747d_icon-5.png">
                                    <div class="categoris-name">Training</div>
                                </a>
                            </div>
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/transportation-logistics.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4ad78e67057bb1c6774b1_icon-6.png">
                                    <div class="categoris-name">Transportation</div>
                                </a>
                            </div>
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/construction.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4abc1d0f82cd81c5a4e1f_icon-3.png">
                                    <div class="categoris-name">Construction</div>
                                </a>
                            </div>
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/accounting.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4ab4a38927c9f54afa6b5_icon-2.png">
                                    <div class="categoris-name">Accounting</div>
                                </a>
                            </div>
                            <div class="w-col w-col-4 w-dyn-item">
                                <a class="categories-wrapper w-inline-block" href="job-categories/technology.htm">
                                    <img width="60" src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a4a9b8d0f82cd81c5a4ca9_icon-1.png">
                                    <div class="categoris-name">Technology</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="align-center">
                        <a class="button green w-button" href="jobify-template_webflow_default.html#recent">View Latest Jobs</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gray section">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-5 w-col-stack">
                        <div>
                            <h1 class="big-title">Start building your own career with us now.</h1>
                            <div>
                                <p>Aenean viverra rhoncus pede. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Pellentesque posuere. 
                                    <br>
                                    <br>Quisque ut nisi.
                                    Sed aliquam ultrices mauris. Phasellus ullamcorper ipsum rutrum nunc. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci.
                                </p>
                            </div>
                            <div class="space"></div>
                            <a class="button w-button" href="jobify-template_webflow_default.html#">Learn More</a>
                        </div>
                    </div>
                    <div class="w-col w-col-7 w-col-stack"></div>
                </div>
            </div>
        </div>
        <div class="section" id="recent">
            <div class="w-container">
                <div class="top-title">
                    <h2>Recent Jobs</h2>
                </div>
                <div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items">
                            <div class="w-dyn-item">
                                <a class="jobs-wrapper w-inline-block" href="jobs/paradigm.htm">
                                    <div class="jobs-client">
                                        <img src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a88889f66b1be80d2d9ed1_client-6.jpg">
                                        <div class="job-time" style="background-color: #5cb85c;">Full-Time</div>
                                    </div>
                                    <div class="jobs-content">
                                        <h4 class="job-title">Carpenters And Electricians Installers</h4>
                                        <div class="sub-category-text">Construction</div>
                                        <div class="w-clearfix">
                                            <div class="meta-tag">
                                                <div>Paradigm</div>
                                            </div>
                                            <div class="marker meta-tag">
                                                <div>Shanghai, China</div>
                                            </div>
                                            <div class="meta-tag money">
                                                <div>$40,000 - $200,000 / year</div>
                                            </div>
                                        </div>
                                        <div class="small space"></div>
                                        <p>Quisque ut nisi. Donec sodales sagittis magna. Fusce convallis metus id felis luctus adipiscing. In turpis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum....</p>
                                    </div>
                                </a>
                            </div>
                            <div class="w-dyn-item">
                                <a class="jobs-wrapper w-inline-block" href="http://jobify-template.webflow.io/jobs/nindzja.htm">
                                    <div class="jobs-client">
                                        <img src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a88664c3e841c509ee48e7_client-5.jpg">
                                        <div class="job-time" style="background-color: #8435cc;">Remote</div>
                                    </div>
                                    <div class="jobs-content">
                                        <h4 class="job-title">Retail Store Driver</h4>
                                        <div class="sub-category-text">Transportation</div>
                                        <div class="w-clearfix">
                                            <div class="meta-tag">
                                                <div>Nindzja</div>
                                            </div>
                                            <div class="marker meta-tag">
                                                <div>Bankok, Thailand</div>
                                            </div>
                                            <div class="meta-tag money">
                                                <div>$40,000 - $200,000 / year</div>
                                            </div>
                                        </div>
                                        <div class="small space"></div>
                                        <p>Quisque ut nisi. Donec sodales sagittis magna. Fusce convallis metus id felis luctus adipiscing. In turpis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum....</p>
                                    </div>
                                </a>
                            </div>
                            <div class="w-dyn-item">
                                <a class="jobs-wrapper w-inline-block" href="http://jobify-template.webflow.io/jobs/marketing-coordinator.htm">
                                    <div class="jobs-client">
                                        <img src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a88554c3e841c509ee47c2_client-4.jpg">
                                        <div class="job-time" style="background-color: #f0ad4e;">Part-Time</div>
                                    </div>
                                    <div class="jobs-content">
                                        <h4 class="job-title">Marketing Coordinator</h4>
                                        <div class="sub-category-text">Training</div>
                                        <div class="w-clearfix">
                                            <div class="meta-tag">
                                                <div>Trumpet</div>
                                            </div>
                                            <div class="marker meta-tag">
                                                <div>Istanbul, Turkey</div>
                                            </div>
                                            <div class="meta-tag money">
                                                <div>$40,000 - $200,000 / year</div>
                                            </div>
                                        </div>
                                        <div class="small space"></div>
                                        <p>Quisque ut nisi. Donec sodales sagittis magna. Fusce convallis metus id felis luctus adipiscing. In turpis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum....</p>
                                    </div>
                                </a>
                            </div>
                            <div class="w-dyn-item">
                                <a class="jobs-wrapper w-inline-block" href="http://jobify-template.webflow.io/jobs/ansar.htm">
                                    <div class="jobs-client">
                                        <img src="https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a5f1bcc1305fe20945ea37_client-3.jpg">
                                        <div class="job-time" style="background-color: #d9534f;">Intership</div>
                                    </div>
                                    <div class="jobs-content">
                                        <h4 class="job-title">Senior Health And Nutrition Advisor</h4>
                                        <div class="sub-category-text">Technology</div>
                                        <div class="w-clearfix">
                                            <div class="meta-tag">
                                                <div>Ansar</div>
                                            </div>
                                            <div class="marker meta-tag">
                                                <div>Roma, Italy</div>
                                            </div>
                                            <div class="meta-tag money">
                                                <div>$90,000 - $110,000 / year</div>
                                            </div>
                                        </div>
                                        <div class="small space"></div>
                                        <p>Quisque ut nisi. Donec sodales sagittis magna. Fusce convallis metus id felis luctus adipiscing. In turpis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum....</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="align-center">
                    <a class="button green w-button" href="http://jobify-template.webflow.io/find-a-job.htm">Browse All Jobs</a>
                </div>
            </div>
        </div>
        <div class="light-gray section">
            <div class="w-container">
                <div class="top-title">
                    <h2>Latest From Journal</h2>
                </div>
                <div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row">
                            <div class="w-col w-col-6 w-dyn-item">
                                <a class="journal-wrapper w-inline-block" style="background-image: url('https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a8d4a1e199bb9c46990cc9_blog-4.jpg');" href="http://jobify-template.webflow.io/post/entrepreneur-working-on-his-macbook.htm">
                                    <div class="blog-overlay">
                                        <div class="blog-content">
                                            <h1 class="journal-title">Entrepreneur Working on his MacBook</h1>
                                            <p>Pellentesque egestas, neque sit amet convallis pulvinar, usce vulputate eleifend sapien. Cras non dolor [...]</p>
                                            <div class="small space"></div>
                                            <div class="button green in-journal" data-ix="display-none-button-on-initial">Read More</div>
                                        </div>
                                        <div class="journal-date">August 8, 2016</div>
                                    </div>
                                </a>
                            </div>
                            <div class="w-col w-col-6 w-dyn-item">
                                <a class="journal-wrapper w-inline-block" style="background-image: url('https://daks2k3a4ib2z.cloudfront.net/57a4a82bae4229de1de385d1/57a8d44a3e4192b946e72d7c_blog-1.jpg');" href="http://jobify-template.webflow.io/post/photographer-in-snowy-forest-taking-winter-photos.htm">
                                    <div class="blog-overlay">
                                        <div class="blog-content">
                                            <h1 class="journal-title">Photographer in Snowy Forest Taking Winter</h1>
                                            <p>Pellentesque egestas, neque sit amet convallis pulvinar, usce vulputate eleifend sapien. Cras non dolor [...]</p>
                                            <div class="small space"></div>
                                            <div class="button green in-journal" data-ix="display-none-button-on-initial">Read More</div>
                                        </div>
                                        <div class="journal-date">August 8, 2016</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="color section">
            <div class="w-container">
                <div class="top-title">
                    <h2 class="white-font">Some amazing companies we've&nbsp;
                        <br>had the pleasure to work with.
                    </h2>
                </div>
                <div>
                    <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                        <div class="w-tab-content">
                            <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                                <div class="testimonials-wrapper">
                                    <p class="testimonials-font">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.</p>
                                </div>
                            </div>
                            <div class="w-tab-pane" data-w-tab="Tab 2">
                                <div class="testimonials-wrapper">
                                    <p class="testimonials-font">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.</p>
                                </div>
                            </div>
                            <div class="w-tab-pane" data-w-tab="Tab 3">
                                <div class="testimonials-wrapper">
                                    <p class="testimonials-font">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.</p>
                                </div>
                            </div>
                            <div class="w-tab-pane" data-w-tab="Tab 4">
                                <div class="testimonials-wrapper">
                                    <p class="testimonials-font">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.</p>
                                </div>
                            </div>
                            <div class="w-tab-pane" data-w-tab="Tab 5">
                                <div class="testimonials-wrapper">
                                    <p class="testimonials-font">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-menu w-clearfix w-tab-menu">
                            <a class="company-logo-wrapper w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                                <img src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a61ed03e4192b946e2f404_client01_w.png" width="190">
                            </a>
                            <a class="company-logo-wrapper w-inline-block w-tab-link" data-w-tab="Tab 2">
                                <img src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a61eebf66b1be80d2a91d8_client03_w.png" width="190">
                            </a>
                            <a class="company-logo-wrapper w-inline-block w-tab-link" data-w-tab="Tab 3">
                                <img src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a61ed8e199bb9c46950f63_client06_w.png" width="190">
                            </a>
                            <a class="company-logo-wrapper w-inline-block w-tab-link" data-w-tab="Tab 4">
                                <img src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a61ee23e4192b946e2f47c_client04_w.png" width="190">
                            </a>
                            <a class="company-logo-wrapper w-inline-block w-tab-link" data-w-tab="Tab 5">
                                <img src="http://uploads.webflow.com/57a49d19ae4229de1de36e40/57a61ef5c3e841c509ec1288_client02_w.png" width="190">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
