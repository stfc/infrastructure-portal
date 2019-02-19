<?php

/* menu.html.twig */
class __TwigTemplate_fdc0ca2adb73d0008ca423b72e55ef6d23b8a63f96ef7499ac04f684fac4dc83 extends Twig_Template
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
        $tags = ["macro" => 20, "if" => 21, "for" => 23, "set" => 25];
        $filters = ["clean_class" => 55, "split" => 25, "without" => 37];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['macro', 'if', 'for', 'set'],
                ['clean_class', 'split', 'without'],
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

        // line 49
        echo "
";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", [0 => ($context["items"] ?? null), 1 => ($context["attributes"] ?? null), 2 => 0, 3 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), 2 => "nav"]))], "method")));
        echo "
";
    }

    // line 20
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 21
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 22
                echo "    <ul";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : ("dropdown-menu"))], "method"), "html", null, true));
                echo ">
    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "      ";
                    // line 25
                    $context["item_classes"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "container_attributes"], "method"), "class", []), " ");
                    // line 27
                    echo "      ";
                    // line 28
                    $context["item_classes"] = [0 => ((($this->getAttribute(                    // line 29
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                    // line 30
$context["item"], "in_active_trail", [])) ? ("active-trail") : ("")), 2 => (($this->getAttribute(                    // line 31
$context["loop"], "first", [])) ? ("first") : ("")), 3 => (($this->getAttribute(                    // line 32
$context["loop"], "last", [])) ? ("last") : (""))];
                    // line 35
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method"), "html", null, true));
                    echo ">
      ";
                    // line 36
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                        // line 37
                        echo "        <a";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "link_attributes", []), "addClass", [0 => [0 => "dropdown-toggle", 1 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))]], "method"), "data-toggle"), "html", null, true));
                        echo " href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true));
                        echo "\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true));
                        echo "<span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 39
                        echo "        <a";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "link_attributes", []), "addClass", [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))], "method"), "html", null, true));
                        echo " href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true));
                        echo "</a>
      ";
                    }
                    // line 41
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 42
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null)], "method")));
                        echo "
      ";
                    }
                    // line 44
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  140 => 44,  134 => 42,  131 => 41,  121 => 39,  111 => 37,  109 => 36,  104 => 35,  102 => 32,  101 => 31,  100 => 30,  99 => 29,  98 => 28,  96 => 27,  94 => 25,  92 => 24,  75 => 23,  70 => 22,  67 => 21,  52 => 20,  46 => 55,  43 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.html.twig", "themes/contrib/bootstrap/templates/menu/menu.html.twig");
    }
}
