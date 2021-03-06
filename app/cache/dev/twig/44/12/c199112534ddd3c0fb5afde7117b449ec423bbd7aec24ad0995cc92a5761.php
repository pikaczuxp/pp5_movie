<?php

/* GrauchoMoviesBundle:Movies:movie_2.html.twig */
class __TwigTemplate_4412c199112534ddd3c0fb5afde7117b449ec423bbd7aec24ad0995cc92a5761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GrauchoMoviesBundle::bars.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrauchoMoviesBundle::bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"navbar-header navbar-brand\">Filmy Biograficzne</div>
\t\t<div class=\"navbar-collapse collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li>
\t\t\t\t</li>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "

\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 19
            echo "\t<!-- zawartosc dla zalogowanych-->
\t\t<div class=\"row\">
\t\t\t<p>
\t\t\t\tJesteś zalogowany jako ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ". 
\t\t\t\t<a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t</p>
\t\t</div>
\t";
        } else {
            // line 27
            echo "\t";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "GrauchoMoviesBundle:Movies:movie_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  78 => 27,  71 => 23,  67 => 22,  62 => 19,  60 => 18,  56 => 16,  53 => 15,  40 => 4,  37 => 3,  11 => 1,);
    }
}
