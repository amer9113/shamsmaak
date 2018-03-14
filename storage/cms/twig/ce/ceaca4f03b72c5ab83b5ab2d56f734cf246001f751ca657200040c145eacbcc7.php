<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart_ar.htm */
class __TwigTemplate_80fd735f0010177ea1ebc4f9c80b3c866d82039efb1926dc03bdc878c804b947 extends Twig_Template
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
                <h2>من نحن</h2>
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

                <div class=\"top-left \"  id=\"firstPart\">المذاق الشامي هو الافضل</div>
                <div class=\"top-left\" id=\"secondPart\">
                   حكي حكي حكي حكي </div>
                <img src=\"/themes/jtherczeg-grill/assets/imageDefault/TopHomePart.png\" style=\"width: 100%;\"  alt=\"\" >
            </div>
        </div>
    </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart_ar.htm";
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
                <h2>من نحن</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"containerHomePart\">

                <div class=\"top-left \"  id=\"firstPart\">المذاق الشامي هو الافضل</div>
                <div class=\"top-left\" id=\"secondPart\">
                   حكي حكي حكي حكي </div>
                <img src=\"/themes/jtherczeg-grill/assets/imageDefault/TopHomePart.png\" style=\"width: 100%;\"  alt=\"\" >
            </div>
        </div>
    </div>

    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/TopHomePart_ar.htm", "");
    }
}
