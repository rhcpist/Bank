<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f73de28c8555c314b4cd2cbb6a15068e3824302ce7c3d9f4cd8ddf86d2b7340 extends Twig_Template
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
        $__internal_a863470dcbb82d47c2deb03dfd68d174f57a894dfc7abbb7aecfde287df6d319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a863470dcbb82d47c2deb03dfd68d174f57a894dfc7abbb7aecfde287df6d319->enter($__internal_a863470dcbb82d47c2deb03dfd68d174f57a894dfc7abbb7aecfde287df6d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5413d3fe1fb3e76971e232b39d4efd4a2fc09f5c75514c22b696a4536c09c681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5413d3fe1fb3e76971e232b39d4efd4a2fc09f5c75514c22b696a4536c09c681->enter($__internal_5413d3fe1fb3e76971e232b39d4efd4a2fc09f5c75514c22b696a4536c09c681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a863470dcbb82d47c2deb03dfd68d174f57a894dfc7abbb7aecfde287df6d319->leave($__internal_a863470dcbb82d47c2deb03dfd68d174f57a894dfc7abbb7aecfde287df6d319_prof);

        
        $__internal_5413d3fe1fb3e76971e232b39d4efd4a2fc09f5c75514c22b696a4536c09c681->leave($__internal_5413d3fe1fb3e76971e232b39d4efd4a2fc09f5c75514c22b696a4536c09c681_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
