<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7287106469b3ddd68c531e86d5f19b757684f0ef827c609b4a0c5f34d29ba0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc05a8fd63aa3e76636873612bb0b3fbefc8b98cc4e86b68730f13270723e51 = $this->env->getExtension("native_profiler");
        $__internal_0fc05a8fd63aa3e76636873612bb0b3fbefc8b98cc4e86b68730f13270723e51->enter($__internal_0fc05a8fd63aa3e76636873612bb0b3fbefc8b98cc4e86b68730f13270723e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc05a8fd63aa3e76636873612bb0b3fbefc8b98cc4e86b68730f13270723e51->leave($__internal_0fc05a8fd63aa3e76636873612bb0b3fbefc8b98cc4e86b68730f13270723e51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfdd8d241840e0ac455343dc3666060592e66cf68fd337b31d1f23bf25b24b78 = $this->env->getExtension("native_profiler");
        $__internal_bfdd8d241840e0ac455343dc3666060592e66cf68fd337b31d1f23bf25b24b78->enter($__internal_bfdd8d241840e0ac455343dc3666060592e66cf68fd337b31d1f23bf25b24b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfdd8d241840e0ac455343dc3666060592e66cf68fd337b31d1f23bf25b24b78->leave($__internal_bfdd8d241840e0ac455343dc3666060592e66cf68fd337b31d1f23bf25b24b78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a24251a4702066f9aeae371a5d40bb4fbf97433f81f5cb9baadfb9fd11a8984 = $this->env->getExtension("native_profiler");
        $__internal_2a24251a4702066f9aeae371a5d40bb4fbf97433f81f5cb9baadfb9fd11a8984->enter($__internal_2a24251a4702066f9aeae371a5d40bb4fbf97433f81f5cb9baadfb9fd11a8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a24251a4702066f9aeae371a5d40bb4fbf97433f81f5cb9baadfb9fd11a8984->leave($__internal_2a24251a4702066f9aeae371a5d40bb4fbf97433f81f5cb9baadfb9fd11a8984_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8743fc478f950eaf01bc4b55c940da1854da075af2f6c67f04ca79527ac4cfaf = $this->env->getExtension("native_profiler");
        $__internal_8743fc478f950eaf01bc4b55c940da1854da075af2f6c67f04ca79527ac4cfaf->enter($__internal_8743fc478f950eaf01bc4b55c940da1854da075af2f6c67f04ca79527ac4cfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8743fc478f950eaf01bc4b55c940da1854da075af2f6c67f04ca79527ac4cfaf->leave($__internal_8743fc478f950eaf01bc4b55c940da1854da075af2f6c67f04ca79527ac4cfaf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
