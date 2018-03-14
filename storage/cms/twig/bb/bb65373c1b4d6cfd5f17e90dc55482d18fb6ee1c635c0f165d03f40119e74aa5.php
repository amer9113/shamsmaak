<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/layouts/default_ar.htm */
class __TwigTemplate_cba00e5ac4e78ee31d789d99bd34f422511907efc6cf5d6a9341304e0f13b8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "<head>
    <link rel=\"stylesheet\" href=\"themes/jtherczeg-grill/assets/css/stylesheet.css\" type=\"text/css\" charset=\"utf-8\" />
    <link rel=\"stylesheet\" href=\"themes/jtherczeg-grill/assets/css/default.css\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/manifest.json\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/ms-icon-144x144.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
\t
<header>
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top_ar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav_ar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</header>

\t";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 36
        echo "    
<footer>
    <div class=\"container\">
       ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials_ar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom_ar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer_ar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "    </div>
</footer>
    
<!-- Scripts -->

<script src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>
<!--<script src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"></script>-->
<script src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery-3.1.1.js");
        echo "\"></script>
<script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.gmap3.min.js");
        echo "\"></script>
<script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<script src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 53
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 55
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/layouts/default_ar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  128 => 54,  121 => 53,  117 => 52,  113 => 51,  109 => 50,  105 => 49,  101 => 48,  97 => 47,  90 => 42,  85 => 41,  80 => 40,  76 => 39,  71 => 36,  69 => 35,  65 => 33,  60 => 32,  56 => 31,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
{% partial \"meta\" %}
<head>
    <link rel=\"stylesheet\" href=\"themes/jtherczeg-grill/assets/css/stylesheet.css\" type=\"text/css\" charset=\"utf-8\" />
    <link rel=\"stylesheet\" href=\"themes/jtherczeg-grill/assets/css/default.css\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/manifest.json\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"themes/jtherczeg-grill/assets/imageDefault/favicon.ico/ms-icon-144x144.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
\t
<header>
    {% partial \"top_ar\" %}
    {% partial \"nav_ar\" %}
</header>

\t{% page %}
    
<footer>
    <div class=\"container\">
       {% partial \"socials_ar\" %}
       {% partial \"bottom_ar\" %}
       {% partial \"footer_ar\" %}
    </div>
</footer>
    
<!-- Scripts -->

<script src=\"{{ 'assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js'|theme }}\"></script>
<!--<script src=\"{{ 'assets/vendor/jquery-1.11.0.min.js'|theme }}\"></script>-->
<script src=\"{{ 'assets/vendor/jquery-3.1.1.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/jquery.gmap3.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/plugins.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/layouts/default_ar.htm", "");
    }
}
