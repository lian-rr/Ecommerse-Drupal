<?php

/* themes/custom/ecommerse/templates/system/page--front.html.twig */
class __TwigTemplate_592c1caccde227c47aa0b4df54896afad40313c0ecc25f1e442751a062580ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'carousel' => array($this, 'block_carousel'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 66, "t" => 85);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 177
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "        ";
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 65
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 68
        echo "        <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
            ";
        // line 69
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 70
            echo "            <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
                ";
        }
        // line 72
        echo "                <div class=\"navbar-header container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                        </div>
                        <div class=\"col-md-8 col-md-offset-1 pull-right\">
                            ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                        </div>
                    </div>
                    ";
        // line 82
        echo "                    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 83
            echo "                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    ";
        }
        // line 91
        echo "                </div>

                ";
        // line 94
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 95
            echo "                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 99
        echo "                ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 100
            echo "            </div>
            ";
        }
        // line 102
        echo "        </header>
    ";
    }

    // line 107
    public function block_main($context, array $blocks = array())
    {
        // line 108
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
        <div class=\"row\">

            ";
        // line 112
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "carousel", array())) {
            // line 113
            echo "                ";
            $this->displayBlock('carousel', $context, $blocks);
            // line 116
            echo "            ";
        }
        echo "l

            ";
        // line 119
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 120
            echo "                ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 125
            echo "            ";
        }
        // line 126
        echo "
            ";
        // line 128
        echo "            ";
        $context["content_classes"] = array(0 => (($this->getAttribute(        // line 129
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) ? ("col-sm-9") : ("")), 1 => ((($this->getAttribute(        // line 130
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((twig_test_empty($this->getAttribute(        // line 131
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) ? ("col-sm-12") : ("")), 3 => "container");
        // line 134
        echo "            <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

                ";
        // line 137
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 138
            echo "                    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 141
            echo "                ";
        }
        // line 142
        echo "
                ";
        // line 144
        echo "                ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 145
            echo "                    ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 148
            echo "                ";
        }
        // line 149
        echo "
                ";
        // line 151
        echo "                ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 152
            echo "                    ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 155
            echo "                ";
        }
        // line 156
        echo "
                ";
        // line 158
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 159
            echo "                    ";
            $this->displayBlock('help', $context, $blocks);
            // line 162
            echo "                ";
        }
        // line 163
        echo "
                ";
        // line 165
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 171
        echo "            </section>
        </div>
    </div>
";
    }

    // line 113
    public function block_carousel($context, array $blocks = array())
    {
        // line 114
        echo "                    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "carousel", array()), "html", null, true));
        echo "
                ";
    }

    // line 120
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 121
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 138
    public function block_highlighted($context, array $blocks = array())
    {
        // line 139
        echo "                        <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
                    ";
    }

    // line 145
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 146
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                    ";
    }

    // line 152
    public function block_action_links($context, array $blocks = array())
    {
        // line 153
        echo "                        <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
                    ";
    }

    // line 159
    public function block_help($context, array $blocks = array())
    {
        // line 160
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
                    ";
    }

    // line 165
    public function block_content($context, array $blocks = array())
    {
        // line 166
        echo "                    <div class=\"container\">
                        ";
        // line 168
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                    </div>
                ";
    }

    // line 177
    public function block_footer($context, array $blocks = array())
    {
        // line 178
        echo "        <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
            ";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ecommerse/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 179,  343 => 178,  340 => 177,  332 => 168,  329 => 166,  326 => 165,  319 => 160,  316 => 159,  309 => 153,  306 => 152,  299 => 146,  296 => 145,  289 => 139,  286 => 138,  279 => 122,  276 => 121,  273 => 120,  266 => 114,  263 => 113,  256 => 171,  253 => 165,  250 => 163,  247 => 162,  244 => 159,  241 => 158,  238 => 156,  235 => 155,  232 => 152,  229 => 151,  226 => 149,  223 => 148,  220 => 145,  217 => 144,  214 => 142,  211 => 141,  208 => 138,  205 => 137,  199 => 134,  197 => 131,  196 => 130,  195 => 129,  193 => 128,  190 => 126,  187 => 125,  184 => 120,  181 => 119,  175 => 116,  172 => 113,  169 => 112,  162 => 108,  159 => 107,  154 => 102,  150 => 100,  147 => 99,  141 => 96,  138 => 95,  135 => 94,  131 => 91,  122 => 85,  118 => 83,  115 => 82,  109 => 78,  103 => 75,  98 => 72,  92 => 70,  90 => 69,  85 => 68,  83 => 66,  82 => 65,  80 => 63,  77 => 62,  71 => 177,  69 => 176,  66 => 175,  64 => 107,  61 => 105,  57 => 62,  55 => 61,  53 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
    {% block navbar %}
        {% set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
        ] %}
        <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
            {% if not navbar_attributes.hasClass(container) %}
            <div class=\"{{ container }}\">
                {% endif %}
                <div class=\"navbar-header container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            {{ page.header }}
                        </div>
                        <div class=\"col-md-8 col-md-offset-1 pull-right\">
                            {{ page.navigation }}
                        </div>
                    </div>
                    {# .btn-navbar is used as the toggle for collapsed navbar content #}
                    {% if page.navigation_collapsible %}
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    {% endif %}
                </div>

                {# Navigation (collapsible) #}
                {% if page.navigation_collapsible %}
                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        {{ page.navigation_collapsible }}
                    </div>
                {% endif %}
                {% if not navbar_attributes.hasClass(container) %}
            </div>
            {% endif %}
        </header>
    {% endblock %}
{% endif %}

{# Main #}
{% block main %}
    <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
        <div class=\"row\">

            {# Carousel #}
            {% if page.carousel %}
                {% block carousel %}
                    {{ page.carousel }}
                {% endblock %}
            {% endif %}l

            {# Sidebar First #}
            {% if page.sidebar_first %}
                {% block sidebar_first %}
                    <aside class=\"col-sm-3\" role=\"complementary\">
                        {{ page.sidebar_first }}
                    </aside>
                {% endblock %}
            {% endif %}

            {# Content #}
            {% set content_classes = [
            page.sidebar_first ? 'col-sm-9',
            page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
            page.sidebar_first is empty ?'col-sm-12',
            'container'
            ] %}
            <section{{ content_attributes.addClass(content_classes) }}>

                {# Highlighted #}
                {% if page.highlighted %}
                    {% block highlighted %}
                        <div class=\"highlighted\">{{ page.highlighted }}</div>
                    {% endblock %}
                {% endif %}

                {# Breadcrumbs #}
                {% if breadcrumb %}
                    {% block breadcrumb %}
                        {{ breadcrumb }}
                    {% endblock %}
                {% endif %}

                {# Action Links #}
                {% if action_links %}
                    {% block action_links %}
                        <ul class=\"action-links\">{{ action_links }}</ul>
                    {% endblock %}
                {% endif %}

                {# Help #}
                {% if page.help %}
                    {% block help %}
                        {{ page.help }}
                    {% endblock %}
                {% endif %}

                {# Content #}
                {% block content %}
                    <div class=\"container\">
                        {#<a id=\"main-content\"></a>#}
                        {{ page.content }}
                    </div>
                {% endblock %}
            </section>
        </div>
    </div>
{% endblock %}

{% if page.footer %}
    {% block footer %}
        <footer class=\"footer {{ container }}\" role=\"contentinfo\">
            {{ page.footer }}
        </footer>
    {% endblock %}
{% endif %}
";
    }
}
