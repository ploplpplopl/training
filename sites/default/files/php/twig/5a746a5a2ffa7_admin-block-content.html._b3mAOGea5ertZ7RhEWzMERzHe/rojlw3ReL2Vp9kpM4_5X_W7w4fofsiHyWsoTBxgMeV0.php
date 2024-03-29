<?php

/* core/themes/seven/templates/admin-block-content.html.twig */
class __TwigTemplate_b73d012444286db660975681487057e7cfcef71c11a3eee52deda740656f9986 extends Twig_Template
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
        $__internal_7f298e377241191c9b25c2adb861dca1f3bb34e6bf0e271064a08cf33a958c3d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f298e377241191c9b25c2adb861dca1f3bb34e6bf0e271064a08cf33a958c3d->enter($__internal_7f298e377241191c9b25c2adb861dca1f3bb34e6bf0e271064a08cf33a958c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/admin-block-content.html.twig"));

        $tags = array("set" => 21, "if" => 26, "for" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 21
        $context["classes"] = array(0 => "admin-list", 1 => ((        // line 23
($context["compact"] ?? null)) ? ("compact") : ("")));
        // line 26
        if (($context["content"] ?? null)) {
            // line 27
            echo "  <ul";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "      <li><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\"><span class=\"label\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo "</span><div class=\"description\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  </ul>
";
        }
        
        $__internal_7f298e377241191c9b25c2adb861dca1f3bb34e6bf0e271064a08cf33a958c3d->leave($__internal_7f298e377241191c9b25c2adb861dca1f3bb34e6bf0e271064a08cf33a958c3d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  60 => 29,  56 => 28,  51 => 27,  49 => 26,  47 => 23,  46 => 21,);
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
 * Seven's theme implementation for the content of an administrative block.
 *
 * Uses unordered list markup in both compact and extended modes.
 *
 * Available variables:
 * - content: List of administrative menu items. Each menu item contains:
 *   - url: Path to the admin section.
 *   - title: Short name of the section.
 *   - description: Description of the administrative menu item.
 * - attributes: HTML attributes to be added to the element.
 * - compact: Boolean indicating whether compact mode is turned on or not.
 *
 * @see template_preprocess_admin_block_content()
 * @see seven_preprocess_admin_block_content()
 */
#}
{%
  set classes = [
    'admin-list',
    compact ? 'compact',
  ]
%}
{% if content %}
  <ul{{ attributes.addClass(classes) }}>
    {% for item in content %}
      <li><a href=\"{{ item.url }}\"><span class=\"label\">{{ item.title }}</span><div class=\"description\">{{ item.description }}</div></a></li>
    {% endfor %}
  </ul>
{% endif %}
", "core/themes/seven/templates/admin-block-content.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\core\\themes\\seven\\templates\\admin-block-content.html.twig");
    }
}
