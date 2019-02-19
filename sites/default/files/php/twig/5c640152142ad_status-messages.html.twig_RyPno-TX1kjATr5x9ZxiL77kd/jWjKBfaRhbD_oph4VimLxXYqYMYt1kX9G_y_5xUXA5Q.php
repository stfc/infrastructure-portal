<?php

/* themes/contrib/bootstrap/templates/system/status-messages.html.twig */
class __TwigTemplate_55e11934c2149dfbf3a0ab0f196f38f5b3d0210e410a52461cce1a5689f4a854 extends Twig_Template
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
        $tags = ["set" => 30, "for" => 47, "if" => 58];
        $filters = ["default" => 30, "t" => 33, "length" => 61, "first" => 68];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 't', 'length', 'first'],
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

        // line 30
        $context["classes"] = (($this->getAttribute(($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method"), [])) : ([]));
        // line 32
        $context["status_heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
        // line 40
        $context["status_classes"] = ["status" => "success", "error" => "danger", "warning" => "warning", "info" => "info"];
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 48
            echo "  ";
            // line 49
            $context["message_classes"] = [0 => "alert", 1 => ("alert-" . $this->getAttribute(            // line 51
($context["status_classes"] ?? null), $context["type"], [], "array")), 2 => "alert-dismissible"];
            // line 55
            echo "  ";
            // line 56
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "class", 1 => ($context["classes"] ?? null)], "method"), "addClass", [0 => ($context["message_classes"] ?? null)], "method"), "setAttribute", [0 => "role", 1 => "alert"], "method"), "html", null, true));
            echo ">
    <button role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
    ";
            // line 58
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 59
                echo "      <h4 class=\"sr-only\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array"), "html", null, true));
                echo "</h4>
    ";
            }
            // line 61
            echo "    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 62
                echo "      <ul class=\"item-list item-list--messages\">
        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 64
                    echo "          <li class=\"item item--message\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "      </ul>
    ";
            } else {
                // line 68
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
    ";
            }
            // line 70
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 70,  100 => 68,  96 => 66,  87 => 64,  83 => 63,  80 => 62,  77 => 61,  71 => 59,  69 => 58,  65 => 57,  60 => 56,  58 => 55,  56 => 51,  55 => 49,  53 => 48,  49 => 47,  47 => 40,  45 => 32,  43 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/system/status-messages.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/system/status-messages.html.twig");
    }
}
