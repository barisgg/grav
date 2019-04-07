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

/* blog.html.twig */
class __TwigTemplate_6266bd76aeb7fbe223aa713a30eb8215b7dacc599c268b87c41cdec573489e7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))], "method");
        // line 5
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 20
    public function block_hero($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 21)->display(array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        // line 25
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 26
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 28
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 29
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 29)->display(array_merge($context, ["blog" => ($context["page"] ?? null)]));
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 32, "1716569129")->display(array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 47
        echo "        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  100 => 28,  95 => 26,  92 => 25,  89 => 24,  84 => 21,  81 => 20,  76 => 16,  74 => 15,  69 => 14,  66 => 13,  59 => 10,  56 => 9,  53 => 8,  49 => 1,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' with {blog: page} %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "blog.html.twig", "/var/www/html/user/themes/quark/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_6266bd76aeb7fbe223aa713a30eb8215b7dacc599c268b87c41cdec573489e7b___1716569129 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 32
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 32);
        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_item($context, array $blocks = [])
    {
        // line 34
        echo "
                <div class=\"bricklayer\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 37)->display(array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 38
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>

            ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = [])
    {
        // line 44
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 44)->display($context);
        // line 45
        echo "            ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 45,  284 => 44,  281 => 43,  275 => 39,  261 => 38,  258 => 37,  241 => 36,  237 => 34,  234 => 33,  216 => 32,  113 => 47,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  100 => 28,  95 => 26,  92 => 25,  89 => 24,  84 => 21,  81 => 20,  76 => 16,  74 => 15,  69 => 14,  66 => 13,  59 => 10,  56 => 9,  53 => 8,  49 => 1,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' with {blog: page} %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "blog.html.twig", "/var/www/html/user/themes/quark/templates/blog.html.twig");
    }
}
