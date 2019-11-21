
<!-- Footer -->
<footer id="footer" class="footer pb-0 background-dark">
    <div class="footer-wrapper">
    <div class="container pb-20">
        <div class="row multi-row-clearfix">
            <div class="col-sm-4 col-xs-12">
                <div class="widget dark text-center">

                    <img src="{{asset('images/logo.png')}}" alt="Akwan Media" width="180" class="mb-20">
                    <div class="footer-about theme-second-colored">
                        <p>
                            Lorem ipsum dolor sit amet, ut ius audiam denique tractatos, pro cu dicat quidam neglegentur. Vel mazim aliquid.
                        </p>
                        <p>
                            +490 54 324 77
                        </p>
                        <p>
                            Potsdamer Platz 9797
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="widget dark  text-center">
                    <h5 class="widget-title font-tajawal font-medium font-22 theme-second-colored">
                        {{trans('homePage.usefulLinks')}}
                    </h5>

                    <div class="footer-li">
                        <ul class="list list-border">
                            <li class="clearfix">
                                <a href="{{url('/get-offer')}}">
                                <span class=" font-tajawal font-medium font-18 text-white text-uppercase">
                                  {{trans('homePage.about')}} {{trans('homePage.us')}}
                                </span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="{{url('/get-offer')}}">
                                <span class=" font-tajawal font-medium font-18 text-white text-uppercase">
                                  {{trans('homePage.services')}}
                                </span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="{{url('/get-offer')}}">
                                <span class=" font-tajawal font-medium font-18 text-white text-uppercase">
                                  {{trans('homePage.projects')}}
                                </span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="{{url('/get-offer')}}">
                                <span class=" font-tajawal font-medium font-18 text-white text-uppercase">
                                  {{trans('homePage.contactUs')}}
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <h5 class="widget-title font-tajawal font-bold font-26 theme-color text-uppercase text-left" style="color: #D1D1D1">
                    {{trans('homePage.newsLetterHead')}}
                </h5>

                <div class="widget dark text-left">
                    <div class="widget-subscribe mt-20">
                        <h5 class="subscribe-title font-13 text-white font-tajawal font-medium theme-second-colored">
                            {{trans('homePage.newsLetterSlogan')}}
                        </h5>
                        <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                            <div class="input-group">
                                <input type="email" id="mce-EMAIL" class="footer-input form-control input-sm" placeholder="{{trans('homePage.email')}}" name="EMAIL" value="">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-xs m-0 font-tajawal font-medium text-uppercase font-20 theme-second-background-colored text-black-111 newsletter-btn" data-height="55px"> > </button>
                                  </span>
                            </div>
                        </form>

                        <!-- Mailchimp Subscription Form Validation-->
                        <script type="text/javascript">
                            $('#mailchimp-subscription-form').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#mailchimp-subscription-form'),
                                    $response = '';
                                $mailchimpform.children(".alert").remove();
                                console.log(resp);
                                if (resp.result === 'success') {
                                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-nav p-20">
        <div class="container">
            <div class="row text-left">

                <div class="col-md-12">
                    <div class="col-sm-6">
                        <p class="m-0 font-tajawal text-uppercase font-medium font-16 footer-copy">
                            &copy; 2019 {{trans('homePage.rightsReserved')}}.
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <div class="pull-right footer-social">
                            Follow Us :
                            <a href="https://facebook.com">
                                <i class="fa fa-facebook-f theme-second-colored pr-10"></i>
                            </a>
                            <a href="https://facebook.com">
                                <i class="fa fa-twitter theme-second-colored pr-10"></i>
                            </a>
                            <a href="https://facebook.com">
                                <i class="fa fa-instagram theme-second-colored pr-10"></i>
                            </a>
                            <a href="https://facebook.com">
                                <i class="fa fa-google-plus theme-second-colored"></i>
                            </a>
                        </div>

                    </div>



                </div>
            </div>

        </div>
    </div>
    </div>
</footer>
