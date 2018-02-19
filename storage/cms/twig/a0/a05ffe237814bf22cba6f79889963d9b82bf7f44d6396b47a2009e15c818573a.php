<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products.htm */
class __TwigTemplate_f98ccbfa3bf7293bcc2a0ad18721e42eccc9b7e6c25bc4c042c9ef5dcea9c2f0 extends Twig_Template
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
                    <li><span class=\"filter\" data-filter=\".ginger\">Ginger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                    <li><span class=\"filter\" data-filter=\".pasta\">Pasta</span></li>
                    <li><span class=\"filter\" data-filter=\".drink\">Drink</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item Pizza\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product1.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/product1_big.jpg");
        echo "\"><img
                                        src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Vege Pizza</a></h3>
                        <span class=\"text-category\">\$16.00</span>
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
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  72 => 43,  66 => 40,  43 => 20,  27 => 7,  19 => 1,);
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
                    <li><span class=\"filter\" data-filter=\".ginger\">Ginger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                    <li><span class=\"filter\" data-filter=\".pasta\">Pasta</span></li>
                    <li><span class=\"filter\" data-filter=\".drink\">Drink</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item Pizza\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/product1.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product1_big.jpg'|theme }}\"><img
                                        src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">Vege Pizza</a></h3>
                        <span class=\"text-category\">\$16.00</span>
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
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/products.htm", "");
    }
}
