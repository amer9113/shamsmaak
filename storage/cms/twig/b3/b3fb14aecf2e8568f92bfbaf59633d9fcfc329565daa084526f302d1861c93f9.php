<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order_ar.htm */
class __TwigTemplate_5733e9367dc3bf8bc773f32eb49c9cd46bed21bf4e9eb69edc8a5bde321b98f2 extends Twig_Template
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
                    <div class=\"title\" id=\"TopOrder\">الطلبات</div>
                    <div class=\"title\" id=\"secondTitle\">
                        الوجبات الأسعار العدد
                    </div>
                    <div id=\"elements\">
                        <div class=\"left elements\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 38
            echo "                            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 39
            echo "                            ";
            if (((($context["counter"] ?? null) % 2) > 0)) {
                // line 40
                echo "                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealName";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name", array()), "html", null, true);
                echo "\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           name=\"mealNameArabic";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name_ar", array()), "html", null, true);
                echo "\" required> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(),                 // line 46
$context["meal"], "name_ar", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealPrice\"
                                               value=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "\" required>€";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"هل لديك طلبات خاصة\"  type=\"text\"  id=\"mealDescription";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealDescription";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                       style=\"direction:RTL;margin-top: 0px;margin-bottom:4px\"></td>
                            </div>
                            ";
            }
            // line 74
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["LeftDiv"] ?? null), "html", null, true);
        echo "
                        </div>

                        <div class=\"right elements\">
                            ";
        // line 79
        $context["counter"] = 0;
        // line 80
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 81
            echo "                            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 82
            echo "                            ";
            if (((($context["counter"] ?? null) % 2) == 0)) {
                // line 83
                echo "                            <div class=\"rowElements\">
                                <div class=\"name\">
                                    <input type=\"hidden\" id=\"mealName";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealName";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           value=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name", array()), "html", null, true);
                echo "\" required>
                                    <input type=\"hidden\" id=\"mealNameArabic";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                           name=\"mealNameArabic";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name_ar", array()), "html", null, true);
                echo "\" required> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(),                 // line 89
$context["meal"], "name_ar", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"priceAndUnit\">
                                    <div class=\"price\">
                                        <input type=\"hidden\" id=\"mealPrice";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealPrice\"
                                               value=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "\" required>€";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "price", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"unit\">
                                        <div class=\"count-input space-bottom\">
                                            <a class=\"incr-btn\" data-action=\"decrease\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",-1);\">–</a>
                                            <input class=\"quantity\" id=\"quantity";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" type=\"hidden\"
                                                   name=\"quantity\"
                                                   value=\"0\" max=\"50\"/>
                                            <div id=\"quantityText";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\">0</div>
                                            <a class=\"incr-btn\" data-action=\"increase\" href=\"#\"
                                               onClick=\"addToOrder(";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo ",1);\">&plus;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div  id=\"tr";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                                <input class=\"tr orderInput\" placeholder=\"هل لديك طلبات خاصة\"  type=\"text\"  id=\"mealDescription";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\" name=\"mealDescription";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()), "html", null, true);
                echo "\"
                                       style=\" direction:RTL;margin-top: 0px;margin-bottom:4px;\"></td>
                            </div>
                            ";
            }
            // line 117
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["LeftDiv"] ?? null), "html", null, true);
        echo "
                        </div>


                    </div>

                </div>
                <div>
                    <a id=\"buttonDone\" href=\"#\" class=\"button\" onClick=\"movePage(1,'ar');\"
                       style=\"display: none; float: left;\">اطلب</a>
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
                        الفاتورة
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        الوجبات الأسعار العدد
                    </div>
                    <table id=\"invoiceTable\" class=\"invoiceTable\">
                        <thead>
                        <tr>
                            <td>الوجبات</td>
                            <td>سعر القطعة</td>
                            <td>العدد</td>
                            <td>السعر </td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div>
                        <label style=\"margin-top:30px; float: right; \"> طلبات خاصة</label>
                        <textarea id=\"description\" class=\"orderInput\" placeholder=\"هل لديك طلبات خاصة\"  name=\"description\" style=\"direction:RTL; max-width: none;\"></textarea>
                    </div>
                    <div>
                        <div id=\"Total\" style=\"margin-top:30px; float: right \">
                            <div id=\"TotalTitle\">المجموع: €</div>
                        </div>
                    </div>
                </div>
                <div>

                    <form data-request=\"orderform::onSave\">

                        <input type=\"hidden\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\" name=\"email\">
                        <textarea id=\"ordersDescription\"  name=\"ordersDescription\" style=\"display:none;\"></textarea>
                        <input type=\"hidden\" value=\"ar\" name=\"lang\">
                        <button type=\"submit\" class=\"button\" style=\"float: left; border:none;\">أرسال</button>

                    </form>
                    <a href=\"#\" class=\"button\" onClick=\"movePage(2,'ar');\" style=\"float: right;\">تراجع</a>
                </div>
            </div>

        </div>
    </div>



