<?php

/* themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_676f69f404946d249f2ca922dd26d09c9ce19b91c36037d6a37796dea1ff065c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 11];
        $filters = ["t" => 12];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
                ['t'],
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    </nav>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  58 => 12,  55 => 11,  52 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig", "/opt/rh/httpd24/root/var/www/html/themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig");
    }
}
