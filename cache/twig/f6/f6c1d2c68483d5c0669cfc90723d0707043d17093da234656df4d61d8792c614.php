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

/* @Page:/var/www/html/user/pages/03.blog/thing */
class __TwigTemplate_695b6e965816a6c8f732ddd263f7da2f70cbfb66d899f2d0dd360a7bb648d522 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<pre><code>            ";
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 2
            echo "                &lt;div id=\"listing-footer\"&gt;
                    ";
            // line 3
            $this->loadTemplate("partials/pagination.html.twig", "@Page:/var/www/html/user/pages/03.blog/thing", 3)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 4
            echo "                &lt;/div&gt;
            ";
        }
        // line 6
        echo "
            ";
        // line 7
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 8
            echo "                &lt;div id=\"listing-footer\"&gt;
                    ";
            // line 9
            $this->loadTemplate("partials/pagination.html.twig", "@Page:/var/www/html/user/pages/03.blog/thing", 9)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 10
            echo "                &lt;/div&gt;
            ";
        }
        // line 12
        echo "
            ";
        // line 13
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 14
            echo "                &lt;div id=\"listing-footer\"&gt;
                    ";
            // line 15
            $this->loadTemplate("partials/pagination.html.twig", "@Page:/var/www/html/user/pages/03.blog/thing", 15)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 16
            echo "                &lt;/div&gt;
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 20
            echo "                &lt;div id=\"listing-footer\"&gt;
                    ";
            // line 21
            $this->loadTemplate("partials/pagination.html.twig", "@Page:/var/www/html/user/pages/03.blog/thing", 21)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 22
            echo "                &lt;/div&gt;
            ";
        }
        // line 23
        echo "</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/03.blog/thing";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  52 => 10,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<pre><code>            {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                &lt;div id=\"listing-footer\"&gt;
                    {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                &lt;/div&gt;
            {% endif %}

            {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                &lt;div id=\"listing-footer\"&gt;
                    {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                &lt;/div&gt;
            {% endif %}

            {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                &lt;div id=\"listing-footer\"&gt;
                    {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                &lt;/div&gt;
            {% endif %}

            {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                &lt;div id=\"listing-footer\"&gt;
                    {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                &lt;/div&gt;
            {% endif %}</code></pre>", "@Page:/var/www/html/user/pages/03.blog/thing", "");
    }
}
