<html>
<head>
    <title>Laravel Signature Pad Example - MyNotePaper.com</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Signature Pad</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('signpad.save') }}">
                            @csrf
                            <div class="col-md-12">
                                <label>Signature:</label>
                                <br/>
                                <div id="sig"></div>
                                <br/><br/>
                                <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                                <textarea id="signature" name="signed" style="display: none"></textarea>
                            </div>
                            <br/>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function (e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
</body>
</html>
