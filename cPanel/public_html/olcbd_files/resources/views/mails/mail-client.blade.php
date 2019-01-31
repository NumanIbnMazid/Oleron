<h2 style="font-family: Algerian; color: #008cba;">Hi,</h2>
<h3 style="color:#6c71c4; font-family: 'Roboto Condensed', sans-serif; font-style: italic; text-transform: uppercase;">{{ $name }}</h3>
<p style="color: #2b954b">Well received with thanks ! </p>

{{--<p>You have selected <span> {{ $service }} </span> service to get from us. </p>--}}

@if($service == 0)
    <p>You have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Custom" </span> service to get from us. </p>
@endif

@if($service == 1)
    <p>You have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Opinion" </span> service to get from us. </p>
@endif

@if($service == 2)
    <p>You have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Documentation" </span> service to get from us. </p>
@endif

@if($service == 3)
    <p>You have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Research" </span> service to get from us. </p>
@endif

@if($service == 4)
    <p>You have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Court/Advocate" </span> service to get from us. </p>
@endif

@if($content != null)
	<p><span style="color: #6B6B6B;">Your Message : </span> <br>
		<span style="font-family: Bahnschrift; color: #0c0c0c"> {!! $content !!} </span>
	</p>
@endif

@if($attachment != null)
	<p><span style="color: #6B6B6B;">Your Attachment file name : </span> <br>
		<span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-size:15px;"> {!! $attachment !!} </span>
	</p>
@endif
@if($attachment == null)
	<p style="display: none;"><span style="color: #6B6B6B;">Your Attachment file name : </span> 
		<span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-size:15px;display: none;"> {!! $attachment !!} </span>
	</p>
@endif

<p>You have sent this message form your email : <span style="font-style: italic; color: #00a4ba">{{ $email }}</span></p>

<p>For any emergency : </p>
<p>Feel free to call : <span style="font-family: Bahnschrift; color: #0000cc">+880 1855882378</span></p>

<p style="color: #3b5487; font-style: italic;font-size: 14px;"> - Thanks for being with us.</p>