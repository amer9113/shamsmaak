<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart.htm */
class __TwigTemplate_64160770d114a34d53db3d5fb69d841c3917e668e3f0cd7ec8b282ad21a9f2d6 extends Twig_Template
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
        echo "<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Who we are</h2>
                <img src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"containerHomePart\">

                <div class=\"top-left\"  id=\"firstPart\">Shaam Smaak is the Best</div>
                <div class=\"top-left\" id=\"secondPart\">
                    I know that this could be solved fairly easily with Javascript, but I'm only interested in a pure CSS solution.</div>
                <img src=\"/themes/jtherczeg-grill/assets/imageDefault/TopHomePart.png\" style=\"width: 100%;\"  alt=\"\" >
            </div>
        </div>
    </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Who we are</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"containerHomePart\">

                <div class=\"top-left\"  id=\"firstPart\">Shaam Smaak is the Best</div>
                <div class=\"top-left\" id=\"secondPart\">
                    I know that this could be solved fairly easily with Javascript, but I'm only interested in a pure CSS solution.</div>
                <img src=\"/themes/jtherczeg-grill/assets/imageDefault/TopHomePart.png\" style=\"width: 100%;\"  alt=\"\" >
            </div>
        </div>
    </div>

    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart.htm", "");
    }
}
