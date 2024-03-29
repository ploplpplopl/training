<?php

/* core/themes/classy/templates/form/container.html.twig */
class __TwigTemplate_b52e4947cf27805ad18fcc68148702214216c8e867385097849b3e23842e372d extends Twig_Template
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
        $__internal_6a67959816f807b0e421f383579d7eff13324128eb56cc93f0eedaf7a0c7f3fe = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a67959816f807b0e421f383579d7eff13324128eb56cc93f0eedaf7a0c7f3fe->enter($__internal_6a67959816f807b0e421f383579d7eff13324128eb56cc93f0eedaf7a0c7f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/container.html.twig"));

        $tags = array("set" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 23
        $context["classes"] = array(0 => ((        // line 24
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("form-wrapper") : ("")));
        // line 28
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_6a67959816f807b0e421f383579d7eff13324128eb56cc93f0eedaf7a0c7f3fe->leave($__internal_6a67959816f807b0e421f383579d7eff13324128eb56cc93f0eedaf7a0c7f3fe_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 28,  48 => 25,  47 => 24,  46 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override of a container used to wrap child elements.
 *
 * Used for grouped form items. Can also be used as a theme wrapper for any
 * renderable element, to surround it with a <div> and HTML attributes.
 * See \\Drupal\\Core\\Render\\Element\\RenderElement for more
 * information on the #theme_wrappers render array property, and
 * \\Drupal\\Core\\Render\\Element\\container for usage of the container render
 * element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - children: The rendered child elements of the container.
 * - has_parent: A flag to indicate that the container has one or more parent
     containers.
 *
 * @see template_preprocess_container()
 */
#}
{%
  set classes = [
    has_parent ? 'js-form-wrapper',
    has_parent ? 'form-wrapper',
  ]
%}
<div{{ attributes.addClass(classes) }}>{{ children }}</div>
", "core/themes/classy/templates/form/container.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\core\\themes\\classy\\templates\\form\\container.html.twig");
    }
}
