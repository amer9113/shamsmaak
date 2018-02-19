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
        <li>
            <div class=\"slider-caption\">
                <h1>Delicious Meals</h1>
                <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                <br><br>eget tellus luctus fermentum.</p>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/single-post");
        echo "\">Shop Now</a>
            </div>
        <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slide1.jpg");
        echo "\" alt=\"\" />
        </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                    <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/single-post");
        echo "\">More Details</a>
                </div>
            <img src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slide2.jpg");
        echo "\" alt=\"\" />
            </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                    <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/single-post");
        echo "\">Get Ready</a>
                </div>
            <img src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slide3.jpg");
        echo "\" alt=\"\" />
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
        return array (  63 => 28,  58 => 26,  48 => 19,  43 => 17,  33 => 10,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <h1>Delicious Meals</h1>
                <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                <br><br>eget tellus luctus fermentum.</p>
                <a href=\"{{ 'samples/single-post'|page }}\">Shop Now</a>
            </div>
        <img src=\"{{ 'assets/images/slide1.jpg'|theme }}\" alt=\"\" />
        </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                    <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                    <a href=\"{{ 'samples/single-post'|page }}\">More Details</a>
                </div>
            <img src=\"{{ 'assets/images/slide2.jpg'|theme }}\" alt=\"\" />
            </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                    <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    <a href=\"{{ 'samples/single-post'|page }}\">Get Ready</a>
                </div>
            <img src=\"{{ 'assets/images/slide3.jpg'|theme }}\" alt=\"\" />
            </li>
        </ul>
    </div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/slider.htm", "");
    }
}
