<!DOCTYPE html>
<html>
<head>
    <title>@yield ('title') {{ config('config.name') }} | {{ config('config.title') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('style/favicon.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/weather.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    @yield ('style')
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" media="(max-width:768px)" href="{{ asset('style/css/responsive-0.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{ asset('style/css/responsive-768.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{ asset('style/css/responsive-992.css') }}">
    <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{ asset('style/css/responsive-1200.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper" class="boxed">            
        <!-- Header -->
        <header id="header" role="banner">                
            <!-- Header meta -->
            <div class="header_meta">
                <div class="container">
                    <!-- Top menu -->
                    <nav class="top_navigation" role="navigation">
                        <span class="top_navigation_toggle">
                            <i class="fa fa-reorder"></i>
                        </span>
                        <ul class="menu">
                            <li><a href="{{ config('config.link.forum') }}" target="_blank">Forum</a></li>
                            <li><a href="{{ config('config.link.barbok') }}" target="_blank">Barbok</a></li>
                            <li><a href="{{ config('config.link.teamspeak') }}" target="_blank">Teamspeak</a></li>
                            <li class="search_icon_form"><a href="#"><i class="fa fa-search"></i></a>
                                <div class="sub-search">
                                    <form method="get" action="">
                                        <input type="search" placeholder="Rechercher...">
                                        <input type="submit" value="OK">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Top menu -->
                </div>
            </div>
            <!-- End Header meta -->
            <!-- Header main -->
            <div id="header_main" class="sticky header_main">
                <div class="container">
                    <!-- Logo -->
                    <div class="site_brand">
                        <h1 id="site_title"><a href="{{ route('homepage') }}">{{ config('config.name') }}</a></h1>
                        <h2 id="site_description">{{ config('config.title') }}</h2>
                    </div>
                    <!-- End Logo -->
                    <!-- Site navigation -->
                    <nav class="site_navigation" role="navigation">
                        <span class="site_navigation_toggle"><i class="fa fa-reorder"></i></span>
                        <ul class="menu">
                            <li class="menu-item-has-children"><a>Dofus<div class="subtitle">L'univers</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('map') }}">Carte du Monde des Douze</a></li>
                                    @if (Auth::guest())
                                    <li><a href="{{ route('account.register') }}">Créer un compte</a></li>
                                     <li><a href="{{ route('password.forget') }}">Mot de passe oublié ?</a></li>
                                    @endif
                                    <li><a href="{{ route('join') }}">Télécharger le jeu</a></li>
                                    <li><a href="{{ route('screenshots') }}">Screenshots</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a>Actualités<div class="subtitle">Les informations</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('homepage') }}">News</a></li>
                                    <li><a href="{{ config('config.link.forum') }}" target="_blank">Forum</a></li>
                                    <li><a href="{{ route('updates') }}">Mises à jours</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a>Communauté<div class="subtitle">Le coin des joueurs</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('player.armurerie') }}">Armurerie</a></li>
                                    <li><a href="{{ route('ladder.exp') }}">Classement</a></li>
									<li><a href="{{ route('dropwiever') }}">Dropwiever</a></li>
                                    <li><a href="{{ route('account.vote') }}">Vote & Gagne</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a>Encyclopédie<div class="subtitle">L'annuaire des douzes</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('encyclopedie.equipments') }}">Equipements</a></li>
                                    <li><a href="{{ route('encyclopedie.weapons') }}">Armes</a></li>
                                    <li><a href="{{ route('encyclopedie.ressources') }}">Ressources</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a>Avantages<div class="subtitle">La boutique du serveur</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('shop.all') }}">Le grand Bazar</a></li>
                                    <li><a href="{{ route('exchange.kamas') }}">Bourses aux Kamas</a></li>
                                    <li><a href="{{ route('exchange.ogrines') }}">Bourses aux Ogrines</a></li>
                                    <li><a href="">Services</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a>Support<div class="subtitle">L'assistance</div></a>
                                <span class="site_sub_menu_toggle"></span>
                                <ul class="sub-menu" jQuery>
                                    <li><a href="{{ route('rules') }}">Règlements et Sanctions</a></li>
                                    <li><a href="{{ route('staff') }}">L'équipe de Modération</a></li>
                                    <li><a href="{{ route('status') }}">Statut des serveurs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Site navigation -->
                </div>
            </div>
            <!-- End Header main -->
        </header>
        <!-- End Header -->
        <!-- Section -->
        <section>
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div class="col col_9_of_12">
                        @if ($errors->any())
                        <div class="alert_message red">
                            <p>
                                @foreach ($errors->all() as $error)
                                &#x26a0; {{ $error }}<br />
                                @endforeach
                            </p>
                        </div>
                        @elseif (Session::has('error'))
                        <div class="alert_message red">
                            <p>&#x26a0; {{ Session::get('error') }}</p>
                        </div>
                        @elseif (Session::has('success'))
                        <div class="alert_message green">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif
                        @yield ('content')
                    </div>
                    <!-- End Main content -->
                    <!-- Sidebar -->
                    <div class="col col_3_of_12">
                        <div class="widget">
                            @if (Auth::guest())
                            <div class="widget_title"><h3>Connexion</h3></div>
                            <div id="login-form">
                                <form method="post" action="{{ route('account.login') }}">
                                    {{ csrf_field() }}
                                    <p>
                                        <label>Nom de compte</label>
                                        <input class="form-control" type="text" name="login" placeholder="Nom de compte" value="{{ old('login') }}">
                                    </p>
                                    <p>
                                        <label>Mot de passe</label>
                                        <input class="form-control" type="password" name="password" placeholder="********">
                                    </p>
                                    <center><button class="btn btn_blue" type="submit">Se connecter</button></center>
                                </form>
                            </div>
                            @else
                            <div class="widget_title"><h3>Panel Membre</h3></div>
                            <div class="item clearfix">
                                <img src="{{ asset('style/img/avatar/'.Auth::user()->avatar.'.jpg') }}" style="width:100px;height:100px;" class="wp-caption alignleft"></img>
                                <P> 
                                Bienvenu {{ Auth::user()->pseudo }}<br>
                                Ogrine(s) : {{ Auth::user()->points }}<br>
                                Vote(s) : {{ Auth::user()->votes }}
                                </p>
                                <br />
                                <a class="btn btn_blue btn_expand" href="{{ route('account.manage') }}">Mon compte</a>
                                <a class="btn btn_blue btn_expand" href="{{ route('shop.all') }}">Boutique</a>
                                <a class="btn btn_blue btn_expand" href="{{ route('account.vote') }}">Vote & Gagne</a>
                                @if (Auth::user()->admin)
                                <a class="btn btn_blue btn_expand" href="">Administration</a>
                                @endif
                                <a class="btn btn_red btn_expand" href="{{ route('account.logout') }}">Déconnexion</a>
                            </div>
                            @endif
                        </div>
                        <!-- Widget Search widget -->
                            <div class="widget">
                                <div class="widget_title"><h3>Recherche</h3></div>
                                <div class="tb_widget_search">
                                    <form action="{{ route('encyclopedie.search') }}">
                                        <input type="text" name="q" class="form-control">
                                        <input type="submit" value="rechercher">
                                    </form>
                                </div>
                            </div>
                        <!-- End Widget Search widget -->
                        <div class="widget">
                            @php
                            $best_players = Cache::remember('players_master', 30, function () {
                                return App\Models\Player::orderBy('xp', 'desc')->take(3)->get();
                            });
                            @endphp
                            <div class="widget_title"><h3>TOP Joueurs</h3></div>
                            <div class="tb_widget_top_rated clearfix">
                                @foreach ($best_players as $pos => $player)
                                <!-- Post item -->
                                <div class="item clearfix">
                                    <div class="item_thumb clearfix">
                                        <a href=""><img src="{{ asset('style/img/persos/race/headsMed/'.$player->class.'_'.$player->sexe.'.png') }}" alt="Post" class="visible animated"></a>
                                    </div>
                                    <div class="item_content">
                                        <h4><a href="">{{ $player->name }}</a></h4>
                                        <i>{{ config('config.servers')[$player->server]['name'] }}</i>
                                        <h5>{{ number_format($player->xp, 0, '.', ' ') }} XP</h5>
                                    </div>
                                    <div class="order">{{ $pos + 1 }}</div>
                                </div>
                                <!-- End Post item -->
                                @endforeach
                            </div>
                        </div>
                        <!-- End Widget top rated -->
                        @php
                        $screenshots = Cache::remember('screenshots_master', 60, function () {
                            return App\Models\Screenshot::orderByRaw('rand()')->take(4)->get();
                        });
                        @endphp
                        <!-- Widget Banners 125 -->
                        <div class="widget">
                            <div class="widget_title"><h3>Screenshots</h3></div>
                            <div class="tb_widget_banner_125 clearfix">
                                @foreach ($screenshots as $screenshot)
                                <a href="{{ route('screenshots') }}" target="_blank">
                                    <img src="{{ asset('style/img/screenshots/'.$screenshot->src.'.png') }}" alt="Screenshot">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="content_slider">
                            <div class="widget">
                                <div class="widget_title"><h3>Services</h3></div>
                                <ul>
                                    <!-- Item -->
                                    <li>
                                        <a href="post_single.html"><img src="{{ asset('style/img/shop/services/sex.jpg') }}" alt="Slider"></a>
                                    </li><!-- End Item -->
                                    <!-- Item -->
                                    <li>
                                        <a href="post_single.html"><img src="{{ asset('style/img/shop/services/color.jpg') }}" alt="Slider"></a>
                                    </li><!-- End Item -->
                                    <!-- Item -->
                                    <li>
                                        <a href="post_single.html"><img src="{{ asset('style/img/shop/services/name.jpg') }}" alt="Slider"></a>
                                        </div>
                                    </li><!-- End Item -->
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Banners 125 -->
                    </div>
                    <!-- End Sidebar -->
                </div>
        </section>
        <!-- End Section -->
        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col col_4_of_12">
                        <!-- Widget Text widget -->
                        <div class="widget">
                            <div class="widget_title"><h3>{{ config('config.name') }}</h3></div>
                            <p>{{ config('config.name') }} est une communauté qui a été créer par des joueurs pour des joueurs.</p>
                            <p>Venez vous aventurer dans la nouvelle aire de jeu d'un nouveau mode complètement travailler.</p>
                        </div>
                        <!-- End Widget text widget -->
                        <!-- Widget Social widget -->
                        <div class="widget">
                            <div class="widget_title"><h3>Réseaux sociaux</h3></div>
                            <div class="tb_widget_socialize clearfix">
                                <a href="{{ config('config.social.facebook') }}" target="_blank" class="icon facebook">
                                    <div class="symbol"><i class="fa fa-facebook"></i></div>
                                    <div class="text"><p>Facebook</p></div>
                                </a>
                                <a href="{{ config('config.social.youtube') }}" target="_blank"  class="icon youtube">
                                    <div class="symbol"><i class="fa fa-youtube"></i></div>
                                    <div class="text"><p>Youtube</p></div>
                                </a>
                            </div>
                        </div>
                        <!-- End Widget Social widget -->
                    </div>
                    <div class="col col_4_of_12">
                        <div class="widget">
                            <img src="{{ asset('style/img/LogoSerenity.png') }}" title=""></img>
                        </div>
                    </div>
                    <div class="col col_4_of_12">
                        <!-- Widget recent posts -->
                        <div class="widget">
                            @php
                            $posts = Cache::remember('posts_master', 60, function () {
                                return App\Models\Post::orderBy('date', 'desc')->take(3)->get();
                            });
                            @endphp
                            <div class="widget_title"><h3>Dernières actualités</h3></div>
                            <div class="tb_widget_recent_list clearfix">
                                @foreach ($posts as $post)
                                <div class="item clearfix">
                                    <div class="item_thumb">
                                        <div class="thumb_icon">
                                            <a href="{{ route('post', [$post->id, str_slug($post->title)]) }}"><i class="fa fa-copy"></i></a>
                                        </div>
                                        <div class="thumb_hover">
                                            <a href="{{ route('post', [$post->id, str_slug($post->title)]) }}"><img src="{{ asset('style/img/news/'.$post->image.'.jpg') }}" alt="Post"></a>
                                        </div>
                                    </div>
                                    <div class="item_content">
                                        <h4><a href="{{ route('post', [$post->id, str_slug($post->title)]) }}">{{ $post->title }}</a></h4>
                                        <div class="item_meta clearfix">
                                            <span class="meta_date">{{ date_format(date_create($post->date), 'd/m/Y') }}</span>
                                            <span class="meta_comments"><a href="">{{ $post->comments()->count() }}</a></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Widget recent posts -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Copyright -->
        <div id="copyright" role="contentinfo">
            <div class="container">
                <p>&copy; {{ date('Y') }} {{ config('config.name') }}. Tous drois réservés.</p>
            </div>
        </div>
        <!-- End Copyright -->
    </div>
    <!-- End Wrapper -->
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('style/js/jqueryscript.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jqueryuiscript.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/easing.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('style/js/smoothscroll.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('style/js/magnific.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('style/js/bxslider.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('style/js/fitvids.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/viewportchecker.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('style/js/init.js') }}"></script>        
</body>
</html>