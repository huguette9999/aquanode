<?php

/* genus/show.html.twig */
class __TwigTemplate_858503bfc70ac623117b299687232e82d68715c2284bf0e3fdc0be0823fa9259 extends Twig_Template
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
        $__internal_77ca376aa4f64b306008733734ca0d54f45e6b1d0c2f2501c7f21d933c25f1f8 = $this->env->getExtension("native_profiler");
        $__internal_77ca376aa4f64b306008733734ca0d54f45e6b1d0c2f2501c7f21d933c25f1f8->enter($__internal_77ca376aa4f64b306008733734ca0d54f45e6b1d0c2f2501c7f21d933c25f1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        // line 1
        echo "<h1>The genus is ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h1>";
        
        $__internal_77ca376aa4f64b306008733734ca0d54f45e6b1d0c2f2501c7f21d933c25f1f8->leave($__internal_77ca376aa4f64b306008733734ca0d54f45e6b1d0c2f2501c7f21d933c25f1f8_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h1>The genus is {{ name }}</h1>*/
