<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/test2.htm */
class __TwigTemplate_3b59040e5c2e172ab79e0211de8995fa39e09ff396a2356fab03867a911b3a19 extends Twig_Template
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
        echo "<h2>add to order</h2>
<form data-request=\"orderform::onSave\">
    <label>  </label>
    <input type=\"hidden\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"userId\">
    <textarea name=\"ordersDescription\" ></textarea>

    <label>Description</label>
    <textarea name=\"description\"></textarea>

    <button type=\"submit\" >Save</button>

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 12
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 13
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/test2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  37 => 13,  35 => 12,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>add to order</h2>
<form data-request=\"orderform::onSave\">
    <label>  </label>
    <input type=\"hidden\" value=\"{{user.id }}\" name=\"userId\">
    <textarea name=\"ordersDescription\" ></textarea>

    <label>Description</label>
    <textarea name=\"description\"></textarea>

    <button type=\"submit\" >Save</button>

    {% flash success %}
        <p>{{message}}</p>
    {% endflash %}
</form>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/test2.htm", "");
    }
}
