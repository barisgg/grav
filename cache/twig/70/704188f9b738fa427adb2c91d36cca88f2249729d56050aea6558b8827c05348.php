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

/* partials/tools-backups.html.twig */
class __TwigTemplate_fa16ddeaf1809b60760fa602aa0ef563f19bb6132b104504dc0d251c39550c4b extends \Twig\Template
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
        echo "<div class=\"backups-content\">

    ";
        // line 3
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/backups"], "method");
        // line 4
        echo "    ";
        $context["backups"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getAvailableBackups", [], "method");
        // line 5
        echo "    ";
        $context["profiles"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getBackupProfiles", [], "method");
        // line 6
        echo "    ";
        $context["purge_config"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getPurgeConfig", [], "method");
        // line 7
        echo "    ";
        $context["newest_date"] = $this->getAttribute(twig_first($this->env, ($context["backups"] ?? null)), "date", []);
        // line 8
        echo "    ";
        $context["newest_backup"] = ((($context["newest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc(($context["newest_date"] ?? null), false, false)) : ("none"));
        // line 9
        echo "    ";
        $context["oldest_date"] = $this->getAttribute(twig_last($this->env, ($context["backups"] ?? null)), "date", []);
        // line 10
        echo "    ";
        $context["oldest_backup"] = ((($context["oldest_date"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc(($context["oldest_date"] ?? null), false, false)) : ("none"));
        // line 11
        echo "
    ";
        // line 12
        switch ($this->getAttribute(($context["purge_config"] ?? null), "trigger", [])) {
            case "number":
            {
                // line 14
                echo "        ";
                $context["count"] = count(($context["backups"] ?? null));
                // line 15
                echo "        ";
                $context["percent_used"] = (((($context["count"] ?? null) == 0)) ? (0) : ((100 - ((($context["count"] ?? null) / $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", [])) * 100))));
                // line 16
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER", [0 => ($context["count"] ?? null), 1 => $this->getAttribute(($context["purge_config"] ?? null), "max_backups_count", [])]);
                // line 17
                echo "    ";
                break;
            }
            case "time":
            {
                // line 18
                echo "        ";
                $context["last"] = twig_last($this->env, ($context["backups"] ?? null));
                // line 19
                echo "        ";
                $context["days"] = (((($context["last"] ?? null) == null)) ? (0) : ($this->getAttribute($this->getAttribute(twig_date_converter($this->env, "now"), "diff", [0 => $this->getAttribute(($context["last"] ?? null), "time", [])], "method"), "days", [])));
                // line 20
                echo "        ";
                $context["percent_used"] = (((($context["days"] ?? null) == 0)) ? (0) : ((100 - ((($context["days"] ?? null) / $this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", [])) * 100))));
                // line 21
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_TIME", [0 => ($this->getAttribute(($context["purge_config"] ?? null), "max_backups_time", []) - ($context["days"] ?? null))]);
                // line 22
                echo "    ";
                break;
            }
            default:
            {
                // line 23
                echo "        ";
                $context["space_used"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getTotalBackupsSize", [], "method");
                // line 24
                echo "        ";
                $context["space_available"] = ((($this->getAttribute(($context["purge_config"] ?? null), "max_backups_space", []) * 1024) * 1024) * 1024);
                // line 25
                echo "        ";
                $context["percent_used"] = (((($context["space_used"] ?? null) == 0)) ? (0) : ((100 - ((($context["space_used"] ?? null) / ($context["space_available"] ?? null)) * 100))));
                // line 26
                echo "        ";
                $context["bar_msg"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PURGE_SPACE", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->niceFilesizeFunc(($context["space_used"] ?? null)), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->niceFilesizeFunc(($context["space_available"] ?? null))]);
                // line 27
                echo "    ";
            }
        }
        // line 28
        echo "
    <div id=\"admin-dashboard\">
      <div id=\"backups-stats\" class=\"dashboard-item\">
        <div class=\"primary-accent default-box-shadow\">
          <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_STATS"), "html", null, true);
        echo "</h1>
          <div class=\"admin-statistics-chart\">
            <div class=\"stats-info\">

                <div id=\"backups-usage\">
                    <div class=\"backups-usage-wrapper\">
                        ";
        // line 38
        if ((($context["percent_used"] ?? null) >= 100)) {
            // line 39
            echo "                            <div class=\"usage full\"></div>
                        ";
        } else {
            // line 41
            echo "                            <div class=\"usage\" style=\"width:";
            echo twig_escape_filter($this->env, ($context["percent_used"] ?? null), "html", null, true);
            echo "%\"></div>
                        ";
        }
        // line 43
        echo "                    </div>
                    <h1>";
        // line 44
        echo twig_escape_filter($this->env, ($context["bar_msg"] ?? null), "html", null, true);
        echo "</h1>
                </div>
            </div>

            <div class=\"flush-bottom button-bar stats-bar\">
              <span class=\"stat\">
                  <b>";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["backups"] ?? null)), "html", null, true);
        echo "</b>
                  <i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_COUNT"), "html", null, true);
        echo "</i>
              </span>
              <span class=\"stat\">
                  <b>";
        // line 54
        echo twig_escape_filter($this->env, count(($context["profiles"] ?? null)), "html", null, true);
        echo "</b>
                  <i>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT"), "html", null, true);
        echo "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 58
        echo twig_escape_filter($this->env, ($context["newest_backup"] ?? null), "html", null, true);
        echo "</b>
                  <i>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_NEWEST"), "html", null, true);
        echo "</i>
              </span>
                <span class=\"stat\">
                  <b>";
        // line 62
        echo twig_escape_filter($this->env, ($context["oldest_backup"] ?? null), "html", null, true);
        echo "</b>
                  <i>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_OLDEST"), "html", null, true);
        echo "</i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 71
        $this->loadTemplate("partials/blueprints.html.twig", "partials/tools-backups.html.twig", 71)->display(array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
        // line 72
        echo "
    ";
        // line 73
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-backups.html.twig", 73)->display($context);
        // line 74
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/tools-backups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  202 => 73,  199 => 72,  197 => 71,  186 => 63,  182 => 62,  176 => 59,  172 => 58,  166 => 55,  162 => 54,  156 => 51,  152 => 50,  143 => 44,  140 => 43,  134 => 41,  130 => 39,  128 => 38,  119 => 32,  113 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"backups-content\">

    {% set data = admin.data('config/backups') %}
    {% set backups = grav.backups.getAvailableBackups() %}
    {% set profiles = grav.backups.getBackupProfiles() %}
    {% set purge_config = grav.backups.getPurgeConfig() %}
    {% set newest_date = (backups|first).date %}
    {% set newest_backup = newest_date ? newest_date|nicetime(false, false) : 'none' %}
    {% set oldest_date = (backups|last).date %}
    {% set oldest_backup = oldest_date ? oldest_date|nicetime(false, false) : 'none' %}

    {% switch purge_config.trigger %}
    {% case 'number' %}
        {% set count = backups|count %}
        {% set percent_used = count == 0 ? 0 : 100 - (count / purge_config.max_backups_count * 100) %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_NUMBER\"|tu([count, purge_config.max_backups_count]) %}
    {% case 'time' %}
        {% set last = backups|last %}
        {% set days = last == null ? 0 : (date('now')).diff(last.time).days %}
        {% set percent_used = days == 0 ? 0 : 100 - (days / purge_config.max_backups_time * 100) %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_TIME\"|tu([(purge_config.max_backups_time - days)]) %}
    {% default %}
        {% set space_used = grav.backups.getTotalBackupsSize() %}
        {% set space_available = purge_config.max_backups_space * 1024 * 1024 * 1024 %}
        {% set percent_used = space_used == 0 ? 0 : 100 - (space_used / space_available * 100) %}
        {% set bar_msg = \"PLUGIN_ADMIN.BACKUPS_PURGE_SPACE\"|tu([space_used|nicefilesize, space_available|nicefilesize]) %}
    {% endswitch %}

    <div id=\"admin-dashboard\">
      <div id=\"backups-stats\" class=\"dashboard-item\">
        <div class=\"primary-accent default-box-shadow\">
          <h1>{{ \"PLUGIN_ADMIN.BACKUPS_STATS\"|tu }}</h1>
          <div class=\"admin-statistics-chart\">
            <div class=\"stats-info\">

                <div id=\"backups-usage\">
                    <div class=\"backups-usage-wrapper\">
                        {% if percent_used >= 100 %}
                            <div class=\"usage full\"></div>
                        {% else %}
                            <div class=\"usage\" style=\"width:{{ percent_used }}%\"></div>
                        {% endif %}
                    </div>
                    <h1>{{ bar_msg }}</h1>
                </div>
            </div>

            <div class=\"flush-bottom button-bar stats-bar\">
              <span class=\"stat\">
                  <b>{{ backups|length }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_COUNT\"|tu }}</i>
              </span>
              <span class=\"stat\">
                  <b>{{ profiles|count }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_PROFILES_COUNT\"|tu }}</i>
              </span>
                <span class=\"stat\">
                  <b>{{ newest_backup }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_NEWEST\"|tu }}</i>
              </span>
                <span class=\"stat\">
                  <b>{{ oldest_backup }}</b>
                  <i>{{ \"PLUGIN_ADMIN.BACKUPS_OLDEST\"|tu }}</i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}

    {% include 'partials/modal-changes-detected.html.twig' %}


</div>
", "partials/tools-backups.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/partials/tools-backups.html.twig");
    }
}
