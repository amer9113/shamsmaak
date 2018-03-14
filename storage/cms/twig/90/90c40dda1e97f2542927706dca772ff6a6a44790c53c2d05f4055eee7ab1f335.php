<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order.htm */
class __TwigTemplate_c4f7429b140aa0ec631b027375f54378fe8c7769c917d2ae6feb1e604bf888b8 extends Twig_Template
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
        $context["meals"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["meals"] ?? null), "meals", array());
        // line 2
        $context["counter"] = 0;
        // line 3
        $context["LeftDiv"] = "";
        // line 4
        $context["RightDiv"] = "";
        // line 5
        echo "<style>


</style>

<!--<div id=\"heading\">-->
<!--<div class=\"container\">-->
<!--<div class=\"row\">-->
<!--<div class=\"col-md-12\">-->
<!--<div class=\"heading-content\">-->
<!--<h2>BESTELEN</h2>-->
<!--<span>Home / <a href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/order");
        echo "\">BESTELEN</a></span>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 23
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 24
            echo "<h1>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</h1>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 26
        echo "<div id=\"orderMenu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"order\">
                    <div class=\"title\" id=\"TopOrder\">
                        BESTELEN
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        Maaltijd Prijs AANTAL
                    </div>
                    <div id=\"elements\">
                        <div class=\"left elements\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 40
            echo "                            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 41
            echo "                            ";
            if (((($context["counter"] ?? null) % 2) > 0)) {
                // line 42
                echo "                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealName";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name", array()), "html", null, true);
                echo "\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           name=\"mealNameArabic";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name_ar", array()), "html", null, true);
                echo "\" required> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(),                 // line 48
$context["meal"], "name", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealPrice\"
                                               value=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "\" required>€";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"Heeft u speciale verzoeken\"  type=\"text\" id=\"mealDescription";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealDescription";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                       style=\"margin-top: 0px;margin-bottom:4px\"></td>
                            </div>
                            ";
            }
            // line 76
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["LeftDiv"] ?? null), "html", null, true);
        echo "
                        </div>

                        <div class=\"right elements\">
                            ";
        // line 81
        $context["counter"] = 0;
        // line 82
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 83
            echo "                            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 84
            echo "                            ";
            if (((($context["counter"] ?? null) % 2) == 0)) {
                // line 85
                echo "                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealName";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           value=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name", array()), "html", null, true);
                echo "\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           name=\"mealNameArabic";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name_ar", array()), "html", null, true);
                echo "\" required> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(),                 // line 91
$context["meal"], "name", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealPrice\"
                                               value=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "\" required>€";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"Heeft u speciale verzoeken\"  type=\"text\"  id=\"mealDescription";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealDescription";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                       style=\"margin-top: 0px;margin-bottom:4px;\"></td>
                            </div>
                            ";
            }
            // line 119
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["LeftDiv"] ?? null), "html", null, true);
        echo "
                        </div>


                    </div>

                </div>
                <div>
                    <a id=\"buttonDone\" href=\"#\" class=\"button\" onClick=\"movePage(1,'en');\"
                       style=\"display: none; float: right;\">Bestelling</a>
                </div>
            </div>
        </div>
    </div>


</div>


<div id=\"invoice\" style=\"display: none;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"order\">
                    <div class=\"title\" id=\"TopOrder\">
                        Bill
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        Maaltijd Prijs AANTAL
                    </div>
                    <table id=\"invoiceTable\" class=\"invoiceTable\">
                        <thead>
                        <tr>
                            <td>Maaltijd</td>
                            <td>Eenheid prijs</td>
                            <td>Aantal stuks</td>
                            <td>Totale prijs</td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div>
                        <label style=\"margin-top:30px;  \">Speciale verzoeken</label>
                        <textarea id=\"description\" class=\"orderInput\" placeholder=\"Heeft u speciale verzoeken\"  name=\"description\" style=\" max-width: none;\"></textarea>
                    </div>
                    <div>
                        <div id=\"Total\" style=\"margin-top:30px; \">
                            <div id=\"TotalTitle\">Totaal: €</div>
                        </div>
                    </div>
                </div>
                <div>

                    <form data-request=\"orderform::onSave\">

                        <input type=\"hidden\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\" name=\"email\">
                        <textarea id=\"ordersDescription\"  name=\"ordersDescription\" style=\"display:none;\"></textarea>
                        <input type=\"hidden\" value=\"nl\" name=\"lang\">
                        <button type=\"submit\" class=\"button\" style=\"float: right; border:none;\">Sturen</button>

                    </form>
                    <a href=\"#\" class=\"button\" onClick=\"movePage(2,'en');\" style=\"float: left;\">Terug</a>
                </div>
            </div>

        </div>
    </div>



</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 175,  280 => 120,  274 => 119,  265 => 115,  261 => 114,  251 => 107,  246 => 105,  240 => 102,  236 => 101,  226 => 96,  222 => 95,  215 => 91,  210 => 90,  206 => 89,  202 => 88,  196 => 87,  192 => 85,  189 => 84,  186 => 83,  181 => 82,  179 => 81,  171 => 77,  165 => 76,  156 => 72,  152 => 71,  142 => 64,  137 => 62,  131 => 59,  127 => 58,  117 => 53,  113 => 52,  106 => 48,  101 => 47,  97 => 46,  93 => 45,  87 => 44,  83 => 42,  80 => 41,  77 => 40,  73 => 39,  58 => 26,  52 => 24,  50 => 23,  40 => 16,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set meals = meals.meals %}
{% set counter = 0 %}
{% set LeftDiv='' %}
{% set RightDiv='' %}
<style>


