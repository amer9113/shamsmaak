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
            <div class=\"col-md-12\">
                <div class=\"home-account\">
                    <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" style=\"float: left;\">Home</a>
                    ";
        // line 7
        if (($context["user"] ?? null)) {
            // line 8
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" style=\"float: left;\">My account</a>
                    ";
        }
        // line 10
        echo "
                    ";
        // line 11
        if (($context["user"] ?? null)) {
            // line 12
            echo "
                    <a data-request=\"onLogout\" style=\"float: right;\" data-request-data=\"redirect: '/'\">Sign out</a>
                    ";
        } else {
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" style=\"float: right;\">Login</a>
                    ";
        }
        // line 17
        echo "
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home_ar");
        echo "\" style=\"float: right;\">(Arabische)</a>
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
        return array (  57 => 18,  54 => 17,  48 => 15,  43 => 12,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"home-account\">
                    <a href=\"{{ 'home'|page }}\" style=\"float: left;\">Home</a>
                    {% if user %}
                    <a href=\"{{ 'login'|page }}\" style=\"float: left;\">My account</a>
                    {% endif %}

                    {% if user %}

                    <a data-request=\"onLogout\" style=\"float: right;\" data-request-data=\"redirect: '/'\">Sign out</a>
                    {% else %}
                    <a href=\"{{ 'login'|page }}\" style=\"float: right;\">Login</a>
                    {% endif %}

                    <a href=\"{{ 'home_ar'|page }}\" style=\"float: right;\">(Arabische)</a>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top.htm", "");
    }
}
