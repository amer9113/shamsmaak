<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_0092288a2fe717eb281ea670783901208642f53e29d4155a9e20362766786477 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => ($context["user"] ?? null))));
        echo "

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>
<hr>
    <div class=\"form-group\">
        <label for=\"accountStreetName\">Street Name</label>
        <input name=\"street_name\" type=\"text\" class=\"form-control\" id=\"accountStreetName\" value=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "street_name"));
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountHouseNumber\">House number</label>
        <input name=\"house_number\" type=\"text\" class=\"form-control\" id=\"accountHouseNumber\" value=\"";
        // line 29
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "house_number"));
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountAddition\">Toevoeging</label>
        <input name=\"addition\" type=\"text\" class=\"form-control\" id=\"accountAddition\" value=\"";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "addition"));
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountPostcode\">Postcode</label>
        <input name=\"postcode\" type=\"text\" class=\"form-control\" id=\"accountPostcode\" value=\"";
        // line 37
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "postcode"));
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountCity\">City</label>
        <input name=\"city\" type=\"text\" class=\"form-control\" id=\"accountCity\" value=\"";
        // line 41
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "city"));
        echo "\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 46
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 46,  80 => 41,  73 => 37,  66 => 33,  59 => 29,  52 => 25,  34 => 10,  26 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate', { model: user }) }}

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ form_value('name') }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ form_value('email') }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>
<hr>
    <div class=\"form-group\">
        <label for=\"accountStreetName\">Street Name</label>
        <input name=\"street_name\" type=\"text\" class=\"form-control\" id=\"accountStreetName\" value=\"{{ form_value('street_name') }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountHouseNumber\">House number</label>
        <input name=\"house_number\" type=\"text\" class=\"form-control\" id=\"accountHouseNumber\" value=\"{{ form_value('house_number') }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountAddition\">Toevoeging</label>
        <input name=\"addition\" type=\"text\" class=\"form-control\" id=\"accountAddition\" value=\"{{ form_value('addition') }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountPostcode\">Postcode</label>
        <input name=\"postcode\" type=\"text\" class=\"form-control\" id=\"accountPostcode\" value=\"{{ form_value('postcode') }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"accountCity\">City</label>
        <input name=\"city\" type=\"text\" class=\"form-control\" id=\"accountCity\" value=\"{{ form_value('city') }}\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}", "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/update.htm", "");
    }
}
