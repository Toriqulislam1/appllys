<!--Start Footer-->
<footer>
@php
$setting = App\Models\Setting::find(1);
@endphp
<div class="footer-row2">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-3 col-sm-6  ftr-brand-pp">
<a class="navbar-brand mt30 mb25" href="/"> <img src="{{ asset($setting->logo)}}" alt="Logo" width="100" /></a>
<p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>

</div>
<div class="col-lg-3 col-sm-6">
<h5>Contact Us</h5>
<ul class="footer-address-list ftr-details">
<li>
<span><i class="fas fa-envelope"></i></span>
<p>Email <span> <a href="mailto:skincarecenterbd@gmail.com">{{ $setting->email}}</a></span></p>
</li>
<li>
<span><i class="fas fa-phone-alt"></i></span>
<p>Phone <span> <a href="tel:+10000000000">{{ $setting->phone_one}}</a></span></p>
</li>
<li>
<span><i class="fas fa-map-marker-alt"></i></span>
<p>Address <span> {{ $setting->company_address}}</span></p>
</li>
</ul>
</div>
<div class="col-lg-2 col-sm-6">
<h5>Company</h5>
<ul class="footer-address-list link-hover">
<li><a href="javascript:void(0)">Privacy Policy</a></li>
<li><a href="javascript:void(0)">Terms and Conditions</a></li>

</ul>
</div>
<div class="col-lg-4 col-sm-6 footer-blog-">
<h5>Our locations</h5>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29218.029188915905!2d90.37022879999999!3d23.73833265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1670242169791!5m2!1sen!2sbd" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</div>
</div>
</div>

<div class="footer-row3">
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer-social-media-icons">
<a href="{{ $setting->facebook }}" target="blank" rel="nofollow"><i class="fab fa-facebook"></i></a>
<a href="{{ $setting->twitter }}" target="blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
<a href="{{ $setting->instragram }}" target="blank" rel="nofollow"><i class="fab fa-instagram"></i></a>
<a href="{{ $setting->linkedin }}" target="blank" rel="nofollow"><i class="fab fa-linkedin"></i></a>
<a href="{{ $setting->youtube }}" target="blank" rel="nofollow"><i class="fab fa-youtube"></i></a>

</div>
<div class="footer-">
<p>© 2020-2022. All Rights Reserved By <a href="#" target="blank">Technoval Limited</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<!--End Footer-->