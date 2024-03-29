<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_11a8457e4cccd4d2033f951feb25834227b89b04760a5c38264d16581025bd0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b5ee866d2df6816a067eaf2d28b83539effcf5d70906bf166bde9ceff0ead94 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5ee866d2df6816a067eaf2d28b83539effcf5d70906bf166bde9ceff0ead94->enter($__internal_2b5ee866d2df6816a067eaf2d28b83539effcf5d70906bf166bde9ceff0ead94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5ee866d2df6816a067eaf2d28b83539effcf5d70906bf166bde9ceff0ead94->leave($__internal_2b5ee866d2df6816a067eaf2d28b83539effcf5d70906bf166bde9ceff0ead94_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e70ecb73ea78565be5c915a91f2e2cf96fde7a4285b66d3df766c052b292775 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e70ecb73ea78565be5c915a91f2e2cf96fde7a4285b66d3df766c052b292775->enter($__internal_5e70ecb73ea78565be5c915a91f2e2cf96fde7a4285b66d3df766c052b292775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_5e70ecb73ea78565be5c915a91f2e2cf96fde7a4285b66d3df766c052b292775->leave($__internal_5e70ecb73ea78565be5c915a91f2e2cf96fde7a4285b66d3df766c052b292775_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
", "core/themes/seven/templates/block--local-actions-block.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\core\\themes\\seven\\templates\\block--local-actions-block.html.twig");
    }
}
