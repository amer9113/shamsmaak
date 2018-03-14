<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/contact-us.htm */
class __TwigTemplate_bcc6cd39cd264039c45f96949069eaaf40c2852296f2e2de576d4b06e4b958cd extends Twig_Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Contact Us</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/contact-us");
        echo "\">Contact Us</a></span>
                </div>
             </div>
        </div>
    </div>
</div>

<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Voel je vrij om een bericht te verzenden</h2>
                    <img src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
    </div>
    <div id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"product-item col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">  
                            <div class=\"message-form\">
                                <form role=\"form\" action=\"#\" method=\"post\" class=\"send-message\">
                                    <div class=\"row\">
                                    <div class=\"name col-md-4\">
                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"email col-md-4\">
                                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"subject col-md-4\">
                                        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    </div>
                                    <div class=\"row\">        
                                    <div class=\"text col-md-12\">
                                        <textarea name=\"text\" placeholder=\"Message\" class=\"form-control\" required=\"required\"></textarea>
                                    </div>   
                                    </div>                              
                                    <div class=\"send\">
                                        <button type=\"submit\" name=\"submit\" required=\"required\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla </p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>010-020-0340</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@shaamsmaak.nl</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>     
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"heading-section\">
\t\t\t\t<h2>VIND ONS OP KAART</h2>
                <img src=\"";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"googleMap\" style=\"height:420px;\"></div>
\t\t\t</div>
\t\t</div>
    </div>
</div>
<hr>
<h1>new</h1>
<form data-request=\"onSend\">
    <label>Your name</label>
    <input type=\"text\" name=\"name\">

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    
    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\">Send</button>

</form>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 73,  43 => 20,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Contact Us</h2>
                    <span>Home / <a href=\"{{ 'samples/contact-us'|page }}\">Contact Us</a></span>
                </div>
             </div>
        </div>
    </div>
</div>

<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Voel je vrij om een bericht te verzenden</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
            </div>
    </div>
    <div id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"product-item col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">  
                            <div class=\"message-form\">
                                <form role=\"form\" action=\"#\" method=\"post\" class=\"send-message\">
                                    <div class=\"row\">
                                    <div class=\"name col-md-4\">
                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"email col-md-4\">
                                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"subject col-md-4\">
                                        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    </div>
                                    <div class=\"row\">        
                                    <div class=\"text col-md-12\">
                                        <textarea name=\"text\" placeholder=\"Message\" class=\"form-control\" required=\"required\"></textarea>
                                    </div>   
                                    </div>                              
                                    <div class=\"send\">
                                        <button type=\"submit\" name=\"submit\" required=\"required\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla </p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>010-020-0340</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@shaamsmaak.nl</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>     
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"heading-section\">
\t\t\t\t<h2>VIND ONS OP KAART</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"googleMap\" style=\"height:420px;\"></div>
\t\t\t</div>
\t\t</div>
    </div>
</div>
<hr>
<h1>new</h1>
<form data-request=\"onSend\">
    <label>Your name</label>
    <input type=\"text\" name=\"name\">

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    
    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\">Send</button>

</form>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/pages/samples/contact-us.htm", "");
    }
}
