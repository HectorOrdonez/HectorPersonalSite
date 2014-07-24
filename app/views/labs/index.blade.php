<!DOCTYPE html>

<!--

Welcome to my Labs, source-code reader.

Hector.

24/07/2014

-->

<html>
<head>

    <title>Hector Labs</title>

    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name='description' content='Hector Labs'>

    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/labs/css/foundation.css"/>
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/labs/css/normalize.css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Config::get('app.url') }}/online-cv/images/me.png" type="image/icon">
    <link rel="icon" href="{{ Config::get('app.url') }}/online-cv/images/me.png" type="image/icon">

    <!-- Pre rendering scripts -->
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar">
    <ul class="title-area">
        <li class="name"><h1><a href='http://{{ getenv('SITE_URL') }}'>Hector Labs</a></h1></li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="#section_about">About</a></li>
            <li><a href="#section_who">Who is wrong</a></li>
            <li><a href="#section_related">People you might know</a></li>
        </ul>
    </section>
</nav>
<br>
<div class="row">
    <div class="large-8 columns">

        <div class="panel">
            <h2 id="section_about">
                You are <strong>wrong</strong>
            </h2>

            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
            </p>
        </div>

    </div>
    <div class="large-4 columns">

        <img src="{{ Config::get('app.url') }}/labs/img/BigWrongMan.png" alt="A Wrong Man">

    </div>
</div>

<hr/>

<div class="row">
    <div class="large-2 columns"><hr></div>
    <div class="large-8 columns">

        <h3 id="section_who">Who is <strong>Wrong</strong>?</h3>

        <p>
            <strong>You.</strong>
        </p>

        <div>When:</div>

        <p>
            While arguing with a girl.
        </p>

        <div>
            Sample:
        </div>
        <div>
            <img src="{{ Config::get('app.url') }}/labs/img/sample.jpg" alt="sample">
        </div>
    </div>
    <div class="large-2 columns"><hr></div>
</div>

<hr/>

<div class="row">
    <div class="large-12 columns">
        <h3 id="section_related">
            People you might know:
        </h3>
        <ul class="large-block-grid-4">

            <li><img src="{{ Config::get('app.url') }}/labs/img/BigWrongMan.png" alt="A Wrong Man"></li>
            <li><img src="{{ Config::get('app.url') }}/labs/img/BigWrongMan.png" alt="A Wrong Man"></li>
            <li><img src="{{ Config::get('app.url') }}/labs/img/BigWrongMan.png" alt="A Wrong Man"></li>
            <li><img src="{{ Config::get('app.url') }}/labs/img/BigWrongMan.png" alt="A Wrong Man"></li>
        </ul>
    </div>
</div>

<!-- JS Libraries -->
<script type="text/javascript" src="{{ Config::get('app.url') }}/labs/js/vendor/jquery.js"></script>
<script type="text/javascript" src="{{ Config::get('app.url') }}/labs/js/foundation/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>