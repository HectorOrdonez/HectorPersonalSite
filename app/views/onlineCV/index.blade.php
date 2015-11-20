<!DOCTYPE html>

<!--

Welcome to my Site, source-code reader.

I have tried to make it as beautiful as possible, as I personally believe that the way a developer codes reflects
how much he or she cares about quality.

Thanks to jQuery and LetterFx for their contributions.
And to PHPStorm for being so awesome.

Hector.

30/04/2014

Updated 20/11/2015

-->

<html>
<head>

    <title>Hector, Web Developer expert in PHP, SQL, JS and CSS.</title>

    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name='description'
          content='My name is Hector and I am a Web Developer, expert in PHP, SQL, JS and CSS. In this site I hope to illustrate my skills and features while making you have a nice experience with the visuals and design.'>

    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/css/mediaQueries.css"/>
    <link rel="stylesheet" type="text/css" href="{{ Config::get('app.url') }}/css/external/letterFx.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic|Raleway:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Config::get('app.url') }}/img/me.png" type="image/icon">
    <link rel="icon" href="{{ Config::get('app.url') }}/img/me.png" type="image/icon">
</head>
<body>

<!--
    The navigation panel.
    In the navigation panel are the "title" of the site at left and a button at right for phones and iPads and links to site's sections for bigger screens
-->
<nav id='nav'>
    <div class='wrapper'>
        <a title='Hector, the Amazing Developer' class='ftype_navTitle' href='#nav'>Hector</a>

        <div class='button'>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <ul>
            <li>
                <a title='what I know' class='ftype_navLink' href='#articleTheSkills'>what I know</a>
            </li>
            <li>
                <a title='The Person' class='ftype_navLink' href='#articleThePerson1'>who am I</a>
            </li>
            <li>
                <a title='The Works' class='ftype_navLink' href='#articleTheWorks'>what I do</a>
            </li>
            <li>
                <a title='The Difference' class='ftype_navLink' href='#articleTheDifference'>why me</a>
            </li>
            <li>
                <a title='Contact me' class='ftype_navLink' href='#mainFooter'>contact!</a>
            </li>
        </ul>
    </div>
</nav>

<!--
    The header.
    Or how to present myself as awesome as possible right after site opens.
-->
<header class='section' id='mainHeader'>
    <div class='wrapper'>
        <div>
            <h2 class='title ftype_mainSubtitle'>
                My name is Hector, and I am an
            </h2>
        </div>
        <div>
            <h1 class='title ftype_mainTitle'>
                International Web Developer
            </h1>
        </div>
        <div>
            <h2 class='title ftype_mainSubtitle'>
                Expert in PHP, SQL, JS and CSS.
            </h2>
        </div>
    </div>
</header>

<!--
    The articles
    Here the page content.
-->

<article class='section' id='articleTheSkills'>
    <div class='wrapper'>
        <header>
            <h2 class='ftype_sectionTitle'>
                what I know
            </h2>
        </header>

        <div class='knowledge masterOfPHP'>
            <div class='symbol'>
                <div class='knowledgeName'>
                    <svg width="100%" height="35%" viewBox="-1 0 1 15">
                        <text class='ftype_svg' x="0" y="13">PHP</text>
                    </svg>
                </div>
            </div>
            <div class='text hiddenIfUnscrolled ftype_sectionContent'>
                <ul>
                    <li>
                        Object Oriented and PHP5.5
                    </li>
                    <li>
                        Laravel, Kohana and Custom PHP Frameworks.
                    </li>
                    <li>
                        Design patterns such as Factory, Decorator or MVC.
                    </li>
                    <li>
                        Tested software is better software.
                    </li>
                </ul>
            </div>
        </div>

        <div class='knowledge masterOfSQL'>
            <div class='symbol'>
                <div class='knowledgeName'>
                    <svg width="100%" height="35%" viewBox="-1 0 1 15">
                        <text class='ftype_svg' x="0" y="13">SQL</text>
                    </svg>
                </div>
            </div>
            <div class='text hiddenIfUnscrolled ftype_sectionContent'>
                <ul>
                    <li>
                        Complex queries: different join types and sub-queries.
                    </li>
                    <li>
                        Relational Database design.
                    </li>
                    <li>
                        Experience with large tables (more than 50 million records).
                    </li>
                </ul>
            </div>
        </div>

        <div class='knowledge masterOfCSS'>
            <div class='symbol'>
                <div class='knowledgeName'>
                    <svg width="100%" height="35%" viewBox="0 0 1 15">
                        <text class='ftype_svg' x="0" y="13">CSS</text>
                    </svg>
                </div>
            </div>
            <div class='text hiddenIfUnscrolled ftype_sectionContent'>
                <ul>
                    <li>
                        CSS3 - Transforms, backgrounds, gradients, etc.
                    </li>
                    <li>
                        Experience with Sass, Scss, Less
                    </li>
                    <li>
                        Web Responsive design and mobile first
                    </li>
                </ul>
            </div>
        </div>

        <div class='knowledge masterOfJS'>
            <div class='symbol'>
                <div class='knowledgeName'>
                    <svg width="100%" height="35%" viewBox="0 0 1 15">
                        <text class='ftype_svg' x="0" y="13">JS</text>
                    </svg>
                </div>
            </div>
            <div class='text hiddenIfUnscrolled ftype_sectionContent'>
                <ul>
                    <li>
                        Object Oriented.
                    </li>
                    <li>
                        Experience with Ajax and Turbolinks
                    </li>
                    <li>
                        Experience with jQuery and CoffeeScript
                    </li>
                </ul>
            </div>
        </div>

    </div>
