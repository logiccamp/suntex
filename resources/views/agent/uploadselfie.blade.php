@extends ("layouts.agent")

@section("agentcontent")
<upload-selfie :id="{{auth()->user()->id}}"></upload-selfie>
</div>
@endsection("content")