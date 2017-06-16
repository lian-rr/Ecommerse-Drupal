<?php

/* themes/custom/ecommerse/templates/node/node--product--full.html.twig */
class __TwigTemplate_621a41d568c6ab05bc3515844c778860d8e474fe6aff839067326133c4f580d8 extends Twig_Template
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
        $tags = array("set" => 68);
        $filters = array("clean_class" => 69);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 68
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 69
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 73
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix");
        // line 76
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

    ";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        // line 81
        echo "    ";
        // line 82
        echo "    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "
    ";
        // line 87
        echo "    ";
        // line 88
        echo "    ";
        // line 89
        echo "    ";
        // line 90
        echo "    ";
        // line 91
        echo "    ";
        // line 92
        echo "    ";
        // line 93
        echo "    ";
        // line 94
        echo "    ";
        // line 95
        echo "
    <div";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
        ";
        // line 98
        echo "
        <div class=\"row\">
            <div class=\"col-md-4\">
                ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_images", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-8\">
                ";
        // line 105
        echo "                ";
        // line 106
        echo "                ";
        // line 107
        echo "                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"row\">
                            ";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_price", array()), "html", null, true));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_rating", array()), "html", null, true));
        echo "
                        </div>

                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_categories", array()), "html", null, true));
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
                </div>
                <div class=\"row\">

                </div>
            </div>
        </div>

    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ecommerse/templates/node/node--product--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 122,  128 => 118,  120 => 113,  114 => 110,  109 => 107,  107 => 106,  105 => 105,  99 => 101,  94 => 98,  90 => 96,  87 => 95,  85 => 94,  83 => 93,  81 => 92,  79 => 91,  77 => 90,  75 => 89,  73 => 88,  71 => 87,  68 => 85,  66 => 84,  64 => 83,  62 => 82,  60 => 81,  58 => 80,  56 => 79,  50 => 76,  48 => 73,  47 => 72,  46 => 71,  45 => 70,  44 => 69,  43 => 68,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{% set classes = [
node.bundle|clean_class,
node.isPromoted() ? 'is-promoted',
node.isSticky() ? 'is-sticky',
not node.isPublished() ? 'is-unpublished',
view_mode ? view_mode|clean_class,
'clearfix',
] %}
<article{{ attributes.addClass(classes) }}>

    {#{{ title_prefix }}#}
    {#{% if not page %}#}
    {#<h2{{ title_attributes }}>#}
    {#<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>#}
    {#</h2>#}
    {#{% endif %}#}
    {#{{ title_suffix }}#}

    {#{% if display_submitted %}#}
    {#<footer>#}
    {#{{ author_picture }}#}
    {#<div{{ author_attributes.addClass('author') }}>#}
    {#{% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}#}
    {#{{ metadata }}#}
    {#</div>#}
    {#</footer>#}
    {#{% endif %}#}

    <div{{ content_attributes.addClass('content') }}>
        {#{{ content }}#}

        <div class=\"row\">
            <div class=\"col-md-4\">
                {{ content.field_images }}
            </div>
            <div class=\"col-md-8\">
                {#<div class=\"row\">#}
                {#{{ label }}#}
                {#</div>#}
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"row\">
                            {{ content.field_price }}
                        </div>
                        <div class=\"row\">
                            {{ content.field_rating }}
                        </div>

                    </div>
                    <div class=\"col-md-6\">
                        {{ content.field_categories }}
                    </div>
                </div>
                <div class=\"row\">
                    {{ content.body }}
                </div>
                <div class=\"row\">

                </div>
            </div>
        </div>

    </div>

</article>
";
    }
}