</style>

<!--<div id=\"heading\">-->
<!--<div class=\"container\">-->
<!--<div class=\"row\">-->
<!--<div class=\"col-md-12\">-->
<!--<div class=\"heading-content\">-->
<!--<h2>BESTELEN</h2>-->
<!--<span>Home / <a href=\"{{ 'samples/order'|page }}\">BESTELEN</a></span>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

{% flash success %}
<h1>{{message}}</h1>
{% endflash %}
<div id=\"orderMenu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"order\">
                    <div class=\"title\" id=\"TopOrder\">
                        BESTELEN
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        Maaltijd Prijs AANTAL
                    </div>
                    <div id=\"elements\">
                        <div class=\"left elements\">
                            {% for meal in meals %}
                            {% set counter = counter+1 %}
                            {% if (counter % 2) > 0 %}
                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName{{ meal.id }}\" name=\"mealName{{ meal.id }}\"
                                           value=\"{{ meal.name }}\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic{{ meal.id }}\"
                                           name=\"mealNameArabic{{ meal.id }}\" value=\"{{ meal.name_ar }}\" required> {{
                                    meal.name }}
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice{{ meal.id }}\" name=\"mealPrice\"
                                               value=\"{{ meal.price }}\" required>€{{meal.price}}
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder({{ meal.id }},-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity{{ meal.id }}\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText{{ meal.id }}\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder({{ meal.id }},1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr{{ meal.id }}\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"Heeft u speciale verzoeken\"  type=\"text\" id=\"mealDescription{{ meal.id }}\" name=\"mealDescription{{ meal.id }}\"
                                       style=\"margin-top: 0px;margin-bottom:4px\"></td>
                            </div>
                            {% endif%}
                            {% endfor %}
                            {{LeftDiv}}
                        </div>

                        <div class=\"right elements\">
                            {% set counter =0%}
                            {% for meal in meals %}
                            {% set counter = counter+1 %}
                            {% if (counter % 2) ==0 %}
                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName{{ meal.id }}\" name=\"mealName{{ meal.id }}\"
                                           value=\"{{ meal.name }}\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic{{ meal.id }}\"
                                           name=\"mealNameArabic{{ meal.id }}\" value=\"{{ meal.name_ar }}\" required> {{
                                    meal.name }}
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice{{ meal.id }}\" name=\"mealPrice\"
                                               value=\"{{ meal.price }}\" required>€{{meal.price}}
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder({{ meal.id }},-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity{{ meal.id }}\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText{{ meal.id }}\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder({{ meal.id }},1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr{{ meal.id }}\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"Heeft u speciale verzoeken\"  type=\"text\"  id=\"mealDescription{{ meal.id }}\" name=\"mealDescription{{ meal.id }}\"
                                       style=\"margin-top: 0px;margin-bottom:4px;\"></td>
                            </div>
                            {% endif%}
                            {% endfor %}
                            {{LeftDiv}}
                        </div>


                    </div>

                </div>
                <div>
                    <a id=\"buttonDone\" href=\"#\" class=\"button\" onClick=\"movePage(1,'en');\"
                       style=\"display: none; float: right;\">Bestelling</a>
                </div>
            </div>
        </div>
    </div>


</div>


<div id=\"invoice\" style=\"display: none;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"order\">
                    <div class=\"title\" id=\"TopOrder\">
                        Bill
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        Maaltijd Prijs AANTAL
                    </div>
                    <table id=\"invoiceTable\" class=\"invoiceTable\">
                        <thead>
                        <tr>
                            <td>Maaltijd</td>
                            <td>Eenheid prijs</td>
                            <td>Aantal stuks</td>
                            <td>Totale prijs</td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div>
                        <label style=\"margin-top:30px;  \">Speciale verzoeken</label>
                        <textarea id=\"description\" class=\"orderInput\" placeholder=\"Heeft u speciale verzoeken\"  name=\"description\" style=\" max-width: none;\"></textarea>
                    </div>
                    <div>
                        <div id=\"Total\" style=\"margin-top:30px; \">
                            <div id=\"TotalTitle\">Totaal: €</div>
                        </div>
                    </div>
                </div>
                <div>

                    <form data-request=\"orderform::onSave\">

                        <input type=\"hidden\" value=\"{{user.email }}\" name=\"email\">
                        <textarea id=\"ordersDescription\"  name=\"ordersDescription\" style=\"display:none;\"></textarea>
                        <input type=\"hidden\" value=\"nl\" name=\"lang\">
                        <button type=\"submit\" class=\"button\" style=\"float: right; border:none;\">Sturen</button>

                    </form>
                    <a href=\"#\" class=\"button\" onClick=\"movePage(2,'en');\" style=\"float: left;\">Terug</a>
                </div>
            </div>

        </div>
    </div>



</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order.htm", "");
    }
}
