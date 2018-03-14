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
        $context["links"] = array("Home" => array(0 => "home", 1 => "Home"), "Meals" => array(0 => "samples/Meals", 1 => "Maaltijden"), "Order" => array(0 => "samples/order", 1 => "Bestelling"), "Contact" => array(0 => "samples/contact-us", 1 => "Contact"), "Parties" => array(0 => "samples/parties", 1 => "Partijen"));
        // line 34
        echo "
";
        // line 35
        $context["nav"] = $this;
        // line 36
        echo "
<div id=\"main-header\">
    <div class=\"container\">

        <div class=\"row\">
            <div>

                <div class=\"main-menu\">
                    <div class=\"hide Mobile\">
                        <a href=\"#\" id=\"menu-icon\">Menu</a>
                    </div>
                    <ul>
                        <li id=\"logoLine\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logoLine.png");
        echo "\" title=\"\" alt=\"\" ></a></li>
                        ";
        // line 49
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    // line 14
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 16
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href= \"";
                // line 18
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('Cms\Twig\Extension')->pageFilter(((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "page", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 19
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 20
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 22
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 23
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 24
                echo "            </a>
            ";
                // line 25
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())) {
                    // line 26
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "render_menu", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "sublinks", array())), "method"), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 31
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
        return array (  120 => 31,  114 => 28,  110 => 26,  108 => 25,  105 => 24,  101 => 23,  97 => 22,  91 => 20,  87 => 19,  83 => 18,  75 => 16,  70 => 15,  58 => 14,  46 => 49,  40 => 48,  26 => 36,  24 => 35,  21 => 34,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t    'Home':      ['home', 'Home'],
        'Meals':     ['samples/Meals', 'Maaltijden'],
        'Order':     ['samples/order', 'Bestelling'],

        'Contact':   ['samples/contact-us', 'Contact'],
        'Parties':   ['samples/parties', 'Partijen'],
    }
%}
{# 'About':     ['samples/about-us', 'About Us'],#}
{# 'products':  ['samples/products', 'Products'],#}
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
            <div>

                <div class=\"main-menu\">
                    <div class=\"hide Mobile\">
                        <a href=\"#\" id=\"menu-icon\">Menu</a>
                    </div>
                    <ul>
                        <li id=\"logoLine\"><a href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logoLine.png'|theme }}\" title=\"\" alt=\"\" ></a></li>
                        {{ nav.render_menu(links) }}
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/nav.htm", "");
    }
}
