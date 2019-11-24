@if (auth()->check() && auth()->user()->user_role == 'advertiser')
    @include('advertiser.dashboard')
@elseif (auth()->check() && auth()->user()->user_role == 'candidate')
    @include('candidate.dashboard')
@endif
