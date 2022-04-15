@extends('layouts.agent')

@section('agentcontent')
<section class="section bg-white p-3">
    <h3 class="text-dark">Contact List</h3>

    <table id="dealsTable" class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Occupation</th>
                <th>Email</th>
                <th>Call</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (auth()->user()->Contacts as $contact)
            <tr>
                <td>{{$contact->Name}}</td>
                <td>{{$contact->Mobile}}</td>
                <td>{{$contact->Address}}</td>
                <td>{{$contact->Occupation}}</td>
                <td>{{$contact->Email}}</td>
                <td><a href="tel:{{$contact->Mobile}}" class="btn bg-none">Call</a></td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><span>Select</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="/agent/contacts/edit/{{$contact->id}}">Edit</a></li>
                            <li><a class="nav-link" href="/agent/contacts/delete/{{$contact->id}}">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection('agentcontent')