</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order_ar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 173,  278 => 118,  272 => 117,  263 => 113,  259 => 112,  249 => 105,  244 => 103,  238 => 100,  234 => 99,  224 => 94,  220 => 93,  213 => 89,  208 => 88,  204 => 87,  200 => 86,  194 => 85,  190 => 83,  187 => 82,  184 => 81,  179 => 80,  177 => 79,  169 => 75,  163 => 74,  154 => 70,  150 => 69,  140 => 62,  135 => 60,  129 => 57,  125 => 56,  115 => 51,  111 => 50,  104 => 46,  99 => 45,  95 => 44,  91 => 43,  85 => 42,  81 => 40,  78 => 39,  75 => 38,  71 => 37,  58 => 26,  52 => 24,  50 => 23,  40 => 16,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
                    <div class=\"title\" id=\"TopOrder\">الطلبات</div>
                    <div class=\"title\" id=\"secondTitle\">
                        الوجبات الأسعار العدد
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
                                    meal.name_ar }}
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
                                <input class=\"tr orderInput\" placeholder=\"هل لديك طلبات خاصة\"  type=\"text\"  id=\"mealDescription{{ meal.id }}\" name=\"mealDescription{{ meal.id }}\"
                                       style=\"direction:RTL;margin-top: 0px;margin-bottom:4px\"></td>
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
                                    meal.name_ar }}
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
                                <input class=\"tr orderInput\" placeholder=\"هل لديك طلبات خاصة\"  type=\"text\"  id=\"mealDescription{{ meal.id }}\" name=\"mealDescription{{ meal.id }}\"
                                       style=\" direction:RTL;margin-top: 0px;margin-bottom:4px;\"></td>
                            </div>
                            {% endif%}
                            {% endfor %}
                            {{LeftDiv}}
                        </div>


                    </div>

                </div>
                <div>
                    <a id=\"buttonDone\" href=\"#\" class=\"button\" onClick=\"movePage(1,'ar');\"
                       style=\"display: none; float: left;\">اطلب</a>
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
                        الفاتورة
                    </div>
                    <div class=\"title\" id=\"secondTitle\">
                        الوجبات الأسعار العدد
                    </div>
                    <table id=\"invoiceTable\" class=\"invoiceTable\">
                        <thead>
                        <tr>
                            <td>الوجبات</td>
                            <td>سعر القطعة</td>
                            <td>العدد</td>
                            <td>السعر </td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div>
                        <label style=\"margin-top:30px; float: right; \"> طلبات خاصة</label>
                        <textarea id=\"description\" class=\"orderInput\" placeholder=\"هل لديك طلبات خاصة\"  name=\"description\" style=\"direction:RTL; max-width: none;\"></textarea>
                    </div>
                    <div>
                        <div id=\"Total\" style=\"margin-top:30px; float: right \">
                            <div id=\"TotalTitle\">المجموع: €</div>
                        </div>
                    </div>
                </div>
                <div>

                    <form data-request=\"orderform::onSave\">

                        <input type=\"hidden\" value=\"{{user.email }}\" name=\"email\">
                        <textarea id=\"ordersDescription\"  name=\"ordersDescription\" style=\"display:none;\"></textarea>
                        <input type=\"hidden\" value=\"ar\" name=\"lang\">
                        <button type=\"submit\" class=\"button\" style=\"float: left; border:none;\">أرسال</button>

                    </form>
                    <a href=\"#\" class=\"button\" onClick=\"movePage(2,'ar');\" style=\"float: right;\">تراجع</a>
                </div>
            </div>

        </div>
    </div>



</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/order_ar.htm", "");
    }
}
