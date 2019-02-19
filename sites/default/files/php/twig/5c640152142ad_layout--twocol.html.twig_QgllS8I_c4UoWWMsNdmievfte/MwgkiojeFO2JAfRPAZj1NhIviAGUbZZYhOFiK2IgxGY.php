<?php

/* core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig */
class __TwigTemplate_f301b0713f750561586f37417b355448a6c9f02f7bbc6854b6bb0189668876b0 extends Twig_Template
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
        $tags = ["set" => 14, "if" => 19];
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

        // line 14
        $context["classes"] = [0 => "layout", 1 => "layout--twocol"];
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
            echo ">
    ";
            // line 21
            if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
                // line 22
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method"), "html", null, true));
                echo ">
        ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "top", []), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            if ($this->getAttribute(($context["content"] ?? null), "first", [])) {
                // line 28
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first", []), "addClass", [0 => "layout__region", 1 => "layout__region--first"], "method"), "html", null, true));
                echo ">
        ";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", []), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ($this->getAttribute(($context["content"] ?? null), "second", [])) {
                // line 34
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second", []), "addClass", [0 => "layout__region", 1 => "layout__region--second"], "method"), "html", null, true));
                echo ">
        ";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "second", []), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
                // line 40
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method"), "html", null, true));
                echo ">
        ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "bottom", []), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 44
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  107 => 41,  102 => 40,  100 => 39,  97 => 38,  91 => 35,  86 => 34,  84 => 33,  81 => 32,  75 => 29,  70 => 28,  68 => 27,  65 => 26,  59 => 23,  54 => 22,  52 => 21,  47 => 20,  45 => 19,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig", "/opt/rh/httpd24/root/var/www/html/core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig");
    }
}
