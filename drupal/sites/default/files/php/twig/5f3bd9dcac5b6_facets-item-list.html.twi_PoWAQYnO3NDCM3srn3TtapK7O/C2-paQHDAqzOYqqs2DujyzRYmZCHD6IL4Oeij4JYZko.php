<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/facets/templates/facets-item-list.html.twig */
class __TwigTemplate_4b62b28ce53abe8d0c82fd70debcb58bbdf89beae49ed44f69afef65b82214f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 28, "set" => 29, "for" => 38];
        $filters = ["escape" => 27, "t" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        echo "<div class=\"facets-widget-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["facet"] ?? null), "widget", []), "type", [])), "html", null, true);
        echo "\">
  ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["facet"] ?? null), "widget", []), "type", [])) {
            // line 29
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["facet"] ?? null), "widget", []), "type", [])))], "method");
            // line 30
            echo "  ";
        }
        // line 31
        echo "  ";
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 32
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 33
                echo "<h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h3>";
            }
            // line 36
            if (($context["items"] ?? null)) {
                // line 37
                echo "<";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo ">";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "<li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                echo ">";
            } else {
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            }
        }
        // line 46
        echo "
";
        // line 47
        if (($this->getAttribute($this->getAttribute(($context["facet"] ?? null), "widget", []), "type", []) == "dropdown")) {
            // line 48
            echo "  <label id=\"facet_";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["facet"] ?? null), "id", [])), "html", null, true);
            echo "_label\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Facet"));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["facet"] ?? null), "label", [])), "html", null, true);
            echo "</label>";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets/templates/facets-item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  112 => 48,  110 => 47,  107 => 46,  103 => 43,  98 => 41,  88 => 39,  84 => 38,  79 => 37,  77 => 36,  72 => 33,  70 => 32,  67 => 31,  64 => 30,  62 => 29,  60 => 28,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/facets/templates/facets-item-list.html.twig", "/var/www/html/drupal/modules/contrib/facets/templates/facets-item-list.html.twig");
    }
}
