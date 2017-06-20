<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_995d600ba51ebc4c87f7fd66e0dcffee651166c6cbd650c17691ec22712fe751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_test_empty(($context["sinceVersion"] ?? null)) && twig_test_empty(($context["untilVersion"] ?? null)))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty(($context["sinceVersion"] ?? null))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, ($context["sinceVersion"] ?? null), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty(($context["untilVersion"] ?? null))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty(($context["sinceVersion"] ?? null))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, ($context["untilVersion"] ?? null), "html", null, true);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NelmioApiDocBundle:Components:version.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}
