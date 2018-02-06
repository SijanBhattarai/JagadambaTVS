<!-- Footer -->
<footer class="site-footer">
    {{--<section class="site-footer__top-panel">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="top-panel__info">--}}
                        {{--<i class="icon-Cancellation"></i>--}}
                        {{--<strong>Free cancellation</strong>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="top-panel__info">--}}
                        {{--<i class="icon-commerce"></i>--}}
                        {{--<strong>No credit card fees</strong>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="top-panel__info">--}}
                        {{--<i class="icon-phone"></i>--}}
                        {{--<strong>24/7 Call Center</strong>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section  class="box-elements">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
                    <figure class="footer_logo"><a href="#"><img src="assets/images/celebrating_icon.png" alt=""></a></figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <h5>Company</h5>
                    <ul class="footer-list">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog-masonry.html">News</a></li>
                        <li><a href="#">Emergency Contacts</a></li>
                        <li><a href="contacts.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <h5>Customer Services</h5>
                    <ul class="footer-list">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Help renting a car</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="contact-info">
                        <span class="phone_number"><i class="icon-telephone"></i> 1-800-123-4567</span>

                        <span class="location_info">
							<i class="icon-placeholder-for-map"></i>
							<em>JAGADAMBA MOTORS</em>
							<em>KATHMANDU</em>
							<em>BAGMATI, NEPAL.</em> </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-footer__bottom-panel">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="copyright">&copy; 2017 TVS | <a href="#">Privacy Policy</a> | <a href="#">Rental policy</a></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="social-list">
                        <ul class="social-list__icons">
                            <li><a href="www.facebook.com"><i class="icon-facebook-logo"></i></a></li>
                            <li><a href="www.twitter.com"><i class="icon-twitter-letter-logo"></i></a></li>
                            <li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="icon-linkedin-logo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>
</footer>

<div class="remodal" data-remodal-id="modal">
    <!-- // order-details-form  -->
    <a data-remodal-action="close" class="remodal-close"></a>
    <form action="#" class="order-details-form order-details-form-first" name="contactform" method="post" novalidate>
        <div class="inner-form">
            <h3>Order Form</h3>
            <div class="inner-form__elements">
                <div class="inner-half">
                    <h5>New Reservation</h5>
                    <div class="location">
                        <input type="text" name="location" placeholder="Last name">
                        <i class="icon-placeholder-for-map"></i>
                    </div>
                    <div class="text-element stop-location">
                        <a href="#" class="add"><i class="icon-plus-black-symbol"></i> <span>Click here to add a stop</span></a>
                        <a href="#" class="link-right">airports</a>
                    </div>
                    <div class="location-drop-off">
                        <input type="text" name="location-drop-off" placeholder="Enter drop-off location">
                        <i class="icon-placeholder-for-map"></i>
                    </div>
                    <div class="text-element checkbox-div">
                        <div class="wishes">
                            <input type="checkbox" name="option1" value="a1"> I would like the driver to wait and take me back<br>
                            <input type="checkbox" name="option2" value="a2"> I would like to go by the hours
                        </div>
                        <a href="#" class="link-right">airports</a>
                    </div>

                    <div class="inner-half__width">
                        <div class="input-date">
                            <input type="text" name="input-date" placeholder="Pick-up date">
                            <i class="icon-calendar-with-a-clock-time-tools"></i>
                        </div>
                        <div class="input-time">
                            <input type="text" name="input-time" placeholder="Pick-up time">
                            <i class="icon-clock"></i>
                        </div>
                    </div>

                    <div class="select-vehicle">
                        <select name="select-vehicle">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="passengers-luggage">
                        <div class="passengers">
                            <span>Passengers*</span>
                            <select name="passengers">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="luggage">
                            <span>Luggage*</span>
                            <select name="luggage">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="carseat">
                            <span></span>
                            <input type="checkbox" name="carseat" value="a2"> Car Seat
                        </div>
                    </div>
                </div>
                <div class="inner-half">
                    <h5>Passenger's Contact Info</h5>
                    <div class="inner-half__width">
                        <div class="first-name">
                            <input type="text" name="first-name" placeholder="First Name*">
                        </div>
                        <div class="last-name">
                            <input type="text" name="last-name" placeholder="Last Name*">
                        </div>
                    </div>

                    <div class="inner-half__width">
                        <div class="your-phone">
                            <input type="tel" class="phone" placeholder="Your phone">
                        </div>
                        <div class="email">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="specialreguests">
                        <textarea name="specialreguests" placeholder="Special Requests"></textarea>
                        <span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>
                    </div>
                    <div class="payment">
                        <span>Payment</span>
                        <select name="your-phone">
                            <option value="Pay with Cash">Pay with Cash</option>
                            <option value="PayPal">PayPal</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn" data-remodal-action="confirm">CONTINUE</button>
        </div>
    </form>
    <!-- // order-details-form  -->
</div>
<!--Footer--!>