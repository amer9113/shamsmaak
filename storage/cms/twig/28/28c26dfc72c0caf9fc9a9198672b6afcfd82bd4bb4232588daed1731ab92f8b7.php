<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/plugins/restaurant/orders/components/orderform/default.htm */
class __TwigTemplate_3cbfaaa71d282f74d4153dc0053e946c9b194e471eb34ae598fe2c54610dd262 extends Twig_Template
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
        echo "<form data-request=\"orderform::onSave\">

    <input type=\"hidden\" name=\"userId\">
    <textarea name=\"ordersDescription\" style=\"display:none;\"></textarea>

    <label>Description</label>
    <textarea name=\"description\"></textarea>

    <button type=\"submit\" >Save</button>

</form>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/restaurant/orders/components/orderform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"orderform::onSave\">

    <input type=\"hidden\" name=\"userId\">
    <textarea name=\"ordersDescription\" style=\"display:none;\"></textarea>

    <label>Description</label>
    <textarea name=\"description\"></textarea>

    <button type=\"submit\" >Save</button>

</form>", "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/restaurant/orders/components/orderform/default.htm", "");
    }
}
