<div class="heading text-center" style="margin-top: 50px">
    <h1 class="mb--18">Countries of Service</h1>
    <hr class="delimeter mx-auto mb--22">
</div>
<div class="brand-logo-area bg-color ptb--17" data-bg-color="#011c4a">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="element-carousel"
                    data-slick-options='{
                    "slidesToShow": 9,
                    "autoplay": true
                }'
                    data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {"slidesToShow": 7}},
                    {"breakpoint": 992, "settings": {"slidesToShow": 5}},
                    {"breakpoint": 768, "settings": {"slidesToShow": 4}},
                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                ]'>
                    @if (isset($client))
                        @foreach ($client as $client)
                            <div class="item">
                                <figure>
                                    <img src="{{ $client->banner_image }}" alt="Brand" class="mx-auto">
                                </figure>
                                <p style="    color: white; margin-left: 57px; margin-top: 2px; margin-bottom: -9px;">{{ $client->caption }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
