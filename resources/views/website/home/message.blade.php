<section class="message-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img src="{{ $message->banner_image }}">
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="heading">
                    <h1 class="mb--18">{{ $message->caption }}</h1>
                    <hr class="delimeter mb--22">
                </div>
                <p class="mb--15"> {!! htmlspecialchars_decode($message->short_content ?? '') !!} <a href="//aboutus/message-from-md" class="read-more-text">Read More +</a>
                </p>
                <h3> {!! htmlspecialchars_decode($message->long_content ?? '') !!}</h3>
                
            </div>
        </div>
    </div>
</section>