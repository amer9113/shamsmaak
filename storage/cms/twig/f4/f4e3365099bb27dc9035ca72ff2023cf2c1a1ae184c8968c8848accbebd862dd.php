<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/activation_check.htm */
class __TwigTemplate_3bc15cfd2178c2c0682d24520667b13b116ecfbacaf9bcac551a1765a115933c extends Twig_Template
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
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "is_activated", array())) {
            // line 2
            echo "
    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user.is_activated %}

    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

{% endif %}", "/Users/beeldrstage/Documents/projects/shamsmaak/plugins/rainlab/user/components/account/activation_check.htm", "");
    }
}
