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
                    <a href=\"#\">My account</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    (<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)
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
        return array (  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"{{ 'home'|page }}\">Home</a>
                    <a href=\"#\">My account</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    (<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top.htm", "");
    }
}
