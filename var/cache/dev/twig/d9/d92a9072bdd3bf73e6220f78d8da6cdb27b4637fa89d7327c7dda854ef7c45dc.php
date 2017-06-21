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
        $__internal_2c4a02ae34df972aaa523affc53f576d46a5e8647a58b501a2afa4d94bd9b952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4a02ae34df972aaa523affc53f576d46a5e8647a58b501a2afa4d94bd9b952->enter($__internal_2c4a02ae34df972aaa523affc53f576d46a5e8647a58b501a2afa4d94bd9b952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_74280bd1410fbc06a1517b7830f7c95e48acd28fc6d8214c4d7afab2bac308db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74280bd1410fbc06a1517b7830f7c95e48acd28fc6d8214c4d7afab2bac308db->enter($__internal_74280bd1410fbc06a1517b7830f7c95e48acd28fc6d8214c4d7afab2bac308db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2c4a02ae34df972aaa523affc53f576d46a5e8647a58b501a2afa4d94bd9b952->leave($__internal_2c4a02ae34df972aaa523affc53f576d46a5e8647a58b501a2afa4d94bd9b952_prof);

        
        $__internal_74280bd1410fbc06a1517b7830f7c95e48acd28fc6d8214c4d7afab2bac308db->leave($__internal_74280bd1410fbc06a1517b7830f7c95e48acd28fc6d8214c4d7afab2bac308db_prof);

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
