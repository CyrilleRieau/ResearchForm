<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_528046d1575eb7d4e5089569330ee1179d9f80301e1de6d321e558b9699dbe88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528046d1575eb7d4e5089569330ee1179d9f80301e1de6d321e558b9699dbe88->enter($__internal_528046d1575eb7d4e5089569330ee1179d9f80301e1de6d321e558b9699dbe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f1d3f1dab9797a636d3e657fd97632bb7e4a47bb0cb3dc89582c6a2950d281f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d3f1dab9797a636d3e657fd97632bb7e4a47bb0cb3dc89582c6a2950d281f1->enter($__internal_f1d3f1dab9797a636d3e657fd97632bb7e4a47bb0cb3dc89582c6a2950d281f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "         </head>
    <body class=\"container-fluid\">
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_528046d1575eb7d4e5089569330ee1179d9f80301e1de6d321e558b9699dbe88->leave($__internal_528046d1575eb7d4e5089569330ee1179d9f80301e1de6d321e558b9699dbe88_prof);

        
        $__internal_f1d3f1dab9797a636d3e657fd97632bb7e4a47bb0cb3dc89582c6a2950d281f1->leave($__internal_f1d3f1dab9797a636d3e657fd97632bb7e4a47bb0cb3dc89582c6a2950d281f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5f542ab0d63831fdc6fa59ea4c082f1ffd608d37e089dc8b1c6f9f9cc034e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f542ab0d63831fdc6fa59ea4c082f1ffd608d37e089dc8b1c6f9f9cc034e50->enter($__internal_a5f542ab0d63831fdc6fa59ea4c082f1ffd608d37e089dc8b1c6f9f9cc034e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4407d1e7535ec9118f8023955c7646fe1220a46b1ed74d6402b0a76828f1d65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4407d1e7535ec9118f8023955c7646fe1220a46b1ed74d6402b0a76828f1d65d->enter($__internal_4407d1e7535ec9118f8023955c7646fe1220a46b1ed74d6402b0a76828f1d65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4407d1e7535ec9118f8023955c7646fe1220a46b1ed74d6402b0a76828f1d65d->leave($__internal_4407d1e7535ec9118f8023955c7646fe1220a46b1ed74d6402b0a76828f1d65d_prof);

        
        $__internal_a5f542ab0d63831fdc6fa59ea4c082f1ffd608d37e089dc8b1c6f9f9cc034e50->leave($__internal_a5f542ab0d63831fdc6fa59ea4c082f1ffd608d37e089dc8b1c6f9f9cc034e50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b82cb78baf2188f79c5b4fb4f2f1f95a8cf47a78c2b58ce1026b6fe9039661a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b82cb78baf2188f79c5b4fb4f2f1f95a8cf47a78c2b58ce1026b6fe9039661a->enter($__internal_5b82cb78baf2188f79c5b4fb4f2f1f95a8cf47a78c2b58ce1026b6fe9039661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44a255f248c587ffd6e74574330c8aefc8102d2da2cf00d9b0d419bc3e2dca20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a255f248c587ffd6e74574330c8aefc8102d2da2cf00d9b0d419bc3e2dca20->enter($__internal_44a255f248c587ffd6e74574330c8aefc8102d2da2cf00d9b0d419bc3e2dca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_44a255f248c587ffd6e74574330c8aefc8102d2da2cf00d9b0d419bc3e2dca20->leave($__internal_44a255f248c587ffd6e74574330c8aefc8102d2da2cf00d9b0d419bc3e2dca20_prof);

        
        $__internal_5b82cb78baf2188f79c5b4fb4f2f1f95a8cf47a78c2b58ce1026b6fe9039661a->leave($__internal_5b82cb78baf2188f79c5b4fb4f2f1f95a8cf47a78c2b58ce1026b6fe9039661a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_617d33ca2f65fe0478a4e736765291090b080ecafcd941a91b27d44908bbdbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617d33ca2f65fe0478a4e736765291090b080ecafcd941a91b27d44908bbdbfa->enter($__internal_617d33ca2f65fe0478a4e736765291090b080ecafcd941a91b27d44908bbdbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef2b394940451377dcb77a674f1c8d95700bfe0acef2293c3d70c3b6221a89ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2b394940451377dcb77a674f1c8d95700bfe0acef2293c3d70c3b6221a89ef->enter($__internal_ef2b394940451377dcb77a674f1c8d95700bfe0acef2293c3d70c3b6221a89ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef2b394940451377dcb77a674f1c8d95700bfe0acef2293c3d70c3b6221a89ef->leave($__internal_ef2b394940451377dcb77a674f1c8d95700bfe0acef2293c3d70c3b6221a89ef_prof);

        
        $__internal_617d33ca2f65fe0478a4e736765291090b080ecafcd941a91b27d44908bbdbfa->leave($__internal_617d33ca2f65fe0478a4e736765291090b080ecafcd941a91b27d44908bbdbfa_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe00ef91ab52eb97d408dbea8719b6de937463c28a9fdef5a20411f997251d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe00ef91ab52eb97d408dbea8719b6de937463c28a9fdef5a20411f997251d3e->enter($__internal_fe00ef91ab52eb97d408dbea8719b6de937463c28a9fdef5a20411f997251d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e2cb909684f6ba249b561dda2cd3ea56e7bb86e993836ed0070f9a28b182c642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cb909684f6ba249b561dda2cd3ea56e7bb86e993836ed0070f9a28b182c642->enter($__internal_e2cb909684f6ba249b561dda2cd3ea56e7bb86e993836ed0070f9a28b182c642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e2cb909684f6ba249b561dda2cd3ea56e7bb86e993836ed0070f9a28b182c642->leave($__internal_e2cb909684f6ba249b561dda2cd3ea56e7bb86e993836ed0070f9a28b182c642_prof);

        
        $__internal_fe00ef91ab52eb97d408dbea8719b6de937463c28a9fdef5a20411f997251d3e->leave($__internal_fe00ef91ab52eb97d408dbea8719b6de937463c28a9fdef5a20411f997251d3e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 14,  120 => 13,  103 => 12,  89 => 7,  80 => 6,  62 => 5,  50 => 16,  47 => 13,  45 => 12,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('assets/main.css') }}\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
         </head>
    <body class=\"container-fluid\">
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/rieau/dev/ResearchForm/app/Resources/views/base.html.twig");
    }
}
