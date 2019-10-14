@extends('layouts.master')
@section('content')
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif

    <div class="title m-b-md" style="background-color: black; color: red">
        FBI WARNING!
    </div>
        <a style="color: darkred">The FBI today warned the public to avoid falling victim to an ongoing mass video scheme wherein computer users receive unsolicited emails purportedly sent by the FBI. These loli video tell the recipients that their Internet use has been monitored by the FBI's Internet Fraud Complaint Center and that they have accessed illegal web sites. The emails then direct recipients to open an attachment and answer questions. The attachments contain a computer virus.
            These emails did not come from the FBI. Recipients of this or similar solicitations should know that the FBI does not engage in the practice of sending unsolicited emails to the public in this manner.
            Opening email attachments from an unknown sender is a risky and dangerous endeavor as such attachments frequently contain viruses that can infect the recipient's computer. The FBI strongly encourages computer users not to open such attachments.</a><br>
    <br>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
