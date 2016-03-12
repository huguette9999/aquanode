<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6e6174344f8c8f81c99b4046cef2ad59a7f39a063a176325d805838acfa80dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b95df5121fc52ca4943845bd2ece948aea5b12529114d28abd2b2838676424e4 = $this->env->getExtension("native_profiler");
        $__internal_b95df5121fc52ca4943845bd2ece948aea5b12529114d28abd2b2838676424e4->enter($__internal_b95df5121fc52ca4943845bd2ece948aea5b12529114d28abd2b2838676424e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b95df5121fc52ca4943845bd2ece948aea5b12529114d28abd2b2838676424e4->leave($__internal_b95df5121fc52ca4943845bd2ece948aea5b12529114d28abd2b2838676424e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f77ea34f0633aca09376dd1660aa16d7d043c335039d058d76dcb53ed5f5fe62 = $this->env->getExtension("native_profiler");
        $__internal_f77ea34f0633aca09376dd1660aa16d7d043c335039d058d76dcb53ed5f5fe62->enter($__internal_f77ea34f0633aca09376dd1660aa16d7d043c335039d058d76dcb53ed5f5fe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f77ea34f0633aca09376dd1660aa16d7d043c335039d058d76dcb53ed5f5fe62->leave($__internal_f77ea34f0633aca09376dd1660aa16d7d043c335039d058d76dcb53ed5f5fe62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e61d749355ed33fe67fa09c8b8ff3d8bc560441a21774ef527faaead46315f2 = $this->env->getExtension("native_profiler");
        $__internal_7e61d749355ed33fe67fa09c8b8ff3d8bc560441a21774ef527faaead46315f2->enter($__internal_7e61d749355ed33fe67fa09c8b8ff3d8bc560441a21774ef527faaead46315f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e61d749355ed33fe67fa09c8b8ff3d8bc560441a21774ef527faaead46315f2->leave($__internal_7e61d749355ed33fe67fa09c8b8ff3d8bc560441a21774ef527faaead46315f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_870cf1031af70902cafa06745f99c24d4c932a6f399c69d7f9b94ec5d1da8300 = $this->env->getExtension("native_profiler");
        $__internal_870cf1031af70902cafa06745f99c24d4c932a6f399c69d7f9b94ec5d1da8300->enter($__internal_870cf1031af70902cafa06745f99c24d4c932a6f399c69d7f9b94ec5d1da8300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_870cf1031af70902cafa06745f99c24d4c932a6f399c69d7f9b94ec5d1da8300->leave($__internal_870cf1031af70902cafa06745f99c24d4c932a6f399c69d7f9b94ec5d1da8300_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
