<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/nav.htm */
class __TwigTemplate_29d433c61e8a848e6624d0296c86ed9934f3d408bf96fd67c194b1d30838b9d2 extends Twig_Template
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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "Meals" => array(0 => "samples/Meals", 1 => "Meals"), "about" => array(0 => "samples/about-us", 1 => "About Us"), "products" => array(0 => "samples/products", 1 => "Products"), "contact" => array(0 => "samples/contact-us", 1 => "Contact"));
        // line 11
        echo "
";
        // line 32
        echo "
";
        // line 33
        $context["nav"] = $this;
        // line 34
        echo "
<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\" title=\"\" alt=\"\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"main-menu\">
                    <ul>
                        ";
        // line 46
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"search-box\">  
                    <form role=\"form\" name=\"search_form\" method=\"get\" class=\"search_form\">
                        <input id=\"search\" type=\"text\" />
                        <input type=\"submit\" id=\"search-button\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    // line 12
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 14
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href= \"";
                // line 16
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('Cms\Twig\Extension')->pageFilter(((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "page", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 17
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 18
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 20
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 22
                echo "            </a>
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    // line 24
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "render_menu", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())), "method"), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  123 => 26,  119 => 24,  117 => 23,  114 => 22,  110 => 21,  106 => 20,  100 => 18,  96 => 17,  92 => 16,  84 => 14,  79 => 13,  67 => 12,  48 => 46,  37 => 40,  29 => 34,  27 => 33,  24 => 32,  21 => 11,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t    'home':      ['home', 'Home'],
        'Meals':     ['samples/Meals', 'Meals'],
\t\t'about':     ['samples/about-us', 'About Us'],
\t\t'products':  ['samples/products', 'Products'],
        'contact':   ['samples/contact-us', 'Contact'],
    }
%}

{% macro render_menu(links) %}
    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href= \"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ _self.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    <a href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" title=\"\" alt=\"\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"main-menu\">
                    <ul>
                        {{ nav.render_menu(links) }}
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"search-box\">  
                    <form role=\"form\" name=\"search_form\" method=\"get\" class=\"search_form\">
                        <input id=\"search\" type=\"text\" />
                        <input type=\"submit\" id=\"search-button\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/nav.htm", "");
    }
}
