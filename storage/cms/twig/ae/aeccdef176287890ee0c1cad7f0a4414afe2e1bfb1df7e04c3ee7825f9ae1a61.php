<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/home.htm */
class __TwigTemplate_40b8cb942676fa1569a27ddcac07317adffb49121c04e3336e45b365a8899167 extends Twig_Template
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
        echo "<div id=\"slider_ar\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>


<!--<div id=\"services\">-->
    <!--";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->
<!--</div>-->
<div id=\"TopHomePart\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("TopHomePart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>

<div id=\"BodyHomePart\">
    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("BodyHomePart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "</div>

<div id=\"latest-blog\">
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latest-blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>What Customers Say</h2>
                <img src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  79 => 31,  71 => 26,  62 => 19,  58 => 18,  53 => 15,  49 => 14,  44 => 11,  40 => 10,  32 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"slider_ar\">
    {% partial \"slider\" %}
</div>


<!--<div id=\"services\">-->
    <!--{% partial \"services\" %}-->
<!--</div>-->
<div id=\"TopHomePart\">
    {% partial \"TopHomePart\" %}
</div>

<div id=\"BodyHomePart\">
    {% partial \"BodyHomePart\" %}
</div>

<div id=\"latest-blog\">
    {% partial \"latest-blog\" %}
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>What Customers Say</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t{% partial \"testimonials\" %}
\t</div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/home.htm", "");
    }
}
