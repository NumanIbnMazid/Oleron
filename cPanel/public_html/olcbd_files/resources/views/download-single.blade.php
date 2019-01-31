@extends('layouts.app')

{{-- Page Title Starts Here --}}
@section('title')
    {{ $downloads -> title }}
@endsection
{{-- Page Title Ends Here --}}

@section('content')

    <center><a href="/downloads"> - Downloads - </a></center>
    <input type="submit" class="btn btn-info" value="Click here to print PDF" onclick="myPrint();" />

    <div id="studenRsult" style="background-color:aliceblue;">
        <div id="printDIV">
            <div id="hiddenDiv" style="display: none;background-color:#f5f5dc; font-family:Bahnschrift; margin-bottom: 30px;">
                <center>
                    <h1 style="color: #00B0C7">Oléron Law & Co.</h1>
                    <p style="font-style: italic; color: #8996A8">www.olcbd.com</p>
                </center>
                <hr>
                <p style="font-size: 20px;"><span style="color:#0e3677;font-family:Bahnschrift; font-weight: 700;">Title: </span> <span style="color:#0e3677; font-family: cursive"> {{ $downloads -> title }} </span></p>

                <div class="container" style="font-family:'Roboto', sans-serif; font-size: 15px; line-height: 25px;margin-bottom: 30px;">
                    <p>
                        {!! $downloads -> content !!}
                    </p>
                </div>
                <hr>
                <p class="copyright" style="font-size: 10px; color:#d8d8d8 !important;">
                    Copyright: {{ date("Y") }}<span> &copy; olcbd.com ||</span> Website Designed and Developed by "Numan Ibn Mazid".
                </p>
            </div>


        </div>
    </div>

    <div id="featured-card-section">
        <div class="container-full">
            <div class="w-row">
                <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                    <div class="correct center featured-card">
                        {{-- Main Content Starts Here --}}
                        <p style="font-family:'Berlin Sans FB'; font-size: 17px; color: #2e383c;">
                            {!! $downloads -> content !!}
                        </p>
                        {{-- Main Content Ends Here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script language="javascript">
        function myPrint() {
            var myPrintContent = document.getElementById('printDIV');
            var myPrintWindow = window.open('left=300,top=100,width=400,height=400');
            myPrintWindow.document.write(myPrintContent.innerHTML);
            myPrintWindow.document.getElementById('hiddenDiv').style.display = 'block';
            myPrintWindow.document.close();
            myPrintWindow.focus();
            myPrintWindow.print();
            myPrintWindow.close();
            return false;
        }
    </script>

@endsection