</article>

<article class='section articleThePerson' id='articleThePerson1'>
    <div class='wrapper spacer'>
        <header>
            <h2 class='ftype_sectionTitle'>
                professional traits
            </h2>
        </header>
        <div class='traits'>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitPuzzleSolver'></div>
                <div class='ftype_traitTitle'>Puzzle Solver</div>
                <div class='ftype_traitContent'>Impossible is nothing</div>
            </div>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitGoalFocused'></div>
                <div class='ftype_traitTitle'>Goal focused</div>
                <div class='ftype_traitContent'>What matters is to get the job done</div>
            </div>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitAttentionToDetails'></div>
                <div class='ftype_traitTitle'>Attention to details</div>
                <div class='ftype_traitContent'>In the little things lays perfection</div>
            </div>
        </div>
    </div>
</article>
<article class='section articleThePerson' id='articleThePerson2'>
    <div class='wrapper spacer'>
        <header>
            <h2 class='ftype_sectionTitle'>
                personal traits
            </h2>
        </header>
        <div class='traits'>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitMusician'></div>
                <div class='ftype_traitTitle'>I love guitars</div>
                <div class='ftype_traitContent'>specially left-handed ones!</div>
            </div>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitTraveller'></div>
                <div class='ftype_traitTitle'>Traveller</div>
                <div class='ftype_traitContent'>discovering new places is an exciting adventure</div>
            </div>
            <div class='personalTrait col col1of3'>
                <div class='image' id='personalTraitBalanceLife'></div>
                <div class='ftype_traitTitle'>Mens sana in corpore sano</div>
                <div class='ftype_traitContent'>A successful life begins with successful habits</div>
            </div>
        </div>
    </div>
</article>

<article class='section' id='articleTheWorks'>
    <div class='wrapper'>
        <header>
            <h2 class='ftype_sectionTitle'>
                what I do
            </h2>
        </header>

        <div id='projectContainer'>
            <div class='col col1of3'>
                <div class='project' id='sample1'></div>
            </div>
            <div class='col col1of3'>
                <div class='project' id='sample2'></div>
            </div>
            <div class='col col1of3'>
                <div class='project' id='sample3'></div>
            </div>
            <div class='col col1of3'>
                <div class='project' id='sample4'></div>
            </div>
            <div class='col col1of3'>
                <div class='project' id='sample5'></div>
            </div>
            <div class='col col1of3'>
                <div class='project' id='sample6'></div>
            </div>
        </div>
    </div>
</article>

