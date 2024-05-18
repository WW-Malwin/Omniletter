@extends('OmniletterIntegration::layout')

@section('content')
<div class="card">
    <div class="card-header">
        Settings
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('omniletter.settings.save') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="api_key">Omniletter API Key</label>
                <input type="text" class="form-control" id="api_key" name="api_key" value="{{ $settings['api_key'] ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
