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

/* partials/layout.html.twig */
class __TwigTemplate_61cfee299722ab0b9fb35b99e8108196574f4925501ccbbcea7a77bcb1cdfbe3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 5
        echo 2;
        echo " extra-spacing\">
        ";
        // line 6
        $this->displayBlock('item', $context, $blocks);
        // line 7
        echo "    </div>
  
</div>

";
    }

    // line 6
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  45 => 7,  43 => 6,  39 => 5,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ 2 }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
  
</div>

", "partials/layout.html.twig", "/var/www/html/user/themes/quark/templates/partials/layout.html.twig");
    }
}
