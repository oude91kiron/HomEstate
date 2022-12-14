<div class="container content-area-5 border">
    
    <div class="text-center mt-5">
        <h2 class="h2-responsive font-weight-bold text-center my-4">{{__('site/home.Contact Us')}}</h2>
    </div>
    <div class="row ">    
        <div class="col-md-8 mb-md-0 mb-5">
            <div class="col-lg-8 col-sm-12">
                <h2 class="h2-responsive font-weight-bold text-center my-4">{{__('site/home.Send Us Email')}}</h2>
                <form action="" method="post" action="{{ route('contact') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="{{__('site/home.name')}}" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="{{__('site/home.email')}}" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                        @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="{{__('site/home.phone')}}" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="{{__('site/home.subject')}}" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                            id="subject">
                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                    <textarea placeholder="{{__('site/home.message')}}" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                    rows="4"></textarea>
                    @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                    @endif
                    </div>
                    <input type="submit" name="send" value="{{__('site/home.send')}}" class="btn btn-dark btn-block">
                </form>
            </div>
            </div>

            <!--Grid column-->
            <div class="col-lg-4 col-sm-12">
                <p class="h3-responsive font-weight-bold mx-4 my-4 text-center">{{__('site/home.Contact Us:')}}</p>
                <p class="h5 w-responsive mx-auto mb-5 ">{{__('site/home.Do you have any questions')}}</p>

                <ul class="contact-info">
                    <li >
                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps mx-4 mx-2"></i>Istanbul 34097, Turkey
                    </li>
                    <li>
                        <i class="fa fa-envelope mx-4  my-2"></i><a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone mx-4 my-2"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                    </li>
                    <li>
                        <i class="fa fa-fax mx-4 my-2"></i>+0487 85X6 224
                    </li>
                    <li>
                        <i class="fa fa-skype mx-4 my-2"></i><a href="mailto:info@green.com">info@green.com</a>
                    </li>
                </ul>
            
                 <!-- Social list start -->
                <div class="sidebar mbl">
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="whatsapp-bg"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>