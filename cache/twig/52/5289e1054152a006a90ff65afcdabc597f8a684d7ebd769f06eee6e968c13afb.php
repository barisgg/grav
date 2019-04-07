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

/* partials/nav-user-details.html.twig */
class __TwigTemplate_f07488f27b2e1f120d31930e02ab1e436926a9f1c3eb1bf8b7a7845b3a9d42f5 extends \Twig\Template
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
        echo "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
";
        // line 4
        $context["user"] = $this->getAttribute(($context["admin"] ?? null), "user", []);
        // line 5
        if ($this->getAttribute(($context["grav"] ?? null), "flex_objects", [], "array", true, true)) {
            // line 6
            echo "    ";
            $context["route"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "flex_objects", [], "array"), "adminRoute", [0 => ($context["user"] ?? null)], "method");
        } else {
            // line 8
            echo "    ";
            $context["route"] = ("/user/" . $this->getAttribute(($context["user"] ?? null), "username", []));
        }
        // line 10
        echo "
<div id=\"admin-user-details\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . ($context["route"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 13)->display($context);
        // line 14
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "fullname", []));
        echo " ";
        if (($this->getAttribute(($context["user"] ?? null), "twofa_enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "twofa_enabled", []))) {
            echo "<span class=\"badge\">2FA</span>";
        }
        echo "</h4>
            <h5>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", []));
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  61 => 16,  57 => 14,  55 => 13,  51 => 12,  47 => 10,  43 => 8,  39 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
{% set user = admin.user %}
{% if grav['flex_objects'] is defined %}
    {% set route = grav['flex_objects'].adminRoute(user) %}
{% else %}
    {% set route = '/user/' ~ user.username %}
{% endif %}

<div id=\"admin-user-details\">
    <a href=\"{{ base_url_relative ~ route }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ user.fullname|e }} {% if user.twofa_enabled and config.plugins.admin.twofa_enabled %}<span class=\"badge\">2FA</span>{% endif %}</h4>
            <h5>{{ user.title|e }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}
