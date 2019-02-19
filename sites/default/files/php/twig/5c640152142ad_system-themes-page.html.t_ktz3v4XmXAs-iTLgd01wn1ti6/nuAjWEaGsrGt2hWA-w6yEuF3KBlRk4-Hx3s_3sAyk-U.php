<?php

/* core/themes/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_97ab4f0e394b356b1c4811a77ecf4df15d8f7974092f76531f4246d7a0e0fb93 extends Twig_Template
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
        $tags = ["for" => 32, "set" => 34, "if" => 52];
        $filters = ["safe_join" => 59];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['for', 'set', 'if'],
                ['safe_join'],
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

        // line 31
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->getAttribute(            // line 36
$context["theme_group"], "state", [])), 2 => "clearfix"];
            // line 40
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method"), "html", null, true));
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "title", []), "html", null, true));
            echo "</h2>
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 43
                echo "        ";
                // line 44
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 45
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 46
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 51
                echo "        <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method"), "html", null, true));
                echo ">
          ";
                // line 52
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 53
                    echo "            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "screenshot", []), "html", null, true));
                    echo "
          ";
                }
                // line 55
                echo "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 57
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "name", []), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "version", []), "html", null, true));
                // line 58
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 59
                    echo "                (";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->getAttribute($context["theme"], "notes", []), ", ")));
                    echo ")";
                }
                // line 61
                echo "</h3>
            <div class=\"theme-info__description\">";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "description", []), "html", null, true));
                echo "</div>
            ";
                // line 64
                echo "            ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 65
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "incompatible", []), "html", null, true));
                    echo "</div>
            ";
                } else {
                    // line 67
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["theme"], "operations", []), "html", null, true));
                    echo "
            ";
                }
                // line 69
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 74,  133 => 72,  125 => 69,  119 => 67,  113 => 65,  110 => 64,  106 => 62,  103 => 61,  98 => 59,  96 => 58,  92 => 57,  89 => 55,  83 => 53,  81 => 52,  76 => 51,  74 => 46,  73 => 45,  72 => 44,  70 => 43,  66 => 42,  62 => 41,  57 => 40,  55 => 36,  54 => 34,  52 => 33,  48 => 32,  43 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/system-themes-page.html.twig", "/opt/rh/httpd24/root/var/www/html/core/themes/stable/templates/admin/system-themes-page.html.twig");
    }
}
