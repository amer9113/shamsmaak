<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/Meals.htm */
class __TwigTemplate_9f11670f65c8eab748d002445e2edd847eb13ebb070c5da59e45038eb6afa899 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        $context["dateNow"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 8
        echo "
<ul class=\"record-list\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "is_available", array()) != 0) && (($context["dateNow"] ?? null) >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "start_date", array()), "Y-m-d"))) && (($context["dateNow"] ?? null) <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "end_date", array()), "Y-m-d")))) {
                // line 12
                echo "    <li>
        <h3>
            ";
                // line 15
                echo "            ";
                ob_start();
                // line 16
                echo "                ";
                if (($context["detailsPage"] ?? null)) {
                    // line 17
                    echo "                    <a href=\"";
                    echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                    echo "\">
                ";
                }
                // line 19
                echo "
                ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "name", array()), "html", null, true);
                echo "
                ";
                // line 21
                if (($context["detailsPage"] ?? null)) {
                    // line 22
                    echo "                    </a>
                ";
                }
                // line 24
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 25
                echo "
            ";
                // line 26
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "description", array()), 150));
                echo "
        </h3>
    </li>
    ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>

";
        // line 33
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 34
            echo "<ul class=\"pagination\">
    ";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 36
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 40
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 41
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
    ";
            // line 45
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()))) {
                // line 46
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 48
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/Meals.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  137 => 46,  135 => 45,  132 => 44,  121 => 41,  116 => 40,  112 => 39,  109 => 38,  103 => 36,  101 => 35,  98 => 34,  96 => 33,  92 => 31,  86 => 30,  79 => 26,  76 => 25,  73 => 24,  69 => 22,  67 => 21,  63 => 20,  60 => 19,  54 => 17,  51 => 16,  48 => 15,  44 => 12,  41 => 11,  37 => 10,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
{% set dateNow= \"now\"|date('Y-m-d') %}

<ul class=\"record-list\">
    {% for record in records %}
    {% if (record.is_available != 0) and (dateNow >= record.start_date|date(\"Y-m-d\")) and (dateNow <= record.end_date|date(\"Y-m-d\")) %}
    <li>
        <h3>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.name }}
                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

            {{ html_limit(record.description,150)|raw }}
        </h3>
    </li>
    {% endif %}
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
<ul class=\"pagination\">
    {% if records.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..records.lastPage %}
    <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if records.lastPage > records.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/Meals.htm", "");
    }
}
