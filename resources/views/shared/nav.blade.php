<header id="header">
        <div class="content-wrap">
            <div class="logo" id="logo">LICKDRUM</div>
            <nav class="topnav" id="myTopnav">
                <ul>
                    <li>
                        <div>
                        <form method="get" action="{{ action('BeatsController@search') }}">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                            </div>
                    </li>
                    <li><a href="/#beats">Beats</a></li>
                    <li><a href="/#licks">Licks</a></li>
                    <li><a href="{{ action('PagesController@about') }}">About</a></li>
                    <li id="contact"><a href="/contact" id="contact">Contact</a></li>
                    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
                </ul>
                
            </nav>
            
            
        </div>
</header>