<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/Meals.htm */
class __TwigTemplate_c9528f046eec0d60ecef37e7696aed38f4d0a47e255f008e415fd5680f7f3b09 extends Twig_Template
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
        $context["genresArray"] = array();
        // line 2
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 4
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 5
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 6
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 7
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 8
        $context["dateNow"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 12
                $context["genresArray"] = twig_array_merge(($context["genresArray"] ?? null), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "slug", array()) => twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "genre_title", array())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Meals</h2>
                    <span>Home / <a href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/Meals");
        echo "\">Meals</a></span>
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
                    <h2>Meals</h2>
                    <img src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genresArray"] ?? null));
        foreach ($context['_seq'] as $context["slug"] => $context["title"]) {
            // line 43
            echo "                    <li><span class=\"filter\" data-filter=\".";
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</span></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
            </div>
        </div>

        <div class=\"row\" id=\"Container\">

            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 52
            echo "            ";
            $context["classGenre"] = "";
            // line 53
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 54
                echo "            ";
                $context["classGenre"] = ((($context["classGenre"] ?? null) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "slug", array()));
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "is_available", array()) != 0) && (($context["dateNow"] ?? null) >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "start_date", array()), "Y-m-d"))) && (($context["dateNow"] ?? null) <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(),             // line 57
$context["record"], "end_date", array()), "Y-m-d")))) {
                // line 58
                echo "
            <div class=\"col-md-3 col-sm-6 mix portfolio-item ";
                // line 59
                echo twig_escape_filter($this->env, ($context["classGenre"] ?? null), "html", null, true);
                echo "\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "main_picture", array()), "path", array()), "html", null, true);
                echo "\" style=\" background-position: center; \" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\"
                                   href=\"";
                // line 66
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\"><img
                                        src=\"";
                // line 67
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/open-icon.png");
                echo "\" alt=\"\"></a>
                                <span>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "name", array()), "html", null, true);
                echo "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "name", array()), "html", null, true);
                echo "</a></h3>
                        <span class=\"text-category\"> ";
                // line 74
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "description", array()), 50));
                echo "</span>
                    </div>
                </div>
            </div>

            ";
            }
            // line 80
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>

    </div>
</div>




";
        // line 89
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 90
            echo "<ul class=\"pagination\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 94
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a>
            </li>
            ";
            }
            // line 97
            echo "
            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 99
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 100
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
            // line 103
            echo "
            ";
            // line 104
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()))) {
                // line 105
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a>
            </li>
            ";
            }
            // line 108
            echo "        </div>
    </div>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/Meals.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 108,  244 => 105,  242 => 104,  239 => 103,  228 => 100,  223 => 99,  219 => 98,  216 => 97,  209 => 94,  207 => 93,  202 => 90,  200 => 89,  190 => 81,  184 => 80,  175 => 74,  171 => 73,  163 => 68,  159 => 67,  155 => 66,  148 => 62,  142 => 59,  139 => 58,  137 => 57,  135 => 56,  129 => 55,  126 => 54,  121 => 53,  118 => 52,  114 => 51,  106 => 45,  95 => 43,  91 => 42,  80 => 34,  64 => 21,  56 => 15,  46 => 12,  42 => 11,  38 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set genresArray = [] %}
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
{% set dateNow= \"now\"|date('Y-m-d') %}

{% for record in records %}
{% for genre in record.genres %}
{% set genresArray = genresArray|merge({ (genre.slug) : (genre.genre_title) }) %}
{% endfor %}
{% endfor %}
<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Meals</h2>
                    <span>Home / <a href=\"{{ 'samples/Meals'|page }}\">Meals</a></span>
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
                    <h2>Meals</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    {% for slug ,title in genresArray %}
                    <li><span class=\"filter\" data-filter=\".{{ slug }}\">{{title}}</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div class=\"row\" id=\"Container\">

            {% for record in records %}
            {% set classGenre = \"\" %}
            {% for genre in record.genres %}
            {% set classGenre= classGenre ~' '~ genre.slug %}
            {% endfor %}
            {% if (record.is_available != 0) and (dateNow >= record.start_date|date(\"Y-m-d\")) and (dateNow <=
            record.end_date|date(\"Y-m-d\")) %}

            <div class=\"col-md-3 col-sm-6 mix portfolio-item {{classGenre}}\">
                <div class=\"portfolio-wrapper\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ record.main_picture.path  }}\" style=\" background-position: center; \" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\"
                                   href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"><img
                                        src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>{{ record.name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"label-text\">
                        <h3><a href=\"'samples/single-post'\">{{ record.name }}</a></h3>
                        <span class=\"text-category\"> {{ html_limit(record.description,50)|raw }}</span>
                    </div>
                </div>
            </div>

            {% endif %}
            {% endfor %}
        </div>

    </div>
</div>




{% if records.lastPage > 1 %}
<ul class=\"pagination\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a>
            </li>
            {% endif %}

            {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
            {% endfor %}

            {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a>
            </li>
            {% endif %}
        </div>
    </div>
</ul>
{% endif %}", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/Meals.htm", "");
    }
}
