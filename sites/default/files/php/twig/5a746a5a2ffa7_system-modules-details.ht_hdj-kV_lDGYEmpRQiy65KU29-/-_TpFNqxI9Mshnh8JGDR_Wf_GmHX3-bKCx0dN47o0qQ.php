<?php

/* core/themes/stable/templates/admin/system-modules-details.html.twig */
class __TwigTemplate_154459fda43a49f7474c85660b9d2601d4fa993c0f73535fc4d41ecbfe554caa extends Twig_Template
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
        $__internal_986ef54937b11d41cc0bc849f81985338f5ee0c91ff2fdf10ef730e854fd6afb = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_986ef54937b11d41cc0bc849f81985338f5ee0c91ff2fdf10ef730e854fd6afb->enter($__internal_986ef54937b11d41cc0bc849f81985338f5ee0c91ff2fdf10ef730e854fd6afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-modules-details.html.twig"));

        $tags = array("for" => 34, "set" => 35, "if" => 50);
        $filters = array("t" => 28);
        $functions = array("cycle" => 35);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('t'),
                array('cycle')
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

        // line 25
        echo "<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installed")));
        echo "</th>
      <th class=\"name visually-hidden\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
      <th class=\"description visually-hidden priority-low\">";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description")));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            echo "      ";
            $context["zebra"] = twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()));
            // line 36
            echo "      <tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "addClass", array(0 => ($context["zebra"] ?? null)), "method"), "html", null, true));
            echo ">
        <td class=\"checkbox\">
          ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox", array()), "html", null, true));
            echo "
        </td>
        <td class=\"module\">
          <label id=\"";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true));
            echo "\" for=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true));
            echo "</label>
        </td>
        <td class=\"description expand priority-low\">
          <details class=\"js-form-wrapper form-wrapper\" id=\"";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\">
            <summary aria-controls=\"";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "description", array()), "html", null, true));
            echo "</span></summary>
            <div class=\"details-wrapper\">
              <div class=\"details-description\">
                <div class=\"requirements\">
                  <div class=\"admin-requirements\">";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", array("@machine-name" => $this->getAttribute($context["module"], "machine_name", array())))));
            echo "</div>
                  ";
            // line 50
            if ($this->getAttribute($context["module"], "version", array())) {
                // line 51
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version: @module-version", array("@module-version" => $this->getAttribute($context["module"], "version", array())))));
                echo "</div>
                  ";
            }
            // line 53
            echo "                  ";
            if ($this->getAttribute($context["module"], "requires", array())) {
                // line 54
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Requires: @module-list", array("@module-list" => $this->getAttribute($context["module"], "requires", array())))));
                echo "</div>
                  ";
            }
            // line 56
            echo "                  ";
            if ($this->getAttribute($context["module"], "required_by", array())) {
                // line 57
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Required by: @module-list", array("@module-list" => $this->getAttribute($context["module"], "required_by", array())))));
                echo "</div>
                  ";
            }
            // line 59
            echo "                </div>
                ";
            // line 60
            if ($this->getAttribute($context["module"], "links", array())) {
                // line 61
                echo "                  <div class=\"links\">
                    ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "help", 1 => "permissions", 2 => "configure"));
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 63
                    echo "                      ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "links", array()), $context["link_type"], array(), "array"), "html", null, true));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                  </div>
                ";
            }
            // line 67
            echo "              </div>
            </div>
          </details>
        </td>
      </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "  </tbody>
</table>
";
        
        $__internal_986ef54937b11d41cc0bc849f81985338f5ee0c91ff2fdf10ef730e854fd6afb->leave($__internal_986ef54937b11d41cc0bc849f81985338f5ee0c91ff2fdf10ef730e854fd6afb_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 73,  176 => 67,  172 => 65,  163 => 63,  159 => 62,  156 => 61,  154 => 60,  151 => 59,  145 => 57,  142 => 56,  136 => 54,  133 => 53,  127 => 51,  125 => 50,  121 => 49,  112 => 45,  108 => 44,  98 => 41,  92 => 38,  86 => 36,  83 => 35,  66 => 34,  59 => 30,  55 => 29,  51 => 28,  46 => 25,);
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
 * Theme override for the modules listing page.
 *
 * Displays a list of all packages in a project.
 *
 * Available variables:
 * - modules: Contains multiple module instances. Each module contains:
 *   - attributes: Attributes on the row.
 *   - checkbox: A checkbox for enabling the module.
 *   - name: The human-readable name of the module.
 *   - id: A unique identifier for interacting with the details element.
 *   - enable_id: A unique identifier for interacting with the checkbox element.
 *   - description: The description of the module.
 *   - machine_name: The module's machine name.
 *   - version: Information about the module version.
 *   - requires: A list of modules that this module requires.
 *   - required_by: A list of modules that require this module.
 *   - links: A list of administration links provided by the module.
 *
 * @see template_preprocess_system_modules_details()
 */
#}
<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">{{ 'Installed'|t }}</th>
      <th class=\"name visually-hidden\">{{ 'Name'|t }}</th>
      <th class=\"description visually-hidden priority-low\">{{ 'Description'|t }}</th>
    </tr>
  </thead>
  <tbody>
    {% for module in modules %}
      {% set zebra = cycle(['odd', 'even'], loop.index0) %}
      <tr{{ module.attributes.addClass(zebra) }}>
        <td class=\"checkbox\">
          {{ module.checkbox }}
        </td>
        <td class=\"module\">
          <label id=\"{{ module.id }}\" for=\"{{ module.enable_id }}\" class=\"module-name table-filter-text-source\">{{ module.name }}</label>
        </td>
        <td class=\"description expand priority-low\">
          <details class=\"js-form-wrapper form-wrapper\" id=\"{{ module.enable_id }}-description\">
            <summary aria-controls=\"{{ module.enable_id }}-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">{{ module.description }}</span></summary>
            <div class=\"details-wrapper\">
              <div class=\"details-description\">
                <div class=\"requirements\">
                  <div class=\"admin-requirements\">{{ 'Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>'|t({'@machine-name': module.machine_name }) }}</div>
                  {% if module.version %}
                    <div class=\"admin-requirements\">{{ 'Version: @module-version'|t({'@module-version': module.version }) }}</div>
                  {% endif %}
                  {% if module.requires %}
                    <div class=\"admin-requirements\">{{ 'Requires: @module-list'|t({'@module-list': module.requires }) }}</div>
                  {% endif %}
                  {% if module.required_by %}
                    <div class=\"admin-requirements\">{{ 'Required by: @module-list'|t({'@module-list': module.required_by }) }}</div>
                  {% endif %}
                </div>
                {% if module.links %}
                  <div class=\"links\">
                    {% for link_type in ['help', 'permissions', 'configure'] %}
                      {{ module.links[link_type] }}
                    {% endfor %}
                  </div>
                {% endif %}
              </div>
            </div>
          </details>
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "core/themes/stable/templates/admin/system-modules-details.html.twig", "C:\\wamp\\www\\drupal-8.4.4\\core\\themes\\stable\\templates\\admin\\system-modules-details.html.twig");
    }
}
