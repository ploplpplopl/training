<?php

/* @webprofiler/Collector/php_config.html.twig */
class __TwigTemplate_bbc62e176b5ffc151f13076ecb128d717a068f4b3b61c3e00144566ebbcb6f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_104ed6583aa7d12c3f60c2d28fa3d5b5b2afb32841454f294cccbdc683bd045d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_104ed6583aa7d12c3f60c2d28fa3d5b5b2afb32841454f294cccbdc683bd045d->enter($__internal_104ed6583aa7d12c3f60c2d28fa3d5b5b2afb32841454f294cccbdc683bd045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/php_config.html.twig"));

        $tags = array("block" => 1, "set" => 3, "spaceless" => 11);
        $filters = array("t" => 5, "default" => 33);
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'spaceless'),
                array('t', 'default'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_104ed6583aa7d12c3f60c2d28fa3d5b5b2afb32841454f294cccbdc683bd045d->leave($__internal_104ed6583aa7d12c3f60c2d28fa3d5b5b2afb32841454f294cccbdc683bd045d_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d0f281557c926be668a556eccfce5521e65064d39938f1640076e51b0b93729 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0f281557c926be668a556eccfce5521e65064d39938f1640076e51b0b93729->enter($__internal_1d0f281557c926be668a556eccfce5521e65064d39938f1640076e51b0b93729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "php_config")), "html", null, true));
        echo "\"
       title=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP config")));
        echo "\">
        <img width=\"26\" height=\"28\" alt=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP config")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\">
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
            <b>PHP</b>
            <span><a href=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.php")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "phpversion", array()), "html", null, true));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
            <b>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP Extensions")));
        echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["collector"] ?? null), "hasxdebug", array())) ? ("green") : ("red"))));
        echo "\">xdebug</span>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["collector"] ?? null), "hasaccelerator", array())) ? ("green") : ("red"))));
        echo "\">accel</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP SAPI")));
        echo "</b>
            <span>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "sapiName", array()), "html", null, true));
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Token</b>
            <span>";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 30
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_1d0f281557c926be668a556eccfce5521e65064d39938f1640076e51b0b93729->leave($__internal_1d0f281557c926be668a556eccfce5521e65064d39938f1640076e51b0b93729_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98b9cb802b88a358f2022a3945c2600b5623aa01df827fa7021880d86dd00c66 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b9cb802b88a358f2022a3945c2600b5623aa01df827fa7021880d86dd00c66->enter($__internal_98b9cb802b88a358f2022a3945c2600b5623aa01df827fa7021880d86dd00c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    <script id=\"php_config\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP config")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <% _.each( data, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>
        </div>
    </script>
";
        
        $__internal_98b9cb802b88a358f2022a3945c2600b5623aa01df827fa7021880d86dd00c66->leave($__internal_98b9cb802b88a358f2022a3945c2600b5623aa01df827fa7021880d86dd00c66_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/php_config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  166 => 39,  160 => 38,  150 => 34,  146 => 33,  142 => 31,  139 => 30,  133 => 27,  126 => 23,  122 => 22,  116 => 19,  112 => 18,  108 => 17,  100 => 14,  96 => 12,  93 => 11,  90 => 10,  84 => 7,  80 => 6,  76 => 5,  71 => 4,  68 => 3,  66 => 2,  60 => 1,  53 => 38,  50 => 37,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block toolbar %}
    {# PHP Information #}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'php_config'}) }}\"
       title=\"{{ 'PHP config'|t }}\">
        <img width=\"26\" height=\"28\" alt=\"{{ 'PHP config'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\">
    </a>
    {% endset %}
    {% set text %}
    {% spaceless %}
        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
            <b>PHP</b>
            <span><a href=\"{{ url(\"system.php\") }}\">{{ collector.phpversion }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
            <b>{{ 'PHP Extensions'|t }}</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'PHP SAPI'|t }}</b>
            <span>{{ collector.sapiName }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Token</b>
            <span>{{ token }}</span>
        </div>
    {% endspaceless %}
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"php_config\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'PHP config'|t }}</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <% _.each( data, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>
        </div>
    </script>
{% endblock %}
", "@webprofiler/Collector/php_config.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\modules\\devel\\webprofiler\\templates\\Collector\\php_config.html.twig");
    }
}
