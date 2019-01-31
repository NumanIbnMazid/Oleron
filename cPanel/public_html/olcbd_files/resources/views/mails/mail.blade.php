<h2 style="font-family: Algerian; color: #008cba;">Hi,</h2>
<h3 style="color:#6c71c4; font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase;">Dear Administrator of <span style="color: #3b8753; font-style: italic;">Oléron Law & Co.</span></h3>
<p>You have received this mail from your client <span style="color: #36393f;font-size: 15px;font-style: italic; font-weight: 700">{{ $name }}</span></p>

{{--<p>You have selected <span> {{ $service }} </span> service to get from us. </p>--}}

@if($service == 0)
    <p>{{ $name }} have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Custom" </span> service to get from you. </p>
@endif

@if($service == 1)
    <p>{{ $name }} have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Opinion" </span> service to get from you. </p>
@endif

@if($service == 2)
    <p>{{ $name }} have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Documentation" </span> service to get from you. </p>
@endif

@if($service == 3)
    <p>{{ $name }} have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Legal Research" </span> service to get from you. </p>
@endif

@if($service == 4)
    <p>{{ $name }} have selected <span style="font-family: Bahnschrift;font-style: italic; color: #00a4ba; font-weight: 700; font-size:15px;"> "Court/Advocate" </span> service to get from you. </p>
@endif

@if($content != null)
	<p><span style="color: #6B6B6B;">{{ $name }}'s Message : </span> <br>
		<span style="font-family: Bahnschrift; color: #0c0c0c"> {!! $content !!} </span>
	</p>
@endif

<p>{{ $name }}'s email : <span style="font-style: italic; color: #00a4ba">{{ $email }}</span></p>

<p style="color: #3b5487; font-style: italic;font-size: 14px;"> - Have a good day.</p>