<article class='section' id='articleTheDifference'>
    <div class='wrapper'>
        <header>
            <h2 class='ftype_sectionTitleDark'>
                why me
            </h2>
        </header>

        <div class='content spacer'>
            <div class='block block4' id='theDifference_enthusiast'>
                <div class='iconWrapper'>
                    <div class='image'></div>
                </div>

                <div class='text'>
                    <div class='ftype_subSectionTitle'>
                        Enthusiast
                    </div>
                    <div class='ftype_subSectionContent'>
                        <p>
                            I do love my job!
                        </p>
                    </div>
                </div>
            </div>
            <div class='block block4' id='theDifference_adventurer'>
                <div class='iconWrapper'>
                    <div class='image'></div>
                </div>

                <div class='text'>
                    <div class='ftype_subSectionTitle'>
                        Adventurer
                    </div>
                    <div class='ftype_subSectionContent'>
                        <p>
                            Easy is boring!
                        </p>
                    </div>
                </div>
            </div>
            <div class='block block4' id='theDifference_proactive'>
                <div class='iconWrapper'>
                    <div class='image'></div>
                </div>

                <div class='text'>
                    <div class='ftype_subSectionTitle'>
                        Proactive
                    </div>
                    <div class='ftype_subSectionContent'>
                        <p>
                            Rather than reactive!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<footer class='section' id='mainFooter'>
    <div class='wrapper'>
        <header>
            <h2 class='ftype_sectionTitleDark'>
                contact me
            </h2>
        </header>

        <div class='content spacer'>
            <div class="block block4">
                <div>
                    <p class='ftype_sectionContentDark'><span class='icon phone'></span> (+31) 638 617 308</p>

                    <p class='ftype_sectionContentDark'><span class='icon mail'></span> hjavierog@gmail.com</p>

                    <p>
                        <a class='ftype_sectionContentDark' title='Download my resume' href="{{ Config::get('app.url') }}/docs/HectorOrdonez-ENG.pdf">
                            <span class='icon download'></span>download my resume
                        </a>
                    </p>
                </div>
            </div>

            <div class='block block8'>

                <form id='formWrapper'>
                    <label class='ftype_sectionContentDark' for='nameInput'>Name</label>
                    <input class='input ftype_input' type="text" name="name" id="nameInput" value=''>

                    <label class='ftype_sectionContentDark' for='mailInput'>eMail</label>
                    <input class='input ftype_input' type="text" name="mail" id="mailInput" value=''>

                    <label class='ftype_sectionContentDark' for='messageInput'>Message</label>
                    <textarea class='input ftype_input' name='message' id="messageInput"></textarea>

                    <input class='ftype_sectionContentDark' type="button" name="buttonForm" value="send" id="buttonForm">

                    <div class='ftype_userMessage' id='contactAnswerDisplayer'></div>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- Web navigation panel - For little screens only -->

<div class='section' id='webNavPanel'>
    <ul>
        <li>
            <a title='my labs' class='ftype_navLink' href="{{ Config::get('app.url') }}/labs">my labs</a>
        </li>
        <li>
            <a title='what I know' class='ftype_navLink' href='#articleTheSkills'>what I know</a>
        </li>
        <li>
            <a title='The Person' class='ftype_navLink' href='#articleThePerson1'>who am I</a>
        </li>
        <li>
            <a title='The Works' class='ftype_navLink' href='#articleTheWorks'>what I do</a>
        </li>
        <li>
            <a title='The Difference' class='ftype_navLink' href='#articleTheDifference'>why me</a>
        </li>
        <li>
            <a title='Contact me' class='ftype_navLink' href='#mainFooter'>contact!</a>
        </li>
    </ul>
</div>

<!-- Project overlays -->
<!-- @todo Use only one window, and change its content with JS. -->

@include('onlineCV/partials/project-window-1')
@include('onlineCV/partials/project-window-2')
@include('onlineCV/partials/project-window-3')
@include('onlineCV/partials/project-window-4')
@include('onlineCV/partials/project-window-5')
@include('onlineCV/partials/project-window-6')

<!-- JS Libraries -->
<script type="text/javascript" src="{{ Config::get('app.url') }}/js/external/jquery.js"></script>
<script type="text/javascript" src="{{ Config::get('app.url') }}/js/awesomeHectorWebsite.js"></script>
<script type="text/javascript" src="{{ Config::get('app.url') }}/js/external/letterFx.js"></script>

@if (getenv('APP_ENV') == 'production')

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-50504399-1', 'hector-ordonez.com');
    ga('send', 'pageview');
</script>

@endif
</body>
</html>