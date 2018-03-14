<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top_ar.htm */
class __TwigTemplate_14cb5499ab364ee4b85a12400aa292e6b12e5c8d17ae22fc377e2a588e0bb815 extends Twig_Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"home-account\">
                    <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home_ar");
        echo "\" style=\"float: right ;\">الصفحة الرئيسية</a>
                    ";
        // line 7
        if (($context["user"] ?? null)) {
            // line 8
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login_ar");
            echo "\" style=\"float: right ;\">حسابي</a>
                    ";
        }
        // line 10
        echo "                    ";
        if (($context["user"] ?? null)) {
            // line 11
            echo "
                    <a data-request=\"onLogout\" style=\"float: left;\" data-request-data=\"redirect: '/'\">تسحيل خروج</a>
                    ";
        } else {
            // line 14
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login_ar");
            echo "\" style=\"float: left;\">تسجيل دخول</a>
                    ";
        }
        // line 16
        echo "
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" style=\"float: left;\">(Nederlands)</a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top_ar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  52 => 16,  46 => 14,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"home-account\">
                    <a href=\"{{ 'home_ar'|page }}\" style=\"float: right ;\">الصفحة الرئيسية</a>
                    {% if user %}
                    <a href=\"{{ 'login_ar'|page }}\" style=\"float: right ;\">حسابي</a>
                    {% endif %}
                    {% if user %}

                    <a data-request=\"onLogout\" style=\"float: left;\" data-request-data=\"redirect: '/'\">تسحيل خروج</a>
                    {% else %}
                    <a href=\"{{ 'login_ar'|page }}\" style=\"float: left;\">تسجيل دخول</a>
                    {% endif %}

                    <a href=\"{{ 'home'|page }}\" style=\"float: left;\">(Nederlands)</a>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/top_ar.htm", "");
    }
}
