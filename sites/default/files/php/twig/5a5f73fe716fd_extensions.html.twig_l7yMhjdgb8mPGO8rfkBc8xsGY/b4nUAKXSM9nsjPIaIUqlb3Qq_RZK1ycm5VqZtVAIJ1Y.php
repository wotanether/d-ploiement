<?php

/* @webprofiler/Collector/extensions.html.twig */
class __TwigTemplate_8b5cac4eef70611880d84e41047db7b22ab96363ac52222561b684ed286d9dab extends Twig_Template
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
        $__internal_e2c10fed743b5ee21e5257699f20be639b5308227649cfc9e069a7fe16fe0664 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c10fed743b5ee21e5257699f20be639b5308227649cfc9e069a7fe16fe0664->enter($__internal_e2c10fed743b5ee21e5257699f20be639b5308227649cfc9e069a7fe16fe0664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/extensions.html.twig"));

        $tags = array("block" => 1, "set" => 2, "if" => 7);
        $filters = array("t" => 4, "default" => 22);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'if'),
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
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e2c10fed743b5ee21e5257699f20be639b5308227649cfc9e069a7fe16fe0664->leave($__internal_e2c10fed743b5ee21e5257699f20be639b5308227649cfc9e069a7fe16fe0664_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9245fc356df81cf05209dbc618b1de75b79e51e68799e8533d6b2df742b4526f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9245fc356df81cf05209dbc618b1de75b79e51e68799e8533d6b2df742b4526f->enter($__internal_9245fc356df81cf05209dbc618b1de75b79e51e68799e8533d6b2df742b4526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "drupal_extension")), "html", null, true));
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status";
        // line 7
        if ((150 < $this->getAttribute(($context["collector"] ?? null), "countExtensions", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getExtensionsCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Active Modules")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getModulesCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Active Themes")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getThemesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_9245fc356df81cf05209dbc618b1de75b79e51e68799e8533d6b2df742b4526f->leave($__internal_9245fc356df81cf05209dbc618b1de75b79e51e68799e8533d6b2df742b4526f_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abccac87d97fee436c9c4350f788a5fe4ffa0f913b333c4597de1d7ce82bd5d0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_abccac87d97fee436c9c4350f788a5fe4ffa0f913b333c4597de1d7ce82bd5d0->enter($__internal_abccac87d97fee436c9c4350f788a5fe4ffa0f913b333c4597de1d7ce82bd5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"drupal_extension\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions")));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"modules\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"themes\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"modules\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Modules")));
        echo "</label></li>
                <li><label class=\"tabs__label\" for=\"themes\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Themes")));
        echo "</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
                                <th>";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path")));
        echo "</th>
                                <th>";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info file")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.modules, function( value, key ){ %>
                            <% if(value.public_type == 'module') { %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% } %>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
                                <th>";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path")));
        echo "</th>
                                <th>";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info file")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.themes, function( value, key ){ %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_abccac87d97fee436c9c4350f788a5fe4ffa0f913b333c4597de1d7ce82bd5d0->leave($__internal_abccac87d97fee436c9c4350f788a5fe4ffa0f913b333c4597de1d7ce82bd5d0_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/extensions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 74,  214 => 73,  210 => 72,  181 => 46,  177 => 45,  173 => 44,  161 => 35,  157 => 34,  149 => 29,  146 => 28,  140 => 27,  130 => 23,  126 => 22,  122 => 20,  116 => 17,  112 => 16,  106 => 13,  102 => 12,  99 => 11,  96 => 10,  86 => 7,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
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
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'drupal_extension'}) }}\"
       title=\"{{ 'Extensions'|t }}\">
        <img width=\"20\" height=\"28\" alt=\"{{ 'Extensions'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status{% if 150 < collector.countExtensions %} sf-toolbar-status-yellow{% endif %}\">{{ collector.getExtensionsCount }}</span>
    </a>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Active Modules'|t }}</b>
        <span>{{ collector.getModulesCount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Active Themes'|t }}</b>
        <span>{{ collector.getThemesCount }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"drupal_extension\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Extensions'|t }}</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"modules\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"themes\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"modules\">{{ 'Modules'|t }}</label></li>
                <li><label class=\"tabs__label\" for=\"themes\">{{ 'Themes'|t }}</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>{{ 'Name'|t }}</th>
                                <th>{{ 'Path'|t }}</th>
                                <th>{{ 'Info file'|t }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.modules, function( value, key ){ %>
                            <% if(value.public_type == 'module') { %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% } %>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>{{ 'Name'|t }}</th>
                                <th>{{ 'Path'|t }}</th>
                                <th>{{ 'Info file'|t }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.themes, function( value, key ){ %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
{% endblock %}
", "@webprofiler/Collector/extensions.html.twig", "/var/www/user4.d8.lab/htdocs/local-dev/modules/contrib/devel/webprofiler/templates/Collector/extensions.html.twig");
    }
}
