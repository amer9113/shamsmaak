<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top.htm */
class __TwigTemplate_2dfa0cfa6d7d9e353648ee006b2a09b4744bea50e52f1ed08fcbc81a486463ee extends Twig_Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a>
                    ";
        // line 7
        if (($context["user"] ?? null)) {
            // line 8
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">My account</a>
                    ";
        }
        // line 10
        echo "                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <!--<i class=\"fa fa-shopping-cart\"></i>-->
                    ";
        // line 15
        if (($context["user"] ?? null)) {
            // line 16
            echo "
                    <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                    ";
        } else {
            // line 19
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Login</a>
                    ";
        }
        // line 21
        echo "



                    <!--(<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)-->
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 19,  47 => 16,  45 => 15,  38 => 10,  32 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"{{ 'home'|page }}\">Home</a>
                    {% if user %}
                    <a href=\"{{ 'login'|page }}\">My account</a>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <!--<i class=\"fa fa-shopping-cart\"></i>-->
                    {% if user %}

                    <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                    {% else %}
                    <a href=\"{{ 'login'|page }}\">Login</a>
                    {% endif %}




                    <!--(<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)-->
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top.htm", "");
    }
}
