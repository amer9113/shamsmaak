<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/slider.htm */
class __TwigTemplate_a1c48df59eceda70d155c4c68fc0a3299c7875fa37a79fe2cee56c28a425f41e extends Twig_Template
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
        echo "<div class=\"flexslider\">

    <ul class=\"slides\">
        <!--<div class=\"slider-caption\">-->
            <!--<div id=\"outer\" style=\"width:100%\">-->
                <!--<div id=\"inner\"><img src=\"/themes/jtherczeg-grill/assets/imageDefault/logo.png\"-->
                                     <!--style=\"max-width: 400px\"/></div>-->
            <!--</div>-->
        <!--</div>-->
        <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/imageTop.png");
        echo "\" alt=\"\"/>
        </li>

    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"flexslider\">

    <ul class=\"slides\">
        <!--<div class=\"slider-caption\">-->
            <!--<div id=\"outer\" style=\"width:100%\">-->
                <!--<div id=\"inner\"><img src=\"/themes/jtherczeg-grill/assets/imageDefault/logo.png\"-->
                                     <!--style=\"max-width: 400px\"/></div>-->
            <!--</div>-->
        <!--</div>-->
        <img src=\"{{ 'assets/images/imageTop.png'|theme }}\" alt=\"\"/>
        </li>

    </ul>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/slider.htm", "");
    }
}
