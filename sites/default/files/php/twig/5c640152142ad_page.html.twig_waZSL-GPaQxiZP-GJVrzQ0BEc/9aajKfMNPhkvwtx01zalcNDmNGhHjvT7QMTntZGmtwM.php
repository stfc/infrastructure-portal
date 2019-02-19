<?php

/* themes/contrib/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_7d986cd3abd23ba414ceae06bead2dbde40473d884e2f0d94710a3d0f2a245cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 62, "t" => 74];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 't'],
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 163
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", [])))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", []), "html", null, true));
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        // line 97
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 101
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 102
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 107
            echo "      ";
        }
        // line 108
        echo "
      ";
        // line 110
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 111
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 116
            echo "      ";
        }
        // line 117
        echo "
      ";
        // line 119
        echo "      ";
        // line 120
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 121
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 122
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 123
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 124
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 127
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method"), "html", null, true));
        echo ">

        ";
        // line 130
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 131
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 134
            echo "        ";
        }
        // line 135
        echo "
        ";
        // line 137
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 138
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 148
        echo "      </section>

      ";
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 152
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 157
            echo "      ";
        }
        // line 158
        echo "    </div>
  </div>
";
    }

    // line 102
    public function block_header($context, array $blocks = [])
    {
        // line 103
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", []), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 111
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 112
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", []), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 131
    public function block_highlighted($context, array $blocks = [])
    {
        // line 132
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", []), "html", null, true));
        echo "</div>
          ";
    }

    // line 138
    public function block_help($context, array $blocks = [])
    {
        // line 139
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", []), "html", null, true));
        echo "
          ";
    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        // line 145
        echo "          <a id=\"main-content\"></a>
          ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
        echo "
        ";
    }

    // line 152
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 153
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", []), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 163
    public function block_footer($context, array $blocks = [])
    {
        // line 164
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 165,  316 => 164,  313 => 163,  306 => 154,  303 => 153,  300 => 152,  294 => 146,  291 => 145,  288 => 144,  281 => 139,  278 => 138,  271 => 132,  268 => 131,  261 => 113,  258 => 112,  255 => 111,  248 => 104,  245 => 103,  242 => 102,  236 => 158,  233 => 157,  230 => 152,  227 => 151,  223 => 148,  220 => 144,  217 => 142,  214 => 141,  211 => 138,  208 => 137,  205 => 135,  202 => 134,  199 => 131,  196 => 130,  190 => 127,  188 => 124,  187 => 123,  186 => 122,  185 => 121,  184 => 120,  182 => 119,  179 => 117,  176 => 116,  173 => 111,  170 => 110,  167 => 108,  164 => 107,  161 => 102,  158 => 101,  151 => 97,  148 => 96,  143 => 91,  139 => 89,  136 => 88,  130 => 85,  127 => 84,  124 => 83,  120 => 80,  111 => 74,  108 => 73,  105 => 72,  101 => 70,  98 => 69,  92 => 67,  90 => 66,  85 => 65,  83 => 62,  82 => 61,  81 => 59,  79 => 58,  76 => 57,  70 => 163,  68 => 162,  65 => 161,  63 => 96,  60 => 94,  56 => 57,  54 => 56,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/system/page.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/system/page.html.twig");
    }
}
