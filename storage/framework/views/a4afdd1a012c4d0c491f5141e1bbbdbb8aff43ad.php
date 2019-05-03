<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Lickdrum</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/beat.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header id="header">
        <div class="content-wrap">
            <div class="logo" id="logo">LICKDRUM</div>
            <nav class="topnav" id="myTopnav">
                <ul>
                    <li>
                        <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <li><a href="#beats">Beats</a></li>
                    <li><a href="#licks">Licks</a></li>
                    <li><a href="#posts">About</a></li>
                    <li id="contact"><a href="#about" id="contact">Contact</a></li>
                    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
                </ul>
                
            </nav>
            
            
        </div>
    </header>
    <div class="content">
    <div class="content-wrap">
        <h1>"Immigrant Song" (Led Zepplin)</h1>
        <img src="http://www.freedrumlessons.com/media/drum-lessons/latin-drumming/songo-drum-beats-2.gif" id="sheets"/>
        <div id="sample"><iframe width='500' height='294' src="https://www.youtube.com/embed/anP2CU8qb38?&theme=light&autohide=2&showinfo=0"frameborder="0"></iframe></div>
        <div id="tags">
            <ul>
                <h3>Tags:</h3>
                <a href="#"><li>john bonham</li></a>
                <a href="#"><li>stoob</li></a>
                <a href="#"><li>shnoops</li></a>
                <a href="#"><li>poopdy scoop</li></a>
                <a href="#"><li>penis</li></a>
            </ul>
        </div>
        <div id="gear">
            <h3>Gear Used for Recording</h3>
            <ul>
                <li><a href="https://www.amazon.com/Vic-Firth-American-Classic-Sticks/dp/B0002F741Q/ref=sr_1_4?ie=UTF8&qid=1531945568&sr=8-4&keywords=vic+firth+5a">Vic Firth American Classic 5A Drum Sticks</a></li>
                <li><a href="https://www.amazon.com/Evans-Coated-Drum-Head-Inch/dp/B0002D0DA2/ref=sr_1_1?s=musical-instruments&ie=UTF8&qid=1531945944&sr=1-1&keywords=evans+g1">Evans G1 Coated Drum Head</a></li>
                <li><a href="https://www.amazon.com/Gretsch-Drums-Catalina-3-Piece-Shell/dp/B01MV18298/ref=sr_1_6_sspa?s=musical-instruments&ie=UTF8&qid=1531946020&sr=1-6-spons&keywords=gretsch+catalina+club+jazz+4-piece+shell+pack&psc=1">Gretsch Drums Catalina Club Jazz 3-Piece </a></li>
            </ul>
        </div>
        </div>
    </div>
    <footer class="footer">
        <div class="content-wrap">
        <ul>
            <li><a href="#beats">Beats</a></li>
            <li><a href="#licks">Licks</a></li>
            <li><a href="#posts">About</a></li>
            <li id="contact"><a href="#about" id="contact">Contact</a></li>    
        </ul>    
        <p>&copy; 2018 LICKDRUM.COM ALL RIGHTS RESERVED </p>
        </div>
    </footer>
    <script src="<?php echo e(asset('js/nav.js')); ?>" type="application/javascript"></script>
</body>
</html>