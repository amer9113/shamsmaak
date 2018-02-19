<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/meal-details.htm */
class __TwigTemplate_abaed7a5f46e0e5c769656b61a323e0dadf9a0e9b6e294d7677e206b87acd0b2 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "name", array()), "html", null, true);
            echo "</h2>

";
            // line 8
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "main_picture", array()), "path", array()))) {
                // line 9
                echo "    <div>Main Image</div>
    <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "main_picture", array()), "path", array()), "html", null, true);
                echo "\"style=\" width: 200px;\">
";
            }
            // line 12
            echo "
";
            // line 13
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "meal_galary", array()))) {
                // line 14
                echo "    <div>Gallery</div>
    <ul class=\"gallery clearfix\">
        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "meal_galary", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 17
                    echo "        <li>

            <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 80, 1 => 80, 2 => array("mode" => "crop")), "method"), "html", null, true);
                    echo "\">

        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "    </ul>
";
            }
            // line 25
            echo "
";
            // line 26
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "price", array()))) {
                // line 27
                echo "<h3>price</h3>
    <div>€";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "price", array()), "html", null, true);
                echo "</div>
";
            }
            // line 30
            echo "
";
            // line 31
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "genres", array()))) {
                // line 32
                echo "<h3>Genres</h3>
";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "genres", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 34
                    echo "    <a href=\"/genres/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "slug", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "genre_title", array()), "html", null, true);
                    echo "</a>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 37
            echo "
";
            // line 38
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "description", array()))) {
                // line 39
                echo "    <h3>Description</h3>
    <h4>";
                // line 40
                echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "description", array());
                echo "</h4>
";
            }
            // line 42
            echo "
";
            // line 43
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "ingredients", array()))) {
                // line 44
                echo "    <h3>Ingredients</h3>
        ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "ingredients", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                    // line 46
                    echo "            <h4>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ingredient"], "ingredient_name", array()), "html", null, true);
                    echo "</h4>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } else {
            // line 50
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/meal-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  139 => 46,  135 => 45,  132 => 44,  130 => 43,  127 => 42,  122 => 40,  119 => 39,  117 => 38,  114 => 37,  102 => 34,  98 => 33,  95 => 32,  93 => 31,  90 => 30,  85 => 28,  82 => 27,  80 => 26,  77 => 25,  73 => 23,  63 => 19,  59 => 17,  55 => 16,  51 => 14,  49 => 13,  46 => 12,  41 => 10,  38 => 9,  36 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<h2>{{ record.name }}</h2>

{% if record.main_picture.path is not empty %}
    <div>Main Image</div>
    <img src=\"{{ record.main_picture.path}}\"style=\" width: 200px;\">
{% endif %}

{% if record.meal_galary is not empty %}
    <div>Gallery</div>
    <ul class=\"gallery clearfix\">
        {% for image in record.meal_galary %}
        <li>

            <img src=\"{{ image.thumb(80,80,{'mode':'crop'}) }}\">

        </li>
        {% endfor %}
    </ul>
{% endif %}

{% if record.price is not empty %}
<h3>price</h3>
    <div>€{{record.price}}</div>
{% endif %}

{% if record.genres is not empty %}
<h3>Genres</h3>
{% for genre in  record.genres  %}
    <a href=\"/genres/{{genre.slug}}\">{{genre.genre_title}}</a>
{% endfor %}
{% endif %}

{% if record.description is not empty %}
    <h3>Description</h3>
    <h4>{{ record.description|raw }}</h4>
{% endif %}

{% if record.ingredients is not empty %}
    <h3>Ingredients</h3>
        {% for ingredient in  record.ingredients  %}
            <h4>{{ingredient.ingredient_name}}</h4>
        {% endfor %}
{% endif %}
{% else %}
{{ notFoundMessage }}
{% endif %}", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/meal-details.htm", "");
    }
}
