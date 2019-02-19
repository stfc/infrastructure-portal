<?php

/* themes/contrib/bootstrap/templates/system/container.html.twig */
class __TwigTemplate_9fbd17e10645bc8e650bbdd76b7bc533f96075df2d5b3c16f4b4c51cdb980e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 23];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set'],
                [],
                []
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
        $context["classes"] = [0 => (( !$this->getAttribute(        // line 24
($context["attributes"] ?? null), "hasClass", [0 => "toolbar-menu-administration"], "method")) ? ("form-group") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => ((        // line 26
($context["has_parent"] ?? null)) ? ("form-wrapper") : (""))];
        // line 29
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 29,  46 => 26,  45 => 25,  44 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/system/container.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/system/container.html.twig");
    }
}
