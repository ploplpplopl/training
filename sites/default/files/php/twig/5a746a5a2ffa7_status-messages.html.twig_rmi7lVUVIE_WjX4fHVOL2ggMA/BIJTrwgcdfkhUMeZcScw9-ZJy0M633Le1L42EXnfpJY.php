<?php

/* themes/ive/templates/status-messages.html.twig */
class __TwigTemplate_b90639071db5c27f5944ee473da2d17ea2ee5ed2e5745b28195746cfaf4ee532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "themes/ive/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf693d463b35cdd70b11a40c50e45293d1ef4ad66cbdd863f5da4212970e178 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf693d463b35cdd70b11a40c50e45293d1ef4ad66cbdd863f5da4212970e178->enter($__internal_4bf693d463b35cdd70b11a40c50e45293d1ef4ad66cbdd863f5da4212970e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/ive/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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
        
        $__internal_4bf693d463b35cdd70b11a40c50e45293d1ef4ad66cbdd863f5da4212970e178->leave($__internal_4bf693d463b35cdd70b11a40c50e45293d1ef4ad66cbdd863f5da4212970e178_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_07345066acf2caf37dbff83da5e37b7825a0e4e612e895e85c458334633a9324 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_07345066acf2caf37dbff83da5e37b7825a0e4e612e895e85c458334633a9324->enter($__internal_07345066acf2caf37dbff83da5e37b7825a0e4e612e895e85c458334633a9324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("ive/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_07345066acf2caf37dbff83da5e37b7825a0e4e612e895e85c458334633a9324->leave($__internal_07345066acf2caf37dbff83da5e37b7825a0e4e612e895e85c458334633a9324_prof);

    }

    public function getTemplateName()
    {
        return "themes/ive/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@classy/misc/status-messages.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 */
#}
{% block messages %}
  {% if message_list is not empty %}
    {{ attach_library('ive/messages') }}
    <div class=\"messages__wrapper layout-container\">
      {{ parent() }}
    </div>
  {% endif %}
{% endblock messages %}
", "themes/ive/templates/status-messages.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\themes\\ive\\templates\\status-messages.html.twig");
    }
}
