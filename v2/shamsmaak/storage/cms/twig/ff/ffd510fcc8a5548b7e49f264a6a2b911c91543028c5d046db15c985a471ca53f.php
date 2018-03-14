<?php

/* /Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/bottom.htm */
class __TwigTemplate_1bc5f9d85fed503cbb3f164c43e043f6640e271c01e11a66498c348ed67703dd extends Twig_Template
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
        echo "<div class=\"main-footer\">
    <div class=\"row\">


        <div class=\"col-md-3\">
            <div class=\"recent-posts\">
                <h4 class=\"footer-title\">Recent posts</h4>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/recent-post1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">test</a></h6>
                            <span>24/12/2084</span>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/recent-post2.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">test2</a></h6>
                            <span>18/12/2084</span>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"more-info\">
                <h4 class=\"footer-title\">More info</h4>
                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                        <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                    </ul>
            </div>
        </div>
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-3\">
            <div class=\"social-bottom\">
                <span>Follow us:</span>
                <ul>
                    <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-footer\">
    <div class=\"row\">


        <div class=\"col-md-3\">
            <div class=\"recent-posts\">
                <h4 class=\"footer-title\">Recent posts</h4>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"{{ 'assets/images/recent-post1.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">test</a></h6>
                            <span>24/12/2084</span>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"{{ 'assets/images/recent-post2.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">test2</a></h6>
                            <span>18/12/2084</span>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"more-info\">
                <h4 class=\"footer-title\">More info</h4>
                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                        <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                    </ul>
            </div>
        </div>
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-3\">
            <div class=\"social-bottom\">
                <span>Follow us:</span>
                <ul>
                    <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>", "/Users/beeldrstage/Documents/projects/shamsmaak/themes/jtherczeg-grill/partials/bottom.htm", "");
    }
}
