<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/nav.html.twig */
class __TwigTemplate_f402ebf15da98846e7511582d25d0dfb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold d-flex align-items-center\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
    <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"OnlyBangers\" style=\"height:40px; margin-right:10px;\">
    OnlyBangers
</a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                
                ";
        // line 15
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "home")) {
            yield "active";
        }
        yield "\" 
                       href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a>
                </li>

                ";
        // line 21
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\">Articles</a>
                </li>


                ";
        // line 27
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                    </li>
                ";
        } else {
            // line 32
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_login")) {
                yield "active";
            }
            yield "\" 
                           href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "attributes", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37) == "app_register")) {
                yield "active";
            }
            yield "\" 
                           href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a>
                    </li>
                ";
        }
        // line 41
        yield "
                ";
        // line 43
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold ";
            // line 45
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45)) && is_string($_v1 = "admin_") && str_starts_with($_v0, $_v1))) {
                yield "active";
            }
            yield "\" 
                           href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Admin</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "admin_comments_list")) {
                yield "active";
            }
            yield "\" 
                           href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_list");
            yield "\">Commentaires</a>
                    </li>
                ";
        }
        // line 53
        yield "
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  166 => 53,  160 => 50,  154 => 49,  148 => 46,  142 => 45,  139 => 44,  136 => 43,  133 => 41,  127 => 38,  121 => 37,  115 => 34,  109 => 33,  106 => 32,  100 => 29,  97 => 28,  94 => 27,  87 => 22,  84 => 21,  78 => 17,  72 => 16,  69 => 15,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold d-flex align-items-center\" href=\"{{ path('home') }}\">
    <img src=\"{{ asset('images/logo.png') }}\" alt=\"OnlyBangers\" style=\"height:40px; margin-right:10px;\">
    OnlyBangers
</a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                
                {# Accueil #}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if app.request.attributes.get('_route') == 'home' %}active{% endif %}\" 
                       href=\"{{ path('home') }}\">Accueil</a>
                </li>

                {# Articles #}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('articles_view') }}\">Articles</a>
                </li>


                {# Connexion / Déconnexion #}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_login' %}active{% endif %}\" 
                           href=\"{{ path('app_login') }}\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_register' %}active{% endif %}\" 
                           href=\"{{ path('app_register') }}\">Inscription</a>
                    </li>
                {% endif %}

                {# Liens admin uniquement #}
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold {% if app.request.attributes.get('_route') starts with 'admin_' %}active{% endif %}\" 
                           href=\"{{ path('admin_dashboard') }}\">Admin</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold {% if app.request.attributes.get('_route') == 'admin_comments_list' %}active{% endif %}\" 
                           href=\"{{ path('admin_comments_list') }}\">Commentaires</a>
                    </li>
                {% endif %}

            </ul>
        </div>
    </div>
</nav>
", "partials/nav.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/partials/nav.html.twig");
    }
}
