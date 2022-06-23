
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('New data Will Show') !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('Make me into a QrCode') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Phone Number</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->phoneNumber('111-222-6666') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Text Message</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->SMS('111-222-6666', 'Body of the message') !!}
            </div>
        </div>

    </div>
</body>
</html>
