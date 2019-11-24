<div class="btns-profiles-sec">
    <span class="text-dark"><img src="{{ asset('frontend/images/resource/profile.jpg') }}" alt=""/> {{ auth()->user()->first_name.' '.auth()->user()->last_name }} <i class="la
    la-angle-down text-dark"></i></span>
    @include('include.candidate._menu')
</div>
