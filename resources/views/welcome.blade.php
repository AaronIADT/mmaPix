@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-5f9725b7-d38e-4ce7-b2fd-d3841528fabb"></div> --}}



            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
        </div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            You are logged in as an Admin.
        </div>
    </div> --}}
    <h6a>Trending on reddit: </h6a>
    <iframe id="reddit-embed" src="https://www.redditmedia.com/r/MMA/comments/mvjrgb/nieky_holzken_unleashing_beautiful_violence_upon/?ref_source=embed&amp;ref=share&amp;embed=true" sandbox="allow-scripts allow-same-origin allow-popups" height="506"
      width="725" scrolling="no" style="border-style: none; width: 100%;"></iframe>


    <iframe id="reddit-embed" src="https://www.redditmedia.com/r/ufc/comments/mvi0yt/jon_anik_interview/?ref_source=embed&amp;ref=share&amp;embed=true" sandbox="allow-scripts allow-same-origin allow-popups" height="325" width="640" scrolling="no"
      style="border-style: none; width: 100%;"></iframe>

    <iframe id="reddit-embed" src="https://www.redditmedia.com/r/ufc/comments/mvi8xh/conor_mcgregor_grappling_match_never_before_seen/?ref_source=embed&amp;ref=share&amp;embed=true" sandbox="allow-scripts allow-same-origin allow-popups" height="343"
      width="640" scrolling="no" style="border-style: none; width: 100%;"></iframe>

    {{-- CORONA TRACKER     --}}

    {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-ca76b459-4188-4031-959e-f19e258e5373"></div> --}}
</div>


<div class="col-sm-4" style=" overflow: scroll; height: 600px;">
    <a class="twitter-timeline" href="https://twitter.com/ufc?ref_src=twsrc%5Etfw">Tweets by ufc</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
</div>
</div>
@endsection

@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection