<?php

/* themes/contrib/bootstrap/templates/input/select.html.twig */
class __TwigTemplate_30f26c11f581855f2bc50cdc526465f01f998516e54f2a8cffcd4bac89c75ea7 extends Twig_Template
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
        $tags = ["spaceless" => 18, "if" => 19, "set" => 34, "for" => 36];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['spaceless', 'if', 'set', 'for'],
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

        // line 18
        ob_start();
        // line 19
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 20
            echo "    <div class=\"input-group\">
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["prefix"] ?? null)) {
            // line 24
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 26
        echo "
  ";
        // line 31
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method")) {
            // line 32
            echo "    <div class=\"select-wrapper\">
  ";
        }
        // line 34
        echo "    ";
        $context["classes"] = [0 => "form-control"];
        // line 35
        echo "    <select";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 37
            echo "        ";
            if (($this->getAttribute($context["option"], "type", []) == "optgroup")) {
                // line 38
                echo "          <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", []), "html", null, true));
                echo "\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "options", []));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 40
                    echo "              <option
                value=\"";
                    // line 41
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "value", []), "html", null, true));
                    echo "\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["sub_option"], "selected", [])) ? (" selected=\"selected\"") : (""))));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "label", []), "html", null, true));
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </optgroup>
        ";
            } elseif (($this->getAttribute(            // line 44
$context["option"], "type", []) == "option")) {
                // line 45
                echo "          <option
            value=\"";
                // line 46
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "value", []), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["option"], "selected", [])) ? (" selected=\"selected\"") : (""))));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", []), "html", null, true));
                echo "</option>
        ";
            }
            // line 48
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </select>
  ";
        // line 50
        if ( !$this->getAttribute(($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method")) {
            // line 51
            echo "    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if (($context["suffix"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if (($context["input_group"] ?? null)) {
            // line 59
            echo "    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  158 => 58,  155 => 57,  149 => 55,  147 => 54,  144 => 53,  140 => 51,  138 => 50,  135 => 49,  129 => 48,  120 => 46,  117 => 45,  115 => 44,  112 => 43,  100 => 41,  97 => 40,  93 => 39,  88 => 38,  85 => 37,  81 => 36,  76 => 35,  73 => 34,  69 => 32,  66 => 31,  63 => 26,  57 => 24,  55 => 23,  52 => 22,  48 => 20,  45 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/input/select.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/input/select.html.twig");
    }
}
