@extends('plugin-layout')
@section('content')
    <h1>Send Newsletter</h1>
    <form method="POST" action="/plugin/omniletter/sendNewsletter">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject">
        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea>
        <button type="submit">Send</button>
    </form>
@endsection