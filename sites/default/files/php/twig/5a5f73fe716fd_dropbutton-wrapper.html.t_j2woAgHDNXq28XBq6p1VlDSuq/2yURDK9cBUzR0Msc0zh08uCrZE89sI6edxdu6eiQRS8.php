<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_fcee0e00aa088841204125ffd2cc9667515fa16923000387ee805056191438bc extends Twig_Template
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
        $__internal_1668c4113a13631328aa926f940dc4045a6fced1f67c248b1849e150fbe4e724 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1668c4113a13631328aa926f940dc4045a6fced1f67c248b1849e150fbe4e724->enter($__internal_1668c4113a13631328aa926f940dc4045a6fced1f67c248b1849e150fbe4e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/dropbutton-wrapper.html.twig"));

        $tags = array("if" => 12, "spaceless" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'spaceless'),
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

        // line 12
        if (($context["children"] ?? null)) {
            // line 13
            echo "  ";
            ob_start();
            // line 14
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_1668c4113a13631328aa926f940dc4045a6fced1f67c248b1849e150fbe4e724->leave($__internal_1668c4113a13631328aa926f940dc4045a6fced1f67c248b1849e150fbe4e724_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 14,  48 => 13,  46 => 12,);
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
 * Theme override for a dropbutton wrapper.
 *
 * Available variables:
 * - children: Contains the child elements of the dropbutton menu.
 *
 * @see template_preprocess()
 */
#}
{% if children %}
  {% spaceless %}
    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        {{ children }}
      </div>
    </div>
  {% endspaceless %}
{% endif %}
", "core/themes/classy/templates/form/dropbutton-wrapper.html.twig", "/var/www/user4.d8.lab/htdocs/local-dev/core/themes/classy/templates/form/dropbutton-wrapper.html.twig");
    }
}
