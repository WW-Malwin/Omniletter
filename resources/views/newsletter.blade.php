@extends('OmniletterIntegration::layout')

@section('content')
<div class="card">
    <div class="card-header">
        Send Newsletter
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('omniletter.send.newsletter') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Newsletter</button>
        </form>
    </div>
</div>
@endsection
