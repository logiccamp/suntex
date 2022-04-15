@extends ("layouts.agent")

@section("agentcontent")
<upload-id :id="{{auth()->user()->id}}"></upload-id>
</div>
@endsection("content")