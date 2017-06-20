<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_ea863e3a14695128c24ebcb57713a706349c10fbcd6a5e97be16bee9892ad05e extends Twig_Template
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
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 2
            echo "    <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
    <span class=\"icon icon-open\">";
            // line 3
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
";
        }
        // line 5
        echo "
";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) {
            // line 7
            echo "    <span class=\"trace-class\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "class", array()));
            echo "</span>";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "type", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "type", array()), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array()), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "args", array()));
            echo ")</span>
";
        }
        // line 9
        echo "
";
        // line 10
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 11
            echo "    ";
            $context["line_number"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()), 1)) : (1));
            // line 12
            echo "    ";
            $context["file_link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), ($context["line_number"] ?? null));
            // line 13
            echo "    ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), ($context["line_number"] ?? null))), array((" at line " . ($context["line_number"] ?? null)) => ""));
            // line 14
            echo "    ";
            $context["file_path_parts"] = twig_split_filter($this->env, ($context["file_path"] ?? null), twig_constant("DIRECTORY_SEPARATOR"));
            // line 15
            echo "
    <span class=\"block trace-file-path\">
        in
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["file_link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, ($context["file_path_parts"] ?? null), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, ($context["file_path_parts"] ?? null)), "html", null, true);
            echo "</strong></a>
        (line ";
            // line 19
            echo twig_escape_filter($this->env, ($context["line_number"] ?? null), "html", null, true);
            echo ")
    </span>
";
        }
        // line 22
        echo "
";
        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 24
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, ((($context["prefix"] ?? null) . "-") . ($context["i"] ?? null)), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 25
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array())), array("#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"));
            // line 30
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  99 => 25,  94 => 24,  92 => 23,  89 => 22,  83 => 19,  74 => 18,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  52 => 9,  36 => 7,  34 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:trace.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}
