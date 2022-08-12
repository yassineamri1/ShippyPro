<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title><?php echo SITENAME; ?></title>
    <!-- My CSS -->
    <link rel="stylesheet" href="/ShippyPro/public/css/style.css">

    <!-- CSS Dependances -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/ShippyPro/public/bootstrap/css/bootstrap.min.css">

    <!-- JS Dependances -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<div class="container-l" style="margin-top: 5%">
    <div class="wrapper-l">
        <h2>Aereoporti</h2>

        <form action="/ShippyPro/airports/index" method ="POST" id="form-login">
            <select name="departure" id="departure">
                <option disabled selected value> -- Partenza -- </option>
            </select>
            <select name="arrival" id="arrival">
                <option disabled selected value> -- Destinazione -- </option>
            </select>
            <span class="invalidFeedback" id="span-airports"></span>

            <button id="submit" type="submit" value="submit">Cerca</button>
        </form>
    </div>
</div>

</html>

<script src="/ShippyPro/public/js/index.js"></script>

