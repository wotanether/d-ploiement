<?php

/* @webprofiler/Collector/drupal.html.twig */
class __TwigTemplate_8b8725c3b07ca791d7344816952ce71c46f7305c88435ec48ce76ff1857ac31a extends Twig_Template
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
        $__internal_5bbbd9f6543e16c7ecb80a54c50bbf8b5c3aa0425c7b3d39a15885c2246a25f6 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbbd9f6543e16c7ecb80a54c50bbf8b5c3aa0425c7b3d39a15885c2246a25f6->enter($__internal_5bbbd9f6543e16c7ecb80a54c50bbf8b5c3aa0425c7b3d39a15885c2246a25f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/drupal.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 12, "if" => 22);
        $filters = array("t" => 14, "default" => 53);
        $functions = array("url" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'spaceless', 'if'),
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
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        // line 66
        echo "
";
        
        $__internal_5bbbd9f6543e16c7ecb80a54c50bbf8b5c3aa0425c7b3d39a15885c2246a25f6->leave($__internal_5bbbd9f6543e16c7ecb80a54c50bbf8b5c3aa0425c7b3d39a15885c2246a25f6_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5186c98e5f82d09810561ca6a1617c64c0dae26890836d20f86b2fbec6826c76 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5186c98e5f82d09810561ca6a1617c64c0dae26890836d20f86b2fbec6826c76->enter($__internal_5186c98e5f82d09810561ca6a1617c64c0dae26890836d20f86b2fbec6826c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <span>
        <img width=\"13\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\">
        <a href=\"https://www.drupal.org\">
            <span>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "version", array()), "html", null, true));
        echo "</span>
        </a>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal version")));
        echo "</b>
            <span>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "version", array()), "html", null, true));
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installed profile")));
        echo "</b>
            <span>";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "profile", array()), "html", null, true));
        echo "</span>
        </div>

        ";
        // line 22
        if ($this->getAttribute(($context["collector"] ?? null), "getGitCommit", array())) {
            // line 23
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Git commit")));
            echo "</b>
            <span><abbr title=\"";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getGitCommit", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getAbbrGitCommit", array()), "html", null, true));
            echo "</abbr></span>
        </div>
        ";
        }
        // line 28
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getConfigUrl", array()), "html", null, true));
        echo "\"
                     title=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Configure Webprofiler")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Configure Webprofiler")));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.admin_list")));
        echo "\"
                     title=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest reports")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest reports")));
        echo "</a></span>
        </div>
        <hr/>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/documentation\">";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Documentation")));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/contribute\">";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Get involved!")));
        echo "</a></span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 45
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        if (($context["link"] ?? null)) {
            // line 48
            echo "        ";
            ob_start();
            // line 49
            echo "        <a href=\"#\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
            echo "</a>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 51
            echo "    ";
        }
        // line 52
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_5186c98e5f82d09810561ca6a1617c64c0dae26890836d20f86b2fbec6826c76->leave($__internal_5186c98e5f82d09810561ca6a1617c64c0dae26890836d20f86b2fbec6826c76_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb28fde52f47f9bf74a4df81509bad01d6d48fcac97c7ed6b20ce2365d685f76 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb28fde52f47f9bf74a4df81509bad01d6d48fcac97c7ed6b20ce2365d685f76->enter($__internal_bb28fde52f47f9bf74a4df81509bad01d6d48fcac97c7ed6b20ce2365d685f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"drupal\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal")));
        echo "</h2>
        <div class=\"panel__container\">

        </div>
    </script>
";
        
        $__internal_bb28fde52f47f9bf74a4df81509bad01d6d48fcac97c7ed6b20ce2365d685f76->leave($__internal_bb28fde52f47f9bf74a4df81509bad01d6d48fcac97c7ed6b20ce2365d685f76_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/drupal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 60,  218 => 59,  212 => 58,  202 => 54,  198 => 53,  195 => 52,  192 => 51,  186 => 49,  183 => 48,  181 => 47,  178 => 46,  175 => 45,  169 => 42,  163 => 39,  154 => 35,  150 => 34,  142 => 31,  138 => 30,  134 => 28,  126 => 25,  122 => 24,  119 => 23,  117 => 22,  111 => 19,  107 => 18,  101 => 15,  97 => 14,  94 => 13,  91 => 12,  88 => 11,  81 => 7,  76 => 5,  72 => 3,  69 => 2,  63 => 1,  55 => 66,  53 => 58,  50 => 57,  48 => 1,);
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
    {% set icon %}
    <span>
        <img width=\"13\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,{{ collector.icon }}\">
        <a href=\"https://www.drupal.org\">
            <span>{{ collector.version }}</span>
        </a>
        </span>
    {% endset %}
    {% set text %}
    {% spaceless %}
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Drupal version'|t }}</b>
            <span>{{ collector.version }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Installed profile'|t }}</b>
            <span>{{ collector.profile }}</span>
        </div>

        {% if collector.getGitCommit %}
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Git commit'|t }}</b>
            <span><abbr title=\"{{ collector.getGitCommit }}\">{{ collector.getAbbrGitCommit }}</abbr></span>
        </div>
        {% endif %}

        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"{{ collector.getConfigUrl }}\"
                     title=\"{{ 'Configure Webprofiler'|t }}\">{{ 'Configure Webprofiler'|t }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"{{ url(\"webprofiler.admin_list\") }}\"
                     title=\"{{ 'View latest reports'|t }}\">{{ 'View latest reports'|t }}</a></span>
        </div>
        <hr/>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/documentation\">{{ 'Drupal Documentation'|t }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/contribute\">{{ 'Get involved!'|t }}</a></span>
        </div>
    {% endspaceless %}
    {% endset %}

    {% if link %}
        {% set icon %}
        <a href=\"#\">{{ icon }}</a>
        {% endset %}
    {% endif %}
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"drupal\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Drupal'|t }}</h2>
        <div class=\"panel__container\">

        </div>
    </script>
{% endblock %}

", "@webprofiler/Collector/drupal.html.twig", "/var/www/user4.d8.lab/htdocs/local-dev/modules/contrib/devel/webprofiler/templates/Collector/drupal.html.twig");
    }
}
