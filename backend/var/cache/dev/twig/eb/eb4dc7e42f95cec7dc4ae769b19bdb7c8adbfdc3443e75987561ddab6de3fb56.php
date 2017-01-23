<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b869cc09203fefdf21b13f2438533f22748e1fe5625386ee3f5314a667d7187 extends Twig_Template
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
        $__internal_8aa5eea0015b7cbb44d359495b7b5eef9ca02e62826dc60bbde2577c94e81524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa5eea0015b7cbb44d359495b7b5eef9ca02e62826dc60bbde2577c94e81524->enter($__internal_8aa5eea0015b7cbb44d359495b7b5eef9ca02e62826dc60bbde2577c94e81524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b399af3a2828ce4087fdba363095231ffea3f560a74f1998bcea04f0d71cbcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b399af3a2828ce4087fdba363095231ffea3f560a74f1998bcea04f0d71cbcb2->enter($__internal_b399af3a2828ce4087fdba363095231ffea3f560a74f1998bcea04f0d71cbcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa5eea0015b7cbb44d359495b7b5eef9ca02e62826dc60bbde2577c94e81524->leave($__internal_8aa5eea0015b7cbb44d359495b7b5eef9ca02e62826dc60bbde2577c94e81524_prof);

        
        $__internal_b399af3a2828ce4087fdba363095231ffea3f560a74f1998bcea04f0d71cbcb2->leave($__internal_b399af3a2828ce4087fdba363095231ffea3f560a74f1998bcea04f0d71cbcb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13c8abe461609b7d459c3a01740fe7e0c612a2c2793c2366e2c188430b751bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c8abe461609b7d459c3a01740fe7e0c612a2c2793c2366e2c188430b751bfc->enter($__internal_13c8abe461609b7d459c3a01740fe7e0c612a2c2793c2366e2c188430b751bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1143d0acf3d849d57f23c520aad19b94ed4d9a1223318906121daf291fa19942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1143d0acf3d849d57f23c520aad19b94ed4d9a1223318906121daf291fa19942->enter($__internal_1143d0acf3d849d57f23c520aad19b94ed4d9a1223318906121daf291fa19942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1143d0acf3d849d57f23c520aad19b94ed4d9a1223318906121daf291fa19942->leave($__internal_1143d0acf3d849d57f23c520aad19b94ed4d9a1223318906121daf291fa19942_prof);

        
        $__internal_13c8abe461609b7d459c3a01740fe7e0c612a2c2793c2366e2c188430b751bfc->leave($__internal_13c8abe461609b7d459c3a01740fe7e0c612a2c2793c2366e2c188430b751bfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72d82670afe1c3c26a140889a0117e6ab66cf1f0e31b251870f34406549a7c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d82670afe1c3c26a140889a0117e6ab66cf1f0e31b251870f34406549a7c69->enter($__internal_72d82670afe1c3c26a140889a0117e6ab66cf1f0e31b251870f34406549a7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84c6d56faedd935789c55d147b69a8499e4bd4b3d555137356922d9d6be9398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c6d56faedd935789c55d147b69a8499e4bd4b3d555137356922d9d6be9398b->enter($__internal_84c6d56faedd935789c55d147b69a8499e4bd4b3d555137356922d9d6be9398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84c6d56faedd935789c55d147b69a8499e4bd4b3d555137356922d9d6be9398b->leave($__internal_84c6d56faedd935789c55d147b69a8499e4bd4b3d555137356922d9d6be9398b_prof);

        
        $__internal_72d82670afe1c3c26a140889a0117e6ab66cf1f0e31b251870f34406549a7c69->leave($__internal_72d82670afe1c3c26a140889a0117e6ab66cf1f0e31b251870f34406549a7c69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_930f9daab4975fd2cfd91f2ea798d735cfa64907da9ccd27b749d61392592a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930f9daab4975fd2cfd91f2ea798d735cfa64907da9ccd27b749d61392592a59->enter($__internal_930f9daab4975fd2cfd91f2ea798d735cfa64907da9ccd27b749d61392592a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2203a0bafd4a3bd60e789aa25b38786c45158f0c3528f949a32cf3db1b49d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2203a0bafd4a3bd60e789aa25b38786c45158f0c3528f949a32cf3db1b49d9b->enter($__internal_a2203a0bafd4a3bd60e789aa25b38786c45158f0c3528f949a32cf3db1b49d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2203a0bafd4a3bd60e789aa25b38786c45158f0c3528f949a32cf3db1b49d9b->leave($__internal_a2203a0bafd4a3bd60e789aa25b38786c45158f0c3528f949a32cf3db1b49d9b_prof);

        
        $__internal_930f9daab4975fd2cfd91f2ea798d735cfa64907da9ccd27b749d61392592a59->leave($__internal_930f9daab4975fd2cfd91f2ea798d735cfa64907da9ccd27b749d61392592a59_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
