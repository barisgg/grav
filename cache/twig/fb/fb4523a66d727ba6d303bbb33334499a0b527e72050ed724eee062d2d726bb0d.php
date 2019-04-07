<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_8c3b0cc40255f523f16d9d32b89af8e12c20e0da1abe9e10bff1a704871a4fcb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'relatedpages' => [$this, 'block_relatedpages'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
    </section>
</section>
";
        // line 6
        $this->displayBlock('relatedpages', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
    }

    // line 6
    public function block_relatedpages($context, array $blocks = [])
    {
        // line 7
        $this->loadTemplate("partials/relatedpages.html.twig", "partials/footer.html.twig", 7)->display($context);
    }

    // line 10
    public function block_sidebar($context, array $blocks = [])
    {
        // line 11
        $this->loadTemplate("partials/sidebar.html.twig", "partials/footer.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  58 => 10,  54 => 7,  51 => 6,  47 => 10,  44 => 9,  42 => 6,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
    </section>
</section>
{% block relatedpages %}
{% include \"partials/relatedpages.html.twig\" %}
{% endblock %}

{% block sidebar %}
{% include \"partials/sidebar.html.twig\" %}
{% endblock %}", "partials/footer.html.twig", "/var/www/html/user/themes/quark/templates/partials/footer.html.twig");
    }
}
