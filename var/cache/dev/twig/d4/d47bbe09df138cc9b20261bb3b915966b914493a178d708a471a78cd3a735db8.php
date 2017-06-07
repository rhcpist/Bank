<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6cb3a723fbb1620c1e8794a0e4e002728a9881122252b43ba3fbf03673fa7097 extends Twig_Template
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
        $__internal_b1ee17d9119b88a5808ea8419a5e9a683e7251920d7ea5d996dcf389f1c174d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee17d9119b88a5808ea8419a5e9a683e7251920d7ea5d996dcf389f1c174d3->enter($__internal_b1ee17d9119b88a5808ea8419a5e9a683e7251920d7ea5d996dcf389f1c174d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ac83ce7db82b5f4b6868c24e3ab8c466b6baad40d4dbd2085b1441bf632a774f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac83ce7db82b5f4b6868c24e3ab8c466b6baad40d4dbd2085b1441bf632a774f->enter($__internal_ac83ce7db82b5f4b6868c24e3ab8c466b6baad40d4dbd2085b1441bf632a774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b1ee17d9119b88a5808ea8419a5e9a683e7251920d7ea5d996dcf389f1c174d3->leave($__internal_b1ee17d9119b88a5808ea8419a5e9a683e7251920d7ea5d996dcf389f1c174d3_prof);

        
        $__internal_ac83ce7db82b5f4b6868c24e3ab8c466b6baad40d4dbd2085b1441bf632a774f->leave($__internal_ac83ce7db82b5f4b6868c24e3ab8c466b6baad40d4dbd2085b1441bf632a774f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
