<?php

/* themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig */
class __TwigTemplate_e9808c30f65fc20e5cd16ae0e5037fa079664aaeaada487baae397b7fd95086c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 45, "if" => 53, "block" => 54];
        $filters = ["clean_class" => 47];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class'],
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

        // line 45
        $context["classes"] = [0 => "panel", 1 => ((        // line 47
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass(($context["panel_type"] ?? null)))))];
        // line 50
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">

  ";
        // line 53
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 54
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 69
            echo "  ";
        }
        // line 70
        echo "
  ";
        // line 72
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
  ";
        // line 107
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 108
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "
</div>
";
    }

    // line 54
    public function block_heading($context, array $blocks = [])
    {
        // line 55
        echo "      <div class=\"panel-heading\">
        ";
        // line 57
        $context["heading_classes"] = [0 => "panel-title", 1 => ((        // line 59
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 62
        echo "        ";
        if (($context["collapsible"] ?? null)) {
            // line 63
            echo "          <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method"), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["target"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</a>
        ";
        } else {
            // line 65
            echo "          <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    ";
    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        // line 74
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 76
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 77
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 78
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 79
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 82
        echo "    ";
        // line 83
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 85
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) ? ("sr-only") : (""))];
        // line 88
        echo "
    ";
        // line 89
        if (($context["errors"] ?? null)) {
            // line 90
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 94
        echo "
    <div";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method"), "html", null, true));
        echo ">
      ";
        // line 96
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "before"))) {
            // line 97
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", []), "html", null, true));
            echo "</p>
      ";
        }
        // line 99
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
      ";
        // line 100
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) {
            // line 101
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", []), "html", null, true));
            echo "</p>
      ";
        }
        // line 103
        echo "    </div>
  ";
    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        // line 109
        echo "      ";
        // line 110
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 114
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 114,  195 => 110,  193 => 109,  190 => 108,  185 => 103,  177 => 101,  175 => 100,  170 => 99,  162 => 97,  160 => 96,  156 => 95,  153 => 94,  147 => 91,  144 => 90,  142 => 89,  139 => 88,  137 => 85,  136 => 83,  134 => 82,  132 => 79,  131 => 78,  130 => 77,  129 => 76,  128 => 74,  126 => 73,  123 => 72,  118 => 67,  110 => 65,  100 => 63,  97 => 62,  95 => 59,  94 => 57,  91 => 55,  88 => 54,  82 => 117,  79 => 116,  76 => 108,  73 => 107,  70 => 105,  67 => 72,  64 => 70,  61 => 69,  58 => 54,  55 => 53,  49 => 50,  47 => 47,  46 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig");
    }
}
