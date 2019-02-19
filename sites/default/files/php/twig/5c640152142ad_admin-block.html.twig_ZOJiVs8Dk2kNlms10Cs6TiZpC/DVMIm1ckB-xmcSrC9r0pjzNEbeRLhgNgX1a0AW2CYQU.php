<?php

/* core/themes/stable/templates/admin/admin-block.html.twig */
class __TwigTemplate_a437d6ecc137ffd2ba3709d123667d228d895929eaa0a3fdb12760720cf4b6f2 extends Twig_Template
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
        $tags = ["set" => 17, "if" => 22];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if'],
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

        // line 17
        $context["classes"] = [0 => "panel"];
        // line 21
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
  ";
        // line 22
        if ($this->getAttribute(($context["block"] ?? null), "title", [])) {
            // line 23
            echo "    <h3 class=\"panel__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "title", []), "html", null, true));
            echo "</h3>
  ";
        }
        // line 25
        echo "  ";
        if ($this->getAttribute(($context["block"] ?? null), "content", [])) {
            // line 26
            echo "    <div class=\"panel__content\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "content", []), "html", null, true));
            echo "</div>
  ";
        } elseif ($this->getAttribute(        // line 27
($context["block"] ?? null), "description", [])) {
            // line 28
            echo "    <div class=\"panel__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "description", []), "html", null, true));
            echo "</div>
  ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  68 => 28,  66 => 27,  61 => 26,  58 => 25,  52 => 23,  50 => 22,  45 => 21,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/admin-block.html.twig", "/opt/rh/httpd24/root/var/www/html/core/themes/stable/templates/admin/admin-block.html.twig");
    }
}
