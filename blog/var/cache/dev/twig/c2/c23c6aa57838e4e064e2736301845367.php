<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/index.html.twig */
class __TwigTemplate_3138baa4e9db1e3e5f749cbd08245768 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <style>
        .posts{
            border-radius: 5px;
            box-shadow: 0 5px 16px rgba(0,0,0,.25);
            margin-bottom: 40px;
            padding: 0px;
            margin-top: 40px;
        }
        img{
            border-radius: 10px;
        }
        h4{
            margin-top: 15px;
           
        }
    </style>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <div class=\"alert alert-success text-center\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <h4>Nos Catégories</h4>

<div class=\"list-group\">
  <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_terrain");
        echo "\" class=\"list-group-item list-group-item-action\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Terrain agricole
    <span class=\"badge bg-primary rounded-pill\">5</span>
  </li></a>
  <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_prairie");
        echo "\" class=\"list-group-item list-group-item-action\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Prairie
    <span class=\"badge bg-primary rounded-pill\">8</span>
  </li></a>
  <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_bois");
        echo "\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Bois
    <span class=\"badge bg-primary rounded-pill\">1</span>
  </li></a>
  <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_batiment");
        echo "\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Bâtiments
    <span class=\"badge bg-primary rounded-pill\">5</span>
  </li></a>
  <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_exploitation");
        echo "\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Exploitations
    <span class=\"badge bg-primary rounded-pill\">3</span>
  </li></a>
</div>

    <h4>Tous les biens</h4>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 55
            echo "        <section class=\"posts\">
        <article>
            <div class=\"card mb-3\">
  <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "intitule", [], "any", false, false, false, 58), "html", null, true);
            echo "</font></font></h4>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "localisation", [], "any", false, false, false, 60), "html", null, true);
            echo "</font></font></h5>
    <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descriptif", [], "any", false, false, false, 61), "html", null, true);
            echo "</font></font></h6>
  </div>
  <div class=\"content\">
  <img src=\"https://picsum.photos/300/200?grayscale\" alt=\"\" class=\"mt-3 mb-3\">
  </div>
  <div class=\"card-body\">
    <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descriptif", [], "any", false, false, false, 67), "html", null, true);
            echo "</font></font></p>
  </div>
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "surface", [], "any", false, false, false, 70), "html", null, true);
            echo " Ha</font></font></li>
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "prix", [], "any", false, false, false, 71), "html", null, true);
            echo " €</font></font></li>
  </ul>
  
  <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
    <div class=\"card-body\">
    <a href=\"#\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Ajouter favoris </font></font></a>
    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Plus d'infos</font></font></a>
  </div>
  </font></font></div>
</div>
            
        </article>
        </section>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    <div class=\"navigation\">
        ";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 87, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 87,  227 => 86,  212 => 77,  203 => 71,  199 => 70,  193 => 67,  184 => 61,  180 => 60,  175 => 58,  170 => 55,  166 => 54,  156 => 47,  149 => 43,  142 => 39,  135 => 35,  128 => 31,  122 => 27,  113 => 24,  110 => 23,  106 => 22,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home Page{% endblock %}

{% block body %}    
    <style>
        .posts{
            border-radius: 5px;
            box-shadow: 0 5px 16px rgba(0,0,0,.25);
            margin-bottom: 40px;
            padding: 0px;
            margin-top: 40px;
        }
        img{
            border-radius: 10px;
        }
        h4{
            margin-top: 15px;
           
        }
    </style>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success text-center\">
            {{ message }}
        </div>
    {% endfor %}

    <h4>Nos Catégories</h4>

<div class=\"list-group\">
  <a href=\"{{path('categorie_terrain')}}\" class=\"list-group-item list-group-item-action\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Terrain agricole
    <span class=\"badge bg-primary rounded-pill\">5</span>
  </li></a>
  <a href=\"{{path('categorie_prairie')}}\" class=\"list-group-item list-group-item-action\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Prairie
    <span class=\"badge bg-primary rounded-pill\">8</span>
  </li></a>
  <a href=\"{{path('categorie_bois')}}\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Bois
    <span class=\"badge bg-primary rounded-pill\">1</span>
  </li></a>
  <a href=\"{{path('categorie_batiment')}}\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Bâtiments
    <span class=\"badge bg-primary rounded-pill\">5</span>
  </li></a>
  <a href=\"{{path('categorie_exploitation')}}\" class=\"list-group-item list-group-item-action \"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Exploitations
    <span class=\"badge bg-primary rounded-pill\">3</span>
  </li></a>
</div>

    <h4>Tous les biens</h4>
    {% for post in posts%}
        <section class=\"posts\">
        <article>
            <div class=\"card mb-3\">
  <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{post.intitule}}</font></font></h4>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: {{post.localisation}}</font></font></h5>
    <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : {{post.descriptif}}</font></font></h6>
  </div>
  <div class=\"content\">
  <img src=\"https://picsum.photos/300/200?grayscale\" alt=\"\" class=\"mt-3 mb-3\">
  </div>
  <div class=\"card-body\">
    <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : {{post.descriptif}}</font></font></p>
  </div>
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: {{post.surface}} Ha</font></font></li>
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: {{post.prix}} €</font></font></li>
  </ul>
  
  <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
    <div class=\"card-body\">
    <a href=\"#\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Ajouter favoris </font></font></a>
    <a href=\"{{ path('post_show' , {'id' : post.id})}}\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Plus d'infos</font></font></a>
  </div>
  </font></font></div>
</div>
            
        </article>
        </section>

    {% endfor%}
    <div class=\"navigation\">
        {{ knp_pagination_render(posts) }}
    </div>
{% endblock %}

", "post/index.html.twig", "/Users/magalseck/documents/github/projetPwL3/blog/templates/post/index.html.twig");
    }
}
