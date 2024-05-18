<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Omniletter Integration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Omniletter Integration</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route(omniletter.settings) }}">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route(omniletter.sync) }}">Sync Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route(omniletter.newsletter) }}">Send Newsletter</a></li>
                </ul>
            </div>
        </nav>
        <div class="mt-4">
            @yield("content")
        </div>
    </div>
</body>
</html>
