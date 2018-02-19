<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products-old.htm */
class __TwigTemplate_9fad65913124ca99346e9163f2f490f563173d559ce141baa91e93ffc04e4165 extends Twig_Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Our Products</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/products");
        echo "\">Products</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"products-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"product-heading\">
                    <h2>Hungry ?</h2>
                    <img src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product6.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product6_big.jpg");
        echo "\"><img
                                        src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Hamburger</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Big Hamburger</a></h3>
                        <span class=\"text-category\">\$8.00</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product7.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product7_big.jpg");
        echo "\"><img
                                        src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Chocolate Cake</a></h3>
                        <span class=\"text-category\">\$14.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"pagination\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products-old.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 59,  96 => 58,  90 => 55,  73 => 41,  69 => 40,  63 => 37,  43 => 20,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Our Products</h2>
                    <span>Home / <a href=\"{{ 'samples/products'|page }}\">Products</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"products-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"product-heading\">
                    <h2>Hungry ?</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/product6.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product6_big.jpg'|theme }}\"><img
                                        src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Hamburger</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Big Hamburger</a></h3>
                        <span class=\"text-category\">\$8.00</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/product7.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product7_big.jpg'|theme }}\"><img
                                        src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Chocolate Cake</a></h3>
                        <span class=\"text-category\">\$14.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"pagination\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products-old.htm", "");
    }
}
