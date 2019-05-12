<header class="head">
    <div class="container">
        <div class="row">
            <div class="bom">
                <nav class="user-menu">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="">Store Location</a></li>
                        <li><a href="" data-toggle="modal" data-target="#forgot">Blog</a></li>
                    </ul>
                </nav>
                <div class="user-choose">
                    <ul>
                        <li class="language">
                            <p class="check">
                                <img src="images/icons/VN_icon.jpg" alt="VN">
                                Việt Nam
                                <i class="fa fa-angle-down"></i>
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="images/icons/VN_icon.jpg" alt="VN">
                                        Việt Nam
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/icons/US_icon.jpg" alt="US">
                                        English
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if(Session()->has('account'))
                        <li>
                        <a href="/account?id={{Session()->get('account.ID_USER')}}" id="popup-signin">
                                <i class="fas fa-sign-in-alt"></i>
                               {{Session()->get('account.USERNAME')}}
                            </a>
                        </li>
                        @else
                        
                        <li>
                            <a href="#" data-toggle="modal" data-target="#signin" id="popup-signin">
                                <i class="fas fa-sign-in-alt"></i>
                                Sign In
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#signin" id="popup-register">
                                <i class="far fa-user-circle"></i>
                                Register
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
@if(Session()->has('resign'))
<p class="success">{{Session()->get('resign')}}</p>
@endif
