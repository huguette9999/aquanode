<?php

/* base.html.twig */
class __TwigTemplate_7876e266a99fd113ccb3a62801f0fdb502acfdbff759f5258e6f5a2e05ff008a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3710811cd89d67793c3e6c58f9434b0976e3e470b7223544ad67977e91edbe4 = $this->env->getExtension("native_profiler");
        $__internal_b3710811cd89d67793c3e6c58f9434b0976e3e470b7223544ad67977e91edbe4->enter($__internal_b3710811cd89d67793c3e6c58f9434b0976e3e470b7223544ad67977e91edbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b3710811cd89d67793c3e6c58f9434b0976e3e470b7223544ad67977e91edbe4->leave($__internal_b3710811cd89d67793c3e6c58f9434b0976e3e470b7223544ad67977e91edbe4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_380e176761b9de90090c6682f96c41210ac16905cd8046d66732073f9bf86d6d = $this->env->getExtension("native_profiler");
        $__internal_380e176761b9de90090c6682f96c41210ac16905cd8046d66732073f9bf86d6d->enter($__internal_380e176761b9de90090c6682f96c41210ac16905cd8046d66732073f9bf86d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_380e176761b9de90090c6682f96c41210ac16905cd8046d66732073f9bf86d6d->leave($__internal_380e176761b9de90090c6682f96c41210ac16905cd8046d66732073f9bf86d6d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7ff88982cadebff43518b3dd15b5a71ea34550f73a66eee3d7c150b794b1fb8 = $this->env->getExtension("native_profiler");
        $__internal_f7ff88982cadebff43518b3dd15b5a71ea34550f73a66eee3d7c150b794b1fb8->enter($__internal_f7ff88982cadebff43518b3dd15b5a71ea34550f73a66eee3d7c150b794b1fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f7ff88982cadebff43518b3dd15b5a71ea34550f73a66eee3d7c150b794b1fb8->leave($__internal_f7ff88982cadebff43518b3dd15b5a71ea34550f73a66eee3d7c150b794b1fb8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b86c26ae6b526d3a0b47155385b9bec61affdb366b7a03717c186021305672e3 = $this->env->getExtension("native_profiler");
        $__internal_b86c26ae6b526d3a0b47155385b9bec61affdb366b7a03717c186021305672e3->enter($__internal_b86c26ae6b526d3a0b47155385b9bec61affdb366b7a03717c186021305672e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b86c26ae6b526d3a0b47155385b9bec61affdb366b7a03717c186021305672e3->leave($__internal_b86c26ae6b526d3a0b47155385b9bec61affdb366b7a03717c186021305672e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7e1f3c7d7bc76a50fec5f0ff640de324eda44d1c6fdf9cc932c74c812a85bf0 = $this->env->getExtension("native_profiler");
        $__internal_c7e1f3c7d7bc76a50fec5f0ff640de324eda44d1c6fdf9cc932c74c812a85bf0->enter($__internal_c7e1f3c7d7bc76a50fec5f0ff640de324eda44d1c6fdf9cc932c74c812a85bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7e1f3c7d7bc76a50fec5f0ff640de324eda44d1c6fdf9cc932c74c812a85bf0->leave($__internal_c7e1f3c7d7bc76a50fec5f0ff640de324eda44d1c6fdf9cc932c74c812a85bf0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
