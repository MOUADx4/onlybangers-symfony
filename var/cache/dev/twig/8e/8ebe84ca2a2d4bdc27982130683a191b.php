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

/* security/login.html.twig */
class __TwigTemplate_b49d1ef9f7032fb6c6372a19e166ebef extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    ";
        // line 8
        yield "    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Connexion</h1>
        <p class=\"lead mt-3\">
            Accède à ton espace personnel et gère ton contenu.
        </p>
    </section>

    <div class=\"container d-flex justify-content-center\">

        <div class=\"card shadow-sm border-0 p-4\" style=\"max-width: 450px; width: 100%;\">

            ";
        // line 19
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                <div class=\"alert alert-danger text-center\">
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 24
        yield "
            ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                <div class=\"alert alert-info text-center mb-3\">
                    Connecté en tant que <strong>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            yield "</strong>.
                    <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            yield "\" class=\"text-secondary text-decoration-none fw-bold\">
                        Déconnexion
                    </a>
                </div>
            ";
        }
        // line 33
        yield "
            <h2 class=\"text-center mb-4 fw-bold\">Se connecter</h2>

            <form method=\"post\">

                <div class=\"mb-3\">
                    <label for=\"inputEmail\" class=\"fw-bold\">Email</label>
                    <input type=\"email\"
                           value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"form-control\"
                           autocomplete=\"email\"
                           required autofocus>
                </div>

                <div class=\"mb-3\">
                    <label for=\"inputPassword\" class=\"fw-bold\">Mot de passe</label>
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"form-control\"
                           autocomplete=\"current-password\"
                           required>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <div class=\"form-check mb-3\">
                    <input type=\"checkbox\" class=\"form-check-input\" name=\"_remember_me\" id=\"rememberMe\">
                    <label class=\"form-check-label\" for=\"rememberMe\">Se souvenir de moi</label>
                </div>

                <button class=\"btn btn-secondary btn-lg w-100\" type=\"submit\">
                    Connexion
                </button>

            </form>

            ";
        // line 73
        yield "            <div class=\"text-center mt-4\">
                <p class=\"text-muted\">
                    Vous n'avez pas encore de compte ?
                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-secondary text-decoration-none fw-bold\">
                        Inscrivez‑vous
                    </a>
                </p>
            </div>

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  199 => 76,  194 => 73,  178 => 59,  157 => 41,  147 => 33,  139 => 28,  135 => 27,  132 => 26,  130 => 25,  127 => 24,  121 => 21,  118 => 20,  116 => 19,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

    {# 🔥 Hero Section #}
    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Connexion</h1>
        <p class=\"lead mt-3\">
            Accède à ton espace personnel et gère ton contenu.
        </p>
    </section>

    <div class=\"container d-flex justify-content-center\">

        <div class=\"card shadow-sm border-0 p-4\" style=\"max-width: 450px; width: 100%;\">

            {% if error %}
                <div class=\"alert alert-danger text-center\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"alert alert-info text-center mb-3\">
                    Connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>.
                    <a href=\"{{ logout_path() }}\" class=\"text-secondary text-decoration-none fw-bold\">
                        Déconnexion
                    </a>
                </div>
            {% endif %}

            <h2 class=\"text-center mb-4 fw-bold\">Se connecter</h2>

            <form method=\"post\">

                <div class=\"mb-3\">
                    <label for=\"inputEmail\" class=\"fw-bold\">Email</label>
                    <input type=\"email\"
                           value=\"{{ last_username }}\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"form-control\"
                           autocomplete=\"email\"
                           required autofocus>
                </div>

                <div class=\"mb-3\">
                    <label for=\"inputPassword\" class=\"fw-bold\">Mot de passe</label>
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"form-control\"
                           autocomplete=\"current-password\"
                           required>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"form-check mb-3\">
                    <input type=\"checkbox\" class=\"form-check-input\" name=\"_remember_me\" id=\"rememberMe\">
                    <label class=\"form-check-label\" for=\"rememberMe\">Se souvenir de moi</label>
                </div>

                <button class=\"btn btn-secondary btn-lg w-100\" type=\"submit\">
                    Connexion
                </button>

            </form>

            {# 🔵 Lien vers l'inscription #}
            <div class=\"text-center mt-4\">
                <p class=\"text-muted\">
                    Vous n'avez pas encore de compte ?
                    <a href=\"{{ path('app_register') }}\" class=\"text-secondary text-decoration-none fw-bold\">
                        Inscrivez‑vous
                    </a>
                </p>
            </div>

        </div>

    </div>

{% endblock %}
", "security/login.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/security/login.html.twig");
    }
}
