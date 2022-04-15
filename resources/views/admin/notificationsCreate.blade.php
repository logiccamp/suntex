@extends('layouts.admin')

@section('agentcontent')
<section class="section ">
    <h3 class="text-dark">Compose Messages</h3>
    <header class="d-flex justify-content-end">
        <a href="/agent/notifications" class="btn btn-link">Inbox</a>
        <a href="/agent/notifications/sent" class="btn btn-link">Sent</a>
    </header>
    
    <div class="card p-3">
        <form action="{{route('composeEmail')}}" method="post" class="form">
            @csrf
            <input type="text" hidden name="sender" value="6">
            <div class="form-group">
                <label for="#to">To</label>
                <select name="to" class="form-control form-select" id="to">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="#subject">Subject</label>
                <input required name="subject" type="text" id="subject" class="form-control">
            </div>

            <div class="form-group">
                <label for="#message">Message</label>
                <textarea required name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
            </div>

            <div class="card-footer">
                <label for="upload" class="label" style="cursor: pointer;"> Attach <i class="fa fa-attachment"></i> </label>
                <input type="file" hidden id="upload" name="attachment">
            </div>

            <div class="text-center">
                <input class="btn btn-success" type="submit" value="Send"/>
            </div>
        </form>
    </div>
    
</section>
@endsection('agentcontent')
