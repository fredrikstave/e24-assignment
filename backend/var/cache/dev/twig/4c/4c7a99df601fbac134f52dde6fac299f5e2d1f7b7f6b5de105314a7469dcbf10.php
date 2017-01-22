<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_bda398a058c7266371e5d98d0c55da9a81e539635593c6f52c3562dc0e45386c extends Twig_Template
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
        $__internal_0534916f6054c545a01d5bd8b6e0af4d7b82c35756ab932561f3525d5a69e85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0534916f6054c545a01d5bd8b6e0af4d7b82c35756ab932561f3525d5a69e85f->enter($__internal_0534916f6054c545a01d5bd8b6e0af4d7b82c35756ab932561f3525d5a69e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_512de4adfdeca5a91d5312dd43a7b2d8cbfa917ef3265410ed4a0315e9e27b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512de4adfdeca5a91d5312dd43a7b2d8cbfa917ef3265410ed4a0315e9e27b23->enter($__internal_512de4adfdeca5a91d5312dd43a7b2d8cbfa917ef3265410ed4a0315e9e27b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0534916f6054c545a01d5bd8b6e0af4d7b82c35756ab932561f3525d5a69e85f->leave($__internal_0534916f6054c545a01d5bd8b6e0af4d7b82c35756ab932561f3525d5a69e85f_prof);

        
        $__internal_512de4adfdeca5a91d5312dd43a7b2d8cbfa917ef3265410ed4a0315e9e27b23->leave($__internal_512de4adfdeca5a91d5312dd43a7b2d8cbfa917ef3265410ed4a0315e9e27b23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
