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

/* base.html.twig */
class __TwigTemplate_82202c9d573bce335eac4dcde3620021 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Safer Immobilier</font></font></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Basculer la navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            echo " ";
            echo " 
          <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Accueil
            </font></font><span class=\"visually-hidden\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">(actuel)</font></font></span>
          </a>
        </li>
       
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nous contacter</font></font></a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">À propos</font></font></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/inscription\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">S'inscrire</font></font></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/connexion\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se connecter</font></font></a>
        </li>
        ";
        } else {
            // line 46
            echo "          <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Accueil
            </font></font><span class=\"visually-hidden\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">(actuel)</font></font></span>
          </a>
        </li>
          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mes favoris</font></font></a>
        </li> 
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nous contacter</font></font></a>
        </li>  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/deconnexion\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se déconnecter</font></font></a>
        </li>
        ";
        }
        // line 61
        echo "      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Chercher\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Chercher</font></font></button>
      </form>
    </div>
  </div>
</nav>
        <div class=\"container\">
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        // line 14
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  218 => 71,  208 => 70,  198 => 14,  196 => 13,  186 => 12,  175 => 9,  165 => 8,  146 => 5,  133 => 73,  131 => 70,  120 => 61,  103 => 46,  79 => 26,  66 => 15,  64 => 12,  61 => 11,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.css\">
        {% endblock %}

        {% block javascripts %}
            {# {{ encore_entry_script_tags('app') }} #}
        {% endblock %}
    </head>
    <body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Safer Immobilier</font></font></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Basculer la navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        {% if not app.user %} {# Si l'utilisateur n'est pas connecté#} 
          <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Accueil
            </font></font><span class=\"visually-hidden\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">(actuel)</font></font></span>
          </a>
        </li>
       
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nous contacter</font></font></a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">À propos</font></font></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/inscription\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">S'inscrire</font></font></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/connexion\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se connecter</font></font></a>
        </li>
        {% else %}
          <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Accueil
            </font></font><span class=\"visually-hidden\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">(actuel)</font></font></span>
          </a>
        </li>
          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mes favoris</font></font></a>
        </li> 
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nous contacter</font></font></a>
        </li>  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/deconnexion\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se déconnecter</font></font></a>
        </li>
        {% endif %}
      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Chercher\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Chercher</font></font></button>
      </form>
    </div>
  </div>
</nav>
        <div class=\"container\">
        {% block body %}

        {% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "C:\\Users\\KOMENAN\\Downloads\\projetPwL3-main\\projetPwL3-main\\blog\\templates\\base.html.twig");
    }
}
