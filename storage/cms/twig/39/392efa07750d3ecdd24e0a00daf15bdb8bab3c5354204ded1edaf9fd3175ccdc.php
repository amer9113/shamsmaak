<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_e076c3ea95e7b6462a42dfb3b7392962468213177c64ec439562594a46c7d7d8 extends Twig_Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" style=\"width:  60%;\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" style=\"width:  60%;\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" style=\"width:  60%;\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"registerStreetName\">Street Name</label>
            <input
                    name=\"street_name\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerStreetName\"
                    placeholder=\"Enter your Street Name\" style=\"width:  60%;\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"registerHouseNumber\">House number</label>
            <input
                    name=\"house_number\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerHouseNumber\"
                    placeholder=\"Enter your House number\"  style=\"width:40%;\"/>
            <label for=\"registerAddition\">Toevoeging</label>
            <input
                    name=\"addition\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerAddition\" style=\"width:  20%;\"  style=\"width:20%;\"/>
        </div>
        <div class=\"form-group\">

        </div>
        <div class=\"form-group\">
            <label for=\"registerpostcode\">Postcode</label>
            <input
                    name=\"postcode\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerpostcode\"
                    placeholder=\"Enter your Postcode\" style=\"width:  40%;\" />
        </div>
        <div class=\"form-group\">
            <label for=\"registerCity\">City</label>
            <input
                    name=\"city\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerCity\"
                    placeholder=\"Enter your City\" style=\"width:  60%;\"  />
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
";
        } else {
            // line 81
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 81,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if canRegister %}
    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" style=\"width:  60%;\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" style=\"width:  60%;\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" style=\"width:  60%;\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"registerStreetName\">Street Name</label>
            <input
                    name=\"street_name\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerStreetName\"
                    placeholder=\"Enter your Street Name\" style=\"width:  60%;\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"registerHouseNumber\">House number</label>
            <input
                    name=\"house_number\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerHouseNumber\"
                    placeholder=\"Enter your House number\"  style=\"width:40%;\"/>
            <label for=\"registerAddition\">Toevoeging</label>
            <input
                    name=\"addition\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerAddition\" style=\"width:  20%;\"  style=\"width:20%;\"/>
        </div>
        <div class=\"form-group\">

        </div>
        <div class=\"form-group\">
            <label for=\"registerpostcode\">Postcode</label>
            <input
                    name=\"postcode\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerpostcode\"
                    placeholder=\"Enter your Postcode\" style=\"width:  40%;\" />
        </div>
        <div class=\"form-group\">
            <label for=\"registerCity\">City</label>
            <input
                    name=\"city\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerCity\"
                    placeholder=\"Enter your City\" style=\"width:  60%;\"  />
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
{% else %}
    <!-- Registration is disabled. -->
{% endif %}
", "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/register.htm", "");
    }
}
