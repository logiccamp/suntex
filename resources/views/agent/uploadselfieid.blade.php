@extends ("layouts.agent")

@section("agentcontent")
<upload-selfieid :id="{{auth()->user()->id}}"></upload-selfieid>
</div>
@endsection("content")