@extends("OmniletterIntegration::layout")

@section("content")
<div class="card">
    <div class="card-header">
        Sync Contacts
    </div>
    <div class="card-body">
        @if(session("success"))
            <div class="alert alert-success">{{ session("success") }}</div>
        @endif
        <form action="{{ route("omniletter.sync.contacts") }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Sync Contacts</button>
        </form>
    </div>
</div>
@endsection
