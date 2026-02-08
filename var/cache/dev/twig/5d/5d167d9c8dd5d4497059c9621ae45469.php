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
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
            <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/main_logo.png"), "html", null, true);
        yield "\" alt=\"OnlyBangers\" style=\"height:40px; margin-right:10px;\">
            OnlyBangers
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">

                ";
        // line 17
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", ["_route"], "method", false, false, false, 18) == "home")) {
            yield "active";
        }
        yield "\"
                       href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                        Accueil
                    </a>
                </li>

                ";
        // line 25
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "articles_view")) {
            yield "active";
        }
        yield "\"
                       href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\">
                        Articles
                    </a>
                </li>

                ";
        // line 33
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", ["_route"], "method", false, false, false, 35) == "user_favorites")) {
                yield "active";
            }
            yield "\"
                           href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_favorites");
            yield "\">
                            Favoris
                        </a>
                    </li>
                ";
        }
        // line 41
        yield "
                ";
        // line 43
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                    </li>
                ";
        } else {
            // line 48
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "app_login")) {
                yield "active";
            }
            yield "\"
                           href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            Connexion
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56) == "app_register")) {
                yield "active";
            }
            yield "\"
                           href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                            Inscription
                        </a>
                    </li>
                ";
        }
        // line 62
        yield "
                ";
        // line 64
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold ";
            // line 66
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66)) && is_string($_v1 = "admin_") && str_starts_with($_v0, $_v1))) {
                yield "active";
            }
            yield "\"
                           href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">
                            Admin
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73) == "admin_comments_list")) {
                yield "active";
            }
            yield "\"
                           href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_list");
            yield "\">
                            Commentaires
                        </a>
                    </li>
                ";
        }
        // line 79
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
        return array (  210 => 79,  202 => 74,  196 => 73,  187 => 67,  181 => 66,  178 => 65,  175 => 64,  172 => 62,  164 => 57,  158 => 56,  149 => 50,  143 => 49,  140 => 48,  134 => 45,  131 => 44,  128 => 43,  125 => 41,  117 => 36,  111 => 35,  108 => 34,  105 => 33,  97 => 27,  91 => 26,  88 => 25,  80 => 19,  74 => 18,  71 => 17,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">

        <a class=\"navbar-brand fw-bold d-flex align-items-center\" href=\"{{ path('home') }}\">
            <img src=\"{{ asset('images/main_logo.png') }}\" alt=\"OnlyBangers\" style=\"height:40px; margin-right:10px;\">
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
                       href=\"{{ path('home') }}\">
                        Accueil
                    </a>
                </li>

                {# Articles #}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if app.request.attributes.get('_route') == 'articles_view' %}active{% endif %}\"
                       href=\"{{ path('articles_view') }}\">
                        Articles
                    </a>
                </li>

                {# Favoris #}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'user_favorites' %}active{% endif %}\"
                           href=\"{{ path('user_favorites') }}\">
                            Favoris
                        </a>
                    </li>
                {% endif %}

                {# Connexion / Déconnexion #}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_login' %}active{% endif %}\"
                           href=\"{{ path('app_login') }}\">
                            Connexion
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'app_register' %}active{% endif %}\"
                           href=\"{{ path('app_register') }}\">
                            Inscription
                        </a>
                    </li>
                {% endif %}

                {# Admin #}
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold {% if app.request.attributes.get('_route') starts with 'admin_' %}active{% endif %}\"
                           href=\"{{ path('admin_dashboard') }}\">
                            Admin
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning fw-bold {% if app.request.attributes.get('_route') == 'admin_comments_list' %}active{% endif %}\"
                           href=\"{{ path('admin_comments_list') }}\">
                            Commentaires
                        </a>
                    </li>
                {% endif %}

            </ul>
        </div>
    </div>
</nav>
", "partials/nav.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/partials/nav.html.twig");
    }
}
